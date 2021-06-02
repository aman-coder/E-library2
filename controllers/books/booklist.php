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
$books = App::get('database')->sort('books',$limit,$offset);
$totalcount = count($bookf);
$total_page=ceil($totalcount/$limit);
$_SESSION['total_page']=$total_page;
require 'views/books/booklist.view.php';

?>