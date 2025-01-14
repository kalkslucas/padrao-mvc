<?php

namespace App;

class Connection
{
  public static function getDb()
  {
    try {
      $dsn = "mysql:host=localhost;dbname=mvc;charset=utf8";
      $username = "root";
      $password = "";
      $pdo = new \PDO($dsn, $username, $password);

      return $pdo;
    } catch (\PDOException $e) {
      echo $e->getMessage();
    }
  }
}
