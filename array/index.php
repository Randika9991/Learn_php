<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Variable</title>
</head>
<body>
<?php
         $names = ["nimala","kamala","amala"];
        
        $book = [
            [
                "title" => "The Great Gatsby",
                "author" => "F. Scott Fitzgerald",
                "year" => 1925
            ],
            [
                "title" => "The Great Gatsby",
                "author" => "F. Scott Fitzgerald",
                "year" => 1925
            ]
        ];
        ?>



    <h1>
    <?php   //normal array
         foreach ($names as $name) { 
            echo "<li>name: " . $name . "</li>";
        }
    ?>
    </h1>

    <h1>
    <?php   //multi array
         foreach ($book as $singleBook) {

            echo "<li>Title: " . $singleBook['title'] . "</li>";
            echo "<li>Author: " . $singleBook['author'] . "</li>";
            echo "<li>Year: " . $singleBook['year'] . "</li>";

            echo "<br>"; // break
        }
    ?>
    </h1>
    <h1>
        <?=  $singleBook?>
    </h1>
</body>
</html>
