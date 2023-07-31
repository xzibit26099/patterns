<?php

require_once __DIR__ . '/Document.php';

// Использование
$documentPrototype = new Document("Документ пролонгации аренды");

// Создание копии документа
$documentCopy = $documentPrototype->clone();
$documentCopy->setTitle("Документ пролонгации аренды 2");

echo $documentPrototype->getTitle() . PHP_EOL;
echo $documentCopy->getTitle() . PHP_EOL;