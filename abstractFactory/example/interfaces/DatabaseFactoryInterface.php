<?php

// Абстрактная фабрика баз данных
interface DatabaseFactoryInterface
{
    public function createConnection(): ConnectionInterface;

    public function createQuery(): QueryInterface;
}