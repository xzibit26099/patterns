<?php

// Конкретный класс продукта
class ProductA implements ProductInterface
{
    /**
     * @return string
     */
    public function getName(): string
    {
        return "Concrete Product A" . PHP_EOL;
    }
}