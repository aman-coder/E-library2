<?php

App::bind('config', require 'config.php');


App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));
App::bind('Users', new Users(
    Connection::make(App::get('config')['database'])
));
App::bind('Books', new Book(
    Connection::make(App::get('config')['database'])
));
// var_dump((App::get('config')['database'])
// );
?> 