<?php
    class Category{
        private string $specie;

        public function __construct($specie) {
            $this -> setspecie($specie);
        }

        public function getSpecie() {
            return $this -> specie;
        }

        public function setSpecie($specie) {
            return $this -> specie = $specie;
        }
    }