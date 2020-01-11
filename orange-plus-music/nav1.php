<?php
/*
Template Name:nav1
*/
?>
		<header>
			<div class="nav-1-1">
				<a href="<?php echo home_url('/'); ?>"><h1><img src="<?php echo get_template_directory_uri(); ?>/images/logo_moresmall.png" alt="orange plus music（オレンジプラスミュージック）" width="280"/></h1></a>
			</div>
			<div class="nav-1-2">
				<p>音楽とインターネットについて考えるブログ</p>
			</div>			
			<a class="menu-trigger">
			  <span></span>
			  <span></span>
			  <span></span>
			</a>
		</header>
		<nav class="g-nav">
			<div class="nav-box">
				<div class="nav-search">
					<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>" >
					<input type="text" value="" name="s" class="s" placeholder="SEARCH ..."/>
					<img src="<?php echo get_template_directory_uri(); ?>/images/search-icon.png" alt="logo" width="20"/>
					</form>
				</div>
				<div class="nav-th">
					<div class="nav-cat">
						<p class="nav-mida">CATEGORY</p>
						<ul class="nav-ul">
							<a href="<?php echo home_url('/'); ?>category/idea/"><li>IDEA / 考えたこと</li></a>
							<a href="<?php echo home_url('/'); ?>category/music/"><li>MUSIC / おすすめ音楽</li></a>
							<a href="<?php echo home_url('/'); ?>category/event/"><li>EVENT / 関わったイベント</li></a>
						</ul>
					</div>
					<div class="nav-tag">
						<p class="nav-mida">TAG</p>
						<ul>
						<?php $args = array('orderby' => 'count','order' => 'desc');$tags = get_terms('post_tag', $args);
						foreach($tags as $value) {echo '<li><a href="'. get_tag_link($value->term_id) .'">#'. $value->name .'</a></li>';}?>
						</ul>							
					</div>
					<div class="nav-link">
						<p class="nav-mida">LINK</p>
						<ul class="nav-ul">
							<a href="<?php echo home_url('/'); ?>work/" target="_blank"><li>> WORKS / 活動紹介</li></a>
							<a href="https://twitter.com/orange_plus_me" target="_blank"><li>> Twitter</li></a>
							<a href="https://www.facebook.com/orangeplusmusic/" target="_blank"><li>> Facebook</li></a>							
							<a href="http://gerbera-music.agency/" target="_blank"><li>> Gerbera Music Agency</li></a>
							<a href="http://monokann.hatenablog.com/" target="_blank"><li>> monokann / 友人のブログ</li></a>
						</ul>						
					</div>					
				</div>
			</div>	
		</nav>			