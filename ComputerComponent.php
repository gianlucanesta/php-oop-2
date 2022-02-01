<?php

class ComputerComponent {

    use Assistance;

    public $brand;

    public $model;

    public $frequency;

    public $price;

    public function __construct($_brand, $_model ,$_frequency, $_price) {
        $this->brand = $_brand;
        $this->model = $_model;
        $this->frequency = $_frequency;
        $this->price = $_price;
    }
}

?>