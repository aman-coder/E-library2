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
$u_id=$_SESSION['uid'];
$issue='wishlisted';
$has_data=App::get('Books')->selectjoinon($u_id,$issue);
$has_data->execute();
$datas=$has_data->fetchAll(PDO::FETCH_OBJ);
require './views/books/book.wishlist.view.php';