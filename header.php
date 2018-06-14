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
			   <span class="header__date"><?php echo date("Y-m-d H:i:s"); ?></span>
		</div>
		<div class="header__main">
			<div class="header__top">
			
				<form action="<?php echo $main_name; ?>/searchnews/empty/50/" method="POST" name="searchnews">
			
			<input class="header__top-item pda"  style=" background: #f6d654;" 
			value='Поиск' name='searchnews' type="submit" />
			<input class="header__top-item pda" style="width:200px; height:15px; border: 1px solid #cccccc;" 
		 name='searchnews' value='Введите слово'  />
			</form>
				
				<a class="header__top-item send-news" href="<?php echo $main_name; ?>/news/2017/09/35/1527767821/O-nas/" rel="nofollow">О нас</a>
                <a class="icon-search js-search-show"></a>
			</div>
			
			<ul class="header__topnews">
			    <?php for($count = 0 ; $count <3; $count++): ?>
        			<li class="header__topnews_multiline header__topnews_mid">
                        <a href="<?php echo $main_name; ?><?php echo $header[$count]['url']; ?>">
                            <img src="<?php
							$url_pic_news_latest = str_replace('coldwar', 'pictures', $header[$count]['url']);
							$url_pic_news_latest = str_replace('belnews', 'pictures', $url_pic_news_latest);
							$url_pic_news_latest = str_replace('polithumor', 'pictures', $url_pic_news_latest);
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
			<li><a href="<?php echo $main_name; ?>/belnews/" >НОВОСТИ БЕЛАРУСИ</a></li>
			<li><a href="<?php echo $main_name; ?>/coldwar/" >ХОЛОДНАЯ ВОЙНА</a></li>
			<li><a href="<?php echo $main_name; ?>/polithumor/" >ПОЛИТИЧЕСКИЙ ЮМОР</a></li>
			<li><a href="<?php echo $main_name; ?>/history/" >История</a></li>
			<li><a href="<?php echo $main_name; ?>/pastnews/belarus/50/" rel="nofollow">Беларусь</a></li>
			<li><a href="<?php echo $main_name; ?>/pastnews/russia/50/" rel="nofollow">Россия</a></li>
			<li><a href="<?php echo $main_name; ?>/pastnews/ancientukri/50/" rel="nofollow">Украина</a></li>
			<li><a href="<?php echo $main_name; ?>/pastnews/west/50/" rel="nofollow">Запад</a></li>
			<li><a href="<?php echo $main_name; ?>/pastnews/agents/50/" rel="nofollow">Агенты Запада</a></li>
			<li><a href="<?php echo $main_name; ?>/pastnews/policy/50/" rel="nofollow">Политика</a></li>
			<li><a href="<?php echo $main_name; ?>/pastnews/economy/50/" rel="nofollow">Экономика</a></li>
		</ul>
	</div>