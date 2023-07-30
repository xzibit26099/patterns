<?php

// Конкретная реализация запросов для PostgreSQL
class PostgreSqlQuery implements QueryInterface
{
    public function execute(string $sql)
    {
        echo "Executing PostgreSQL query: $sql\n";
    }
}