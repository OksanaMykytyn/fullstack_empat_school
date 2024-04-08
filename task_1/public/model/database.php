<?php

class Database
{
    private static $instance;
    private $connection;

    private function __construct()
    {
        $this->connection = "connection";
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    public function select(string $table, array $columns, array $where = []): string {
        $query = "SELECT " . implode(", ", $columns) . " FROM $table";
      
        if (!empty($where)) {
          $query .= " WHERE " . implode(" AND ", $where);
        }

        return $query;
      }
      
}

$db = Database::getInstance();
$db->select('user', array('id', 'name'));