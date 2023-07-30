<?php

// Конкретная реализация запросов для MySQL
class MySqlQuery implements QueryInterface
{
    public function execute(string $sql)
    {
        echo "Executing MySQL query: $sql\n";
    }
}