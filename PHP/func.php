<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function sayHi($name){
            echo "Hi $name";
        }

        //sayHI("Ahmed");

        function cube($num){
            return $num * $num * $num;
        }

        echo cube(5);
    ?>
</body>
</html>