<?php
header("Content-Type: text/html; charset=utf-8");
mb_internal_encoding("utf-8");
?>
<!--Write a PHP program TextColorer.php that takes a text from a textfield, colors each character according to its ASCII value and prints the result. If the ASCII value of a character is odd, the character should be printed in blue. If it’s even, it should be printed in red.-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Text Colorer</title>
</head>
<body>
<form method="post">
    <textarea name="text" id="" cols="30" rows="10" autofocus></textarea><br/>
    <input type="submit" value="Color Text"/>
</form>
<br/>
<?php
//multubyte char unicode extractor
function uniord($char)
{
    $h = ord($char{0});
    if ($h <= 0x7F) {
        return $h;
    } else if ($h < 0xC2) {
        return false;
    } else if ($h <= 0xDF) {
        return ($h & 0x1F) << 6 | (ord($char{1}) & 0x3F);
    } else if ($h <= 0xEF) {
        return ($h & 0x0F) << 12 | (ord($char{1}) & 0x3F) << 6
        | (ord($char{2}) & 0x3F);
    } else if ($h <= 0xF4) {
        return ($h & 0x0F) << 18 | (ord($char{1}) & 0x3F) << 12
        | (ord($char{2}) & 0x3F) << 6
        | (ord($char{3}) & 0x3F);
    } else {
        return false;
    }
}

if ($_POST && !empty($_POST['text'])) {
    $text = $_POST['text'];
    for ($i = 0; $i < mb_strlen($text); $i++) :
        $char =mb_substr($text,$i,1);
        if (uniord($char) % 2 !== 0) {
            ?>
            <span style="color:blue"><?= $char ?></span>
        <?php
        } else {
            ?>
            <span style="color:red"><?= $char ?></span>
        <?php
        }
    endfor;
}else{
    echo 'Please fill the field!';
}
?>

</body>
</html>