<!--Write a PHP program SentenceExtractor.php that takes a text from a textarea and a word from an input field and prints all sentences from the text, containing that word. A sentence is any sequence of words ending with ., ! or ?.-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sentence Extractor</title>
</head>
<body>
<form method="post">
    <textarea name="text" id="text" cols="30" rows="10" autofocus placeholder="Add text.."></textarea><br/>
    <input type="text" name="word" placeholder="Input word"/><br/>
    <input type="submit" value="Extract"/>
</form>
<br/>
<?php
function endsWith($haystack)
{
    $isSenetence = false;
    $lastChar = $haystack[strlen($haystack) - 1];
    switch ($lastChar) {
        case '.':
            $isSenetence = true;
            break;
        case '!':
            $isSenetence = true;
            break;
        case '?':
            $isSenetence = true;
            break;
        default:
            $isSenetence = false;
            break;
    }
    return $isSenetence;
}

if ($_POST && !empty($_POST['text']) && !empty($_POST['word'])) {
    $text = preg_split('/(?<=[.?!])\s+(?=[a-z])/i', $_POST['text'], -1, PREG_SPLIT_NO_EMPTY);
    $word = $_POST['word'];

    //remove non sentences
    foreach ($text as $key => $value) {
        $isSentence = endsWith($value);
        if ($isSentence === false) {
            unset($text[$key]);
        }
    }
    //check occurrences
    foreach ($text as $value) {
        $words = preg_split('/[\/|()\s.!?,;:-]/', $value, -1, PREG_SPLIT_NO_EMPTY);
        foreach ($words as $wrd) {
            if (strcmp(strtolower($wrd), strtolower($word)) === 0) {
                echo $value . '<br>';
            }
        }
    }
} else {
    echo 'Please fill all the fields!';
}
?>
</body>
</html>