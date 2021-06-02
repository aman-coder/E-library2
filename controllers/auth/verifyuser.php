<?php
//select the user according to the token
if(isset($_GET['token'])){
    $data = App::get('Mails')->selectuser($token);
    $data->execute();
    $row = $data->fetch(PDO::FETCH_OBJ);
    $b_id = $row->b_id;
    $role = ['active'];
    $up = App::get('Mails')->VerificationUpdate($token,$role,$b_id);
    $up->execute([':token'=>$token]);
}