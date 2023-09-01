<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        class Student{
            var $name;
            var $id;
            var $dept;
            var $gpa;

            function showInfo(){
                echo "$this->name <br>";
                echo "$this->id <br>";
                echo "$this->dept <br>";
                echo "$this->gpa <br>";
            }

            function __construct(){
                echo "New Student Created <br>";
            }

            function hasHonors(){
                if($this->gpa>= 3.75){
                    echo "Honored <br>";
                }
                else{
                    echo "Sorry!! Not honored <br>";
                }
            }
        }

        $student1 = new Student();

        $student1->name = "Israk";
        $student1->id = 2037820103;
        $student1->dept = "CSE";
        $student1->gpa = 3.95;

        /*echo "$student1->name <br>";
        echo "$student1->id <br>";
        echo "$student1->dept <br>";*/

        $student1->showInfo();

        $student1->hasHonors();

    ?>
</body>
</html>