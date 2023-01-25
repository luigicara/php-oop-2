<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP PetShop</title>
    <?php
        require_once __DIR__ . '/Models/Product.php';
        require_once __DIR__ . '/Models/Food.php';
        require_once __DIR__ . '/Models/Game.php';
        require_once __DIR__ . '/Models/House.php';

        $dogCategory = new Category('cane');
        $catCategory = new Category('gatto');

        $dogFood = new Food("croccantini", 25.99, $dogCategory, "10kg", ["carne", "pesce", "verdure"], "2023-07-01");
        $catFood = new Food("scatolette", 28.99, $catCategory, "12kg", ["pesce", "verdure"], "2023-07-01");

        $dogGame = new Game("osso di gomma", 9.99, $dogCategory, ["gomma", "plastica"]);
        $catGame = new Game("gomitolo di lana", 4.99, $catCategory, ["lana", "poliestere"]);

        $dogHouse = new House("cuccia", 29.99, $dogCategory, ["gomma", "plastica", "acciaio"], "80x75x150");
        $catHouse = new House("cuccia", 27.99, $catCategory, ["gomma", "plastica", "acciaio"], "50x65x124");
    ?>
    </head>

<body>
    <?php
        foreach($catHouse -> getMaterials() as $material) {
            echo $material . " ";
        };
    ?>
</body>
</html>