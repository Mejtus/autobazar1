<?php

namespace classes;

class DB
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $dbName = "";
    private $port;

    private $connection;

    public function __construct($host, $username, $dbName, $password, $port = 3306)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->dbName = $dbName;
        $this->port = $port;

        try {
            $connection = new \PDO("mysql:host=".$this->host.";dbname=".$this->dbName.";port=".$this->port, $this->username, $this->password);
            $connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->connection = $connection;
        } catch (\PDOException $exception) {
            echo "Error while database was conneting " . $exception->getMessage();
        }
    }

    private function getConnection()
    {
       return $this->connection;
    }

    public function setConnection($conection)
    {
        if ($conection instanceof \PDO) {
            $this->connection = $conection;
        }
    }
}

