<?php

// Адаптер для работы с MySQL
class MySqlAdapter implements DatabaseInterface
{
    private $connection;

    public function connect(string $host, string $username, string $password, string $database)
    {
        echo 'Подключение к базе mysql' . PHP_EOL;
    }

    public function query(string $sql): void
    {
        echo 'Отправка запроса в Mysql' . PHP_EOL;
    }

    public function fetch(): array
    {
        echo 'Получение данных из Mysql' . PHP_EOL;

        return [];
    }

    public function close(): void
    {
        echo 'Закрытие подключения в Mysql' . PHP_EOL;
    }
}