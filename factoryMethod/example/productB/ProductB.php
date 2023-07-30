<?php

// Конкретный класс продукта
class ProductB implements ProductInterface
{
    /**
     * @return string
     */
    public function getName(): string
    {
        return "Concrete Product B" . PHP_EOL;
    }
}