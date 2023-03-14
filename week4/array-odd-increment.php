<!DOCTYPE html>
<html>

<body>

    <?php

    // Initialize an empty array
    $odd_numbers = array();

    // Loop through numbers 1 to 100
    for ($i = 1; $i <= 100; $i++) {
        // Check if the number is odd
        if ($i % 2 == 1) {
            // Append the odd number to the array
            array_push($odd_numbers, $i);
        }
    }

    // Loop through the resulting array and display the elements in the requested format
    for ($i = 0; $i < count($odd_numbers); $i++) {
        echo ($i + 1) . "st element - " . $odd_numbers[$i] . "<br>";
    }

    ?>
</body>

</html>