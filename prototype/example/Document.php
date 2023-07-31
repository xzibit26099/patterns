<?php

class Document
{
    protected string $title;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function clone(): Document
    {
        return new Document($this->getTitle());
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
}