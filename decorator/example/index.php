<?php

require_once __DIR__ . '/OperationInterface.php';
require_once __DIR__ . '/OperationDecorator.php';
require_once __DIR__ . '/Addition.php';
require_once __DIR__ . '/LoggingDecorator.php';


// Использование
$addition = new Addition();
$loggedAddition = new LoggingDecorator($addition);

$result = $loggedAddition->execute(5, 3);
// Вывод: Operation: 5 + 3 = 8
echo "Result: $result\n"; // Вывод: Result: 8