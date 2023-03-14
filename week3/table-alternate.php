<html>

<head>
    <title>Alternate Row Table</title>
    <style type="text/css">
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
            border: 1px solid #ddd;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <table>
        <tbody>
            <?php
            for ($i = 1; $i <= 100; $i++) {
                if ($i % 2 == 0) {
                    echo '<tr style="background-color: #e6f7ff;">';
                } else {
                    echo '<tr>';
                }
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</body>

</html>