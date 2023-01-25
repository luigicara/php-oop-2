<?php
require_once __DIR__ . '/Product.php';

class Game extends Product{
    private array $materials;

    function __construct($name, $price, Category $category, array $materials){
        parent :: __construct($name, $price, $category);
        
        $this -> setMaterials($materials);

    }

    public function getMaterials()
    {
        return $this -> materials;
    }

    public function setMaterials($materials)
    {
        return $this -> materials = $materials;
    }
}