<?php

class QueryBuilder
{

    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
        
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function insert($table, $params)
    {
        
       $sql = sprintf(
            'insert into %s (%s) values %s',
            $table,
    
        implode(',',array_keys($params)),
        ':'.implode(', :', array_keys($params))
    
    );
    try{
        $statement = $this->pdo->prepare($sql);
        $statement->execute($params);


    }
      catch(Exception $e)
      {
        die('Whoops, Something went wrong');
      }

        die(var_dump($sql));
    }
}

?>