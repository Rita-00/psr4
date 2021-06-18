<?php
namespace candy;

class Variets_of_sweets{
    private int $price;

    public function __construct(int $price) {
        $this->price = $price;
    }

    public function buy_quantity(int $quantity) {
        $this->price=price*$quantity;
    }
}

?>