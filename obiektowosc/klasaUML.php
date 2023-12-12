<?php
    class Fruit {
        //properties
        public $name;
        public $color;

        //methods
        function setName($name){
            $this->name=$name;
        }
        function getName(){
            return $this->name;
        }
    }
    
    $apple = new Fruit();
    $banana = new Fruit();
    $orange = new Fruit();

    $apple->setName('Apple');
    $banana->setName('Banana');
    $orange->setName('Orange');

    echo $apple->getName();
    echo "<br>";
    echo $banana->getName();
    echo "<br>";
    echo $orange->getName();
?>