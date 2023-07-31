<?php

// Реализация отправителя для отправки уведомления через SMS
class SmsSender implements SenderInterface
{
    public function send(string $message)
    {
        echo "Sending SMS: $message\n";
    }
}