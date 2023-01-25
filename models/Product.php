<?php
    require_once __DIR__ . '/Category.php';

    class Product {
        protected $name;
        protected $price;
        public Category $category;

        public function __construct($name, $price, Category $category) {
            $this -> setName($name);
            $this -> setPrice($price);
            $this -> category = $category;
        }

        public function getName() {
            return $this -> name;
        }

        public function setName($name) {
            return $this -> name = $name;
        }

        public function getPrice() {
            return $this -> price;
        }

        public function setPrice($price) {
            return $this -> price = $price;
        }
    }
?>
