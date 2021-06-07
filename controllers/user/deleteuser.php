<?php
//without any conition 
$u_id=$_SESSION['uid'];
APP::get('Users')->DeleteUser($u_id);

//with condition
$u_id=$_SESSION['uid'];
$role='admin';//it will be based on the requiremnet to whom we want to delete
APP::get('Users')->DeleteCon($u_id,$role);