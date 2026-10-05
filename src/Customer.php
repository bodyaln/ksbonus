<?php

class Customer
{
    private string $name;
    private string $type; // "regular", "student" alebo "vip"

    public function __construct(string $name, string $type)
    {
        $this->name = $name;
        $this->type = $type;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getType(): string
    {
        return $this->type;
    }
}
