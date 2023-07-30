<?php

require_once __DIR__ . '/ProductInterface.php';
require_once __DIR__ . '/productA/ProductA.php';
require_once __DIR__ . '/productB/ProductB.php';
require_once __DIR__ . '/ProductFactory.php';
require_once __DIR__ . '/productA/ProductAFactory.php';
require_once __DIR__ . '/productB/ProductBFactory.php';

$productFactoryA = new ProductAFactory();
$productA = $productFactoryA->createProduct();
echo $productA->getName(); // Выведет: "Concrete Product A"

$productFactoryB = new ProductBFactory();
$productB = $productFactoryB->createProduct();
echo $productB->getName(); // Выведет: "Concrete Product B"

