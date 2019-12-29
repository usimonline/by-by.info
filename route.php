<?php

$REQUEST_URI = $_SERVER['REQUEST_URI'];

switch($REQUEST_URI ){
	//case '/splitmind/': $REQUEST_URI = '/pastnews/splitmind/50/';
	//	$title_rub = 'Шизофрения: новости, свежие методики, рассказ об опыте шизофреников';
	//	$description_rub = 'Новости из мира шизофрении для страдающих и их родствеников,
	//	опыт шизофреников и современные способы лечения, читайте страницы ';
	//	$keys_rub = 'Шизофрения без предубеждения';
	//	$url_og_rub = '/splitmind/';
	//	$url_og_picture_rub = "/img/metro.jpg";
	//	break;
	case '/history/': $REQUEST_URI = '/pastnews/history/50/';
		$title_rub = 'История без русофобии от академического сообщества';
		$description_rub = 'Новости без русофобии по истории России, Российской империи и Советского Союза. Мы 
		предлагаем вам только актуальные и достоверные исторические факты, читайте страницы ';
		$keys_rub = 'История без русофобии';
		$url_og_rub = '/history/';
		$url_og_picture_rub = "/img/metro.jpg";
		break;
	case '/experts/': $REQUEST_URI = '/topic/l-sidebar/50/';
		$title_rub = 'Мнение экспертов по актуальным событиям в России и мире';
		$description_rub = 'Мнение экспертов по актуальным событиям в России и мире. 50 свежих новостей.';
		$keys_rub = 'Мнение экспертов';
		$url_og_rub = '/experts/';
		$url_og_picture_rub = "/img/metro.jpg";
		break;
	case '/centralnews/': $REQUEST_URI = '/topic/toplist/50/';
		$title_rub = 'Главные политические новости России и мира';
		$description_rub = 'Основные политические новости России и мира. 50 свежих новостей.';
		$keys_rub = 'Основные политические новости';
		$url_og_rub = '/centralnews/';
		$url_og_picture_rub = "/img/metro.jpg";
		break;
	case '/belnews/': $REQUEST_URI = '/pastnews/belnews/50/';
		$title_rub = 'Новости Белоруссии: про белорусизацию и русский мир';
		$description_rub = 'Новости Белоруссии, очищенные от русофобии. Только самые важные сведения про русский язык, белорусизацию, Лукашенко и ЕАЭС, читайте страницы ' ;
		$keys_rub = 'Новости Беларуси без русофобии, новости белорусизации';
		$url_og_rub = '/belnews/';
		$url_og_picture_rub = "/img/metro.jpg";
		break;
	case '/coldwar/': $REQUEST_URI = '/pastnews/coldwar/50/';
		$title_rub = 'Холодная война России и Запада и украинский фашизм';
		$description_rub = 'Новости холодной войны России и Запада. Наши журналисты пишут про 
		оборону Сирии, Крыма и ДНР от прозападной украинской власти, про украинский фашизм, читайте страницы ';
		$keys_rub = 'Холодная война';
		$url_og_rub = '/coldwar/';
		$url_og_picture_rub = "/img/metro.jpg";
		break;
	case '/polithumor/': $REQUEST_URI = '/pastnews/polithumor/50/';
		$title_rub = 'Политический юмор о русофобах и врагах России';
		$description_rub = 'Новости политического юмора: приколы про Порошенко, анекдоты про Украину. 
		Наши авторы сами придумывают самые смешные истории, а также находят лучшие шутки в интернете, читайте страницы ';
		$keys_rub = 'Политический юмор, анекдоты про Украину, анекдоты про Россию';
		$url_og_rub = '/polithumor/';
		$url_og_picture_rub = "/img/metro.jpg";
		break;
	case '/bestmemes/': $REQUEST_URI = '/pastnews/bestmemes/50/';
		$title_rub = 'Лучшие мемы об Украине и России';
		$description_rub = 'Новости мемов: мемы о русофобах, мемы об Украине. 
		Наши авторы сами придумывают самые смешные мемы, а также находят лучшие мемы в интернете, читайте страницы ';
		$keys_rub = 'Мемы, мемы об Украине, мемы о русофобах';
		$url_og_rub = '/bestmemes/';
		$url_og_picture_rub = "/img/metro.jpg";
		break;
	//case '/helpstud/': $REQUEST_URI = '/pastnews/helpstud/50/';
	//	$title_rub = 'В помощь студенту: где заказать дипломные и магистерские работы';
	//	$description_rub = 'Портал ' . $site_name . ' публикует новости для студентов, где заказать дипломные работы и магистерские диссертации.
	//	Наши авторы расскажут, как написать дипломную или магистерскую работу, читайте страницы ';
	//	$keys_rub = 'Где заказать дипломную, где заказать магистерскую, работа для стедентов, рефератные компании';
	//	$url_og_rub = '/helpstud/';
	//	$url_og_picture_rub = "/img/metro.jpg";
	//	break;
	case '/caricatures/': $REQUEST_URI = '/pastnews/caricatures/50/';
		$title_rub = 'Лучшие карикатуры на Украину и русофобов';
		$description_rub = 'Новости карикатуры: карикатуры на Украину, карикатуры на русофобов. 
		Наши авторы сами придумывают самые смешные карикатуры, а также находят лучшие карикатуры в интернете, читайте страницы ';
		$keys_rub = 'карикатуры, карикатуры на Украину, карикатуры на Россию';
		$url_og_rub = '/caricatures/';
		$url_og_picture_rub = "/img/metro.jpg";
		break;
	case '/ancientukri/': $REQUEST_URI = '/pastnews/ancientukri/50/';
		$title_rub = 'Новости Украины без русофобии, новости украинского фашизма';
		$description_rub = 'Новости Украины, очищенные от русофобии украинских националистов. Только самые важные сведения про русский язык, украинский фашизм, вступление Украины в ЕС и НАТО, читайте страницы ' ;
		$keys_rub = 'Украина, новости Украины, Новости Украины без русофобии, новости фашизма на Украине';
		$url_og_rub = '/ancientukri/';
		$url_og_picture_rub = "/img/metro.jpg";
		break;
	case '/economy/': $REQUEST_URI = '/pastnews/economy/50/';
		$title_rub = 'Новости экономики России, ее союзников и врагов';
		$description_rub = 'Новости экономики России. Наши журналисты пишут про 
		состояние экономики России, об экономике Союзного государства Беларуси и России, экономике ЕАЭС, читайте страницы ';
		$keys_rub = 'экономика Беларуси, экономика ЕАЭС, экономика синеокой';
		$url_og_rub = '/economy/';
		$url_og_picture_rub = "/img/metro.jpg";
		break;
	case '/agents/': $REQUEST_URI = '/pastnews/agents/50/';
		$title_rub = 'Портреты агентов западного влияния в России';
		$description_rub = 'Портреты агентов западного влияния в России. Наши журналисты пишут про 
		влияние западных сетевых структур на общество России, про оранжевые революции и информационные войны, читайте страницы ';
		$keys_rub = 'агенты Запада, сетевая структура Запада, оранжевые революции, информационные войны';
		$url_og_rub = '/agents/';
		$url_og_picture_rub = "/img/metro.jpg";
		break;
	case '/eaes/': $REQUEST_URI = '/pastnews/eaes/50/';
		$title_rub = 'Новости Евразийского Экономического Союза (ЕАЭС)';
		$description_rub = 'Новости развития Евразийского Экономического Союза. Проект ЕАЭС 
		весьма активно развивается. Граждане союза увеличивают свои доходы, читайте страницы ';
		$keys_rub = 'ЕАЭС';
		$url_og_rub = '/eaes/';
		$url_og_picture_rub = "/img/metro.jpg";
		break;
	case '/SovetskijSojuz/': $REQUEST_URI = '/pastnews/SovetskijSojuz/50/';
		$title_rub = 'Новости политики, связанные с Советским Союзом';
		$description_rub = 'СССР и новости политики. Почему советские граждане верили в светлое будущее, 
		почему нынешние прозападные либералы - антисоветчики и русофобы, читайте страницы ';
		$keys_rub = 'Советский союз';
		$url_og_rub = '/SovetskijSojuz/';
		$url_og_picture_rub = "/img/metro.jpg";
		break;
	default: $title_rub = '';
		break;
}

$nomer_url_mass = explode ( '/', $REQUEST_URI);

$temp_rubrika_temp = $nomer_url_mass[1];

if ($nomer_url_mass[1] == 'coldwar' or $nomer_url_mass[1] == 'belnews' or $nomer_url_mass[1] == 'polithumor'
	or $nomer_url_mass[1] == 'ancientukri' or $nomer_url_mass[1] == 'economy' or $nomer_url_mass[1] == 'agents'
	or $nomer_url_mass[1] == 'history' or $nomer_url_mass[1] == 'bestmemes' or $nomer_url_mass[1] == 'caricatures'
	or $nomer_url_mass[1] == 'helpstud' or $nomer_url_mass[1] == 'eaes' or $nomer_url_mass[1] == 'SovetskijSojuz'
	or $nomer_url_mass[1] == 'splitmind' or $nomer_url_mass[1] == 'copywriting' or $nomer_url_mass[1] == 'creativestudio' ){
	$rubrika_izmenenie = $nomer_url_mass[1];
	$nomer_url_mass[1] = 'news';
} else $rubrika_izmenenie = 'news';

$head_nomer_url_mass = $nomer_url_mass[3];
$head_nomer_url_mass_2 = $nomer_url_mass[2];

$rubrika = $nomer_url_mass[1];

$select = "SELECT * FROM $Name_database.$table WHERE url = '$REQUEST_URI' ";
$res = mysqli_query($link, $select);

$i = 0;
	$row = mysqli_fetch_array($res);
$route = false;
$perikluch_page = false;
if (empty($row)) {
	$route = true;
} else {
	$page['datetime'] = beer_data($row['nomer_novosti'], $all_count_nomer);
	$page['teme'] = $row['teme'];
	$page['description'] = $row['description'];
	$page['comments'] = $row['comments'];
	$page['url'] = $row['url'];
	$page['text'] = $row['text'];
	$page['keys'] = $row['keys'];
	$page['id'] = $row['id'];
	$page['title'] = $row['title'];
	$page['metadesc'] = $row['metadesc'];
	$page['author'] = $row['author'];
if ($row['url_ext'] == NULL) $page['url_ext'] = 'https://ria.ru/';
else $page['url_ext'] = $row['url_ext'];
if ($row['url_frame'] == NULL) $page['url_frame'] = '';
else $page['url_frame'] = '<p><iframe width="100%" height="360" src="'.$row['url_frame'].'" style="border: 0" allowfullscreen></iframe></p>';
if ($row['url_int'] == NULL) $page['url_int'] = '/news';
else $page['url_int'] = $row['url_int'];
if ($row['teme_int'] == NULL) $page['teme_int'] = 'Смотрите другие новости по этой теме.';
else $page['teme_int'] = $row['teme_int'];
	//echo $temp_rubrika_temp;
	$perikluch_page = true;
}

$admin = false;
//if ($REQUEST_URI == '/admin/622118') $admin = true;




if (!empty($nomer_url_mass[2])) $news_year = $nomer_url_mass[2];
else $news_year = '2017-0';
$news_year_mass = explode ( '-', $news_year);
if (!empty($news_year_mass[1])) $news_year_2 = $news_year_mass[1];
else $news_year_2 = 0;




$keys_name = 'keys';
$keys_name_rubrika = 'keys';
$keys_rubrika = '';
if ($perikluch_page and $temp_rubrika_temp != 'news'){//срабатывает только для page
	$keys_rubrika = translate_into_russian_pastnews($temp_rubrika_temp);
}


$number_of_pages = 50;//константа

$nomer = $number_of_pages;

$rss = 0;

switch($rubrika){
	//case 'save': require("save_picture.php");
	//	exit;
	//	break;
	//case 'parse_3': require("parser_3.php");
	//	exit;
	//	break;
	//case 'parse_2': require("parser_2.php");
	//	exit;
	//	break;
	case 'parse': header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found', true, 404);
		require("parser.php");
		exit;
		break;
	case 'parse_vz': header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found', true, 404);
		require("parser_vz.php");
		exit;
		break;
	case 'reklama_1546324': header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found', true, 404);
		require("reklama_1546324.php");
	//case '': header('Location: '.$main_name.'/news');
	//	break;
	case 'rss': header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found', true, 404);
		$rss = 1;
		// //создаем файл rss.xml
		$nomer = 2*$number_of_pages;
		$rubrika = 'news';
		$keys_value = 'empty';
		$keys = '';
		$nomer_url = $number_of_pages;
		break;
	    case 'delete': unset($_SESSION['name']); // или $_SESSION = array() для очистки всех данных сессии
		session_destroy();
		header('Location: '.$main_name.'/admin');
        break;
	
        case 'robots.txt': require("robots.txt");
        exit;
        break;
		
        case 'sitemap': header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found', true, 404);
			$sitemap = 1; //require("sitemap.xml");

			$nomer = 2*$number_of_pages;
			$rubrika = 'news';
			$keys_value = 'empty';
			$keys = '';
			$nomer_url = $number_of_pages;
        //exit;
        break;
		
	case 'admin': header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found', true, 404);
		if(empty($_POST['pass']) and !isset($_SESSION['pass'])) {
		require("chek_form.php");
		exit;
	} else {
	require("chek_login.php");
		
		$admin = true;
	if (empty($nomer_url_mass[2])) $keys_value = 'empty';
	else $keys_value = $nomer_url_mass[2];
	if (!empty($nomer_url_mass[3]) and $nomer_url_mass[3] > $number_of_pages) $nomer_url = $nomer_url_mass[3];
	else $nomer_url = $number_of_pages;
	if ($keys_value == 'empty') $keys = '';
	else $keys = $keys_value;
	$keys = translate_into_russian_pastnews($keys);
	}
	break;
	
	case 'pastnews': $keys_value = $nomer_url_mass[2];
	if ($nomer_url_mass[3] > $number_of_pages) $nomer_url = $nomer_url_mass[3];
	else $nomer_url = $number_of_pages;
	if ($keys_value == 'empty') $keys = '';
	else {
		$keys = $keys_value;
		$keys_rubrika = $keys_value;
	}
	$keys = translate_into_russian_pastnews($keys);
	$keys_rubrika = translate_into_russian_pastnews($keys_rubrika);
	break;
	
	case 'searchnews':
	$keys_name = 'text';
	if (!empty($_POST['searchnews'])) {

		$keys_value = $_POST['searchnews'];
		$keys_value = translate_into_english($keys_value);

		if($nomer_url_mass[2] == 'empty') header("Location: ".$main_name."/searchnews/".$keys_value."/50/");
		exit;
	}
	else {
		$keys_value = $nomer_url_mass[2];
	}
	if ($nomer_url_mass[3] > $number_of_pages) $nomer_url = $nomer_url_mass[3];
	else $nomer_url = $number_of_pages;
	if ($keys_value == 'empty') $keys = '';
	else $keys = $keys_value;
	$keys = translate_into_russian($keys);
	break;

	case 'topic': $keys_name = 'razdel';
	$keys_value = $nomer_url_mass[2];
	if ($nomer_url_mass[3] > $number_of_pages) $nomer_url = $nomer_url_mass[3];
	else $nomer_url = $number_of_pages;
	if ($keys_value == 'empty') $keys = '';
	else $keys = $keys_value;
	break;
	
	case 'news':
		$rubrika = 'pastnews';
	$keys_value = 'empty';
	$keys = '';
	$nomer_url = $number_of_pages;
	break;

        default:

			$rubrika = 'pastnews';
			$keys_value = 'empty';
			$keys = '';
			$nomer_url = $number_of_pages;
        break;
}
$nomer_url_2 = $nomer_url - $number_of_pages;
$nomer_url_3 = $nomer_url + $number_of_pages;

//echo $keys;
//echo $keys_name;

// вставка из base началась

$select = "SELECT * FROM $Name_database.$table WHERE razdel = 'toplist' AND datetime < '$datetime_site' AND `$keys_name_rubrika` LIKE '%$keys_rubrika%' ORDER BY datetime DESC LIMIT 4";
$res = mysqli_query($link, $select);

$i = 0;
while($row = mysqli_fetch_array($res))
{
	$toplist[$i]['datetime'] = beer_data($row['nomer_novosti'], $all_count_nomer);
	$toplist[$i]['teme'] = $row['teme'];
	$toplist[$i]['comments'] = $row['comments'];
	$toplist[$i++]['url'] = $row['url'];
}

$select = "SELECT * FROM $Name_database.$table WHERE razdel = 'topnews' AND datetime < '$datetime_site' AND `$keys_name_rubrika` LIKE '%$keys_rubrika%' ORDER BY datetime DESC LIMIT 1";
$res = mysqli_query($link, $select);

$i = 0;
while($row = mysqli_fetch_array($res))
{
	$topnews[$i]['datetime'] = beer_data($row['nomer_novosti'], $all_count_nomer);
	$topnews[$i]['teme'] = $row['teme'];
	$topnews[$i]['description'] = $row['description'];
	$topnews[$i]['comments'] = $row['comments'];
	$topnews[$i++]['url'] = $row['url'];
}

$select = "SELECT * FROM $Name_database.$table WHERE razdel = 'header' AND datetime < '$datetime_site' AND `$keys_name_rubrika` LIKE '%$keys_rubrika%' ORDER BY datetime DESC LIMIT 3";
$res = mysqli_query($link, $select);

$i = 0;
while($row = mysqli_fetch_array($res))
{
	$header[$i]['teme'] = $row['teme'];
	$header[$i++]['url'] = $row['url'];
}

$select = "SELECT * FROM $Name_database.$table WHERE razdel = 'l-sidebar' AND datetime < '$datetime_site' AND `$keys_name_rubrika` LIKE '%$keys_rubrika%' ORDER BY datetime DESC LIMIT 12";
$res = mysqli_query($link, $select);

$i = 0;
while($row = mysqli_fetch_array($res))
{
	$lsidebar[$i]['teme'] = $row['teme'];
	$lsidebar[$i]['description'] = $row['description'];
	$lsidebar[$i++]['url'] = $row['url'];
}

// вставка из base закончилась

if ($perikluch_page and $temp_rubrika_temp != 'news'){//срабатывает только для page
	$keys_name = 'keys';
	$keys = translate_into_russian_pastnews($temp_rubrika_temp);
}

if ($admin) $select = "SELECT COUNT(*) FROM $Name_database.$table WHERE `$keys_name` LIKE '%$keys%'";
else $select = "SELECT COUNT(*) FROM $Name_database.$table WHERE datetime > '2017-01-25 20:12:53' AND datetime < '$datetime_site' AND `$keys_name` LIKE '%$keys%'";
$res = mysqli_query($link, $select);
$row = mysqli_fetch_row($res);
$all_count = $row[0]; // всего записей по выборке

//echo $all_count;


if ($route){
	switch($REQUEST_URI){
		//case '/news':
		//case '/news/':
		case '/':
		case '':
		case '/delete':
		case '/delete/':
		case '/robots.txt':
		case '/sitemap':
		case '/sitemap/':
		case '/rss':
		case '/rss/':
		case '/parse':
		case '/parse/':
		case '/parse_vz/':
		case '/parse_2':
		case '/parse_3':
			break;
		default:
			$rubrika_1 = $nomer_url_mass[1];
			$rubrika_2 = $nomer_url_mass[2];
			$rubrika_3 = $nomer_url_mass[3];
			//if (isset($nomer_url_mass[4])) $rubrika_4_bool = false;
			//else $rubrika_4_bool = true;
			$count_slash = substr_count($REQUEST_URI, '/');
			if ($count_slash > 4) $rubrika_4_bool = false;
			else $rubrika_4_bool = true;
			$rubrika_2_array = Array('empty', 'bestmemes','helpstud','caricatures','belnews','coldwar','polithumor',
				'belarus','russia','ancientukri','poland','west','ussr','cis','economy','policy','syria','novoros','baltic',
				'world','interview','army','rusbel','history','religion','science','language','agents','nweapon','CSTO','site','eaes','SovetskijSojuz','splitmind','copywriting','creativestudio');

			if(array_search($rubrika_2, $rubrika_2_array) === false ) $rubrika_2_key = false;
			else $rubrika_2_key = true;
			//$rubrika_2_key = array_search($rubrika_2, $rubrika_2_array);
			if( $rubrika_1 == 'admin' or ((($rubrika_1 == 'topic' and ($rubrika_2 == 'l-sidebar' or $rubrika_2 == 'toplist' or $rubrika_2 == 'topnews' or $rubrika_2 == 'header')) or ($rubrika_1 == 'pastnews' and $rubrika_2_key) or $rubrika_1 == 'searchnews') and $rubrika_4_bool and (string)((int)$rubrika_3) == $rubrika_3 and is_int((int)$rubrika_3) and $rubrika_3 > 9 and ($rubrika_3 < ($all_count + 50) or $all_count == 0) and ($rubrika_3 % 50 == 0 ))) break;
			// $rubrika_2 из массива, как сравнивать с массивом? $rubrika_2 == 'empty'
			// нужно как-то ограничить сверху
			//header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found', true, 404);
			//
			//header("HTTP/1.0 404 Not Found");
			header("Status: 404 Not Found");
			$route = false;
			$REQUEST_URI = '/news/2018/04/05/1522938060/stranica-oshibki/';
			$select = "SELECT * FROM $Name_database.$table WHERE url = '$REQUEST_URI' ";
			$res = mysqli_query($link, $select);
			$row = mysqli_fetch_array($res);
			if (empty($row)) {
				$page['datetime'] = '2016-04-05 14:21:00';
				$page['teme'] = 'Страница ошибки (базовая версия)';
				$page['description'] = "Вы ввели неверный адрес страницы. Попробуйте ввести нужный вам адрес либо просто читайте новые статьи.";
				$page['comments'] = 0;
				$page['url'] = "/news/2018/04/05/1522938060/stranica-oshibki/";
				$page['text'] = "Вы ввели неверный адрес страницы. Попробуйте ввести нужный вам адрес либо просто читайте новые статьи.

				Мы будем рады подарить вам хорошую информацию.";
				$page['keys'] = "404-страница";
				$page['id'] = '1522938060';
				$page['url_ext'] = "https://by-by.info";
				$page['url_frame'] = '';
				$page['url_int'] = '/news/2018/04/04/1522848137/sayt-by-byinfo-i-ego-rol-v-mirovom-processe/';
				$page['teme_int'] = 'Международная инициатива «Центр защиты национальных меньшинств»';
			} else {
				$page['datetime'] = beer_data($row['nomer_novosti'], $all_count_nomer);
				$page['teme'] = $row['teme'];
				$page['description'] = $row['description'];
				$page['comments'] = $row['comments'];
				$page['url'] = $row['url'];
				$page['text'] = $row['text'];
				$page['keys'] = $row['keys'];
				$page['id'] = $row['id'];
				if ($row['url_ext'] == NULL) $page['url_ext'] = 'https://ria.ru/';
				else $page['url_ext'] = $row['url_ext'];
				if ($row['url_frame'] == NULL) $page['url_frame'] = '';
				else $page['url_frame'] = '<p><iframe width="100%" height="360" src="' . $row['url_frame'] . '" style="border: 0" allowfullscreen></iframe></p>';
				if ($row['url_int'] == NULL) $page['url_int'] = '/news';
				else $page['url_int'] = $row['url_int'];
				if ($row['teme_int'] == NULL) $page['teme_int'] = 'Смотрите другие новости по этой теме.';
				else $page['teme_int'] = $row['teme_int'];
			}

			break;
	}
}


if ($admin) $select = "SELECT * FROM $Name_database.$table WHERE `$keys_name` LIKE '%$keys%' ORDER BY datetime DESC LIMIT $nomer_url_2, $nomer";
else $select = "SELECT * FROM $Name_database.$table WHERE datetime > '2017-01-25 20:12:53' AND datetime < '$datetime_site' AND `$keys_name` LIKE '%$keys%' ORDER BY datetime DESC LIMIT $nomer_url_2, $nomer";
$res = mysqli_query($link, $select);

//if ($nomer_url_2 == 0) $nomer_url_2 = 1;
if ($nomer_url > $all_count) $nomer_url = $all_count;

$keys_l_main = $keys;

$keys_value = translate_into_english($keys_value);

$i = 0;
while($row = mysqli_fetch_array($res))
{
	$news_latest[$i]['datetime'] = beer_data($row['nomer_novosti'], $all_count_nomer);
	$news_latest[$i]['teme'] = $row['teme'];
	$news_latest[$i]['razdel'] = $row['razdel'];
	$news_latest[$i]['description'] = $row['description'];
	$news_latest[$i]['comments'] = $row['comments'];
	$news_latest[$i]['nomer_novosti'] = $row['nomer_novosti'];
	$news_latest[$i]['url_ext'] = $row['url_ext'];
	$news_latest[$i++]['url'] = $row['url'];
}
$total = $i;

if($rss == 1) {
	require("rss.php");
	header('Location: '.$main_name.'/rss.xml');
	//require("rss.xml");
	//echo $rss_file;
	exit;
}

if($sitemap == 1) {
	require("sitemap.php");
	header('Location: '.$main_name.'/sitemap.xml');
	//require("rss.xml");
	//echo $rss_file;
	exit;
}




