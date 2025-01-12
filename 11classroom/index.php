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

            // $p1 = new Person();

            // $v1 = new Visitant();
            // $v1->setName("Samuel");
            // $v1->setAge(19);
            // $v1->setSex("M");
            // print_r($v1);

            // $a1 = new Student();
            // $a1->setName("Samuel");
            // $a1->setRegistration(1111);
            // $a1->setAge(19);
            // $a1->setSex("M");
            // $a1->setCourse("PHP");
            // $a1->payMonthlyFee();
            // print_r($a1);

            $b1 = new Colleger();
            $b1->setRegistration(1112);
            $b1->setName("Jubileu");
            $b1->setScholarship(12.5);
            $b1->setAge(19);
            $b1->setCourse("ADM");
            $b1->payMonthlyFee();
            print_r($b1);
        ?>
    </pre>
</body>
</html>