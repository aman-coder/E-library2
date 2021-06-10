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
if(isset($_POST['search'])){
    $string = $_POST['name'];
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
    
   
}
$str = App::get('Books')->SearchBox($string,$limit,$offset);
   $rr= $str->execute();
    $books = $str->fetchAll(PDO::FETCH_OBJ);
    $row=count($books);
    if($row==0){
        echo 'no books';
    }else{
    require './views/books/search.view.php';
}
?>
