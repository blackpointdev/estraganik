<?php


namespace Src\System;

use PDO;

class DBConnection
{
    private $host;
    private $port;
    private $db;
    private $user;
    private $password;

    public function __construct() {
        $this->host = getenv('DB_HOST');
        $this->port = getenv('DB_PORT');
        $this->db   = getenv('DB_DATABASE');
        $this->user = getenv('DB_USERNAME');
        $this->password = getenv('DB_PASSWORD');
    }

    public function connect() {
        try {
            $dbConnection = new \PDO(
                "mysql:host=$this->host;port=$this->port;dbname=$this->db",
                $this->user,
                $this->password
            );

            $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbConnection;

        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }
}