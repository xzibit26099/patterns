<?php

class QueryBuilder
{
    private $table;
    private $where = [];
    private $orderBy = '';

    public function from(string $table): QueryBuilder
    {
        $this->table = $table;
        return $this;
    }

    public function where(string $column, string $operator, $value): QueryBuilder
    {
        $this->where[] = "$column $operator '$value'";
        return $this;
    }

    public function orderBy(string $column, string $direction = 'ASC'): QueryBuilder
    {
        $this->orderBy = "ORDER BY $column $direction";
        return $this;
    }

    public function build(): string
    {
        $query = "SELECT * FROM {$this->table}";

        if (!empty($this->where)) {
            $query .= ' WHERE ' . implode(' AND ', $this->where);
        }

        if (!empty($this->orderBy)) {
            $query .= ' ' . $this->orderBy;
        }

        return $query . PHP_EOL;
    }
}