<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="betterCalculator.php" method="post">
        First Number : <input type="number" step="0.00001" name="num1"><br>
        Operator : <input type="text" name="op"><br>
        Second Number : <input type="number" step="0.00001" name="num2"><br>
        <input type="submit">
    </form>

    <?php
        if(isset($_POST["num1"]) && isset($_POST["op"]) && isset($_POST["num2"])){
            $num1 = $_POST["num1"];
            $op = $_POST["op"];
            $num2 = $_POST["num2"];

            if($op == "+"){
                echo $num1 + $num2;
            }
            elseif($op == "-"){
                echo $num1 - $num2;
            }
            elseif($op == "*"){
                echo $num1 * $num2;
            }
            elseif($op == "/"){
                echo $num1 / $num2;
            }
            else{
                echo "Wrong Input";
            }
            echo "<br>";
        }
    ?>

</body>
</html>