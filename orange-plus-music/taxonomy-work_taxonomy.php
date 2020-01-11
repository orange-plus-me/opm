<?php get_header(); ?>
<?php get_template_part('nav2'); ?>

		<div id="container">

			<!-- main -->
			<div id="main">
				<div class="article-box">
					<h2 class="font-c">#<?php single_term_title( ); ?></h2>					
					<?php if (is_tax() &&!is_paged() &&term_description()) : ?>

					<div class="category-desc">
						<?php echo term_description( $term_id, $taxonomy ) ?>
					</div>
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
							<p class="article-w-tag"><?php $terms = get_the_terms($post->ID,'work_taxonomy');foreach( $terms as $term ) {echo '<a href="'.get_term_link($term->slug, 'work_taxonomy').'">#'.$term->name.'</a>';}?></p>
						</div>

						<?php endforeach; endif; ?>
					</div>
					<?php $max_num_pages=""; ?>
					<?php if (function_exists("pagination")) {pagination($max_num_pages);}?>
				</div>
				<div class="works-tag">
					<h2>WORKS TAG</h2>
					<ul>
					<?php $terms = get_terms('work_taxonomy');foreach ( $terms as $term ) {echo '<li><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';}?>
					</ul>
				</div>						
			</div>
			<!-- /main -->

<?php get_footer(); ?>