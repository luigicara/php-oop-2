<?php
require_once __DIR__ . '/Product.php';

class Food extends Product{
    private $weight;
    private array $ingredients;
    private $expirationDate;

    function __construct($name, $price, Category $category, $weight, array $ingredients, $expirationDate){
        parent :: __construct($name, $price, $category);

        $this -> setWeight($weight);
        
        $this -> setIngredients($ingredients);

        $this -> setExpirationDate($expirationDate);

    }

    public function getWeight()
    {
        return $this -> weight;
    }

    public function setWeight($weight)
    {
        return $this -> weight = $weight;
    }

    public function getExpirationDate()
    {
        return $this -> expirationDate;
    }

    public function setExpirationDate($expirationDate)
    {
        return $this -> expirationDate = $expirationDate;
    }

    public function getIngredients()
    {
        return $this -> ingredients;
    }

    public function setIngredients($ingredients)
    {
        return $this -> ingredients = $ingredients;
    }
}