<?php

// Адаптер для работы с PostgreSQL
class PostgreSqlAdapter implements DatabaseInterface
{
    private $connection;

    public function connect(string $host, string $username, string $password, string $database)
    {
        echo 'Подключение к базе постгреса' . PHP_EOL;
    }

    public function query(string $sql)
    {
        echo 'Отправка запроса из pg' . PHP_EOL;
    }

    public function fetch()
    {
        echo 'Получение данных из постгреса' . PHP_EOL;

        return [];
    }

    public function close()
    {
        echo 'Закрытие подключения в постгресе' . PHP_EOL;
    }
}