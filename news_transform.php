<?php
if (!empty($_POST['article'])) {
    $text = $_POST['article'];

    $text = str_replace('!','???',$text );

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
    $k = 0;

    $zamena_1 = array('т. д','т. п','тыс. ', 'т. е. ','Т. е. ','А. ','Б. ','В. ','Г. ','Д. ','Е. ','Ё. ','Ж. ','З. ','И. ','Й. ','К. ','Л. ','М. ','Н. ','О. ','П. ','Р. ','С. ','Т. ','У. ','Ф. ','Х. ','Ц. ','Ч. ','Ш. ','Щ. ','Ъ. ','Ы. ','Ь. ','Э. ','Ю. ','Я. ');// а что делать с т. д. и т. п., т. е., руб. тыс. - их нужно предварительно заменять в тексте!
    $zamena_2 = array('т.д','т.п','тыс.', 'т.е.','Т.е.','А.','Б.','В.','Г.','Д.','Е.','Ё.','Ж.','З.','И.','Й.','К.','Л.','М.','Н.','О.','П.','Р.','С.','Т.','У.','Ф.','Х.','Ц.','Ч.','Ш.','Щ.','Ъ.','Ы.','Ь.','Э.','Ю.','Я.');
    $komm = array('<ul class="spiski" ><li><em>','</em></li></ul><p></p>');
    $separator_3 = '. ';

    $slova__ssilki = array(); // далее добавляю ссылки в текст

    // не должно быть копирование части слов
    $slova__ssilki[] = array('США','/coldwar/2020/01/25/1579957048/Kak-armija-SShA-povtorila-zverstva-fashistov-nad-mirnim-naseleniem-i-detmi-vo-Vetname/');
    $slova__ssilki[] = array('Вьетнам','/coldwar/2020/01/25/1579957048/Kak-armija-SShA-povtorila-zverstva-fashistov-nad-mirnim-naseleniem-i-detmi-vo-Vetname/');

    $kol_abzacev = count($mass_2);

    $kol_ab_polovina = (int)($kol_abzacev / 2);

    $l = 0; // счетчик абзацев

    $m = 0; // счетчик замен ссылок

    $temp_rep = 1; // количество замен в одном абзаце, см. код внизу

    foreach ($mass_2 as &$value) {
        $value = trim($value);
        $value = str_replace($zamena_1, $zamena_2,$value);
        if(!strpos($value, '</ul>') and !strpos($value, '</strong>') and !strpos($value, '</h2>') and !strpos($value, '</h3>') and !strpos($value, '</h4>') and !strpos($value, '</figure>')){

            // что осталось сделать: 1) ссылки на различные статьи

            $value = str_replace('<p>','', $value); // тут удалить первых три символа
            if ($value != ''){

                if ($i % 2 == 0) {
                    $value = explode($separator_3, $value);// разбил на предложения
                    $value_temp = '';
                    $count = 0;
                    $count_2 = 0;
                    $count_mass = count($value)-1;


                    //$lenvalue = strlen($value[0]); // вроде бы не нужна
                    $value_temp_2 = substr($value[0], 50);
                    //echo $value_temp_2.'<br />';
                    if ($value_temp_2 !== false){
                        $lenvalue_2 = strlen($value_temp_2);
                        if ($lenvalue_2 > 30) {
                            if (strpos($value_temp_2, ',') !== false){
                                $value_temp_3 = strstr($value_temp_2,',');
                                if ($value_temp_3 !== false) {
                                    $lenvalue_3 = strlen($value_temp_3);
                                    if ($lenvalue_3 > 27) {
                                        $value[0] = str_replace($value_temp_3,'<span style="color: #005EA4;">'.$value_temp_3.'</span>',$value[0]);
                                        $value[0] = str_replace('<span style="color: #005EA4;">,',',<span style="color: #005EA4;">',$value[0]);
                                    }
                                }
                            }

                        }
                    }
                    $value[0] = '<strong>'.$value[0].'</strong>';
                    $j = rand(110, 490);
                    foreach ($value as &$value_2) {
                        $value_temp = $value_temp.$value_2;
                        if(strlen($value_temp) > $j and $count > 1 and $count_2 != $count_mass){
                            //$lenvalue = strlen($value_2);
                            $value_temp_2 = substr($value_2, 50);
                            if ($value_temp_2 !== false){
                                $lenvalue_2 = strlen($value_temp_2);
                                if ($lenvalue_2 > 30) {
                                    if (strpos($value_temp_2, ',') !== false){
                                        $value_temp_3 = strstr($value_temp_2,',');
                                        if ($value_temp_3 !== false) {
                                            $lenvalue_3 = strlen($value_temp_3);
                                            if ($lenvalue_3 > 27) {
                                                $value_2 = str_replace($value_temp_3,'<span style="color: #005EA4;">'.$value_temp_3.'</span>',$value_2);
                                                $value_2 = str_replace('<span style="color: #005EA4;">,',',<span style="color: #005EA4;">',$value_2);
                                            }
                                        }
                                    }

                                }
                            }
                            $value_2 = '</p><p><strong>'.$value_2.'</strong>';
                            $value_temp = '';
                            $count = 0;
                            $j = rand(110, 490);
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
            $j = rand(120, 500);
            foreach ($value as &$value_3) {
                $value_temp = $value_temp.$value_3;
                if ($k % 2 == 0){
                    $stili_1 = '</em></li></ul><p></p><ul class="spiski" ><li><em><strong>';
                    $stili_3 = '<ul class="spiski" ><li><em>';
                    $stili_4 = '</em></li></ul><p></p>';
                } else {
                    $stili_1 = '</blockquote><blockquote><strong>';
                    $stili_3 = '<blockquote>';
                    $stili_4 = '</blockquote>';
                }

                if(strlen($value_temp) > $j and $count > 1 and $count_2 != $count_mass){
                    $value_3 = $stili_1.$value_3.'</strong>';
                    $value_temp = '';
                    $count = 0;
                    $j = rand(120, 500);
                }
                $count++;
                $count_2++;
            }

            $value = implode($separator_3, $value);
            $value = $stili_3.$value.$stili_4;
            $i = 0; // чтобы за ручным комментом не шел автоматический коммент
            $k++; //в зависимости от k мы добавляем разные стили комментов
        }
        if($l >= $kol_ab_polovina and $m < 3 and strpos($value, '</a>') === false){
            // тут вставляем ссылки
            // $slova__ssilki = array();
            // не должно быть копирования части слов нужно добавить пробел
            foreach ($slova__ssilki as &$value_sl) {
                $temp_value_sl = ' '.$value_sl[0].' ';
                if (strpos($value, $temp_value_sl) !== false){
                    $value = str_replace($temp_value_sl, '<a target="_blank" href="'.$value_sl[1].'">'.$value_sl[0].'</a>', $value, $temp_rep);
                    $m++;
                    $value_sl[0] = 'портим ссылку 12323472836428468723467234';
                    break;
                }
            }
        }
        $l++;
    }

    $separator_4 = '';

    $final_text_2 = implode($separator_4, $mass_2);
    $final_text_2 = substr($final_text_2, 3);
    $final_text_2 = substr($final_text_2,0,-4);

    $final_text_2 = str_replace($zamena_2, $zamena_1, $final_text_2);

    $final_text_2 = str_replace('– ', '— ', $final_text_2);// можно заменить короткие тире на длинные (только с пробелами после и до пробела!)

    $final_text_2 = str_replace('- ', '— ', $final_text_2);// можно заменить короткие тире на длинные (только с пробелами после и до пробела!)

    //print_r($mass_2);

    $final_text_2 = str_replace('???','!',$final_text_2);// восклицательный знак неправильно обрабатывался, поэтому пришлось заменить


    echo $final_text_2;
}

?>

<form method="POST" enctype="multipart/form-data" action="<?php echo $main_name; ?>/news_transform.php">
<textarea style="width:800px; height:500px; border: 1px solid #cccccc;" name="article" type="text" >Текст</textarea><br>

    <input style="width:200px; height:50px; border: 1px solid #cccccc;" type="submit" value="Отправить статью"/>
    <br><br>
</form>



