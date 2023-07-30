<?php

// Конкретная фабрика для работы с PostgreSQL
class PostgreSqlConnectionFactory implements DatabaseFactoryInterface
{
    public function createConnection(): ConnectionInterface
    {
        return new PostgreSqlConnection();
    }

    public function createQuery(): QueryInterface
    {
        return new PostgreSqlQuery();
    }
}