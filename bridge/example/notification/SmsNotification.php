<?php

// Конкретная реализация уведомления через SMS
class SmsNotification extends NotificationAbstract
{
    public function send(string $message): void
    {
        $this->sender->send("SMS: $message");
    }
}