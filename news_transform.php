<?php
if (!empty($_POST['article'])) {
    $text = $_POST['article'];
    $separator = '\n\r';

    $mass = explode($separator, $text);



    $final_mass = $mass; //array();
    $final_text = implode ('!', $final_mass); // объединение с разделителем !
    echo $final_text;
}

?>

<form method="POST" enctype="multipart/form-data" action="<?php echo $main_name; ?>/news_transform.php">
<textarea style="width:600px; height:25px; border: 1px solid #cccccc;" name="article" type="text" >Текст</textarea><br>

    <input style="width:200px; height:50px; border: 1px solid #cccccc;" type="submit" value="Отправить статью"/>
    <br><br>
</form>



