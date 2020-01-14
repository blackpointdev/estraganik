<?php

require 'vendor/autoload.php';
use Dotenv\Dotenv;

use Src\System\DBConnection;

$dotenv = new Dotenv(__DIR__);
$dotenv->load();

$dbConnection = (new DBConnection())->getConnection();
