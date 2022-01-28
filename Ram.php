<?php

    require_once __DIR__ . '/ComputerComponent.php';

    class Ram extends ComputerComponent {

        public $ddr;

        public function __construct($_brand, $_model ,$_frequency, $_price, $_ddr) {
           
            $this-> ddr = $_ddr;
        }
    }

?>