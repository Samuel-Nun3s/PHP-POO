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
        $c1->model = "BIC Cristal";
        $c1->color = "Azul";
        var_dump($c1);
        $c1->scribble();
    ?>
</body>
</html>