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
    public function select($table, $values, $conditional)
     {
        //  $column = implode(',', $column);
         $values = implode(',', $values);
         $stmt = $this->pdo->prepare("SELECT * FROM ${table} WHERE (${values}) = (${conditional})");
        $stmt->execute();
         return $stmt->fetch(PDO::FETCH_OBJ);
     }

    public function insert($table, $column, $values)
    {
    $column = implode(',', $column);
    $values = implode(',', $values);
    $sql = $this->pdo->prepare("INSERT INTO $table(${column})  VALUES (${values})");
        return $sql;
     }
     
}

?>