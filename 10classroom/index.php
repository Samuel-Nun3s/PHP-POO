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
        require_once 'require.php';

        $p1 = new Person("Samuel", 19, "M");
        $p2 = new Student(true, "ADS");
        $p3 = new Teacher("PHP", 10000);
        $p4 = new Employee("Limpeza", true);

        $p1->setName("Samuel Nunes");
        $p2->setName("Maria");
        $p3->setName("Claudio");
        $p4->setName("Fabiana");

        echo $p1->getName() . " <br>";
        echo $p2->getName() . " <br>";
        echo $p3->getName() . " <br>";
        echo $p3->getSalary() . " <br>";
        echo $p3->ReceiveRaise(500) . " <br>";
        echo $p3->getSalary() . " <br>";
        echo $p4->getName() . " <br>";
        echo $p4->getSector() . " <br>";

        print_r($p1);
        print_r($p2);
        print_r($p3);
        print_r($p4);
    ?>
    </pre>
</body>
</html>