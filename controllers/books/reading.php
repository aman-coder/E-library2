<?php
$u_id=$_SESSION['uid'];
$issue='reading';
$has_data=App::get('Books')->selectjoinon($u_id,$issue);
$has_data->execute();
$datas=$has_data->fetchAll(PDO::FETCH_OBJ);
require './views/books/book.reading.view.php';