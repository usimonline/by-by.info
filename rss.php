<?php
$datetime_site_rss_format = DateTime::createFromFormat('Y-m-d H:i:s', $datetime_site)->format(DateTime::RSS);
$rss_file = '<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom" xmlns:media="http://search.yahoo.com/mrss/">
<channel>
        <title>
            '.$site_name.' :: Политические новости
        </title>
        <link>'.$main_name.'</link>
        <description>
            '.$site_name.' :: Политические новости
        </description>
        <image>
            <url>'.$main_name.'/img/metro.jpg
            </url>
            <title>
                '.$site_name.' :: Политические новости
            </title>
            <link>'.$main_name.'
            </link>
        </image>
        <pubDate>'.$datetime_site_rss_format.'</pubDate>
	<lastBuildDate>'.$datetime_site_rss_format.'</lastBuildDate>
	<ttl>10</ttl>
	<atom:link href="https://by-by.info/rss.xml" rel="self" type="application/rss+xml" />
        ';



        for($i = 0; $i < $total; $i++) {
            $n_l_t =  $news_latest[$i]['teme'];
            $n_l_u = $news_latest[$i]['url'];
            $url_pic_news_latest = str_replace('coldwar', 'pictures', $n_l_u);
            $url_pic_news_latest = str_replace('belnews', 'pictures', $url_pic_news_latest);
            $url_pic_news_latest = str_replace('polithumor', 'pictures', $url_pic_news_latest);
            $n_l_u_pict = str_replace('news','pictures',$url_pic_news_latest).'/img_1.jpg';
            $n_l_date = DateTime::createFromFormat('Y-m-d H:i:s', $news_latest[$i]['datetime'])->format(DateTime::RSS);
            $n_l_des = $news_latest[$i]['description'];
            $n_l_u_mass = explode( '/', $n_l_u);
            if($n_l_u_mass[2] == '2018' or $n_l_u_mass[2] == '2019' ) {
                $rss_file = $rss_file . '
<item turbo="true">
            <title>' . $n_l_t . '</title>
            <link>' . $main_name . $n_l_u . '</link>
            <description>' . $n_l_des . '</description> 
            <atom:author>
			<atom:name>By-by.info</atom:name>
			<atom:uri>https://by-by.info</atom:uri>
			</atom:author>    
            <category domain="https://by-by.info">news</category>
            <enclosure url="' . $main_name . $n_l_u_pict . '" type="image/jpeg" length="309999" />
            <guid isPermaLink="true">' . $main_name . $n_l_u . '</guid>
            <pubDate>' . $n_l_date . '</pubDate>
            <media:content url="' . $main_name . $n_l_u_pict . '" type="image/jpeg" medium="image" height="785" width="1200" fileSize="309999" />         
</item>';
            }
}

$rss_file = $rss_file.'
</channel>
</rss>';

file_put_contents('rss.xml', $rss_file);

