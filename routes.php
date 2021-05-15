<?php

$router->define([
    'login' => 'controllers/auth/login.php',
    'booklist' => 'controllers/books/booklist.php',
    'names' => 'controllers/books/add-name.php',
    'home' => 'controllers/common/index.php',
    'changePassword' => 'controllers/auth/change.Password.php',
    'registration' => 'controllers/auth/registration.php',


    'adminform' => 'views/users/admin.registration.view.php',//make it register means adminregisterform
    'loginform' => 'views/users/login.view.php'
]);

?> 