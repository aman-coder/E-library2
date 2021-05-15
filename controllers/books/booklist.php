<?php
$books = App::get('database')->selectAll('books');
require 'views/books/booklist.view.php';

?>