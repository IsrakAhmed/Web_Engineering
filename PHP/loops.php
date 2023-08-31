<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $index = 1;

        while($index <= 5){
            echo "$index <br>";
            $index++;
        }

        for($i = 1; $i <= 5; $i++){
            echo "$i Israk <br>";
        }

        $nums = array(1,3,8,9,12,15,17,21,24,27,6,9);

        for($i = 0; $i < count($nums); $i++){
            echo "$nums[$i] <br>";
        }

    ?>
</body>
</html>