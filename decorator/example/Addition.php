<?php

// Конкретная реализация операции (сложение)
class Addition implements OperationInterface
{
    public function execute(int $num1, int $num2): int
    {
        return $num1 + $num2;
    }
}