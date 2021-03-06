<?php
$datetime_site_schema_format = DateTime::createFromFormat('Y-m-d H:i:s', $datetime_site)->format(DateTime::ATOM);

$rss_file = '<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
<url>
	<loc>https://by-by.info/</loc>
	<lastmod>'.$datetime_site_schema_format.'</lastmod>
	<priority>1</priority>
</url>';



        for($i = 0; $i < $total; $i++) {
                $n_l_u = $news_latest[$i]['url'];
                $n_l_date = DateTime::createFromFormat('Y-m-d H:i:s', $news_latest[$i]['datetime'])->format('Y-m-d\TH:i:sP');
            $n_l_u_mass = explode( '/', $n_l_u);
            if($n_l_u_mass[2] == '2018' or $n_l_u_mass[2] == '2019' or $n_l_u_mass[2] == '2020') {
                $rss_file = $rss_file . '
                <url>
                <loc>' . $main_name . $n_l_u . '</loc>
                <lastmod>' . $n_l_date . '</lastmod>
                <priority>0.9</priority>
                </url>';
            }
}

$rss_file = $rss_file.'
</urlset>';

file_put_contents('sitemap.xml', $rss_file);

