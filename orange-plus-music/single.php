<?php get_header(); ?>
<?php get_template_part('nav1'); ?>

		<div id="container">
			<div id="main">
				<div class="left-con">
					<div class="left-con-main">
						<?php if (have_posts()): while (have_posts()) : the_post(); ?>
							<ul class="single-fs">
								<?php $cat = get_the_category(); ?>
								<?php $cat = $cat[0]; ?>
								<li class="single-cat"><p><?php echo get_cat_name($cat->term_id); ?></p></li>
								<li class="single-time"><p><?php echo get_the_date("Y.m.d"); ?></p></li>
							</ul>
							
							<h2><?php the_title(); ?></h2>

							<div class="single-tag"><?php the_tags('',''); ?></div>

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

					<div class="left-con-writer">
						<div class="left-writer-l">
							<h2>WRITER</h2>
							<p><strong>石松豊 / がちゃーん</strong><br><br>CINRAの制作ディレクター。orange+me名義で音楽を作りつつ、綺麗な風景やリラックスできる場所×落ち着いた音楽のライブイベントを企画をしています。<br><br>詳細プロフィールや活動実績、お問い合わせなどは<a href="<?php echo home_url('/'); ?>work/" target="_blank">WORKS</a>よりご覧ください。</p>
						</div>
						<div class="left-writer-r">
							<img src="<?php echo get_template_directory_uri(); ?>/images/profileimage.png" alt="" width="200" height="200">
						</div>
					</div>					
				</div>

				<div class="right-con">
					<h2>ABOUT THIS BLOG</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo_side.png" alt="" width="260" height="100">
					<div class="right-con-1">
						<p>orange plus music<br>（オレンジプラスミュージック）</p>
					</div>
					<div class="right-con-2">
						<p>音楽とインターネットについて考える個人ブログ。アンビエント・エレクトロニカ系を中心としたおすすめ音楽紹介や、マーケティングコラム、日々考えたことなど、アイディアを自由に発信しています。<br><br><a href="nav.cx/a6fdWQU" target="_blank">LINEアカウント</a>では、企画する音楽イベントやおすすめ音楽など最新情報を不定期に発信中。イベント参加がお得になるほか、「こんな時にオススメの音楽教えて！」というメッセージにも手動で返答します。よければ友達申請お願いします。</p>
					</div>
				</div>
				
				
				<?php $current_tags = get_the_tags();
					if ( $current_tags ) :
					foreach ( $current_tags as $tag ) {$current_tag_list[] = $tag->term_id;}
					$args = array('tag__in' => $current_tag_list,'post__not_in' => array( $post->ID ),'posts_per_page' => 6,);
					$related_posts = new WP_Query( $args );
					if( $related_posts->have_posts() ) :?>
				<div class="article-box">
					<h2>RELATED</h2>
					<div class="article-r">
						<?php while ( $related_posts->have_posts() ) :$related_posts->the_post();?>
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
						<?php endwhile; ?>
					</div>
				</div>
					<?php else : ?>
					<div class="no-related-box"></div>
					<?php endif;wp_reset_postdata();endif;?>					

				<?php get_template_part('pr'); ?>
			</div>
			<!-- /main -->

<?php get_footer(); ?>