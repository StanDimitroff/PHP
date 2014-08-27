<!--Write a PHP program TextFilter.php that takes a text from a textfield and a string of banned words from a text input field. All words included in the ban list should be replaced with asterisks "*", equal to the word’s length. The entries in the banlist will be separated by a comma and space ", ".-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Text Filter</title>
</head>
<body>
<form method="post">

    <textarea name="text" id="text" cols="30" rows="10" autofocus placeholder="Add text..."></textarea><br/>
    <input type="text" name="ban-list" placeholder="Input ban list..."/><br/>
    <input type="submit" value="Filter"/>
</form>
<br/>
<?php
if ($_POST && !empty($_POST['text']) && !empty($_POST['ban-list'])) {
    $text = $_POST['text'];
    $banList = $_POST['ban-list'];

    //replace the characters
    function replaceSubstr($substr, $banWord)
    {
        for ($i = 0; $i < strlen($banWord); $i++) {
            $substr[$i] = '*';
        }
        return $substr;
    }

    $text = preg_split("/[\\s]+/", $text, -1, PREG_SPLIT_NO_EMPTY);
    $banList = explode(', ', $banList);
    foreach ($text as $key => $value) {
        foreach ($banList as $banWord) {
            if (strpos($value, $banWord) !== false) {
                $initialSubstr = substr($value, strpos($value, $banWord), strlen($banWord));
                $resultSubstr = replaceSubstr($initialSubstr, $banWord);
                $text[$key] = str_replace($initialSubstr, $resultSubstr, $value);
            }
        }
    }
    $resultStr = implode(' ', $text);
    echo $resultStr;
}
else{
    echo 'Please fill all the fields!';
}
?>
</body>
</html>