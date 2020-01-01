<!-- Yandex.Metrika counter -->
<script>
	(function (d, w, c) {
		(w[c] = w[c] || []).push(function() {
			try {
				w.yaCounter48457331 = new Ya.Metrika({
					id:48457331,
					clickmap:true,
					trackLinks:true,
					accurateTrackBounce:true,
					webvisor:true
				});
			} catch(e) { }
		});

		var n = d.getElementsByTagName("script")[0],
			s = d.createElement("script"),
			f = function () { n.parentNode.insertBefore(s, n); };
		s.type = "text/javascript";
		s.async = true;
		s.src = "https://mc.yandex.ru/metrika/watch.js";

		if (w.opera == "[object Opera]") {
			d.addEventListener("DOMContentLoaded", f, false);
		} else { f(); }
	})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/48457331" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->


	<!-- BEGIN header -->
	<header class="header">
		<div class="header__right">
			<a class="logo" href="<?php echo $main_name; ?>"><?php echo $site_name; ?></a>

			<!-- Тут удалил элемент span с датой, сохранил в файле код вставляет комменты -->
		</div>
		<div class="header__main">
			<!-- Тут удалил элемент поиска и ссылку на выходные данные все в файле код вставляет комменты -->



			<ul class="header__topnews">
			    <?php for($count = 0 ; $count <3; $count++): ?>
        			<li class="header__topnews_multiline header__topnews_mid">
                        <a href="<?php echo $main_name; ?><?php echo $header[$count]['url']; ?>">
                            <img src="<?php
							$url_pic_news_latest = transform_img_prost($header[$count]['url']);
							echo str_replace('news', 'pictures', $url_pic_news_latest); ?>/img_1_2.jpg" width="228" height="76"
								 alt="<?php echo str_replace('"','',$header[$count]['teme']); ?>" />
							<span><?php echo $header[$count]['teme']; ?></span>
                        </a>
                    </li>
				<?php   endfor ?>	
			</ul>
		</div>
	</header>
	<!-- END header -->

	<div class="footer__topics">
		<ul>
			<li><a href="<?php echo $main_name; ?>/eaes/" >Евразийский Союз</a></li>
			<li><a href="<?php echo $main_name; ?>/topweek/#perehod_1" >Статьи</a></li>
			<li><a href="<?php echo $main_name; ?>/headernews/#perehod_1" >Аналитика</a></li>
			<li><a href="<?php echo $main_name; ?>/centralnews/#perehod_1" >Центральные новости</a></li>
			<li><a href="<?php echo $main_name; ?>/experts/#perehod_1" >Мнение экспертов</a></li>
			<li><a href="<?php echo $main_name; ?>/coldwar/" >Холодная война</a></li>
			<li><a href="<?php echo $main_name; ?>/polithumor/" >Юмор</a></li>
			<li><a href="<?php echo $main_name; ?>/history/" >История</a></li>
			<li><a href="<?php echo $main_name; ?>/bestmemes/" >Мемы</a></li>
			<li><a href="<?php echo $main_name; ?>/caricatures/" >Карикатуры</a></li>
			<li><a href="<?php echo $main_name; ?>/ancientukri/" >Украина</a></li>
			<li><a href="<?php echo $main_name; ?>/belnews/" >Белоруссия</a></li>
			<li><a href="<?php echo $main_name; ?>/SovetskijSojuz/" >Советский Союз</a></li>
			<li><a href="<?php echo $main_name; ?>/agents/" >Агенты влияния</a></li>
			<li><a href="<?php echo $main_name; ?>/economy/" >Экономика</a></li>
		</ul>
	</div>