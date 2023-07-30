<?php

require_once __DIR__ . '/Singleton.php';

// Получаем экземпляр класса
$singletonInstance = Singleton::getInstance();

// Вызываем метод экземпляра класса
echo $singletonInstance->someMethod();

// Попытка создать ещё один экземпляр вернёт нам тот же самый объект
$anotherInstance = Singleton::getInstance();

// Выведет: bool(true)
var_dump($singletonInstance === $anotherInstance);

