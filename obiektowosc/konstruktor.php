<?php
    class Fruit {
        //properties
        public $name;
        public $color;

        //methods
        function __construct($name, $color="red"){
            $this->name=$name;
            $this->color=$color;
        }
        function getName(){
            return $this->name;
        }
        function getColor(){
            return $this->color;
        }
    }

    $apple = new Fruit("Apple", "green");
    echo $apple->getName();
    echo "<br>";
    echo $apple->getColor();
?>