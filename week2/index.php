<?php
// Get the current time in hours and minutes
$currentHour = date('G');
$currentMinute = date('i');

// Determine the meal based on the current time
if (($currentHour >= 5 && $currentHour < 9) || ($currentHour == 9 && $currentMinute == 0)) {
    echo "It's breakfast time! The animals should eat: Bananas, Apples, and Oats.";
} elseif (($currentHour >= 12 && $currentHour < 14) || ($currentHour == 14 && $currentMinute == 0)) {
    echo "It's lunch time! The animals should eat: Fish, Chicken, and Vegetables.";
} elseif (($currentHour >= 19 && $currentHour < 21) || ($currentHour == 21 && $currentMinute == 0)) {
    echo "It's dinner time! The animals should eat: Steak, Carrots, and Broccoli.";
} else {
    echo "The animals are not being fed at this time.";
}
?>