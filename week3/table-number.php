<!DOCTYPE html>
<html>

<head>
    <title>Table of Numbers</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Row</th>
                <th>Number</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 1; $i <= 100; $i++) { ?>
                <tr>
                    <td>Row <?php echo $i; ?></td>
                    <td><?php echo $i; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>