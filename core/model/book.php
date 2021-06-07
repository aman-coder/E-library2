<?php
class Book extends QueryBuilder
{
    public function __construct($pdo)
    {
      parent::__construct($pdo);
      $this->table = 'books';
      $this->column = array('b_name', 'auth_name', 'b_img', 'description', 'count');
      $this->values = array('b_name', 'auth_name', 'b_img','description','count');
    }
    public function SelectBook($b_name,$auth_name){
        $column = array('b_name','auth_name');
        $values=[
          ':b_name'=>"'".$b_name."'",
          ':auth_name' => "'".$auth_name."'"];
        return parent::select($this->table, $column, $values);
     }
     public function SingleBook($b_id){
       $column = array('b_id');
       $values=[':b_id'=>"'".$b_id."'"];
       return parent::select($this->table,$column,$values);
     }

     public function SearchBox($string,$limit,$offset){
       $column = array('b_name');
       $c2 = array('auth_name');
       return parent::search($this->table,$column,$c2,$string,$limit,$offset);
       }

       public function IssueBook($u_id,$b_id,$issue){
         $column = array('b_id','u_id','issue');
         $values = [':b_id'=>"'".$b_id."'",
         ':u_id' => "'".$u_id."'",
         ':issue'=>"'".$issue."'"];
         $issue= parent::insert('has_book',$column,$values);
         $issue->execute();

       }

    public function InsertBook($b_name,$auth_name,$b_img,$description,$count){
        $values=[
            ':b_name'=>"'".$b_name."'",
            ':auth_name'=>"'".$auth_name."'",
            ':b_img'=>"'".$b_img."'",
            ':description'=>"'".$description."'",
            ':count'=>"'".$count."'"
        ];
        $column = array('b_name', 'auth_name', 'b_img', 'description', 'count');
        $insert = parent::insert($this->table, $column, $values);
        $insert->execute();
    }

    public function UpdateBook($b_name,$auth_name,$b_img,$description,$count,$b_id){
      $values=[
       ':b_name'=>"'".$b_name."'",
        ':auth_name'=>"'".$auth_name."'",
        ':b_img'=>"'".$b_img."'",
        ':description'=>"'".$description."'",
        ':count'=>"'".$count."'"
    ];
    $target = [
      ':b_id'=>"'".$b_id."'"
    ];
    $column = ['b_name','auth_name', 'b_img', 'description', 'count'];
     $i = 0;
    $upda = [];
  $queryArray = array_keys($values);
    while (isset($column[$i])) {
      $upda += [$column[$i] => $queryArray[$i]];
      $i++;
  }
     return parent::update($this->table,$upda,'b_id',$target);
    
    }

    public function Deletebook($bid)
    {
      $target = [':b_id'=>"'".$bid."'"];
      parent::Delete($this->table,'b_id',$target);
    }

    public function Deleteissue($u_id,$issue)
    {
      $column=array('u_id','issue');
      $target = [':u_id'=>"'".$u_id."'",
      ':issue'=>"'".$issue."'"];
      parent::DeleteAll('has_book',$column,$target);
    }

   
    public function CountUp($cont,$b_id){
      $values=[
       ':count'=>"'".$cont."'",
    ];
    $target = [
      ':b_id'=>"'".$b_id."'"
    ];
    $column = ['count'];
     $i = 0;
    $upda = [];
  $queryArray = array_keys($values);
    while (isset($column[$i])) {
      $upda += [$column[$i] => $queryArray[$i]];
      $i++;
  }
     return parent::update($this->table,$upda,'b_id',$target);
    
    }
   

}
?>