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
            require_once 'Person.php';
            require_once 'Grasshopper.php';
            require_once 'Video.php';
            require_once 'Preview.php';

            $v[0] = new Video("Aula 1 de POO");
            $v[1] = new Video("Aula 12 de PHP");
            $v[2] = new Video("Aula 15 de HTML5");

            print_r($v);

            $g[0] = new Grasshopper("Jubileu", 22, "M", "juba");
            $g[1] = new Grasshopper("Creuza", 12, "F", "creuzita");

            print_r($g);

            $p[0] = new Preview($g[0], $v[2]);

            print_r($p);
        ?>
    </pre>
</body>
</html>