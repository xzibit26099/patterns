<?php

// Конкретный класс, реализующий фабричный метод для создания продукта А
class ProductAFactory extends ProductFactory
{
    /**
     * @return ProductInterface
     */
    public function createProduct(): ProductInterface
    {
        return new ProductA();
    }
}