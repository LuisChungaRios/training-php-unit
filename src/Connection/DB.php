<?php

class DB
{

  public $connection;
  private $schema = "CREATE TABLE IF NOT EXISTS carts (id varchar(20), data text)";

  public function __construct()
  {

    $this->connection = $this->connect();
  }

  public function connect()
  {

    try {

      $connection = new \PDO("mysql:host=localhost;dbname=unit", "root", "");
      $connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

      return $connection;
    } catch (\PDOException $e) {
      echo "connection failed {$e->getMessage()}";
    }
  }

  public function createSchema()
  {
    $this->connection->exec($this->schema);
  }
}
