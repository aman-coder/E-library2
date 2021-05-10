<?php

$router->define([
    '' => 'controllers/common/index.php',
    'booklist' => 'controllers/books/booklist.php',
    'names' => 'controllers/books/add-name.php',
    'login' => 'controllers/auth/login.php',
    'changePassword' => 'controllers/auth/change.Password.php',
    'registration' => 'controllers/auth/registration.php'
]);

?> 