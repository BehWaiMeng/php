<!DOCTYPE html>
<html>

<body>

    <?php
    // Define the arrays
    $array1 = array(20, 30, 40, 51, 60);
    $array2 = array(50, 24, 57, 34, 27);

    // Create a new empty array to store the sum
    $sum_array = array();

    // Loop through the arrays and add the elements
    for ($i = 0; $i < count($array1); $i++) {
        $sum_array[] = $array1[$i] + $array2[$i];
    }

    // Print the sum array
    print_r($sum_array);
    ?>

</body>

</html>