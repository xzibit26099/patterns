<?php

class Singleton
{
    /**
     * Статическое поле, в котором будет храниться единственный экземпляр класса
     *
     * @var Singleton|null
     */
    private static ?Singleton $instance = null;

    /**
     * Приватный конструктор, чтобы предотвратить создание экземпляров класса извне
     * Конструктор скрыт, чтобы никто не мог создать экземпляр класса напрямую
     */
    private function __construct()
    {
    }

    /**
     * Статический метод для получения экземпляра класса
     *
     * @return Singleton
     */
    public static function getInstance(): Singleton
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * Пример метода экземпляра класса
     *
     * @return string
     */
    public function someMethod(): string
    {
        return "Hello, I am a method of the SingletonExample class!";
    }
}

