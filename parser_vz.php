<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
</head>
<body>
<?php


$ParserPage = 'https://vz.ru/rss.xml';

$parse_file = "parser_vz_2.php";

$keys_temp = 'НОВОСТИ БЕЛАРУСИ, ХОЛОДНАЯ ВОЙНА, ПОЛИТИЧЕСКИЙ ЮМОР, ИСТОРИЯ, МЕМЫ, СТУДЕНТЫ, КАРИКАТУРЫ, УКРАИНА, СИРИЯ, 
	БЕЛОРУССИЯ, РОССИЯ, ПОЛЬША, ЗАПАД, СОВЕТСКИЙ СОЮЗ, СНГ, ЭКОНОМИКА, ПОЛИТИКА, НОВОРОССИЯ, 
	ПРИБАЛТИКА, МИР, АРМИЯ,СОЮЗНОЕ ГОСУДАРСТВО РОССИИ И БЕЛОРУССИИ, РЕЛИГИЯ, 
	НАУКА, РУССКИЙ ЯЗЫК, АГЕНТЫ ЗАПАДА, ЯДЕРНОЕ ОРУЖИЕ, ОДКБ, BY-BY.INFO';

$name_parse = "parse_vz";

$url_ext = 'https://vz.ru';

require_once("parser_otbor_vz.php");
?>
</body>
</head>