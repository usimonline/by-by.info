<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
</head>
<body>
<?php


$ParserPage = 'https://news.tut.by/rss/all.rss'; //мир, Белоруссия, Россия

$parse_file = "parser_tut_by_2.php";

$keys_temp = 'БЕЛОРУССИЯ, РОССИЯ, УКРАИНА, ПОЛЬША, ЗАПАД, СОВЕТСКИЙ СОЮЗ, СНГ, 
ЭКОНОМИКА, ПОЛИТИКА, СИРИЯ, НОВОРОССИЯ, ПРИБАЛТИКА, МИР, АРМИЯ,СОЮЗНОЕ ГОСУДАРСТВО РОССИИ И БЕЛОРУССИИ, 
ИСТОРИЯ, РЕЛИГИЯ, НАУКА, РУССКИЙ ЯЗЫК, АГЕНТЫ ЗАПАДА, ЯДЕРНОЕ ОРУЖИЕ, ОДКБ, BY-BY.INFO';

$name_parse = "parse";

$url_ext = 'https://www.tut.by';

require_once("parser_otbor.php");
?>
</body>
</head>