<?php

// Конкретная реализация подключения к PostgreSQL
class PostgreSqlConnection implements ConnectionInterface
{
    public function connect()
    {
        echo "Connected to PostgreSQL database.\n";
    }
}