<?php


// Реализация отправителя для отправки уведомления по электронной почте
class EmailSender implements SenderInterface
{
    public function send(string $message)
    {
        echo "Sending email: $message\n";
    }
}