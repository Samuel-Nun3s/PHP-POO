<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP POO</title>
</head>
<body>
    <h1>Projeto Controle Remoto</h1>
    <pre>
    <?php
        require_once 'RemoteControl.php';

        $c = new RemoteControl();
        $c->toConnect();
        $c->moreVolume();
        $c->openMenu();
    ?>
    </pre>  
</body>
</html>