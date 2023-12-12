<?php
    class Fruit {
        public $name;
        public $color;

        function __construct($name, $color="red"){
            $this->name=$name;
            $this->color=$color;
        }
        function __destruct(){
            echo "The fruit is {$this->name}";
        }
    }

    $apple = new Fruit("Apple");
?>