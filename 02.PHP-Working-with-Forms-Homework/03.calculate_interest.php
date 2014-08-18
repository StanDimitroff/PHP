<!--Write a PHP script CalculateInterest.php which generates an HTML page that contains:-->
<!--•	An input text field to hold the amount of money-->
<!--•	Radio buttons to choose the currency-->
<!--•	An input text field to enter the compound annual interest amount-->
<!--•	A dropdown menu to choose the period of time-->
<!--•	A submit button-->
<!--When the information is submitted, the script should print out the amount of money you will have after the selected period, rounded to 2 decimal places. Semantic HTML is required. Styling is not required.-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculate Interest</title>
</head>
<body>
<form action="" method="get">

    <label for="amount">Enter Amount</label>
    <input type="text" id="amount" name="amount" autofocus/><br/>
    <input type="radio" name="currency" value="1" id="radio1"/>
    <label for="radio1">USD</label>
    <input type="radio" name="currency" value="2" id="radio2"/>
    <label for="radio2">EUR</label>
    <input type="radio" name="currency" value="3" id="radio3"/>
    <label for="radio3">BGN</label><br/>
    <label for="interest">Compaund Interest Amount</label>
    <input type="text" id="interest" name="interest"/><br/>
    <select name="period">
        <option value="6">6 months</option>
        <option value="12">1 year</option>
        <option value="24">2 years</option>
        <option value="60">5 years</option>
    </select>
    <input type="submit" value="Calculate"/>

</form>

<?php
if (isset($_GET)) {
    $initialAmount = $_GET['amount'];
    $interest = $_GET['interest'];
    $period = $_GET['period'];

    //calculate final sum
    function calculateAmount($amount, $interest, $period)
    {
        $finalAmount = 0;
        $periodInterest = 100 + ($interest / 12);
        $finalAmount = $amount;
        for ($i = 0; $i < $period; $i++) {
            $finalAmount = ($finalAmount * $periodInterest) / 100;
        }
        return $finalAmount;
    }
    //call the function
    $sum = number_format(calculateAmount($initialAmount, $interest, $period), 2, '.', '');

    //set currency sign
    if (isset($_GET['currency'])) {
        $currency = $_GET['currency'];
        switch ($currency) {
            case 1:
                echo "$ $sum";
                break;
            case 2:
                echo "\xE2\x82\xAc $sum";
                break;
            case 3:
                echo "$sum лв.";
                break;
        }
    }

}
?>
</body>
</html>
