<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Data</title>
</head>
<body>
<form method="get" action="07.get_Form_Data.php">
    <input type="text" placeholder='Name..' autofocus name="name"/><br/>
    <input type="text" placeholder='Age..' name="age"/><br/>
    <input type="radio" name="sex" value="male">Male<br>
    <input type="radio" name="sex" value="female">Female<br>
    <input type="submit" value="Изпращане"/>
</form>
</body>
</html>

<?php
$isValid = true;
if ($_GET) {
    $name = trim($_GET['name']);
    $age = (int)$_GET['age'];
    if (!isset($_GET['sex'])) {
        echo 'Please choose sex!';
        $isValid = false;
    } else {
        $sex = $_GET['sex'];
    }
    if (strlen($name) < 3) {
        echo 'Enter name longer than 2 symbols!';
        $isValid = false;
    }
    if ($age <= 0) {
        echo 'Enter age bigger than 0!';
        $isValid = false;
    }

    if ($isValid == true) {
        echo "My name is $name. I am  $age years old. I am $sex.";
    }
}
?>