<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Movie{
            public $title;
            private $rating;

            function __construct($title,$rating){
                $this-> title = $title;
                $this-> rating = $rating;
            }

            function getRating(){
                return $this-> rating;
            }

            function setRating($rating){
                $this-> rating = $rating;
            }
        }

        $movie = new Movie("jawaan","A");

        echo $movie->getRating();

        $movie->setRating("B-");

        echo $movie->getRating();
    ?>
</body>
</html>