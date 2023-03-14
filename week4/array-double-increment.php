<!DOCTYPE html>
<html>

<body>

    <?php
    $array = array();
    $current_element = 1;

    for ($i = 0; $i < 10; $i++) {
        $array[$i] = $current_element;
        $current_element *= 2;
    }

    for ($i = 0; $i < count($array); $i++) {
        echo ($i + 1) . "st element - " . $array[$i] . "<br>";
    }
    ?>

</body>

</html>