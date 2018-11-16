<?php

$link = mysqli_connect(
	$name_server,
	$name_user,
	$password,
	$Name_database);
if (!$link) {
	printf("Ошибка в базе данных: %s\n", mysqli_connect_error());
	exit;
}

$table_users ='users';

$table_comments ='comments';

$table ='news';

$table_save ='proverka';


$select = "SELECT COUNT(*) FROM $Name_database.$table WHERE datetime < '$datetime_site'";

$res = mysqli_query($link, $select);

$row = mysqli_fetch_row($res);

$all_count_nomer = $row[0] + 1; // количество записей ВСЕХ

//$insert = "UPDATE $Name_database.$table SET nomer_novosti = $all_count_nomer WHERE datetime='$datetime_page_temp'";

//$res = mysqli_query($link, $insert);

$select = "SELECT * FROM $Name_database.$table_save WHERE ind = 0";
$res = mysqli_query($link, $select);
$i = 0;
while ($row = mysqli_fetch_array($res)) {
	$date_save[$i]['date_save'] = $row['date_save'];
}

$date_save = $date_save[0]['date_save'];
$datetime_site_ymd = date("Y-m-d");
echo $date_save.'<br>';
echo $datetime_site_ymd;


//новые выборки первых 6 элементов
if (false){//$date_save != $datetime_site_ymd) {

	$select = "UPDATE $Name_database.$table_save SET date_save = '$datetime_site_ymd' WHERE ind = 0";
	$res = mysqli_query($link, $select);

	$select = "SELECT * FROM $Name_database.$table WHERE datetime < '$datetime_site' ORDER BY datetime DESC LIMIT 6";
	$res = mysqli_query($link, $select);

	$i = 0;
	while ($row = mysqli_fetch_array($res)) {
		$news_first_temp[$i]['id'] = $row['id'];
		$news_first_temp[$i]['datetime'] = $row['datetime'];
		$news_first_temp[$i++]['nomer_novosti'] = $row['nomer_novosti'];
	}
//нужна функция, которая будет давать 6 случайных чисел от 1 до $all_count_nomer shest_rand_chisel($max)

	$nomer_shest = shest_rand_chisel($all_count_nomer);

$i = 0;
while ($i < 6) {
	$nomer_shest_temp = $nomer_shest[$i];
	$select = "SELECT * FROM $Name_database.$table WHERE nomer_novosti = $nomer_shest_temp";
	$res = mysqli_query($link, $select);
	$row = mysqli_fetch_array($res);

	$news_first_temp_2[$i]['id'] = $row['id'];
	$news_first_temp_2[$i]['datetime'] = $row['datetime'];
	$news_first_temp_2[$i++]['nomer_novosti'] = $row['nomer_novosti'];
}
$i = 0;
while ($i < 6) {
	$per_base_temp_id = $news_first_temp[$i]['id'];
	$per_base_temp_date = $news_first_temp[$i]['datetime'];
	$per_base_temp_nomer = $news_first_temp[$i]['nomer_novosti'];
	$per_base_temp_id_rand = $news_first_temp_2[$i]['id'];
	$per_base_temp_date_rand = $news_first_temp_2[$i]['datetime'];
	$per_base_temp_nomer_rand = $news_first_temp_2[$i++]['nomer_novosti'];

	$select = "UPDATE $Name_database.$table SET nomer_novosti = $per_base_temp_nomer_rand, datetime = '$per_base_temp_date_rand' WHERE id = $per_base_temp_id";
	$res = mysqli_query($link, $select);
	$select = "UPDATE $Name_database.$table SET nomer_novosti = $per_base_temp_nomer, datetime = '$per_base_temp_date' WHERE id = $per_base_temp_id_rand";
	$res = mysqli_query($link, $select);
}

}