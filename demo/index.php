<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
    <style>
        body {

        }
    </style>
</head>
<body>

<?php
// Include the file that contains the book data and functions
include 'book_data.php';
?>

<h1>Books</h1>
<h1>
    <?php
    // Access the book data from the included file
    foreach ($book as $singleBook) {
        echo "Title: " . $singleBook["title"] . "\n";
        echo "Author: " . $singleBook["author"] . "\n";
        echo "Year: " . $singleBook["year"] . "\n";
        echo "\n"; // Adding a blank line for readability
    }
    ?>
</h1>
<h1>
    <?= name(); ?>
</h1>

</body>
</html>
