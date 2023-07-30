<?php

require_once __DIR__ . '/interfaces/QueryInterface.php';
require_once __DIR__ . '/interfaces/ConnectionInterface.php';
require_once __DIR__ . '/interfaces/DatabaseFactoryInterface.php';
require_once __DIR__ . '/mysql/MySqlConnection.php';
require_once __DIR__ . '/mysql/MySqlConnectionFactory.php';
require_once __DIR__ . '/mysql/MySqlQuery.php';
require_once __DIR__ . '/postgre/PostgreSqlConnection.php';
require_once __DIR__ . '/postgre/PostgreSqlConnectionFactory.php';
require_once __DIR__ . '/postgre/PostgreSqlQuery.php';

// Клиентский код
function processDatabase(DatabaseFactoryInterface $factory)
{
    $connection = $factory->createConnection();
    $connection->connect();

    $query = $factory->createQuery();
    $query->execute("SELECT * FROM users");
}

// Использование для MySQL
$mysqlFactory = new MySqlConnectionFactory();
processDatabase($mysqlFactory);

// Использование для Postgres
$postgresqlFactory = new PostgreSqlConnectionFactory();
processDatabase($postgresqlFactory);
