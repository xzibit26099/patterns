<?php

// Конкретная реализация подключения к MySQL
class MySqlConnection implements ConnectionInterface
{
    public function connect()
    {
        echo "Connected to MySQL database.\n";
    }
}