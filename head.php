<?php
if ($route) {//Переключатель заголовков
    if(empty($head_nomer_url_mass)) $head_nomer_url_mass = '1-50';
    else $head_nomer_url_mass = ($head_nomer_url_mass-49).'-'.$head_nomer_url_mass;
	$title = 'Политические новости (страницы '.$head_nomer_url_mass.')';
	$description = 'Портал '.$site_name.' публикует самые важные политические новости Беларуси, России и мира.
	Читайте страницы '.$head_nomer_url_mass.'.';
	$keys = 'Политические новости';
    $url_og = '';
    $url_og_picture = "/img/metro.jpg";
} else {
	$title = htmlspecialchars($page['teme']);
	$description = htmlspecialchars($page['description']);
	$keys = htmlspecialchars($page['keys']);
    $url_og = $page['url'];
    $url_og_picture = str_replace('news', 'pictures', $page['url'])."img_1.jpg";
}
if ($head_nomer_url_mass_2 == '2018-2') echo '<meta name="robots" content="noindex" />';
?>

<meta name="yandex-verification" content="1a44c3037c640d63" />
<meta name="google-site-verification" content="wUwLaGLrSvEUwUO380Lw1wTJ1mSMSy5aloNlqG7Eg80" />
<meta name="p:domain_verify" content="528be2d34b6e17fe888a1fd12e3b9cea"/>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118296803-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-118296803-1');
</script>


<meta http-equiv="content-type" content="text/html; charset=UTF-8">


	<title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">




<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:site" content="@byby_info"/>
<meta name="twitter:title" content="<?php echo $title; ?>" />
<meta name="twitter:description" content="<?php echo $description ?>" />
<meta name="twitter:image:src" content="<?php echo $main_name; ?><?php echo $url_og_picture; ?>" />
<meta name="description" content="<?php echo $description ?>" />
<meta name="keywords" content="<?php echo $keys; ?>" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo $main_name; ?><?php echo $url_og; ?>" />
<meta property="og:title" content="<?php echo $site_name; ?> :: <?php echo $title; ?>" />
<meta property="og:description" content="<?php echo $site_name; ?> :: <?php echo $description ?>" />
<meta property="og:image" content="<?php echo $main_name; ?><?php echo $url_og_picture; ?>" />
<meta property="og:image:width" content="299" />
<meta property="og:image:height" content="249" />
<meta name="title" content="<?php echo $title; ?>" />

	<link rel="stylesheet" media="screen" href="<?php echo $main_name; ?>/index_files/screen.css" />
	<link rel="stylesheet" media="screen" href="<?php echo $main_name; ?>/index_files/screen-fix.css" />
	<!--[if IE]><script src="/js/html5shiv.js"></script><![endif]-->

<link rel="stylesheet" media="screen" href="<?php echo $main_name; ?>/index_files/classic-081711.css" />
<script  src="<?php echo $main_name; ?>/index_files/mUjileCiCX-zdqBJO6mmFaJtiV4m78ixEoiEZmr9IDM.js"></script>
<script src="<?php echo $main_name; ?>/index_files/remote.js"></script>
<script  src="<?php echo $main_name; ?>/index_files/watch.js"></script>
<script  src="<?php echo $main_name; ?>/index_files/www-embed-player.js"></script>
<script src="https://vk.com/js/api/openapi.js?153"></script>

