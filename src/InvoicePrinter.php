<?php

class InvoicePrinter
{
    public function print(Order $order): void
    {
        echo "Faktúra pre: " . $order->getCustomer()->getName() . "\n";
        echo "----------------------------------------\n";

        foreach ($order->getCart()->getItems() as $item) {
            echo "- " . $item->getName() . " (" . $item->getType() . "): "
                . number_format($item->getPrice(), 2) . " €\n";
        }

        echo "----------------------------------------\n";
        echo "Spolu: " . number_format($order->getCart()->getTotal(), 2) . " €\n";
        echo "Zľava: " . $order->calculateDiscount() . " %\n";
        echo "Na úhradu: " . number_format($order->getFinalPrice(), 2) . " €\n\n";
    }
}
