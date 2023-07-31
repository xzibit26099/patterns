<?php

// Интерфейс реализации отправителя
interface SenderInterface
{
    public function send(string $message);
}