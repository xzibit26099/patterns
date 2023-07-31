<?php

require_once __DIR__ . '/notification/NotificationAbstract.php';
require_once __DIR__ . '/notification/EmailNotification.php';
require_once __DIR__ . '/notification/SmsNotification.php';
require_once __DIR__ . '/sender/SenderInterface.php';
require_once __DIR__ . '/sender/EmailSender.php';
require_once __DIR__ . '/sender/SmsSender.php';

// Использование
$emailSender = new EmailSender();
$smsSender = new SMSSender();

$emailNotification = new EmailNotification($emailSender);
$smsNotification = new SmsNotification($smsSender);

$emailNotification->send("Это емейл уведомления");
$smsNotification->send("Это СМС уведомление");