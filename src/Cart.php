<?php

class Cart
{
    /** @var Product[] */
    private array $items = [];

    public function add(Product $product): void
    {
        $this->items[] = $product;
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function getTotal(): float
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->getPrice();
        }
        return $total;
    }

    public function count(): int
    {
        return count($this->items);
    }
}
