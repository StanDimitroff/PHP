<?php
header("Content-Type: text/html; charset=utf-8");
?>
<!--Write a PHP program WordMapper.php that takes a text from a textarea and prints each word and the number of times it occurs in the text. The search should be case-insensitive. The result should be printed as an HTML table.-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Word Mapper</title>
</head>
<body>
<form method="post">
    <textarea name="text" id="" cols="30" rows="10" autofocus></textarea><br/>
    <input type="submit" value="Count Words"/>
</form>
<br/>
<?php
if ($_POST && !empty($_POST['text'])){
//ignore the character casing
$text = strtolower($_POST['text']);
//split text into words
$words = str_word_count($text, 1);
//count the occurrences of each word
$frequency = array_count_values($words);
?>
<table border="1">
    <?php
    foreach ($frequency as $key => $value) :
        ?>
        <tr>
            <td><?= $key ?></td>
            <td><?= $value ?></td>
        </tr>
    <?php endforeach;
    }else{
        echo 'Please fill the field!';
    }
    ?>
</table>
</body>
</html>