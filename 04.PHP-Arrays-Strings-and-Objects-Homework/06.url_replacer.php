<!--Write a PHP program URLReplacer.php that takes a text from a textarea and replaces all URLs with the HTML syntax <a href= "…" ></a> with a special forum-style syntax [URL=…][/URL].-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>URL Replacer</title>
</head>
<body>
<form method="post">
    <textarea name="text" id="" cols="30" rows="10" placeholder="Add text..." autofocus></textarea><br/>
    <input type="submit" value="Replace URLs"/>
</form>
<?php
if ($_POST && !empty($_POST['text'])) {
    $text = $_POST['text'];
    $text=preg_replace('/<a href="/','[URL=',$text,-1);
    $text=preg_replace('/">/',']',$text,-1);
    $text = preg_replace('/<\/a>/','[/URL]',$text,-1);
    echo $text;
} else {
    echo 'Please fill the field!';
}
?>
</body>
</html>