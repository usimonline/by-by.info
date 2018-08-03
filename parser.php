<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
</head>
<body>
<?php


$ParserPage = 'https://news.tut.by/rss/all.rss'; //мир, Белоруссия, Россия

$parse_file = "parser_tut_by_2.php";

$keys_temp = 'НОВОСТИ БЕЛАРУСИ, ХОЛОДНАЯ ВОЙНА, УКРАИНА, ПОЛИТИЧЕСКИЙ ЮМОР, ЭКОНОМИКА, ИСТОРИЯ, МЕМЫ, КАРИКАТУРЫ, СТУДЕНТЫ, 
	СИРИЯ, ПОЛЬША, НОВОРОССИЯ, ПРИБАЛТИКА, АРМИЯ, РЕЛИГИЯ, НАУКА, АГЕНТЫ ЗАПАДА';

$name_parse = "parse";

$url_ext = 'https://www.tut.by';

require_once("parser_otbor.php");
?>
</body>
</head>