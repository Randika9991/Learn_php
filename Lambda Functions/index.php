<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Function and Filter with Lambda Functions</title>
</head>
<body>
    <?php 

// . මේවා temporary අවශ්‍යතාවකට යොදා ගන්න පුළුවන්, අදාළ code එකක් තව function එකකට pass කරන්න හෝ variable එකකට assign කරන්න පුළුවන්.


        // Simple lambda function to greet a user
        $greet = function($name) {
            return "Hello, $name!";
        };

        // Calling the lambda function
        echo $greet("Dulaksha") . "<br>";

        // Lambda function to multiply two numbers
        $multiply = function($a, $b) {
            return $a * $b;
        };

        // Calling the multiplication lambda function
        echo "5 * 10 = " . $multiply(5, 10) . "<br>";

        // Lambda function with an array filter
        $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

        // Filter out odd numbers
        $evenNumbers = array_filter($numbers, function($number) {
            return $number % 2 == 0;
        });

        echo "Even Numbers: ";
        foreach ($evenNumbers as $num) {
            echo $num . " ";  // Output: 2 4 6 8 10
        }

        // Using lambda as a callback function in array_map
        $squaredNumbers = array_map(function($number) {
            return $number * $number;
        }, $numbers);

        echo "<br>Squared Numbers: ";
        foreach ($squaredNumbers as $num) {
            echo $num . " ";  // Output: 1 4 9 16 25 36 49 64 81 100
        }
    ?>
<ul>

</ul>
</body>
</html>
