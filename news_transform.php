<?php
if (!empty($_POST['article'])) {
    $text = $_POST['article'];

    $text = preg_replace('~[\\n\\r]+?~', '!!!!', $text);

    $separator = '!!!!';

    $mass = explode($separator, $text);

    //print_r($mass);

    $final_mass = $mass; //array();
    $final_text = implode('!!', $final_mass); // объединение с разделителем !
    $final_text = str_replace('!!!!','</p><p>',$final_text);
    $final_text = str_replace('</h2>','</h2><p></p>',$final_text);
    $final_text = str_replace('</h3>','</h3><p></p>',$final_text);
    $final_text = str_replace('</h4>','</h4><p></p>',$final_text);
    $final_text = str_replace('</h5>','</h5><p></p>',$final_text);
    $final_text = str_replace('</h6>','</h6><p></p>',$final_text);

    $separator_2 = '</p>';

    $mass_2 = explode($separator_2, $final_text);

    $i = 0;

    foreach ($mass_2 as &$value) {
        if(!strpos($value, '</ul>') and !strpos($value, '</h2>') and !strpos($value, '</h3>') and !strpos($value, '</h4>') and !strpos($value, '</figure>')){
            $separator_3 = '. ';
            if ($value != ''){
                $value = substr($value,3); // тут удалить первых три символа
                if ($i % 2 == 0) {
                    $value = explode($separator_3, $value);
                    $value[0] = '<strong>'.$value[0].'</strong>';
                    $value = implode($separator_3, $value);
                } else {
                        $value = '</p><ul class="spiski" ><li><em>'.$value.'</em></li></ul><p></p><p>';
                }
                $i++;
            }
            $value = '<p>'.$value.'</p>';
        }
    }


    print_r($mass_2);


    // потом проигнорировать все те элементы, где есть </h2>, </h3>, </ul>, </figure>

    //echo $final_text;
}

?>

<form method="POST" enctype="multipart/form-data" action="<?php echo $main_name; ?>/news_transform.php">
<textarea style="width:600px; height:25px; border: 1px solid #cccccc;" name="article" type="text" >Текст</textarea><br>

    <input style="width:200px; height:50px; border: 1px solid #cccccc;" type="submit" value="Отправить статью"/>
    <br><br>
</form>



