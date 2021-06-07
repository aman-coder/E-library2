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
  public function Selectcondition($u_id,$issue){
    $column = array('u_id','issue');
    $values=[
      ':u_id'=>"'".$u_id."'",
      ':issue' => "'".$issue."'"];
    return parent::select('has_book', $column, $values);
 }
 public function UserlistAdmin($role){
  $column = array('role');
  $values=[
    ':role' => "'".$role."'"];
  return parent::select($this->table, $column, $values);
}

  public function Singledata($u_id){
    $column = array('u_id');
    $values=[':u_id'=>"'".$u_id."'"];
    return parent::select($this->table,$column,$values);
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
  public function EmailUser($u_email){
    $column = array('u_email');
    $values=[
      ':email'=>"'".$u_email."'"];
    return parent::select($this->table, $column, $values);
    }

    public function ResetPass($password,$token){
      $values=[
       ':password'=>"'".$password."'",
    ];
    $target = [
      ':token'=>"'".$token."'"
    ];
    $column = ['password'];
     $i = 0;
    $upda = [];
  $queryArray = array_keys($values);
    while (isset($column[$i])) {
      $upda += [$column[$i] => $queryArray[$i]];
      $i++;
  }
     return parent::update($this->table,$upda,'token',$target);
    
    }
    public function VerificationUpdate($token,$status){
      $values=[
       ':status'=>"'".$status."'",
    ];
    // die(var_dump($role));
    $target = [
      ':token'=>"'".$token."'"
    ];
    $column = ['status'];
     $i = 0;
    $upda = [];
  $queryArray = array_keys($values);
    while (isset($column[$i])) {
      $upda += [$column[$i] => $queryArray[$i]];
      $i++;
  }
     return parent::update($this->table,$upda,'token',$target);
    
    }
}

