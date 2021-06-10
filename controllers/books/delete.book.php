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
    $bid = $_GET['b_id'];
    App::get('Books')->Deletebook($bid);
}
header("location: /booklist");
?>