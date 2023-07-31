<?php

// Интерфейс для работы с базой данных
interface DatabaseInterface {
    public function connect(string $host, string $username, string $password, string $database);
    public function query(string $sql);
    public function fetch();
    public function close();
}