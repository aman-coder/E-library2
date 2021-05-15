<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if(isset($_POST['registration'])){
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    $u_name = trim($_POST['u_name']);
    $u_email = trim($_POST['u_e-mail']);
    $password = trim($_POST['password']);
    $re_password = trim($_POST['re_password']);
    $role = 'reader';
    $status = 'inactive';
    $usernameError = "";
    $emailError = "";
    $passwordError = "";
    $confirmPasswordError = "";

$nameValidation = "/^[a-zA-Z 1-9]*$/";
$passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";

    //Validate username on letters/numbers

    if(empty($u_name))
    {
        $usernameError = "Please enter username";
        $_SESSION['user'] = $usernameError;
    }elseif(!preg_match($nameValidation, $u_name)){
        $usernameError = "Name only contain letters";
        $_SESSION['user'] = $usernameError;
    }

    //Validate Email
    if(empty($u_email)){
        $emailError = "Please enter email address";
        $_SESSION['email'] = $emailError;
    }elseif(!filter_var($u_email,FILTER_VALIDATE_EMAIL)){
        $emailError = "Please enter the correct format";
        $_SESSION['email'] = $emailError;
    }
    //validate email to see whether is it present or not

    //Validate Password on length, numeric values

    if(empty($password)){
        $passwordError = "Please enter password";
        $_SESSION['password'] = $passwordError;
    }elseif(strlen($password < 6)){
        $passwordError = "Password length must be atleast 8 characters";
        $_SESSION['password'] = $passwordError;
    }elseif(preg_match($passwordValidation, $password)){
        $passwordError = "Password must be have atleast one numeric value";
        $_SESSION['password'] = $passwordError;
    }

    //validate confirm Password
    if(empty($re_password))
    {
        $confirmPasswordError = "Please enter password";
        $_SESSION['confirm'] = $confirmPasswordError;
    }else{
        if($password != $re_password){
            $confirmPasswordError = "Password do not match";
            $_SESSION['confirm'] = $confirmPasswordError;
        }
    }

    //Making sure all error are empty
    if(empty($usernameError) && empty($emailError) && empty($passwordError) && empty($confirmPasswordError)){
        
        //Hashing Password
        $password = password_hash($password, PASSWORD_BCRYPT);
        //token to be created randomly
        $token=bin2hex(random_bytes(15));
        //Register user from model function
        App::get('Users')->RegisterUser($u_name ,$u_email,$password,$role,$token,$status);
        header("location:/booklist");
    }

}
}