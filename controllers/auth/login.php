<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if(isset($_POST['login']))
    {
    //Sanitise post data
    $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

    $u_email = trim($_POST['u_email']);
    $passowrd = trim($_POST['password']);

    //error placeholder
    $emailErr = "";
    $passErr = "";

    //Validate email
    if(empty($u_email))
    {
        $emailErr = "Please enter a email";
        $_SESSION["emailerr"] = $emailErr;
    }

    //validate passwrord
    if(empty($passowrd))
    {
        $passErr = "Please enter a password";
        $_SERVER = $passErr;
    }

    //check if all error are empty
    if(empty($passErr) && empty($passErr))
    {
        $stmt=App::get('Users')->LoginUser($u_email,$password);
              
    }

}
}


?>