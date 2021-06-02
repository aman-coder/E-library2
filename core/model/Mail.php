<?php

class Mails extends QueryBuilder{

    public function __construct($pdo)
  {
    parent::__construct($pdo);
    $this->table = 'user';
    $this->column = array('u_name', 'u_email', 'password', 'role', 'token','status');
    $this->values = array('name', 'email', 'password');
  }
    public function selectuser($token){
        $column = array('token');
        $values=[':token'=>"'".$token."'"];
        return parent::select($this->table,$column,$values);
    }

    public function VerificationUpdate($token,$role,$bid){
        return parent::update($this->table,$role,$bid,$token);
    }
    public function Password($password,$b_id){
        return parent::update($this->table,$password,$b_id,$password);
    }
}