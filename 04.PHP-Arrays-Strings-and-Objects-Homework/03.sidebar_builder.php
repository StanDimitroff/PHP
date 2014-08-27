<?php
header("Content-Type: text/html; charset=utf-8");
?>
<!--Write a PHP program SidebarBuilder.php that takes data from several input fields and builds 3 sidebars. The input fields are categories, tags and months. The first sidebar should contain a list of the categories, the second sidebar – a list of the tags and the third should contain the months. The entries in the input strings will be separated by a comma and space ", ". Styling the page is optional. Semantic HTML is required.-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sidebar Builder</title>
</head>
<body>
<form method="post">
    <label for="cat">Categories:</label>
    <input type="text" name="categories" id="cat" autofocus/><br/>
    <label for="tags">Tags:</label>
    <input type="text" name="tags" id="tags"/><br/>
    <label for="months">Months:</label>
    <input type="text" name="months" id="months"/><br/>
    <input type="submit" value="Generate"/>
</form>
<br/>

<?php
function createSidebar($arr, $title)
{
    ?>
    <aside>
    <h3><?= $title ?></h3>
    <ul>
    <?php foreach ($arr as $value):?>
    <li style="text-decoration: underline;list-style-type: circle"><?= $value ?></li>
    <?php endforeach;?>
    </ul>
    </aside>
<?php }

if ($_POST && !empty($_POST['categories']) && !empty($_POST['tags']) && !empty($_POST['months'])) {
    $categories = preg_split('/[,\s]/', $_POST['categories'], -1, PREG_SPLIT_NO_EMPTY);
    $tags = preg_split('/[,\s]/', $_POST['tags'], -1, PREG_SPLIT_NO_EMPTY);
    $months = preg_split('/[,\s]/', $_POST['months'], -1, PREG_SPLIT_NO_EMPTY);
    createSidebar($categories, 'Categories');
    createSidebar($tags, 'Tags');
    createSidebar($months, 'Months');
}else{
    echo 'Please fill all the fields!';
}
?>

</body>
</html>