<div class="topnews">
			<div class="topnews__pic">
			    <a href="<?php echo $main_name; ?><?php echo $topnews[0]['url']; ?>">
				    <img src="<?php
					$url_pic_news_latest = transform_img_prost($topnews[0]['url']);
					echo str_replace('news', 'pictures', $url_pic_news_latest); ?>/img_1.jpg"
					alt="<?php echo str_replace('"','',$topnews[0]['teme']); ?>" width="355"  />
			    </a>
			</div>
			<span class="news__time"><?php echo $topnews[0]['datetime']; ?></span>
		    <h2 class="news__title"><a href="<?php echo $main_name; ?><?php echo $topnews[0]['url']; ?>"><?php echo $topnews[0]['teme']; ?></a></h2>
	<!-- <p> <?php //echo $topnews[0]['description']; ?>
			    <a href="<?php //echo $main_name; ?><?php //echo $topnews[0]['url']; ?>" class="news__counter">
				    <?php // echo $topnews[0]['comments']; ?>
				</a>
			</p>-->
</div>
		
		<div class="toplist js-tabs">
		    <ul class="toplist__nav js-tab">
			    <li class="is-active">Основные темы</li>
			</ul>
			<div class="toplist__wrap js-tabcontent">
			    <div class="news">
				    <ul>
					  <?php for($count = 0 ; $count <4; $count++): ?>
					    <li>
						    <a href="<?php echo $main_name; ?><?php echo $toplist[$count]['url']; ?>">
							    <div class="news__pic"><img src="<?php
									$url_pic_news_latest = transform_img_prost($toplist[$count]['url']);
									echo str_replace('news', 'pictures', $url_pic_news_latest); ?>/img_1_2.jpg"
															alt="<?php echo str_replace('"','',$toplist[$count]['teme']); ?>"></div>
								<span class="news__time"><?php echo $toplist[$count]['datetime']; ?></span>
								<strong class="news__title"><?php echo $toplist[$count]['teme']; ?></strong>
							</a>
							<!-- <span class="news__type">фото</span> -->
							<!-- <span class="news__type">видео</span> -->
							<a href="<?php echo $main_name; ?><?php echo $toplist[$count]['url']; ?>" class="news__counter">
							    <?php // echo $toplist[$count]['comments']; ?>
							</a>		
						</li>
						
					  <?php   endfor ?>	
						
		            </ul>
                </div>
			</div>
		</div>