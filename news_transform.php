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

    $zamena_1 = array('? ','! ','т. д.','т. п.','тыс. ', 'т. е. ','Т. е. ','А. ','Б. ','В. ','Г. ','Д. ','Е. ','Ё. ','Ж. ','З. ','И. ','Й. ','К. ','Л. ','М. ','Н. ','О. ','П. ','Р. ','С. ','Т. ','У. ','Ф. ','Х. ','Ц. ','Ч. ','Ш. ','Щ. ','Ъ. ','Ы. ','Ь. ','Э. ','Ю. ','Я. ');// а что делать с т. д. и т. п., т. е., руб. тыс. - их нужно предварительно заменять в тексте!
    $zamena_2 = array('?. ','!. ','т.д.','т.п.','тыс.', 'т.е.','Т.е.','А.','Б.','В.','Г.','Д.','Е.','Ё.','Ж.','З.','И.','Й.','К.','Л.','М.','Н.','О.','П.','Р.','С.','Т.','У.','Ф.','Х.','Ц.','Ч.','Ш.','Щ.','Ъ.','Ы.','Ь.','Э.','Ю.','Я.');
    $komm = array('<ul class="spiski" ><li><em>','</em></li></ul><p></p>');

    foreach ($mass_2 as &$value) {
        $value = trim($value);
        $value = str_replace($zamena_1, $zamena_2,$value);
        if(!strpos($value, '</ul>') and !strpos($value, '</h2>') and !strpos($value, '</h3>') and !strpos($value, '</h4>') and !strpos($value, '</figure>')){
            $separator_3 = '. ';
            // что осталось сделать: 1) ссылки на различные статьи 2) Обработать знаки ! и ?

            $value = str_replace('<p>','', $value); // тут удалить первых три символа
            if ($value != ''){

                if ($i % 2 == 0) {
                    $value = explode($separator_3, $value);// разбил на предложения
                    $value_temp = '';
                    $count = 0;
                    $count_2 = 0;
                    $count_mass = count($value)-1;

                    $value[0] = '<strong>'.$value[0].'</strong>';
                    $j = rand(120, 500);
                    foreach ($value as &$value_2) {
                        $value_temp = $value_temp.$value_2;
                        if(strlen($value_temp) > $j and $count > 1 and $count_2 != $count_mass){
                            $value_2 = '</p><p><strong>'.$value_2.'</strong>';
                            $value_temp = '';
                            $count = 0;
                            $j = rand(120, 500);
                        }
                        $count++;
                        $count_2++;
                    }

                    $value = implode($separator_3, $value);
                    $value = '<p>'.$value.'</p>';
                } else {
                        $value = '<ul class="spiski" ><li><em>'.$value.'</em></li></ul><p></p>';
                }
                $i++;
            } else {
                $value = '<p></p>';
            }

        } else {
            $value = $value.'</p>';
        }
        //внутри цикла, перед выходом
        if(strpos($value, '</ul>') !== FALSE and strpos($value, '</em>') !== FALSE ){
            $value = trim($value);
            $value = str_replace($komm,'', $value);
            $value = explode($separator_3, $value);// разбил на предложения
            $value_temp = '';
            $count = 0;
            $count_2 = 0;
            $count_mass = count($value)-1;

            //$value[0] = '<strong>'.$value[0].'</strong>';
            $j = rand(150, 550);
            foreach ($value as &$value_3) {
                $value_temp = $value_temp.$value_3;
                if(strlen($value_temp) > $j and $count > 1 and $count_2 != $count_mass){
                    $value_3 = '</em></li></ul><p></p><ul class="spiski" ><li><em><strong>'.$value_3.'</strong>';
                    $value_temp = '';
                    $count = 0;
                    $j = rand(150, 550);
                }
                $count++;
                $count_2++;
            }

            $value = implode($separator_3, $value);
            $value = '<ul class="spiski" ><li><em>'.$value.'</em></li></ul><p></p>';
            $i = 0; // чтобы за ручным комментом не шел автоматический коммент
        }
    }

    $separator_4 = '';

    $final_text_2 = implode($separator_4, $mass_2);
    $final_text_2 = substr($final_text_2, 3);
    $final_text_2 = substr($final_text_2,0,-4);

    $final_text_2 = str_replace($zamena_2, $zamena_1, $final_text_2);

    $final_text_2 = str_replace('– ', '— ', $final_text_2);// можно заменить короткие тире на длинные (только с пробелами после и до пробела!)

    $final_text_2 = str_replace('- ', '— ', $final_text_2);// можно заменить короткие тире на длинные (только с пробелами после и до пробела!)

    //print_r($mass_2);



    echo $final_text_2;
}

?>

<form method="POST" enctype="multipart/form-data" action="<?php echo $main_name; ?>/news_transform.php">
<textarea style="width:800px; height:600px; border: 1px solid #cccccc;" name="article" type="text" >Текст</textarea><br>

    <input style="width:200px; height:50px; border: 1px solid #cccccc;" type="submit" value="Отправить статью"/>
    <br><br>
</form>



