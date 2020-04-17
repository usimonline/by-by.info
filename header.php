<!-- Yandex.Metrika counter -->
<script>
	(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
		m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
	(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

	ym(48457331, "init", {
		clickmap:true,
		trackLinks:true,
		accurateTrackBounce:true
	});
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
			<li><a href="<?php echo $main_name; ?>/coldwar/" >Россия и Запад</a></li>
			<li><a href="<?php echo $main_name; ?>/polithumor/" >Политический юмор</a></li>
			<li><a href="<?php echo $main_name; ?>/history/" >История</a></li>
			<li><a href="<?php echo $main_name; ?>/SovetskijSojuz/" >Советский Союз</a></li>
			<li><a href="<?php echo $main_name; ?>/agents/" >Агенты влияния</a></li>
			<li><a href="<?php echo $main_name; ?>/splitmind/" >Шизофрения</a></li>
		</ul>
	</div>