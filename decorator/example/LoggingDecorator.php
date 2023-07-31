<?php

// Конкретная реализация декоратора (логирование операций)
class LoggingDecorator extends OperationDecorator
{
    public function execute(int $num1, int $num2): int
    {
        $result = $this->operation->execute($num1, $num2);
        $this->logOperation($num1, $num2, $result);
        return $result;
    }

    private function logOperation(int $num1, int $num2, int $result): void
    {
        $logMessage = "Operation: $num1 + $num2 = $result";
        echo $logMessage . "\n"; // Здесь можно добавить запись в файл или отправку на сервер логирования
    }
}