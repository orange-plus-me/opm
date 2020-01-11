<?php get_header(); ?>
<?php get_template_part('nav1'); ?>

		<div id="container">
			<div id="main">

				<div class="top-mv">
					<div class="top-mv-m">
						<div class="top-mv-black-1"></div>
						<div class="wrap_slider">
						    <div>
						    	<?php
						    		$fields1 = get_post_custom(2897);$val1 = $fields1['top_mv_1'][0]; $hre1 = get_permalink( $val1 );$lin1 = get_post( $val1 )->post_title;
						    		echo '<a href="'.$hre1.'">';echo '<p class="mv-title">'.$lin1.'</p>';echo get_the_post_thumbnail( $val1,'big-mv' );echo '</a>';
						    	?>
						    </div>
						    <div>
						    	<?php 
						    		$fields2 = get_post_custom(2897);$val2 = $fields2['top_mv_2'][0]; $hre2 = get_permalink( $val2 );$lin2 = get_post( $val2 )->post_title;
						    		echo '<a href="'.$hre2.'">';echo '<p class="mv-title">'.$lin2.'</p>';echo get_the_post_thumbnail( $val2,'big-mv' );echo '</a>';
						    	?>
						    </div>
						    <div>
 						    	<?php 
						    		$fields3 = get_post_custom(2897);$val3 = $fields3['top_mv_3'][0]; $hre3 = get_permalink( $val3 );$lin3 = get_post( $val3 )->post_title;
						    		echo '<a href="'.$hre3.'">';echo '<p class="mv-title">'.$lin3.'</p>';echo get_the_post_thumbnail( $val3,'big-mv' );echo '</a>';
						    	?>
						    </div>
						</div>
						<div class="top-mv-black-2"></div>
					</div>
				</div>

				<div class="article-box">
					<h2>LIVE EVENT</h2>
					<div class="article-s">
						<?php $posts = get_posts('category=38&showposts=6');?>
						<?php if($posts): foreach($posts as $post): setup_postdata($post); ?>

						<div class="article-card">
							<a href="<?php the_permalink(); ?>">
								<?php if( has_post_thumbnail() ): ?>
								<?php the_post_thumbnail('big-mv'); ?>
								<?php else: ?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.png" alt="" width="300" height="169">
								<?php endif; ?>
							</a>

							<h3><a href="<?php the_permalink(); ?>">
								<?php if (mb_strlen($post->post_title) > 40) {
								 echo mb_strimwidth(the_title($before = '', $after = '', FALSE), 0, 76) . '...'; } else {
								 echo $post->post_title;} ?></a></h3>
							<p><?php echo get_the_date("Y.m.d"); ?></p>
						</div>

						<?php endforeach; endif; ?>						
					</div>
					<div class="article-more"><a href="<?php echo home_url('/'); ?>category/event/">more</a></div>
				</div>

				<?php get_template_part('pr'); ?>

				<div class="article-box">
					<h2>DISCOVER MUSIC</h2>
					<div class="article-s">
						<?php $posts = get_posts('category=3&showposts=6');?>
						<?php if($posts): foreach($posts as $post): setup_postdata($post); ?>

						<div class="article-card">
							<a href="<?php the_permalink(); ?>">
								<?php if( has_post_thumbnail() ): ?>
								<?php the_post_thumbnail('big-mv'); ?>
								<?php else: ?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.png" alt="" width="300" height="169">
								<?php endif; ?>
							</a>

							<h3><a href="<?php the_permalink(); ?>">
								<?php if (mb_strlen($post->post_title) > 40) {
								 echo mb_strimwidth(the_title($before = '', $after = '', FALSE), 0, 76) . '...'; } else {
								 echo $post->post_title;} ?></a></h3>
							<p><?php echo get_the_date("Y.m.d"); ?></p>
						</div>

						<?php endforeach; endif; ?>						
					</div>
					<div class="article-more"><a href="<?php echo home_url('/'); ?>category/music/">more</a></div>
				</div>

				<div class="article-box">
					<h2>NEW IDEA</h2>
					<div class="article-s">
						<?php $posts = get_posts('category=2&showposts=6');?>
						<?php if($posts): foreach($posts as $post): setup_postdata($post); ?>

						<div class="article-card">
							<a href="<?php the_permalink(); ?>">
								<?php if( has_post_thumbnail() ): ?>
								<?php the_post_thumbnail('big-mv'); ?>
								<?php else: ?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.png" alt="" width="300" height="169">
								<?php endif; ?>
							</a>

							<h3><a href="<?php the_permalink(); ?>">
								<?php if (mb_strlen($post->post_title) > 40) {
								 echo mb_strimwidth(the_title($before = '', $after = '', FALSE), 0, 76) . '...'; } else {
								 echo $post->post_title;} ?></a></h3>
							<p><?php echo get_the_date("Y.m.d"); ?></p>
						</div>

						<?php endforeach; endif; ?>
					</div>
					<div class="article-more"><a href="<?php echo home_url('/'); ?>category/idea/">more</a></div>
				</div>

				<?php get_template_part('pr'); ?>
			</div>
			<!-- /main -->

<?php get_footer(); ?>