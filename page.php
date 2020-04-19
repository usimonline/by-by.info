<div class="l-main">
   <article class="article" style="margin-top:0px; margin-left:0px;">
		<header class="article__header">
			<h1><?php echo $page['teme']; ?></h1>
			<a href="<?php echo $main_name; ?><?php echo $page['url']; ?>" class="news__counter"><?php //echo $page['comments']; ?></a>
			<ul class="article__info">
			    <li><?php echo $page['datetime']; ?></li>
<li><span class="news__views"><?php echo rand(50, 3650);?><i class="icon-eye"></i></span></li>
			</ul>
		</header>
		<figure class="article__left article__photo" style="margin-left:0px;">
			<img src="<?php echo str_replace($rubrika_izmenenie, 'pictures', $page['url']); ?>img_1.jpg" width="360"
				 alt="<?php echo str_replace('"','',$page['teme']); ?>"/>
		</figure>
		<p class="lead"><?php echo $page['description']; ?></p>

	   <script>(function() {
			   if (window.pluso)if (typeof window.pluso.start == "function") return;
			   if (window.ifpluso==undefined) { window.ifpluso = 1;
				   var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
				   s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
				   s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
				   var h=d[g]('body')[0];
				   h.appendChild(s);
			   }})();</script>
	   <div class="pluso" data-background="#ebebeb" data-options="medium,round,line,horizontal,nocounter,theme=04" data-services="vkontakte,odnoklassniki,facebook,twitter,livejournal,email">

	   </div><p></p>
	   <?php  if ($page['url_ext'] != 'https://by-by.info/news') { ?>
		   <p><a target="_blank" href="<?php echo $page['url_ext']; ?>">Источник</a></p><p></p>
		   <?php
	   } else { ?>
		   <p>Автор <?php
			   if (empty($page['author']))echo autor_rand($page['url']);
			   else echo $page['author'];
			   ?></p><p></p>
		   <?php
	   }
	   $colichestvo_h2_per = colichestvo_h2($page['text']);
	   if ($colichestvo_h2_per > 1){
	   ?>
	    <!--<noindex>--><ul class="spiski" ><li><strong>Содержание</strong></li>
		   <?php
		   $massiv_h2 = virezat_h2($page['text']);
		   for($i = 0; $i < $colichestvo_h2_per; $i++){
			   echo '<li><a href="#my_page_'.$i.'">'.($i+1).'. '.$massiv_h2[$i].'</a></li>';
		   }
		   ?>
			   </ul><!--</noindex>--><p></p>
	   <?php
	   }
			if($news_year_2 == 0) {
				$string_page_temp = nl2br($page['text']);
				$string_page_temp = podstanovka_kh2($string_page_temp , $colichestvo_h2_per);
				$string_page_temp = '<p>'.str_replace("<br />\r\n<br />", '</p><p>', $string_page_temp).'</p>';
				$string_page_temp = str_replace("<br />\n\r<br />", '</p><p>', $string_page_temp);
				$string_page_temp = str_replace("</figcaption><br />", '</figcaption><p></p>', $string_page_temp);
				echo $string_page_temp;

			} else echo podstanovka_kh2($page['text'], $colichestvo_h2_per);
			?>
<p></p>
<?php echo $page['url_frame']; ?>

		<p style="text-align: center;"><a target="_blank" href="<?php echo $main_name; ?><?php echo $page['url_int']; ?>"><?php echo $page['teme_int']; ?></a></p>

<!-- Тут удалил код, который добавляет комменты, перенес его в файл  -->


</article>



	<!-- <div class="article__footer last-news-mk">
		<h3 class="title" style="cursor: pointer;">основные события</h3>
		<span class="news__counter news__counter_square"  style="cursor: pointer; display: none;"></span>
		<ul class="article__footer-news-list show-news-mk">

	  <?php //for($count = 0 ; $count <$total; $count++): ?>
		<li>
			<a href="<?php //echo $main_name; ?><?php
			//$temp_news_latest_url = $news_latest[$count]['url'];
			//echo $temp_news_latest_url; ?>"  <?php
			//$proverka_url = strpos($temp_news_latest_url, '2018-2');
			//if ($proverka_url !== false) echo 'rel="nofollow"';?> >
				<span class="news__time"><?php //echo $news_latest[$count]['datetime']; ?></span>
				<strong class="news__title"><?php //echo $news_latest[$count]['teme']; ?></strong>
			</a>
		</li>
	  <?php   //endfor ?>
		</ul>
		<ul class="uploaded-news-mk" style="display:none;">

		</ul>
	</div>

	<div class="comments__head">

	</div> -->

</div>