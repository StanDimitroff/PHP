<!--Write a PHP script SquareRootSum.php that displays a table in your browser with 2 columns. The first column should contain a number (even numbers from 0 to 100) and the second column should contain the square root of that number, rounded to the second digit after the decimal point. The last row of the table should contain the sum of all values in the Square column.-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Square Root Sum</title>
</head>
<body>
<table border="1">

    <tr>
        <th>Number</th>
        <th>Square</th>
    </tr>
    <?php
    $sum = 0;
    for ($i = 0; $i <= 100; $i += 2) :
        $sqrt = sqrt($i);
        $sqrtRounded = round($sqrt, 2);
        $sum += $sqrt;
        ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $sqrtRounded ?></td>
        </tr>
    <?php
    endfor;
    ?>
    <tr>
        <td>Total</td>
        <td><?= round($sum, 2) ?></td>
    </tr>
</table>
</body>
</html>