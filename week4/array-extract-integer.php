<!DOCTYPE html>
<html>

<body>

    <?php
    $array = array(34, 56.3, "Total", true, 365, 34.78, 99, 84, 3.3);

    $integers = array_filter($array, 'is_int');

    print_r($integers);
    ?>

</body>

</html>