<?php get_header(); ?>
<?php get_template_part('nav2'); ?>

		<div id="container">
			<div id="main">
<div class="left-con">
					<div class="left-con-main">
						<?php if (have_posts()): while (have_posts()) : the_post(); ?>
							<ul class="single-fs">
								<li class="single-cat"><p>WORK</p></li>
								<li class="single-time"><p><?php echo get_the_date("Y.m.d"); ?></p></li>
							</ul>
							
							<h2><?php the_title(); ?></h2>

							<div class="single-tag">
								<?php $terms = get_the_terms($post->ID,'work_taxonomy');foreach( $terms as $term ) {echo '<a href="'.get_term_link($term->slug, 'work_taxonomy').'">'.$term->name.'</a>';}?>
							</div>

							<ul class="single-sns">
								<li class="single-sns1"><a href="https://twitter.com/share" class="twitter-share-button" data-via="orange_plus_me" data-lang="ja" data-recommend="orange_plus_me" data-url="<?php the_permalink() ?>" data-text="<?php the_title(); ?>" >ツイート</a></li>
								<li class="single-sns2"><iframe src="//www.facebook.com/plugins/like.php?href=<?php the_permalink() ?>&amp;width&amp;layout=button&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;" allowTransparency="true"></iframe></li>
								<li class="single-sns3"><div class="fb-share-button" data-href="<?php the_permalink() ?>" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">シェア</a></div></li>
								<li class="single-sns4"><a href="http://b.hatena.ne.jp/entry/<?php the_permalink(); ?>" class="hatena-bookmark-button" data-hatena-bookmark-title="<?php the_title(); ?>" data-hatena-bookmark-layout="simple-balloon" title="このエントリーをはてなブックマークに追加"><img src="https://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a></li>
							</ul>							

							<?php if( has_post_thumbnail() ): ?>
								<?php the_post_thumbnail(); ?>
							<?php else: ?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.png" alt="" width="630" height="354">
							<?php endif; ?>

							<div class="single-content"><?php the_content(); ?></div>

							<ul class="single-sns">
								<li class="single-sns1"><a href="https://twitter.com/share" class="twitter-share-button" data-via="orange_plus_me" data-lang="ja" data-recommend="orange_plus_me" data-url="<?php the_permalink() ?>" data-text="<?php the_title(); ?>" >ツイート</a></li>
								<li class="single-sns2"><iframe src="//www.facebook.com/plugins/like.php?href=<?php the_permalink() ?>&amp;width&amp;layout=button&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;" allowTransparency="true"></iframe></li>
								<li class="single-sns3"><div class="fb-share-button" data-href="<?php the_permalink() ?>" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">シェア</a></div></li>
								<li class="single-sns4"><a href="http://b.hatena.ne.jp/entry/<?php the_permalink(); ?>" class="hatena-bookmark-button" data-hatena-bookmark-title="<?php the_title(); ?>" data-hatena-bookmark-layout="simple-balloon" title="このエントリーをはてなブックマークに追加"><img src="https://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a></li>
							</ul>					
						<?php endwhile; else : ?>
							<p>お探しの記事は見つかりませんでした。</p>
						<?php endif; ?>
					</div>

					<div class="left-con-iine">
						<div class="left-iine-l">
							<?php if( has_post_thumbnail() ): ?>
								<?php the_post_thumbnail('normal-t'); ?>
							<?php else: ?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.png" alt="" width="280" height="158">
							<?php endif; ?>
						</div>
						<div class="left-iine-r">
							<p>この記事が気に入ったら<br>いいね！しよう</p>
							<div class="left-iine-rm">
								<iframe class="page-iine-iframe" src="//www.facebook.com/plugins/like.php?href=https://www.facebook.com/orangeplusmusic/&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;" allowTransparency="true"></iframe>
							</div>
							<p>orange plus music<br>の最新情報をお届けします</p>
						</div>	
					</div>

				</div>

				<div class="right-con">
					<h2>ABOUT ME</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/images/profileimage.png" alt="" width="260" height="260">
					<div class="right-con-1">
						<p>石松 豊 / がちゃーん</p>
					</div>
					<div class="right-con-2">
						<p>デジタルマーケティング会社からweb制作/メディアの会社へ。個人でも音楽マーケティング・クリエイティブ制作の仕事をしています。音楽とインターネットについて考える個人ブログ<a href="<?php echo home_url('/'); ?>" target="_blank">orange plus music</a>運営中。</p>
					</div>
				</div>
				
				
				<?php global $post;
					$terms = get_the_terms($post->ID, 'work_taxonomy');
					foreach($terms as $term) {$args = array('numberposts' => 6,'post_type' => 'work','taxonomy' => 'work_taxonomy','term' => $term->slug,'post__not_in' => array($post->ID));?>
					<?php $myPosts = get_posts($args); if($myPosts) : ?>
				<div class="article-box">
					<h2>RELATED</h2>
					<div class="article-r">
				    <?php foreach($myPosts as $post) : setup_postdata($post); ?>	
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
						<?php endforeach; ?>
					</div>
				</div>
    				<?php else : ?>
    				<div class="no-related-box"></div>
					<?php endif; wp_reset_postdata();}?>			
			</div>
			<!-- /main -->

<?php get_footer(); ?>