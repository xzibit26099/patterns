<?php

// Конкретная реализация уведомления через электронную почту
class EmailNotification extends NotificationAbstract
{
    public function send(string $message): void
    {
        $this->sender->send("Email: $message");
    }
}