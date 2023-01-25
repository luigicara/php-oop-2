<?php
    require_once __DIR__ . '/models/Category.php';

    class Product {
        protected $name;
        protected $price;
        public Category $category;

        public function __construct($name, $price, Category $category) {
            $this -> name = $name
            $this -> price = $price
            $this -> category = $category
        }

        public function getName() {
            return $this->name;
        }

        public function getDirector() {
            return $this->director;
        }

        public function getYear() {
            return $this->year;
        }

        public function getGenres() {
            return implode(', ', $this->genre);
        }

        public function getFullInfo() {
            $str = "<div><h2>" . $this->getName() . "</h2>"
                    . $this->getDirector() . "<br>"
                    . $this->getGenres() . "<br>"
                    . $this->getYear() . "<br></div>";

            return $str;
        }
    }
?>
