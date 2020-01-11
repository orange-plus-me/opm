<?php
/*
Template Name:page-profile
*/
?>
<?php get_header(); ?>
<?php get_template_part('nav2'); ?>
	<div id="container">
			<div id="main">	
				<div class="profile-h">
					<h2>PROFILE</h2>
				</div>
				
				<div class="profile-box">
					<div class="profile-l">
						<img src="<?php echo get_template_directory_uri(); ?>/images/ishimatsu.jpg" alt="" width="300" height="auto">
					</div>
					<div class="profile-r">
						<?php if (have_posts()): while (have_posts()) : the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; else : ?><?php endif; ?>						
					</div>
				</div>
			</div>
			<!-- /main -->
<?php get_footer(); ?>