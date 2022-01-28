<?php

class User {
    public $name;

    public $lastname;

    public $email;

    protected $cart = [];

    public function __construct($_name, $_lastname, $_email) {
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->email = $_email;
    }

    public function addProduct($product) {
        $this->cart[] = $product;
    }

    public function getCarrellgetCarto() {
        return $this->cart;
    }

    public function getFullName() {
        return $this->name . ' ' . $this->lastname;
    }
}
?>