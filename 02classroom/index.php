<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP POO</title>
</head>
<body>
    <?php 
        require_once 'Caneta.php';

        $c1 = new Caneta;
        $c1->color = "Azul";
        $c1->tip = 0.5;
        $c1->uncover();
        $c1->scribble();
        var_dump($c1);

        $c2 = new Caneta;
        $c2->color = "Verde";
        $c2->load = 50;
        $c2->cover();
        var_dump($c2);

    ?>
</body>
</html>