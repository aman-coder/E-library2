<?php

class QueryBuilder
{

    protected $pdo;
    

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
        
    }

    public $column = [];
    public $values = [];

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
    public function fetchlimit($table,$order,$limit,$offset)
    {
        $statement = $this->pdo->prepare("select * from {$table} ORDER BY {$order} LIMIT {$offset},{$limit}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
    public function select($table, $column, $conditional)
     {
         $column = implode(',', $column);
         $conditional = implode(',', $conditional);
         $stmt = $this->pdo->prepare("SELECT * FROM ${table} WHERE (${column}) = (${conditional})");
         return $stmt;
     }

     public function search($table,$cname,$cnam,$values,$limit,$offset){
        $cname1 = implode(',', $cname);
        $cname2 = implode(',', $cnam);
        $sr = $this->pdo->prepare("SELECT * FROM ${table} WHERE (${cname1}) LIKE '%".$values."%' OR (${cname2}) LIKE '%".$values."%' LIMIT {$offset},{$limit}");
        return $sr;
     }

    public function insert($table, $column, $values)
    {
    $column = implode(',', $column);
    $values = implode(',', $values);
    $sql = $this->pdo->prepare("INSERT INTO $table(${column})  VALUES (${values})");
     return $sql;
     }

     public function update($table, $upda, $bid, $target)
     {
        $tt = implode(',', $target);
        $str=',';
        foreach ($upda as $key => $value){
            $str=$str.$key."=${value},";
        }
        $str=trim($str,',');
        
     return $this->pdo->prepare("UPDATE $table SET $str WHERE (${bid}) = (${tt}) ");
            
            
      }

      public function DeleteAll($table,$bid,$target){
          $tt = implode(',',$target);
         $sql =  $this->pdo->prepare("DELETE FROM $table WHERE (${bid}) = (${tt})");
         $sql->execute();
      }
     
}

?>