<?php

class User {
    public $name;

    public $lastname;

    public $email;

    protected $cart = [];

    public $discount = 0;

    public function __construct($_name, $_lastname, $_email) {
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->email = $_email;
    }

    public function addProduct($product) {
        $this->cart[] = $product;
    }

    public function getCart() {
        return $this->cart;
    }

    public function getFullName() {
        return $this->name . ' ' . $this->lastname;
    }

    // Calcolo la somma totale del carrello
    public function finalPrice() {
        $total_cart = 0;
        foreach($this->cart as $product) {
            $total_cart += $product ->price;
        }

        // Calcolo l'eventuale sconto 
        $total_cart -= ($total_cart * $this->discount / 100);


        // var_dump($total_cart);
        return $total_cart;
    }
}
?>