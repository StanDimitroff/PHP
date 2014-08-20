<!--Write a PHP script AnnualExpenses.php that receives n years from an input HTML form and creates a table (like the one shown below) with random expenses by months and the corresponding years (n years back). For example, if N is 10, create a table that shows the expenses for each month for the last 10 years. Add a "Total" column at the end, showing the total expenses for the same year. The random expenses in the table should be in the range [0…999]. Styling the page is optional.-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Annual Expenses</title>
</head>
<body>
<form method="post">
    <label for="years">Enter years</label>
    <input type="text" id="years" name="years"/>
    <input type="submit" value="Show Costs"/>
</form>
<?php
if (!empty($_POST['years'])) :
$years = $_POST['years'];
$currentYear = date('Y');
?>
<table border="1">
    <tr>
        <th>Year</th>
        <th>January</th>
        <th>February</th>
        <th>March</th>
        <th>April</th>
        <th>May</th>
        <th>June</th>
        <th>July</th>
        <th>August</th>
        <th>September</th>
        <th>October</th>
        <th>November</th>
        <th>December</th>
        <th>Total</th>
    </tr>
    <?php
    for ($i = 0;
         $i < $years;
         $i++)
        :
        $randNums = [];
        for ($j = 0; $j <= 11; $j++) :
            array_push($randNums, rand(0, 999));
        endfor;
        $sum = array_sum($randNums);?>
        <tr>
            <td><?= $currentYear - $i ?></td>
            <td><?= $randNums[0] ?></td>
            <td><?= $randNums[1] ?></td>
            <td><?= $randNums[2] ?></td>
            <td><?= $randNums[3] ?></td>
            <td><?= $randNums[4] ?></td>
            <td><?= $randNums[5] ?></td>
            <td><?= $randNums[6] ?></td>
            <td><?= $randNums[7] ?></td>
            <td><?= $randNums[8] ?></td>
            <td><?= $randNums[9] ?></td>
            <td><?= $randNums[10] ?></td>
            <td><?= $randNums[11] ?></td>
            <td><?= $sum ?></td>
        </tr>
    <?php
    endfor;
    ?>
</table>
</body>
<?php
endif;
?>
</html>