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
        require_once 'Book.php'; 

        $person[0] = new Person("Pedro", 22, "M");
        $person[1] = new Person("Maria", 31, "F");
    	
        // Person 0 books
        $book[0] = new Book("PHP Básico", "José da Silva", 300, $person[0]);
        $book[1] = new Book("POO com PHP", "Maria de Souza", 500, $person[0]);

        // Person 1 books
        $book[2] = new Book("PHP Avançado", "Ana Paula", 800, $person[1]);

        $book[0]->open();
        $book[0]->leafThrough(50);
        $book[0]->returnPage();
        $book[0]->details();
    ?>
    </pre>
</body>
</html>