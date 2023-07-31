<?php

// Абстрактный класс декоратора
abstract class OperationDecorator implements OperationInterface
{
    protected $operation;

    public function __construct(OperationInterface $operation)
    {
        $this->operation = $operation;
    }

    abstract public function execute(int $num1, int $num2): int;
}