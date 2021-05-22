<?php

$router->define([
    '' => 'views/users/login.view.php',
    'login' => 'controllers/auth/login.php',
    'booklist' => 'controllers/books/booklist.php',
    'add_book' => 'controllers/books/add_book.php',
    'home' => 'controllers/common/index.php',
    'changePassword' => 'controllers/auth/change.Password.php',
    'registration' => 'controllers/auth/registration.php',
    'logout' => 'controllers/auth/logout.php',
    'bookreading' => 'controllers/books/book.read.php',
    'bookedit' => 'controllers/books/edit.book.php',
    'deletebook' => 'controllers/books/delete.book.php',


    'adminform' => 'views/users/admin.registration.view.php',//make it register means adminregisterform
    'addbook'=> 'views/books/book_add.view.php',
    // 'bookread' => 'views/books/book.read.view.php',
    
    ]);

?> 