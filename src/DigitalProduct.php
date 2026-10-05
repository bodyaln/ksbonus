<?php

class DigitalProduct extends Product
{
    protected float $sizeMb;

    public function __construct(string $name, float $price, float $sizeMb)
    {
        parent::__construct($name, $price);
        $this->sizeMb = $sizeMb;
    }

    public function getSizeMb(): float
    {
        return $this->sizeMb;
    }

    public function getType(): string
    {
        return 'digitálny produkt';
    }
}
