<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="inputs.php" method="post">
        Name : <input type="text" name="name">
        <br>
        Age : <input type="number" name="age">
        <input type="submit">
    </form>
    <br>

    <?php 
        if(isset($_POST["name"]) && isset($_POST["age"])){
            echo $_POST["name"];
            echo "<br>";
            echo $_POST["age"];
        }
        
    ?>
</body>
</html>