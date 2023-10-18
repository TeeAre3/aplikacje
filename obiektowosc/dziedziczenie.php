<?php
    class Fruit{
        public $name;
        public $color;
        public function __construct($name, $color){
            $this->name=$name;
            $this->color=$color;
        }
        protected function intro(){
            echo "The fruit is {$this->name} and the color is {$this->color}";
        }
    }

    class Strawberry extends Fruit{
        public function message(){
            echo "Am I a fruit or a berry?";
        }
    }

    $strawbery = new Strawberry("Strawberry", "red");
    $strawbery->message();
    //$strawbery->intro();
?>