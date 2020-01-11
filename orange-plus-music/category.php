<?php get_header(); ?>
<?php get_template_part('nav1'); ?>

		<div id="container">

			<!-- main -->
			<div id="main">
				<div class="article-box">
					<h2><?php $cat = get_the_category(); ?><?php $cat = $cat[0]; ?><?php echo get_cat_name($cat->term_id); ?></h2>
					<?php if (is_category() &&!is_paged() &&category_description()) : ?>
					<div class="category-desc"><?php echo category_description(); ?></div>
					<?php endif; ?>
					<div class="article-w">
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
					<?php $max_num_pages=""; ?>
					<?php if (function_exists("pagination")) {pagination($max_num_pages);}?>
				</div>
			</div>
			<!-- /main -->

<?php get_footer(); ?>