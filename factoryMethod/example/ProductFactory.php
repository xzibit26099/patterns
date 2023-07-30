<?php

// Абстрактный класс или интерфейс, определяющий фабричный метод
abstract class ProductFactory
{
    /**
     * @return ProductInterface
     */
    abstract public function createProduct(): ProductInterface;

    /**
     * @return string
     */
    public function someCommonMethod(): string
    {
        return "This is a common method shared by all products.";
    }
}