<?php
/*
Template Name:archive-work
*/
?>
<?php get_header(); ?>
<?php get_template_part('nav2'); ?>


	<div id="container">
		<?php if (!is_paged()) : ?>
		<div class="work-mv">
			<div class="work-con">
				<div class="work-svg">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 775 140" xml:space="preserve">
						<defs>
							<pattern id="water" width=".25" height="1.1" patternContentUnits="objectBoundingBox">
							 	<path fill="#000" d="M0.25,1H0c0,0,0-0.659,0-0.916c0.083-0.303,0.158,0.334,0.25,0C0.25,0.327,0.25,1,0.25,1z"/>
							</pattern>
							<text id="text-pc" transform="translate(2,116)" font-family="'BebasNeue-Bold'" font-size="140">MUSIC + INTERNET</text>
							<mask id="text-mask"><use x="0" y="0" xlink:href="#text-pc" opacity="1" fill="#ffffff"/></mask>
							<g id="eff">
								<use x="0" y="0" xlink:href="#text-pc" fill="#a2a3a5"/>

								<rect class="water-fill" mask="url(#text-mask)" fill="url(#water)" x="-400" y="50" width="1600" height="120" opacity="0.3">
									<animate attributeType="xml" attributeName="x" from="-400" to="0" repeatCount="indefinite" dur="2s"/>
								</rect>
								<rect class="water-fill" mask="url(#text-mask)" fill="url(#water)" y="45" width="2000" height="120" opacity="0.3">
									<animate attributeType="xml" attributeName="x" from="-500" to="0" repeatCount="indefinite" dur="3s"/>
								</rect>
								<rect class="water-fill" mask="url(#text-mask)" fill="url(#water)" y="55" width="1200" height="120" opacity="0.3">
									<animate attributeType="xml" attributeName="x" from="-300" to="0" repeatCount="indefinite" dur="1.4s"/>
								</rect>
								 <rect class="water-fill" mask="url(#text-mask)" fill="url(#water)" y="55" width="2400" height="120" opacity="0.3">
									<animate attributeType="xml" attributeName="x" from="-600" to="0" repeatCount="indefinite" dur="2.8s"/>
								</rect>
							</g>							
						</defs>
						<use xlink:href="#eff" opacity="0.9" style="mix-blend-mode:color-burn"/>
					</svg>
				</div>
			</div>
		</div>
		<?php else : ?>
		<?php endif; ?>
			<!-- main -->
			<div id="main">	

				<div class="article-box">
					<h2>WORKS</h2>
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
					<?php $terms = get_terms('work_taxonomy');foreach ( $terms as $term ) {echo '<li><a href="'.get_term_link($term).'">#'.$term->name.'</a></li>';}?>
					</ul>
				</div>

			</div>
			<!-- /main -->
<?php get_footer(); ?>