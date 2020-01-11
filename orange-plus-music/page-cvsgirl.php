<?php get_header(); ?>
<?php get_template_part('nav1'); ?>

		<div id="container">
			<div id="main">
				<div class="left-con">
					<div class="left-con-main">
						<?php if (have_posts()): while (have_posts()) : the_post(); ?>
							
							<h2><?php the_title(); ?></h2>

							<?php if( has_post_thumbnail() ): ?>
								<?php the_post_thumbnail(); ?>
							<?php else: ?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.png" alt="" width="600" height="354">
							<?php endif; ?>

							<div class="single-content"><?php the_content(); ?></div>
				
						<?php endwhile; else : ?>
							<p>お探しの記事は見つかりませんでした。</p>
						<?php endif; ?>
					</div>
				</div>

				<div class="right-con">
					<h2>ABOUT THIS BLOG</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo_side.png" alt="" width="260" height="100">
					<div class="right-con-1">
						<p>orange plus music<br>（オレンジプラスミュージック）</p>
					</div>
					<div class="right-con-2">
						<p>音楽とインターネットについて考える個人ブログ。アンビエント・エレクトロニカ系の落ち着いた音楽紹介、気になった人へのインタビュー、マーケティングコラムなど、アイディアを自由に発信しています。</p>
					</div>
				</div>				
			</div>
			<!-- /main -->

<?php get_footer(); ?>