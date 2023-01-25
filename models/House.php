<?php
require_once __DIR__ . '/Product.php';

class Game extends Product{
    private array $materials;
    private $size;

    function __construct($name, $price, Category $category, array $materials, $size){
        parent :: __construct($name, $price, $category);
        
        $this -> setMaterials($materials);
        $this -> setSize($size);
    }

    public function getMaterials()
    {
        return $this -> materials;
    }

    public function setMaterials($materials)
    {
        return $this -> materials = $materials;
    }

    public function getSize()
    {
        return $this -> size;
    }

    public function setSize($size)
    {
        return $this -> size = $size;
    }
}