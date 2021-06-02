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
    'search' => 'controllers/books/search.php',
    'issuebookcont'=>'controllers/books/issuebook.php',
    // 'verifymail' => 'controlers/auth/verifyuser@verifyEmail',
    // 'resetpassword' => 'controllers/auth/verifyuser@passwordreset',
    // 'sendverifymail' => 'SendMail@Verifymail',
    // 'sendpassmail' => 'SendMail@Resetmail',
    


    'adminform' => 'views/users/admin.registration.view.php',//make it register means adminregisterform
    'addbook'=> 'views/books/book_add.view.php',
    'bookread' => 'views/books/book.read.view.php',
    // 'editbook' => 'views/books/book.edit.view.php',
    'profile' => 'views/users/profile.view.php',
    'log' => 'views/users/login.php',
    'userlist' => 'views/users/userlists.view.php',
    
    ]);

?> 