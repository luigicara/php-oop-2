<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP PetShop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <?php
        require_once __DIR__ . '/Models/Product.php';
        require_once __DIR__ . '/Models/Food.php';
        require_once __DIR__ . '/Models/Game.php';
        require_once __DIR__ . '/Models/House.php';

        $dogCategory = new Category('cane');
        $catCategory = new Category('gatto');

        $dogFood = new Food("croccantini", 25.99, $dogCategory, "10kg", ["carne", "pesce", "verdure"], "2023-07-01");
        $catFood = new Food("scatolette", 28.99, $catCategory, "12kg", ["pesce", "verdure"], "2023-01-30");

        $dogGame = new Game("osso di gomma", 9.99, $dogCategory, ["gomma", "plastica"]);
        $catGame = new Game("gomitolo di lana", 4.99, $catCategory, ["lana", "poliestere"]);

        $dogHouse = new House("cuccia", 29.99, $dogCategory, ["gomma", "plastica", "acciaio"], "80x75x150");
        $catHouse = new House("cuccia", 27.99, $catCategory, ["gomma", "plastica", "acciaio"], "50x65x124");
    ?>
    </head>

<body>
    <div class="container py-5">
        <h1 class="text-center">Pet Shop</h1>

        <h2>Cane</h2>

        <div class="card-group my-5">

            <div class="card position-relative">

                <div class="card-body">

                    <h5 class="card-title">
                        <?php echo $dogFood->getName(); ?>
                    </h5>

                    <p class="card-text">
                        <?php 
                            echo "<span>Ingredienti: </span>"; 

                            foreach($dogFood->getIngredients() as $ingredient) echo $ingredient . ' ';
                        ?>
                    </p>

                    <p class="card-text">
                        <?php 
                            echo "<span>Peso: " . $dogFood -> getWeight() . "</span>";
                        ?>
                    </p>

                    <p class="card-text">
                        <?php echo "<span>Scadenza: " . $dogFood->getExpirationDate() . "</span>";
                        ?>
                    </p>    
                </div>

                <div class="card-footer">
                    <small class="text-muted">
                        <?php 
                            echo "<span>Prezzo: " . $dogFood->getPrice() ."€</span>"; 
                        ?>
                    </small>
                </div>

            </div>

            <div class="card position-relative">

                <div class="card-body">

                    <h5 class="card-title">
                        <?php echo $dogGame->getName(); ?>
                    </h5>

                    <p class="card-text">
                        <?php 
                            echo "<span>Composizione: </span>"; 
                            
                            foreach($dogGame->getMaterials() as $material) echo $material . ' '; ?>
                    </p> 

                </div>

                <div class="card-footer">

                    <small class="text-muted">
                        <?php 
                            echo "<span>Prezzo: " . $dogGame->getPrice() ."€</span>";  
                        ?>
                    </small>
                    
                </div>

            </div>

            <div class="card position-relative">

                <div class="card-body">

                    <h5 class="card-title">
                        <?php 
                            echo $dogHouse->getName();
                        ?>
                    </h5>

                    <p class="card-text">
                        <?php 
                            echo "<span>Composizione: </span>"; 

                            foreach($dogHouse->getMaterials() as $material) echo $material . ' ';  
                        ?>
                    </p>

                    <p class="card-text">
                        <?php 
                            echo "<span>Dimensioni: " . $dogHouse->getSize() ."cm</span>";
                        ?>
                    </p>    

                </div>

                <div class="card-footer">
                    <small class="text-muted">
                        <?php 
                            echo "<span>Prezzo: " . $dogHouse->getPrice() ."€</span>"; 
                        ?>
                    </small>
                </div>

            </div>
        </div>

        <h2>Gatto</h2>

        <div class="card-group my-5">

            <div class="card position-relative">

                <div class="card-body">

                    <h5 class="card-title">
                        <?php echo $catFood->getName(); ?>
                    </h5>

                    <p class="card-text">
                        <?php 
                            echo "<span>Ingredienti: </span>"; 

                            foreach($catFood->getIngredients() as $ingredient) echo $ingredient . ' ';  
                        ?>
                    </p>

                    <p class="card-text">
                        <?php 
                            echo "<span>Peso: " . $catFood -> getWeight() . "</span>"; 
                        ?>
                    </p>  

                    <p class="card-text">
                        <?php 
                            echo "<span>Scadenza: " . $catFood->getExpirationDate() . "</span>"; 
                        ?>
                    </p>    
                </div>
                <div class="card-footer">

                    <small class="text-muted">
                        <?php 
                            echo "<span>Prezzo: " . $catFood->getPrice() ."€</span>"  
                        ?>
                    </small>

                </div>

            </div>

            <div class="card position-relative">

                <div class="card-body">

                    <h5 class="card-title"><?php echo $catGame->getName(); ?></h5>

                    <p class="card-text">
                        <?php 
                            echo "<span>Composizione: </span>";

                            foreach($catGame->getMaterials() as $material) echo $material . ' '; 
                        ?>
                    </p>
        
                </div>

                <div class="card-footer">

                    <small class="text-muted">
                        <?php 
                            echo "<span>Prezzo: " . $catGame->getPrice() . "€</span>"; 
                        ?>
                    </small>

                </div>
                
            </div>

            <div class="card position-relative">

                <div class="card-body">

                    <h5 class="card-title"><?php echo $catHouse->getName(); ?></h5>

                    <p class="card-text">
                        <?php 
                            echo "<span>Composizione: </span>";

                            foreach($catHouse->getMaterials() as $material) echo $material . ' ';
                        ?>
                    </p>

                    <p class="card-text">
                        <?php 
                            echo "<span>Dimensioni: " . $catHouse->getSize() . "cm</span>"; 
                        ?>
                    </p>

                </div>

                <div class="card-footer">
                    <small class="text-muted">
                        <?php 
                            echo "<span>Prezzo: " . $catHouse->getPrice() . "€</span>"; 
                        ?>
                    </small>
                </div>
                
            </div>
        </div>
    </div>
    
</body>
</html>