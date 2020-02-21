<?php
$datetime_site_schema_format = DateTime::createFromFormat('Y-m-d H:i:s', $datetime_site)->format(DateTime::ATOM);

if ($route) {//Переключатель заголовков
    if(empty($head_nomer_url_mass)) $head_nomer_url_mass = '1-50';
    else $head_nomer_url_mass = ($head_nomer_url_mass-49).'-'.$head_nomer_url_mass;
    if (empty($title_rub)) {
        $title = 'Политические новости России и мира без русофобии, политический юмор и честная история (страницы ' . $head_nomer_url_mass . ')';
        $description = 'Политические новости противостояния России и Запада, политический юмор и честная история. 
        Предлагаем вам лучшие новости и юмор, читать страницы ' . $head_nomer_url_mass . '.';
        $keys = 'Политические новости, политический юмор';
        $url_og = '';
        $url_og_picture = "/img/metro.jpg";
    } else {
        $title = $title_rub.' (страницы ' . $head_nomer_url_mass . ')';
        $description = $description_rub.$head_nomer_url_mass . '.';
        $keys = $keys_rub;
        $url_og = $url_og_rub;
        $url_og_picture = $url_og_picture_rub;
    }
} else {
	if(empty($page['title']))$title = htmlspecialchars($page['teme']);
    else $title = htmlspecialchars($page['title']);
    if(empty($page['metadesc']))$description = htmlspecialchars($page['description']);
    else $description = htmlspecialchars($page['metadesc']);
    $url_og = $page['url'];
    $url_og_picture = str_replace('news', 'pictures', transform_img_prost($page['url']))."img_1.jpg";
}
if ($head_nomer_url_mass_2 == '2018-2') echo '<meta name="robots" content="noindex" />';
?>

<meta name="yandex-verification" content="1a44c3037c640d63" />
<meta name="google-site-verification" content="wUwLaGLrSvEUwUO380Lw1wTJ1mSMSy5aloNlqG7Eg80" />
<meta name="p:domain_verify" content="528be2d34b6e17fe888a1fd12e3b9cea"/>
<meta name="msvalidate.01" content="CC00204FB12476369B0C2CC2410806BA" />
<meta name='wmail-verification' content='97bedc0e035505ae6cf29133113ed1a1' />
<meta name="openstat-verification" content="a5a261c45ddbf7e768027bbeaec01fed57dff2d1" />
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118296803-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-118296803-1');
</script>


<meta http-equiv="content-type" content="text/html; charset=UTF-8" />


	<title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<meta name="description" content="<?php echo $description ?>" />



<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:site" content="@byby_info"/>
<meta name="twitter:title" content="<?php echo $title; ?>" />
<meta name="twitter:description" content="<?php echo $description ?>" />
<meta name="twitter:image:src" content="<?php echo $main_name; ?><?php echo $url_og_picture; ?>" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo $main_name; ?><?php echo $url_og; ?>" />
<meta property="og:title" content="<?php echo $site_name; ?> :: <?php echo $title; ?>" />
<meta property="og:description" content="<?php echo $site_name; ?> :: <?php echo $description ?>" />
<meta property="og:image" content="<?php echo $main_name; ?><?php echo $url_og_picture; ?>" />
<meta property="og:image:width" content="299" />
<meta property="og:image:height" content="249" />

	<link rel="stylesheet" media="screen" href="<?php echo $main_name; ?>/index_files/screen.css" />
	<link rel="stylesheet" media="screen" href="<?php echo $main_name; ?>/index_files/screen-fix.css" />
	<!--[if IE]><script src="/js/html5shiv.js"></script><![endif]-->

<script  src="<?php echo $main_name; ?>/index_files/mUjileCiCX-zdqBJO6mmFaJtiV4m78ixEoiEZmr9IDM.js"></script>
<script src="<?php echo $main_name; ?>/index_files/remote.js"></script>
<script  src="<?php echo $main_name; ?>/index_files/watch.js"></script>
<script  src="<?php echo $main_name; ?>/index_files/www-embed-player.js"></script>
<!-- <script src="https://vk.com/js/api/openapi.js?153"></script> -->

<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "NewsArticle",
    "url" : "<?php echo $main_name; ?><?php echo $url_og; ?>",
  "publisher":{
      "@type":"Organization",
      "name":"By-by.info",
      "logo":{"@type":"ImageObject","url":"https://by-by.info/img/metro.jpg"
      }
   },
   "author":{
      "@type":"Organization",
      "name":"By-by.info",
      "logo":{"@type":"ImageObject","url":"https://by-by.info/img/metro.jpg"
      }
   },
   "headline": "<?php echo $title; ?>",
   "mainEntityOfPage": "<?php echo $main_name; ?><?php echo $url_og; ?>",
   "articleBody": "<?php echo $description ?>",
   "image":[
      "<?php echo $main_name; ?><?php echo $url_og_picture; ?>"
   ],
   "datePublished":"<?php echo $datetime_site_schema_format; ?>",
   "dateModified":"2020-02-21T07:53:38+00:00"
}
</script>

