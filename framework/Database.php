<?php 

class database{

    private $connection;
    private $statement;

    public function __construct()
    {
     $dsn = 'mysql:host=127.0.0.1;dbname=mysql;charset=utf8mb4';
        $this->connection = new PDO($dsn, 'root', 'root');
    
    }

    public function query($sql, $params = [])
    
    {
    $this->statement = $this->connection->prepare($sql);
    $this->statement->execute($params);
    return $this;
    }
    public function get()
    {
        return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }
    public function firstOrFail()
    {
        $result = $this->statement->fetch(PDO::FETCH_ASSOC);
        if (!$result) {
            exit('No se encontraron resultados.');
        }
        return $result;
    }

}

?>