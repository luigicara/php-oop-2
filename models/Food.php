<?php
require_once __DIR__ . '/Product.php';

class Food extends Product{
    private $weight;
    private array $ingredients;
    private $expirationDate;
    public $discount;

    function __construct($name, $price, Category $category, $weight, array $ingredients, $expirationDate){
        parent :: __construct($name, $price, $category);

        $this -> setWeight($weight);
        
        $this -> setIngredients($ingredients);

        $this -> setExpirationDate($expirationDate);

        $this -> setDiscount();

        $this -> updatePrice($price);
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

    public function getDiscount() {
        return $this -> discount;
    }

    public function setDiscount() {
        $dateToday = strtotime('now');
        $dateExpiration = strtotime($this->expirationDate);

        $dateOneWeekBeforeEx = strtotime('-7 days', $dateExpiration);

        if (($dateToday < $dateExpiration) and ($dateToday >= $dateOneWeekBeforeEx)) {
            return $this -> discount = 30;
        } 
        
        return $this -> discount = 0;
    
    }

    public function updatePrice($price) {
        $discount = $this -> discount;  

        if($discount !== 0) {
            return $this -> price = $price - ($price * ($discount / 100));
        }

        return $this -> price = $price;
    }
}