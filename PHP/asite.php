<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="asite.php" method="post">
        Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
        Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
        Mangoes: <input type="checkbox" name="fruits[]" value="mangoes"><br>
        <input type="submit">
    </form> -->

    <form action="asite.php" method="post">
        Name: <input type="text" name="student"><br>
        <input type="submit">
    </form>

    <?php

        /*if(isset($_POST["fruits"])){
            $fruits = $_POST["fruits"];
            echo $fruits[0];
        }*/

        $grades = array("Israk" => "03", "Riya" => "15", "Jamil" => "08");
        
        if(isset($_POST["student"])){
            echo $grades[$_POST["student"]];
        }

    ?>

</body>
</html>