<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class SendMail 
{
    public $mail;
    public function __construct()
    {
        $this->mail = new PHPMailer;
        $this->mail->isSMTP();
        $this->mail->Host = 'ssl://smtp.gmail.com';
        $this->mail->SMTPAuth = true;
        $this->mail->Username = 'jw3804407@gmail.com';
        $this->mail->Password = 'asdf1234@#';
        $this->mail->SMTPSecure = 'ssl';
        $this->mail->Port = 465;
    }
    public function Verifymail($token)
    {
        $this->mail->setFrom('jw3804407@gmail.com', 'E_library');
        $this->mail->addAddress($_POST['u_e-mail']);
        $this->mail->Subject = "Verification link" ;
        $this->mail->isHTML(true);
        $this->mail->SMTPDebug = 0;
        $this->base_url = "http:/localhost:8080/?token=${token}";
        $this->mailContent = 'Hi, <br/> <br/> verification is required for your email address before we migrate to the application.
            <br/> <br/> <a href ="'.$this->base_url.'">Click here to verify.</a>
        ' ;
        $this->mail->Body = $this->mailContent;
        if (!$this->mail->send()) {
            echo 'Message could not be sent';
            echo 'Mailer Error: ' . $this->mail->ErrorInfo;
        } 
        
        
    }

    public function Resetmail($lastID, $token)
    {
        $this->mail->setFrom('youremail@gmail.com', 'E_library');
        $this->mail->addAddress($_POST['email']);
        $this->mail->Subject = "New password link";
        $this->mail->isHTML(true);
        $this->mail->SMTPDebug = 0;
        $this->base_url = "http://3.6.32.116/resetpassword?hash=${token}&id={$lastID}";
        $this->mailContent = 'Hi, <br/> <br/> we have sent a link to change your password. Kindly visit the link for updation.
            <br/> <br/> <a href ="'.$this->base_url.'">Click here to reset your password.</a>
        ' ;
        $this->mail->Body = $this->mailContent;
        if (!$this->mail->send()) {
            echo 'Message could not be sent';
            echo 'Mailer Error: ' . $this->mail->ErrorInfo;
        } 

        // require 'resetpassword';
        
    }
}
?>