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
if(isset($_GET['page'])){
	$page = $_GET['page'];
	}else{
		$page=1;
	}
$bookf = App::get('database')->selectAll('books');
$limit = 6;
$offset=1;
$offset = ($page-1)*$limit;
$totalcount = count($bookf);
$total_page=ceil($totalcount/$limit);
$_SESSION['total_page']=$total_page;

if(isset($_POST['A-Z'])){
	$order = 'b_name ASC';
}
elseif(isset($_POST['Z-A'])){
	$order = 'b_name DESC';
}
else{
	$order = 'b_id DESC';
}

$books = App::get('database')->fetchlimit('books',$order,$limit,$offset);

require 'views/books/booklist.view.php';

?>