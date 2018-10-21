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


$select = "SELECT COUNT(*) FROM $Name_database.$table WHERE datetime < '$datetime_site'";

$res = mysqli_query($link, $select);

$row = mysqli_fetch_row($res);

$all_count_nomer = $row[0] + 1; // количество записей ВСЕХ

//$insert = "UPDATE $Name_database.$table SET nomer_novosti = $all_count_nomer WHERE datetime='$datetime_page_temp'";

//$res = mysqli_query($link, $insert);