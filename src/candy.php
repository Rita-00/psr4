<?php

 namespace candy;

class Candy extends Variets_of_sweets{
    private array $sweets_list;

    public function __construct() {
        echo 'Welcome to candy store', PHP_EOL;
    }

    public function add_sweet(Variets_of_sweets $sweet) {
        $this->sweets_list[lenght(sweets_list)] = $sweet;
    }
}

?>