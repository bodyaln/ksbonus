<?php

class Ebook extends DigitalProduct
{
    private string $author;

    public function __construct(string $name, float $price, float $sizeMb, string $author)
    {
        parent::__construct($name, $price, $sizeMb);
        $this->author = $author;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getType(): string
    {
        return 'e-kniha';
    }
}
