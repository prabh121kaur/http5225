<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quirky Zoo Feeding Schedule</title>
</head>
<body>
    <h1>Welcome to the Quirky Zoo Feeding Schedule</h1>
    <p>
        <?php
        date_default_timezone_set('Your/Timezone'); // Set your timezone here

        // Get the current hour
        $currentHour = (int) date('H');

        // Determine what the animals should eat based on the time
        if ($currentHour >= 5 && $currentHour < 9) {
            echo "The animals should have breakfast: Bananas, Apples, and Oats.";
        } elseif ($currentHour >= 12 && $currentHour < 14) {
            echo "The animals should have lunch: Fish, Chicken, and Vegetables.";
        } elseif ($currentHour >= 19 && $currentHour < 21) {
            echo "The animals should have dinner: Steak, Carrots, and Broccoli.";
        } else {
            echo "The animals are not being fed at this time.";
        }
        ?>
    </p>
</body>
</html>
