<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP POO</title>
</head>
<body>
    <pre>
    <?php 
        require_once 'Fighter.php';
        require_once 'Fight.php';

        $fighter = array();

        $fighter[0] = new Fighter(
            "Pretty Boy", // name
            "França", // nacionality
            31, 1.75, 68.9, // age, height, weight
            11, 3, 1 // victories, defeats, draws
        );

        $fighter[1] = new Fighter(
            "Putscript",
            "Brasil",
            29, 1.68, 57.8,
            14, 2, 3
        );

        $fighter[2] = new Fighter(
            "Snapshadow",
            "EUA",
            35, 1.65, 80.9,
            12, 2, 1
        );

        $fighter[3] = new Fighter(
            "Dead Code",
            "Austrália",
            28, 1.93, 81.6,
            13, 0, 2
        );

        $fighter[4] = new Fighter(
            "Ufocobol",
            "Brasil",
            37, 1.70, 119.3,
            5, 4, 3
        );

        $fighter[5] = new Fighter(
            "Nerdaard",
            "EUA",
            30, 1.81, 105.7,
            12, 2, 4
        );

        $UEC01 = new Fight();
        $UEC01->scheduleFight($fighter[4], $fighter[5]);
        $UEC01->toFight();
    ?>
    </pre>
</body>
</html>