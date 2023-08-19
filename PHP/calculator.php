<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calculator.php" method="get">
        
        Num1 : <input type="number" name="num1">
        <br>
        Num2 : <input type="number" name="num2">
        <br>
        <input type="submit">
    </form>

    <?php
        if(isset($_GET["num1"]) && isset($_GET["num2"])){
            echo "Answer : ";
            echo $_GET["num1"] + $_GET["num2"];
        }
    ?>

</body>
</html>