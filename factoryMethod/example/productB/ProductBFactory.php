<?php

// Конкретный класс, реализующий фабричный метод для создания продукта В
class ProductBFactory extends ProductFactory
{
    /**
     * @return ProductInterface
     */
    public function createProduct(): ProductInterface
    {
        return new ProductB();
    }
}