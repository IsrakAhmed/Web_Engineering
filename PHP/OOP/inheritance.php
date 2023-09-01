<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Animal{
            public $name;
            public $origin;

            function animalIntro(){
                echo "$this->name is created from $this->origin <br>";
            }

            function eat(){
                echo "$this->name is eating <br>";
            }
        }

        class Tiger extends Animal{
            function __construct($name,$origin){
                $this-> name = $name;
                $this-> origin = $origin;
            }
            function roar(){
                echo "$this->name from $this->origin is roaring <br>";
            }
        }

        $tiger = new Tiger("royal bengal tiger","Shundarban");

        $tiger-> animalIntro();
        $tiger-> eat();
        $tiger-> roar();

        echo "$tiger->name is here <br>";
    ?>
</body>
</html>