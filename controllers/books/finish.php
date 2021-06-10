<?php
if (!isset($_SESSION['email'])) {
	?>
	<script type="text/javascript">
		alert("Please login first to access booklist!");
		 window.location.href="/";
		</script>
		<?php
	exit;
}
if(isset($_GET['b_id'])){
    $u_id=$_SESSION['uid'];
    $b_id=$_GET['b_id'];
    $con=App::get('Books')->SingleBook($b_id);
    $con->execute();
    $bb=$con->fetch(PDO::FETCH_OBJ);
    $cont=$bb->count;
    $up=$cont+1;
    $ct=App::get('Books')->CountUp($up,$b_id);
    $rr=$ct->execute([':count'=>$up]);
    $issu='reading';
     App::get('Books')->Deleteissue($u_id,$issu);
     $issue='history';
     App::get('Books')->IssueBook($u_id,$b_id,$issue);
header("location:/booklist");
}
$u_id=$_SESSION['uid'];
$issue='history';
$has_data=App::get('Books')->selectjoinon($u_id,$issue);
$has_data->execute();
$datas=$has_data->fetchAll(PDO::FETCH_OBJ);
require 'views/books/book.finish.view.php';
