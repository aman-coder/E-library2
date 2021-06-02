<?php

if(isset($_POST['search'])){
    $string = $_POST['name'];
    $str = App::get('Books')->SearchBox($string);
    $str->execute();
    $books = $str->fetchAll(PDO::FETCH_OBJ);
   
}

    require './views/books/search.view.php';

?>
