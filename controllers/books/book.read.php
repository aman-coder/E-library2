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
    $b_id = $_GET['b_id'];
    $data = App::get('Books')->SingleBook($b_id);
    $data->execute();
    $users = $data->fetch(PDO::FETCH_OBJ);
    require 'views/books/book.read.view.php';
}