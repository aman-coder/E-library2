<?php
if(isset($_GET['token'])){
    $token=$_GET['token'];
    $status = 'active';
    $up = App::get('Users')->VerificationUpdate($token,$status);
    $up->execute([':status'=>$status]);
    header("location:/");
}