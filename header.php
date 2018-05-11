


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
				
				<a class="header__top-item send-news" href="<?php echo $main_name; ?>/news/2018/04/05/1522951650/prislat-novost/">Прислать новость</a>
                <a class="icon-search js-search-show"></a>
			</div>
			
			<ul class="header__topnews">
			    <?php for($count = 0 ; $count <3; $count++): ?>
        			<li class="header__topnews_multiline header__topnews_mid">
                        <a href="<?php echo $main_name; ?><?php echo $header[$count]['url']; ?>">
                            <img src="<?php echo str_replace('news', 'pictures', $header[$count]['url']); ?>/img_1_2.jpg" width="228" height="76" />
							<span><?php echo $header[$count]['teme']; ?></span>
                        </a>
                    </li>
				<?php   endfor ?>	
			</ul>
		</div>
	</header>
	<!-- END header -->

	<div id="header_categories">
		<div class="button icon-down-open"><span>Рубрики</span></div>
		<ul>
			<li><a href="<?php echo $main_name; ?>/pastnews/belarus/50" rel="nofollow">Белоруссия</a></li>
			<li><a href="<?php echo $main_name; ?>/pastnews/russia/50" rel="nofollow">Россия</a></li>
			<li><a href="<?php echo $main_name; ?>/pastnews/ukri/50" rel="nofollow">Украина</a></li>
			<li><a href="<?php echo $main_name; ?>/pastnews/poland/50" rel="nofollow">Польша</a></li>
			<li><a href="<?php echo $main_name; ?>/pastnews/west/50" rel="nofollow">Запад</a></li>
			<li><a href="<?php echo $main_name; ?>/pastnews/agent/50" rel="nofollow">Агенты Запада</a></li>
			<li><a href="<?php echo $main_name; ?>/pastnews/ussr/50" rel="nofollow">СССР</a></li>
			<li><a href="<?php echo $main_name; ?>/pastnews/cis/50" rel="nofollow">СНГ</a></li>
			<li><a href="<?php echo $main_name; ?>/pastnews/economy/50" rel="nofollow">Экономика</a></li>
			<li><a href="<?php echo $main_name; ?>/pastnews/policy/50" rel="nofollow">Политика</a></li>
			<li><a href="<?php echo $main_name; ?>/pastnews/syria/50" rel="nofollow">Сирия</a></li>
			<li><a href="<?php echo $main_name; ?>/pastnews/novoros/50" rel="nofollow">Новороссия</a></li>

			<li><a href="<?php echo $main_name; ?>/pastnews/world/50" rel="nofollow">Мир</a></li>
			<li><a href="<?php echo $main_name; ?>/pastnews/baltic/50" rel="nofollow">Прибалтика</a></li>
			<li><a href="<?php echo $main_name; ?>/pastnews/army/50" rel="nofollow">Армия</a></li>
			<li><a href="<?php echo $main_name; ?>/pastnews/rusbel/50" rel="nofollow">Союзное государство России и Белоруссии</a></li>
			<li><a href="<?php echo $main_name; ?>/pastnews/history/50" rel="nofollow">История</a></li>
			<li><a href="<?php echo $main_name; ?>/pastnews/religion/50" rel="nofollow">Религия</a></li>
			<li><a href="<?php echo $main_name; ?>/pastnews/science/50" rel="nofollow">Наука</a></li>
			<li><a href="<?php echo $main_name; ?>/pastnews/language/50" rel="nofollow">Русский язык</a></li>
			<li><a href="<?php echo $main_name; ?>/pastnews/nweapon/50" rel="nofollow">Ядерное оружие</a></li>
			<li><a href="<?php echo $main_name; ?>/pastnews/CSTO/50" rel="nofollow">ОДКБ</a></li>
			<li><a href="<?php echo $main_name; ?>/pastnews/site/50" rel="nofollow"><?php echo $site_name; ?></a></li>

		</ul>
	</div>