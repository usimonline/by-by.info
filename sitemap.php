<?php $rss_file = '<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
<url>
	<loc>https://by-by.info/news/</loc>
	<lastmod>2018-04-14T20:11:26+01:00</lastmod>
	<priority>1</priority>
</url>';



        for($i = 0; $i < $total; $i++) {
            $n_l_u = $news_latest[$i]['url'];
            $n_l_date = DateTime::createFromFormat('Y-m-d H:i:s', $news_latest[$i]['datetime'])->format('Y-m-d\TH:i:sP');
$rss_file = $rss_file.'
<url>  
            <loc>'.$main_name.$n_l_u.'</loc>
            <lastmod>'.$n_l_date.'</lastmod>
            <priority>0.8</priority>          
</url>';
}

$rss_file = $rss_file.'
</urlset>';

file_put_contents('sitemap.xml', $rss_file);

