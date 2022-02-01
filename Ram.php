<?php

    require_once __DIR__ . '/ComputerComponent.php';

    class Ram extends ComputerComponent {

        public $memory;

        public function __construct($_brand, $_model ,$_frequency, $_price, $_memory) {
            parent::__construct($_brand, $_model, $_frequency, $_price);
            

            // $_memory_kg deve essere un numero intero
            if(is_int($_memory)) {
                $this->memory = $_memory;
            } else {
                // echo '$_memory deve essere un numero intero';
                // die();
                throw new Exception('$_memory deve essere un numero intero');
            }
        }
    }

?>