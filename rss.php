<?php

$datetime_site_rss_format = DateTime::createFromFormat('Y-m-d H:i:s', $datetime_site)->format(DateTime::RSS);
$rss_file = '<?xml version="1.0" encoding="UTF-8"?>
<rss xmlns:yandex="http://news.yandex.ru"
     xmlns:media="http://search.yahoo.com/mrss/"
     xmlns:turbo="http://turbo.yandex.ru"
     version="2.0">
<channel>
        <title>By-by.info</title>
        <link>'.$main_name.'</link>
        <description>Геополитика и история России + копирайтинг и шизофрения.</description>
        <language>ru</language>
        <turbo:analytics type="Yandex" id="48457331"></turbo:analytics>
        ';



        for($i = 0; $i < $total; $i++) {
            $n_l_t =  $news_latest[$i]['teme'];
            $url_int_234 = $news_latest[$i]["url_int"];
            $teme_int_234 = $news_latest[$i]["teme_int"];
            $text_123 = $news_latest[$i]["text"];
            $n_l_u = $news_latest[$i]['url'];
            $url_frame_123 = '<p><iframe width="100%" height="360" src="' . $news_latest[$i]['url_frame']. '" style="border: 0" allowfullscreen></iframe></p>';
           // $url_pic_news_latest = str_replace('coldwar', 'pictures', $n_l_u);
            //$url_pic_news_latest = str_replace('belnews', 'pictures', $url_pic_news_latest);
            //$url_pic_news_latest = str_replace('polithumor', 'pictures', $url_pic_news_latest);
           // $n_l_u_pict = str_replace('news','pictures',$url_pic_news_latest).'img_1.jpg';

            $nomer_url_mass = explode ( '/', $n_l_u);

            if ($nomer_url_mass[1] == 'coldwar' or $nomer_url_mass[1] == 'belnews' or $nomer_url_mass[1] == 'polithumor'
                or $nomer_url_mass[1] == 'ancientukri' or $nomer_url_mass[1] == 'economy' or $nomer_url_mass[1] == 'agents'
                or $nomer_url_mass[1] == 'history' or $nomer_url_mass[1] == 'bestmemes' or $nomer_url_mass[1] == 'caricatures'
                or $nomer_url_mass[1] == 'helpstud' or $nomer_url_mass[1] == 'eaes' or $nomer_url_mass[1] == 'SovetskijSojuz'
                or $nomer_url_mass[1] == 'splitmind' or $nomer_url_mass[1] == 'copywriting' or $nomer_url_mass[1] == 'creativestudio' ){
                $rubrika_izmenenie = $nomer_url_mass[1];
                $nomer_url_mass[1] = 'news';
            } else $rubrika_izmenenie = 'news';
            

            $n_l_u_pict = str_replace($rubrika_izmenenie, 'pictures', $n_l_u).'img_1.jpg';
            $n_l_date = DateTime::createFromFormat('Y-m-d H:i:s', $news_latest[$i]['datetime'])->format(DateTime::RSS);
            $n_l_des = $news_latest[$i]['description'];
            $n_l_u_mass = explode( '/', $n_l_u);
            $autor_123 = $news_latest[$i]["author"];
            if (empty($autor_123)) $autor_123 = autor_rand($n_l_u);
            else {
                $autor_123 = str_replace('<strong>','',$autor_123);
                $autor_123 = str_replace('</strong>','',$autor_123);
            }
            $soderg_123 = '';
            $text_123 = $news_latest[$i]['text'];
            $colichestvo_h2_per = colichestvo_h2($text_123);

if ($colichestvo_h2_per > 1){$soderg_123 = '<!--<noindex>--><ul class="spiski" ><li><strong>Содержание</strong></li>';

        $massiv_h2 = virezat_h2($text_123);
        for($i = 0; $i < $colichestvo_h2_per; $i++){
            $soderg_123 = $soderg_123.'<li><a href="#my_page_'.$i.'">'.($i+1).'. '.$massiv_h2[$i].'</a></li>';
        }
    $soderg_123 = $soderg_123.'</ul><!--</noindex>--><p></p>';
}


if($news_year_2 == 0) {
    $string_page_temp = nl2br($text_123);
    $string_page_temp = podstanovka_kh2($string_page_temp , $colichestvo_h2_per);
    $string_page_temp = '<p>'.str_replace("<br />\r\n<br />", '</p><p>', $string_page_temp).'</p>';
    $string_page_temp = str_replace("<br />\n\r<br />", '</p><p>', $string_page_temp);
    $string_page_temp = str_replace("</figcaption><br />", '</figcaption><p></p>', $string_page_temp);
    $text_123 = $string_page_temp.$url_frame_123;

} else $text_123 = podstanovka_kh2($text_123, $colichestvo_h2_per).'<p></p>'.$url_frame_123;

            if($n_l_u_mass[2] == '2020' or $n_l_u_mass[2] == '2019' ) {
                $rss_file = $rss_file . '
<item turbo="true">
            <link>' . $main_name . $n_l_u . '</link>
            <turbo:source></turbo:source>
            <turbo:topic>' . $n_l_t . '</turbo:topic>
            <pubDate>' . $n_l_date . '</pubDate>
            <author>'.$autor_123.'</author>
            <yandex:related>
            <link url="'.$main_name .$url_int_234.'" >'.$teme_int_234.'</link>
            </yandex:related>
            <turbo:content>
                <![CDATA[ 
                    <header>
        <h1>' . $n_l_t . '</h1>
        <figure>
            <img src="'. $main_name . $n_l_u_pict . '"/>
        </figure>
        <h2>'.$n_l_des.'</h2>
        <menu>
            <a href="'.$main_name.'/eaes/">Евразийский Союз</a>
            <a href="'.$main_name.'/coldwar/">Россия и Запад</a>
            <a href="'.$main_name.'/polithumor/">Политический юмор</a>
            <a href="'.$main_name.'/history/">История</a>
            <a href="'.$main_name.'/SovetskijSojuz/">Советский Союз</a>
            <a href="'.$main_name.'/agents/">Агенты влияния</a>
            <a href="'.$main_name.'/splitmind/">Шизофрения</a>
        </menu>
    </header>
    <!-- Контентная часть -->
    <p>Автор '.$autor_123.'</p><p></p>'.$soderg_123.$text_123.'
                ]]>
            </turbo:content>
        </item>';
            }
}

$rss_file = $rss_file.'
</channel>
</rss>';

file_put_contents('rss.xml', $rss_file);

