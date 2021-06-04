<?php
if(isset($_POST['resetpass'])){
    $email=$_POST['email'];
    $row=App::get("Users")->EmailUser($email);
    $row->execute();
    $data=$row->fetch(PDO::FETCH_OBJ);
    $token=$data->token;
    App::get('Sendmail')->ResetPassword($token);
    header("location:/");
}
    if(isset($_POST['reset'])){
        $pass = $_POST['pass1'];
        $token=$_SESSION['token'];
        $conpass = $_POST['confirm'];
        if($pass = $conpass){
            $password=password_hash($pass, PASSWORD_BCRYPT);
        }
        $r=App::get('Users')->ResetPass($password,$token);
        $r->execute([':password'=>$password]);
        header("location:/");

    }