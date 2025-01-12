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

            // $m = new Mammal();
            // $r = new Reptile();
            // $p = new Fish();
            // $a = new Bird();

            // Mammal:
            // $m->setWeight(85.3);
            // $m->setAge(2);
            // $m->setMembers(4);
            // $m->animalMove();
            // $m->toFeed();
            // $m->makeSound();
            // print_r($m);

            // Fish:
            // $p->setWeight(0.35);
            // $p->setAge(1);
            // $p->setMembers(0);
            // $p->animalMove();
            // $p->toFeed();
            // $p->makeSound();
            // $p->releaseBubble();
            // print_r($p);

            // Bird:
            // $a->setWeight(0.89);
            // $a->setAge(2);
            // $a->setMembers(2);
            // $a->animalMove();
            // $a->toFeed();
            // $a->makeSound();
            // $a->makeNest();
            // print_r($a);

            $m = new Mammal();
            $k = new Kangaroo();
            $d = new Dog();

            // Mammal:
            $m->setWeight(5.70);
            $m->setAge(8);
            $m->setMembers(4);
            $m->animalMove();
            $m->toFeed();
            $m->makeSound();
            print_r($m);

            // Kangaroo:
            $k->setWeight(55.30);
            $k->setAge(3);
            $k->setMembers(4);
            $k->animalMove();
            $k->toFeed();
            $k->makeSound();
            $k->useBag();
            print_r($k);

            // Dog:
            $d->setWeight(3.94);
            $d->setAge(5);
            $d->setMembers(4);
            $d->animalMove();
            $d->toFeed();
            $d->makeSound();
            $d->wagTail();
            print_r($d);
        ?>
    </pre>
</body>
</html>