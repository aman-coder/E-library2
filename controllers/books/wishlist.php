<?php
$u_id=$_SESSION['uid'];
$issue='wishlisted';
$has_data=App::get('Users')->Selectcondition($u_id,$issue);
$has_data->execute();
$data=$has_data->fetchAll(PDO::FETCH_OBJ);
foreach($data as $dd):
// var_dump($dd->b_id);
$fg=App::get('Books')->SingleBook($dd->b_id);
$fg->execute();
$ff=$fg->fetchAll(PDO::FETCH_OBJ);
foreach($ff as $df):
    require './views/books/book.wishlist.view.php';
 endforeach;
endforeach;
// require './views/books/book.wishlist.view.php';