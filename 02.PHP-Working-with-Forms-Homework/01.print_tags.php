<!--Write a PHP script PrintTags.php which generates an HTML input text field and a submit button. In the text field the user must enter different tags, separated by a comma and a space (", "). When the information is submitted, the script should split the tags, put them in an array and print out the array. Semantic HTML is required. Styling is not required.-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Print Tags</title>
</head>
<body>
<p>Enter Tags:</p>

<form action="" method="get">
    <input type="text" name="tags" autofocus/>
    <input type="submit"/><br><br>
</form>
<?php
if ($_GET) {
    $tags = explode(', ', $_GET['tags']);
    foreach ($tags as $key => $value) {
        echo "$key : $value" . '<br>';
    }
}
?>
</body>
</html>