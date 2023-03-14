<!DOCTYPE html>
<html>

<body>

    <?php
    $array = array(34, 56.3, "Total", true, 365, 34.78, 99, 84, 3.3);

    $total = 0;
    foreach ($array as $element) {
        if (is_int($element)) {
            $total += $element;
        }
    }

    echo "The total sum of all integer numbers is: " . $total;
    ?>

</body>

</html>