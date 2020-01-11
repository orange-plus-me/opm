<?php
/*
Template Name:nav2
*/
?>

		<!-- header -->
		<header>
			<div class="nav-2">
				<div class="nav-2-logo">
					<a href="<?php echo home_url('/'); ?>work/"><h1>YUTAKA ISHIMATSU</h1></a>
				</div>
				<ul class="nav-2-menu">
					<li><a href="<?php echo home_url('/'); ?>profile/">PROFILE</a></li>
					<li><a href="<?php echo home_url('/'); ?>" target="_blank">BLOG</a></li>
					<li><a href="<?php echo home_url('/'); ?>contact/">CONTACT</a></li>
				</ul>
				<a class="menu-trigger-work">
				  <span></span>
				  <span></span>
				  <span></span>
				</a>				
			</div>
		</header>
		<nav class="g-nav-work">
			<div class="nav-box">
				<div class="nav-cat">
					<ul class="nav-ul">
						<a href="<?php echo home_url('/'); ?>profile/"><li>PROFILE</li></a>
						<a href="<?php echo home_url('/'); ?>" target="_blank"><li>> BLOG</li></a>
						<a href="<?php echo home_url('/'); ?>contact/"><li>CONTACT</li></a>
					</ul>
				</div>
				<div class="nav-tag">
					<p class="nav-mida">WORKS TAG</p>
					<ul>
					<?php $terms = get_terms('work_taxonomy');foreach ( $terms as $term ) {echo '<li><a href="'.get_term_link($term).'">#'.$term->name.'</a></li>';}?>
					</ul>	
				</div>
			</div>	
		</nav>