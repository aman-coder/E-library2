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
//without any conition 
if(isset($_GET['u_id'])){
$u_id=$_GET['u_id'];
APP::get('Users')->DeleteUser($u_id);
session_destroy();
header("location: /");
}else{
//with condition
$u_id=$_SESSION['uid'];
$role='admin';//it will be based on the requiremnet to whom we want to delete
APP::get('Users')->DeleteCon($u_id,$role);
}