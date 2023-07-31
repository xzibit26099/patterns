<?php

require_once __DIR__ . '/DatabaseInterface.php';
require_once __DIR__ . '/MySqlAdapter.php';
require_once __DIR__ . '/PostgreSqlAdapter.php';


// Клиентский код
function executeQuery(DatabaseInterface $db, string $sql) {
    $db->connect('localhost', 'username', 'password', 'database');
    $result = $db->query($sql);

    while ($row = $db->fetch()) {
        // Обработка результата
        // ...
    }

    $db->close();
}

// Использование с разными СУБД
try {
    $mysqlDb = new MySqlAdapter();
    executeQuery($mysqlDb, "SELECT * FROM users");

    $postgreSQLDb = new PostgreSQLAdapter();
    executeQuery($postgreSQLDb, "SELECT * FROM products");
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}