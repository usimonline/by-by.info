<div class="l-sidebar">
			<div class="">
			    <div style="margin: 0 0 10px 0;">
				    <div ></div>
				</div>
				<div class="b opinion">
				    <h3 class="title"><a href="<?php echo $main_name; ?>/topic/l-sidebar/50" rel="nofollow">Мнение экспертов</a></h3>



					<?php for($count = 0 ; $count <4; $count++): ?>
					<a href="<?php echo $main_name; ?><?php echo $lsidebar[$count]['url']; ?>" class="opinion__item">
					    <div class="opinion__pic">
						    <img src="<?php
							$url_pic_news_latest = str_replace('coldwar', 'pictures', $lsidebar[$count]['url']);
							$url_pic_news_latest = str_replace('belnews', 'pictures', $url_pic_news_latest);
							$url_pic_news_latest = str_replace('polithumor', 'pictures', $url_pic_news_latest);
							echo str_replace('news', 'pictures', $url_pic_news_latest); ?>/img_1_2.jpg"
								 alt="<?php echo str_replace('"','',$lsidebar[$count]['teme']); ?>" width="120" height="76">
						</div>
						<div class="opinion__content"><strong class="news__title"><?php echo $lsidebar[$count]['teme']; ?></strong>
						    <span class="opinion__author"><?php echo $lsidebar[$count]['description']; ?></span>
						</div>
					</a>
					<?php   endfor ?>	
					
				</div>
				
						
						<div class="b subscription">


							<ul>
								<li>

									<script  src="//vk.com/js/api/openapi.js?154"></script>

									<div id="vk_groups"></div>
									<script>
										VK.Widgets.Group("vk_groups", {mode: 1, width: "190", height: "300", color1: 'FFFFFF',
											color2: '2B587A', color3: '5B7FA6'}, 150640109);
									</script>
									
								</li>
							</ul>


							<ul>

								<li>


									<a class="twitter-timeline"  href="https://twitter.com/search?q=%40byby_info" data-widget-id="991931261655617537" data-chrome="nofooter" lang="ru">Твиты про @byby_info</a>
									<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


								</li>
							</ul>




						</div>

				<div class="b opinion">


					<?php for($count = 4 ; $count <8; $count++): ?>
						<a href="<?php echo $main_name; ?><?php echo $lsidebar[$count]['url']; ?>" class="opinion__item">
							<div class="opinion__pic">
								<img src="<?php echo str_replace('news', 'pictures', $lsidebar[$count]['url']); ?>/img_1_2.jpg"
									 alt="<?php echo str_replace('"','',$lsidebar[$count]['teme']); ?>" width="120" height="76">
							</div>
							<div class="opinion__content"><strong class="news__title"><?php echo $lsidebar[$count]['teme']; ?></strong>
								<span class="opinion__author"><?php echo $lsidebar[$count]['description']; ?></span>
							</div>
						</a>
					<?php   endfor ?>

				</div>
				<div class="b subscription">

						<ul>
							<li>
							</li>
						</ul>

					<h3 class="title">Соцсети</h3>
					<ul>

							<li><a class="icon-facebook-1" href="https://www.facebook.com/bybyinform/">Facebook</a></li>
							<li><a class="icon-video" href="https://www.youtube.com/channel/UCym0E-X-17EmnBoccHjX1Jg">Youtube</a></li>
							<li><a class="icon-twitter" href="https://twitter.com/byby_info">Twitter</a></li>
							<li><a class="icon-vk" href="https://vk.com/bybyinfo">Vkontakte</a></li>
							<li><a class="icon-odnoklassniki" href="https://ok.ru/group/59043407855648">Ok.ru</a></li>
						    <li><a class="icon-gplus" href="https://www.instagram.com/byby_info/">Instagram</a></li>
						    <li><a class="icon-gplus" href="https://https://by-byinfo.livejournal.com//">Livejournal</a></li>
						    <li><a class="icon-gplus" href="https://ru.pinterest.com/byby_info/">Pinterest</a></li>
							<!-- <li><a class="icon-gplus" href="https://google.com/+charter97org_news/">gplus</a></li>-->
							<li><a class="icon-rss" href="<?php echo $main_name; ?>/rss.xml">RSS</a></li>
					</ul>
					
				</div>
				<div class="b opinion">


					<?php for($count = 8 ; $count <12; $count++): ?>
						<a href="<?php echo $main_name; ?><?php echo $lsidebar[$count]['url']; ?>" class="opinion__item">
							<div class="opinion__pic">
								<img src="<?php echo str_replace('news', 'pictures', $lsidebar[$count]['url']); ?>/img_1_2.jpg"
									 alt="<?php echo str_replace('"','',$lsidebar[$count]['teme']); ?>" width="120" height="76">
							</div>
							<div class="opinion__content"><strong class="news__title"><?php echo $lsidebar[$count]['teme']; ?></strong>
								<span class="opinion__author"><?php echo $lsidebar[$count]['description']; ?></span>
							</div>
						</a>
					<?php   endfor ?>

				</div>

			</div>
</div>