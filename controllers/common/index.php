<?php
$books = App::get('database')->selectAll('books');

require 'views/home.php';
?>