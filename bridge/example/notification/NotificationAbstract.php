<?php

// Абстракция уведомления
abstract class NotificationAbstract
{
    protected $sender;

    public function __construct(SenderInterface $sender)
    {
        $this->sender = $sender;
    }

    abstract public function send(string $message): void;
}
