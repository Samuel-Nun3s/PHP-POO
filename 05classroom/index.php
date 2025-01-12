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
        require_once "BankAccount.php";

        $person1 = new BankAccount(); // Jubileu
        $person1->openAccount("CC");
        $person1->setNumAccount(1111);
        $person1->setOwner("Jubileu");
        $person1->deposit(300);
        $person1->payMonthlyFee();
        $person1->withdraw(338);
        $person1->closeAccount();
        print_r($person1);
        
        $person2 = new BankAccount(); // Creuza
        $person2->openAccount("CP");
        $person2->setNumAccount(2222);
        $person2->setOwner("Creuza");
        $person2->deposit(500);
        $person2->withdraw(100);
        $person2->payMonthlyFee();
        $person2->withdraw(530);
        $person2->closeAccount();
        print_r($person2);


    ?>
    </pre>
</body>
</html>