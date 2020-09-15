<?php

namespace App;

class Item
{
    private $productName;
    private $value;

    public function __construct(string $productName, int $value)
    {
        $this->productName = $productName;
        $this->value = $value;
    }

    public function getValue(): int
    {
        return $this->value;
    }
}