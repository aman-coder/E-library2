<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if(isset($_POST['login1']))
    {
    //Sanitise post data
    $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

    $u_email = trim($_POST['u_email']);
    $password = trim($_POST['password']);

    //error placeholder
    $emailErr = "";
    $passErr = "";

    //Validate email
    if(empty($u_email))
    {
        $emailErr = "Please enter a email";
        $_SESSION['err'] = $emailErr;
        header("location:/");
    }

    //validate passwrord
    if(empty($password))
    {
        $passErr = "Please enter a password";
        $_SESSION['err'] = $passErr;
        header("location:/");
    }

    //check if all error are empty
    if(empty($emailErr) && empty($passErr))
    {
        $password = $password;
        $logins = App::get('Users')->EmailUser($u_email);
        $logins->execute();
        $count = $logins->rowCount();
        $row = $logins->fetch(PDO::FETCH_OBJ);
        if($count > 0){
            $pass = $row->password;
            if(password_verify($password,$pass)){
                $status=$row->status;
                if($status == 'active'){
                    $_SESSION['msg']="Welcome to E-Library";
                header("location:/booklist");
                $_SESSION['uid'] =$row->u_id;
                $_SESSION['username']=$row->u_name;
				$_SESSION['role'] =$row->role;
				$_SESSION['email'] = $row->u_email;
				$_SESSION['token'] =$row->token;
                }
            }else{
                $_SESSION['err']="password doesnot match";
                header("location:/");
            }
        } else { 
            $_SESSION['err']="email doesnot match";
            header("location:/");
        }           
    }if($count == 0 && !password_verify($password,$pass)){
        $_SESSION['err']="Please Enter Valid data";
        header("location:/");
    }

}

}


?>