<!--Write a PHP script SumOfDigits.php which receives a comma-separated list of integers from an input form and creates a two-column table. The first column should contain each of the values from the input. The second column should contain the sum of the digits of each value. If the value is not an integer number, print "I cannot sum that". Styling the page is optional.-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sum of Digits</title>
</head>
<body>
<form method="post">
    <label for="nums">Input string:</label>
    <input type="text" name="nums" id="nums" autofocus/>
    <input type="submit"/>
</form>
<table border="1">

    <?php
    if (isset($_POST['nums']) && !empty($_POST['nums'])) :
    $nums = explode(',', $_POST['nums']);
    foreach ($nums as $value) :
        if (is_numeric($value)) {
            $digits = str_split($value);
            $sum = array_sum($digits);
        }else{
            $sum='I cannot sum that!';
        }
        ?>
        <tr>
            <td><?= $value ?></td>
            <td><?=$sum?></td>
        </tr>
    <?php
    endforeach;
    ?>
</table>
<?php
endif;
?>

</body>
</html>