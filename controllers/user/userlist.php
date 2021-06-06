<?php
$users=App::get('database')->selectAll('has_book');
die(var_dump($users));
require 'userlistview';