<?php

class Order
{
    private Cart $cart;
    private Customer $customer;
    private ?string $promoCode;

    public function __construct(Cart $cart, Customer $customer, ?string $promoCode = null)
    {
        $this->cart = $cart;
        $this->customer = $customer;
        $this->promoCode = $promoCode;
    }

    public function getCart(): Cart
    {
        return $this->cart;
    }

    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    // Zľava v percentách podľa sumy, promo kódu, typu zákazníka a obsahu košíka.
    public function calculateDiscount(): float
    {
        $total = $this->cart->getTotal();
        $discount = 0;

        if ($total >= 200) {
            $discount += 10;
        } elseif ($total >= 100) {
            $discount += 5;
        } elseif ($total >= 50) {
            $discount += 2;
        }

        if ($this->promoCode !== null && $this->promoCode !== '') {
            switch (strtoupper($this->promoCode)) {
                case 'LETO10':
                    $discount += 10;
                    break;
                case 'STUDENT5':
                    if ($this->customer->getType() === 'student') {
                        $discount += 5;
                    }
                    break;
                case 'VIP20':
                    if ($this->customer->getType() === 'vip' && $total >= 100) {
                        $discount += 20;
                    }
                    break;
            }
        }

        if ($this->customer->getType() === 'vip') {
            $discount += 5;
        } elseif ($this->customer->getType() === 'student') {
            $discount += 3;
        }

        foreach ($this->cart->getItems() as $item) {
            if ($item instanceof Ebook) {
                $discount += 1;
            }
        }

        if ($discount > 30) {
            $discount = 30;
        }

        return $discount;
    }

    public function getFinalPrice(): float
    {
        $total = $this->cart->getTotal();
        return $total - $total * $this->calculateDiscount() / 100;
    }
}
