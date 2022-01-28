<?php

    require_once __DIR__ . '/ComputerComponent.php';

    class GraphicCard extends ComputerComponent {

        public $memory;

        public function __construct($_brand, $_model ,$_frequency, $_price, $_memory) {
            
            $this->memory = $_memory;
        }
    }

?>