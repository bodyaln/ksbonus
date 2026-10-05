<?php

class Shop
{
    public function run(): void
    {
        $cart = new Cart();
        $cart->add(new Product('Klávesnica', 49.90));
        $cart->add(new DigitalProduct('Antivírus (1 rok)', 29.99, 350));
        $cart->add(new Ebook('Čistý kód', 24.50, 5.2, 'Robert C. Martin'));
        $cart->add(new Ebook('Pragmatický programátor', 22.00, 4.8, 'Hunt, Thomas'));

        $printer = new InvoicePrinter();

        $printer->print(new Order($cart, new Customer('Ján Novák', 'regular')));
        $printer->print(new Order($cart, new Customer('Bohdan', 'student'), 'STUDENT5'));
        $printer->print(new Order($cart, new Customer('Firma s.r.o.', 'vip'), 'VIP20'));
    }
}
