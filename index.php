<?php
    declare (strict_types = 1);


function d(mixed $value, string $function = ''): void
{
    if ($function === 'p') {
        echo "<pre>";
        print_r($value);
        echo "</pre>";
    } else {
        echo "<pre>";
        var_dump($value);
        echo "</pre>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php

    class Animal {



        public function __construct(private bool $alive)
        {
            
        }

        public function isAlive() 
        {
            return $this->alive;
        }

        public function sound() 
        {
            return "grajgfakljvkldf";
        }


    }
    class Cat extends Animal
    { 

        public function __construct($alive, private string $color)
        {
            parent::__construct($alive);
        }

        public function sound() 
        {
            return "miau";
        }

        public function isAlivee() 
        {
            if(parent::isAlive()) {
                return "cat says {$this->sound()} and is alive";
            } else {
                return "cat is dead";
            }
            
        }

    }

    $animal = new Animal(true);
    d($animal->sound());
    $kocz = new Cat(false, "red"); 
    d($kocz->isAlivee());
    d($kocz->sound());
    // $miaucz = new Cat(2); 
    // $miaucz->powerLevel = 2;   
    // d($miaucz->powerLevel);

    ?>
</body>

</html>