<!--You are a very rich billionaire with an unhidden passion for cars. You like certain car manufacturers but you don’t really care about anything else, and that’s why you need your own randomizing algorithm that helps you decide how many and what color cars you should buy. Write a PHP script CarRandomizer.php that receives a string of cars from an input HTML form, separated by a comma and space (“, “). It then prints each car, a random color and a random quantity in a table like the one shown below. Use colors by your choice. Use as quantity a random number in range [1...5]. Styling the page is optional.-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Car Randomizer</title>
</head>
<body>
<form method="post">
    <label for="cars">Enter cars</label>
    <input type="text" name="cars" id="cars" autofocus/>
    <input type="submit" value="Show Result"/>
</form>
<?php
$colors = ['black', 'white', 'green', 'red', 'blue', 'grey', 'pink', 'yellow', 'violet', 'brown', 'orange'];
$length = count($colors);

if (!empty($_POST['cars'])) :
    $cars = explode(',', $_POST['cars']);
    ?>
    <table border="1">
        <tr>
            <th>Cars</th>
            <th>Color</th>
            <th>Count</th>
        </tr>
        <?php
        foreach ($cars as $car) :
            $randomColor = rand(0, $length - 1);
            $randomQuantity = rand(1, 5);
            ?>
            <tr>
                <td><?= $car ?></td>
                <td><?= $colors[$randomColor] ?></td>
                <td><?= $randomQuantity ?></td>
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