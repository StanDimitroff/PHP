<?php
//Write a PHP script HTMLTagsCounter.php which generates an HTML form like in the example below. It should contain a label, an input text field and a submit button. The user enters HTML tag in the input field. If the tag is valid, the script should print “Valid HTML tag!”, and if it is invalid – “Invalid HTML Tag!”. On the second line, there should be a score counter. For every valid tag entered, the score should increase by 1.

session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTML Tags Counter</title>
</head>
<body>
<label for="text">Enter HTML tags:</label><br><br>

<form method="get">
    <input type="text" id="text" name="text" autofocus/>
    <input type="submit"/><br/><br/>
</form>
<?php
$htmlTags = file('html-tags.txt', FILE_IGNORE_NEW_LINES);
if (isset($_GET['text'])) {
    $tag = $_GET['text'];

    if (!isset($_SESSION['count'])) {
        $_SESSION['count'] = 0;
    }

    if (array_search($tag, $htmlTags) !== false) {
        echo 'Valid HTML tag!<br>';
        $_SESSION['count']++;
    } else {
        echo 'Invalid HTML tag!<br>';
    }

    echo 'Score: ' . $_SESSION['count'];
}
?>
</body>
</html>