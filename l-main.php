<div class="l-main">
<br>
    <h1 class="title">Политические новости (<?php if ($all_count != 0) echo ($nomer_url_2+1).'-'.$nomer_url.' всего '.$all_count; else echo 'Не обнаружено'; ?>)
	<?php if ($keys_value != 'empty') echo '<br>Поиск по ключу: '.$keys_l_main?></h1>
	<div class="news news_latest">
		<ul>
		  <?php for($count = 0 ; $count <$total; $count++): ?>
		    <li>
			    <a href="<?php echo $main_name; ?><?php
				$temp_news_latest_url_main = $news_latest[$count]['url'];
				echo $temp_news_latest_url_main; ?>" <?php
				$proverka_url_main = strpos($temp_news_latest_url_main, '2018-2');
				if ($proverka_url_main !== false) echo 'rel="nofollow"';?> >
				<br>
					
				    <div class="news__pic">
					    <img src="<?php
						$url_pic_news_latest = transform_img_prost($news_latest[$count]['url']);
						echo str_replace('news', 'pictures', $url_pic_news_latest); ?>/img_1_2.jpg"
						alt="<?php echo str_replace('"','',$news_latest[$count]['teme']); ?>" width="360" />
					</div>

					<span class="news__time"><?php echo $news_latest[$count]['datetime']; ?></span>
					<strong class="news__title"><?php echo $news_latest[$count]['teme']; ?></strong>
			    </a>
				<p><?php echo $news_latest[$count]['description']; ?></p>
				<?php if ($admin): ?>	
			<form method="POST" enctype="multipart/form-data" action="<?php echo $main_name; ?>/admin/<?php echo $keys_value; ?>/<?php echo ($nomer_url - $nomer_url%50); ?>/">
                <textarea style="visibility: hidden;" name="datetime_re" 
				type="text" ><?php echo $news_latest[$count]['datetime']; ?></textarea>
                <input style="width:200px; height:50px; border: 1px solid #cccccc;" type="submit" value="Изменить"/>
            </form>
			<form method="POST" enctype="multipart/form-data" action="<?php echo $main_name; ?>/admin/<?php echo $keys_value; ?>/<?php echo ($nomer_url - $nomer_url%50 ); ?>/">
                <textarea style="visibility: hidden;" name="datetime_del" 
				type="text" ><?php echo $news_latest[$count]['datetime']; ?></textarea>
                <input style="width:200px; height:50px; border: 1px solid #cccccc;" type="submit" value="Удалить"/>
            </form>
					<?php
					if ($news_latest[$count]['nomer_novosti'] == '') {
						$datetime_page_temp = $news_latest[$count]['datetime'];
						$select = "SELECT COUNT(*) FROM $Name_database.$table WHERE datetime < '$datetime_page_temp'";
						$res = mysqli_query($link, $select);
						$row = mysqli_fetch_row($res);
						$all_count_nomer = $row[0] + 1; // количество записей с более ранней датой, чем $datetime_page_temp
						echo $all_count_nomer;// нормер от 1 (самая старая ) до последней (в переменной $all_count)
						$insert = "UPDATE $Name_database.$table SET nomer_novosti = $all_count_nomer WHERE datetime='$datetime_page_temp'";
						$res = mysqli_query($link, $insert);

					} else "Из базы данных ".$news_latest[$i]['nomer_novosti'];



					?>

			<?php endif; ?>
				
			</li>
		  <?php   endfor ?>		
		  
		</ul>
	</div>
	
	
	<div class="pagi 11 + 1 = 11 ">
	  <?php if($all_count > $nomer_url) : ?>
		<a class="btn btn_prev" href="<?php echo $main_name; ?>/<?php echo $rubrika; ?>/<?php echo $keys_value; ?>/<?php echo $nomer_url_3; ?>">
		    <i class="icon-left"></i>прошлое
		</a>
      <?php endif; ?>
	  <?php if($nomer_url_2 >= $number_of_pages) : ?>
		<a class="btn btn_archive" href="<?php echo $main_name; ?>/<?php echo $rubrika; ?>/<?php echo $keys_value; ?>/<?php echo $nomer_url_2; ?>">
		    <i class="icon-calendar"></i>будущее
	    </a>
	  <?php endif; ?>
    </div>
</div>