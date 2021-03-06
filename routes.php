<?php

$router->define([
    '' => 'views/users/login.view.php',
    'login' => 'controllers/auth/login.php',
    'booklist' => 'controllers/books/booklist.php',
    'add_book' => 'controllers/books/add_book.php',
    'changePassword' => 'controllers/auth/change.Password.php',
    'registration' => 'controllers/auth/registration.php',
    'logout' => 'controllers/common/logout.php',
    'bookreading' => 'controllers/books/book.read.php',
    'bookedit' => 'controllers/books/edit.book.php',
    'deletebook' => 'controllers/books/delete.book.php',
    'search' => 'controllers/books/search.php',
    'issuebookcont' => 'controllers/books/issuebook.php',
    'resetpassword' => 'controllers/auth/change.Password.php',
    'verifyuser' => 'controllers/auth/verifyuser.php',
    'adminlist' => 'controllers/user/adminlist.php',
    'readerlist' => 'controllers/user/readerlist.php',
    'wishlist' => 'controllers/books/wishlist.php',
    'reading' => 'controllers/books/reading.php',
    'finish' => 'controllers/books/finish.php',
    'deleteuser' => 'controllers\user\deleteuser.php',
    // 'verifymail' => 'controlers/auth/verifyuser@verifyEmail',
    // 'resetpassword' => 'controllers/auth/verifyuser@passwordreset',
    // 'sendverifymail' => 'SendMail@Verifymail',
    // 'sendpassmail' => 'SendMail@Resetmail',

    'adminform' => 'views/users/admin.registeruser.view.php', //make it register means adminregisterform
    'addbook' => 'views/books/book_add.view.php',
    'bookread' => 'views/books/book.read.view.php',
    'password' => 'views/users/change.password.view.php',
    'profile' => 'views/users/profile.view.php',
    'signup' => 'views/users/signup.view.php',

]);
