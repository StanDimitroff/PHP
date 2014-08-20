<!--Write a PHP script PrimesInRange.php that receives two numbers – start and end – from an input field and displays all numbers in that range as a comma-separated list. Prime numbers should be bolded. Styling the page is optional.-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Primes In Range</title>
</head>
<body>
<form method="post">
    <label for="start">Start Index:</label>
    <input type="text" name="start" id="start" autofocus/>
    <label for="end">End Index:</label>
    <input type="text" name="end" id="end"/>
    <input type="submit"/>
</form>
<?php
if (!empty($_POST['start']) && !empty($_POST['end'])) :
    $startIndex = $_POST['start'];
    $endIndex = $_POST['end'];
    function isPrime($num)
    {
        if ($num == 1) {
            return false;
        }
        if ($num == 2) {
            return true;
        }
        if ($num % 2 == 0) {
            return false;
        }

        for ($i = 3; $i <= ceil(sqrt($num)); $i = $i + 2) {
            if ($num % $i == 0)
                return false;
        }
        return true;
    }

    for ($i = $startIndex; $i <= $endIndex; $i++) :
        $isPrime = isPrime($i);
        if ($isPrime === true) {
            if ($i == $endIndex) {
                ?>
                <b><?= "$i" ?></b>
            <?php
            } else {
                ?>
                <b><?= "$i, " ?></b>
            <?php
            }
        } else {
            if ($i == $endIndex) {
                echo "$i";
            } else {
                echo "$i, ";
            }
        }
    endfor;
endif;
?>

</body>
</html>