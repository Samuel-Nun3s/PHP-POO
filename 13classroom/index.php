<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP POO</title>
</head>
<body>
    <?php 
        require_once 'require.php';

        $c = new Mammal();
        $c->makeSound();

        $w = new Wolf();
        $w->makeSound();

        $d = new Dog();
        $d->makeSound();
    ?>
</body>
</html>