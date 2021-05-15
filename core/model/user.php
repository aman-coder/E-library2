<?php
class Users extends QueryBuilder
{
  public function __construct($pdo)
  {
    parent::__construct($pdo);
    $this->table = 'user';
    $this->column = array('u_name', 'u_email', 'password', 'role', 'token','status');
    $this->values = array('name', 'email', 'password');
  }
  public function RegisterUser($u_name,$u_email,$password,$role,$token,$status){
      $values=[
          ':name'=>"'".$u_name."'",
          ':email'=>"'".$u_email."'",
          ':password'=>"'".$password."'",
          ':role'=>"'".$role."'",
          ':token'=>"'".$token."'",
          ':status'=>"'".$status."'"
      ];
      $column = array('u_name', 'u_email', 'password', 'role', 'token','status');
      $insert = parent::insert($this->table, $column, $values);
      $insert->execute();
  } 
  public function LoginUser($u_email, $password){
  }
}

