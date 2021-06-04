<?php

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
    $str->execute();
    $books = $str->fetchAll(PDO::FETCH_OBJ);

    require './views/books/search.view.php';

?>
