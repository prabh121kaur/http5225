
<?php

$number = intval(readline("Enter a number: "));

// Determine the magic number based on divisibility rules
if ($number % 3 == 0 && $number % 5 == 0) {
    echo "FizzBuzz";
} elseif ($number % 3 == 0) {
    echo "Fizz";
} elseif ($number % 5 == 0) {
    echo "Buzz";
} else {
    echo $number;
}
?>
