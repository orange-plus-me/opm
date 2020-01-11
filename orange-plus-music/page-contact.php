<?php
/*
Template Name:page-contact
*/
?>
<?php get_header(); ?>
<?php get_template_part('nav2'); ?>
	<div id="container">
			<!-- main -->
			<div id="main">
				<div class="contact-box">
					<div class="contact-text">
						<h2>CONTACT</h2>
						<p>お仕事のご相談やお問い合わせはこちらのフォームか info[at]orangeplus.me までお願いいたします。</p>
					</div>
					<div class="contact-form">
						<?php echo do_shortcode( '[contact-form-7 id="2747" title="コンタクトフォーム 1"]' ); ?>
					</div>
				</div>
			</div>
			<!-- /main -->
<?php get_footer(); ?>