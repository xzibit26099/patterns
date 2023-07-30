<?php

// Конкретная фабрика для работы с MySQL
class MySqlConnectionFactory implements DatabaseFactoryInterface
{
    public function createConnection(): ConnectionInterface
    {
        return new MySqlConnection();
    }

    public function createQuery(): QueryInterface
    {
        return new MySqlQuery();
    }
}