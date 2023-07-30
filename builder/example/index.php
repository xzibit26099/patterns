<?php

require_once __DIR__ . '/QueryBuilder.php';

// Использование
$queryBuilder = new QueryBuilder();
$query = $queryBuilder
    ->from('users')
    ->where('age', '>', 18)
    ->orderBy('name', 'ASC')
    ->build();

echo $query;