<!--Write a PHP script StringModifier.php which receives a string from an input form and modifies it according to the selected option (radio button). You should support the following operations: palindrome check, reverse string, split to extract letters only, hash the string with the default PHP hashing algorithm, shuffle the string characters randomly. The result should be displayed right under the input field. Styling the page is optional. Think about which of the modification can be achieved with already built-in functions in PHP. Where necessary, write your own algorithms to modify the given string. Hint: Use the crypt() function for the "Hash String" modification.-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>String Modifier</title>
</head>
<body>
<form method="post">
    <label for="input">Input String:</label>
    <input type="text" id="input" name="input" autofocus/>
    <input type="radio" name="option" id="palindrome" value="palindrome"/>
    <label for="palindrome">Check Palindrome</label>
    <input type="radio" name="option" id="reverse" value="reverse"/>
    <label for="reverse">Reverse String</label>
    <input type="radio" name="option" id="split" value="split"/>
    <label for="split">Split</label>
    <input type="radio" name="option" id="hash" value="hash"/>
    <label for="hash">Hash String</label>
    <input type="radio" name="option" id="shuffle" value="shuffle"/>
    <label for="shuffle">Shuffle String</label>
    <input type="submit"/>
</form>
<?php
if (isset($_POST['input']) && isset($_POST['option'])) {
    $input = $_POST['input'];
    $operation = $_POST['option'];
    function checkPalindrome($string)
    {
        $initialString = strtolower(preg_replace("/[^A-Za-z0-9]/", "", $string));
        return $initialString === strrev($initialString);
    }

    if ($operation === 'palindrome') {
        $isPalindrome = checkPalindrome($input);
        if ($isPalindrome === true) {
            echo "$input is a palindrome!";
        } else {
            echo "$input is not a palindrome!";
        }
    }
    if ($operation === 'reverse') {
        echo strrev($input);
    }
    if ($operation === 'split') {
        $input = str_split($input);
        $result = implode(' ', $input);
        echo $result;
    }
    if ($operation === 'hash') {
        echo crypt($input);
    }
    if ($operation === 'shuffle') {
        echo str_shuffle($input);
    }
}
?>
</body>
</html>