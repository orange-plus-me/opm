<!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head>
		<meta charset="UTF-8">
		<title>
			<?php 
				global $paged,$page;
				if(is_post_type_archive()){
					echo get_option( 'works_title' );
					if ($paged >= 2 || $page >= 2){echo ' - ';show_page_number();}
				} else if (is_category()){
					$catname = single_cat_title('',false);echo 'カテゴリー「'.$catname.'」の記事一覧' ;
					if ($paged >= 2 || $page >= 2){echo ' - ';show_page_number();}
				} else if (is_tag()){
					$tagname = single_tag_title('',false);echo 'タグ「'.$tagname.'」の記事一覧' ;
					if ($paged >= 2 || $page >= 2){echo ' - ';show_page_number();}
				} else if (is_tax()){
					$catname2 = single_cat_title('',false);echo 'タグ「'.$catname2.'」の記事一覧' ;
					if ($paged >= 2 || $page >= 2){echo ' - ';show_page_number();}
				} else if(is_search()){
					$searchkk1 =  get_search_query();echo '「'.$searchkk1.'」の検索結果' ;
					if ($paged >= 2 || $page >= 2){echo ' - ';show_page_number();}
				} else {
					wp_title( '|', true, 'right' ); bloginfo('name');
					if ($paged >= 2 || $page >= 2){echo ' - ';show_page_number();}
				}
			?>
		</title>
		<?php 
			if (is_single()) { 
				if ($post->post_excerpt){ 
					echo '<meta name="description" content="'.$post->post_excerpt.'">';
				} else {
					$postsummary = strip_tags($post->post_content);
					$postsummary = str_replace("\n", "", $postsummary);
					$postsummary = mb_substr($postsummary, 0, 100). "…"; 
					echo '<meta name="description" content="'.$postsummary.'">';
				}
			} else if (is_post_type_archive()){
				$worksdesc = get_option( 'works_description' );echo '<meta name="description" content="'.$worksdesc;
				if ($paged >= 2 || $page >= 2){ echo ' - ';show_page_number();echo '">';}else {echo '">';}
			} else if (is_page()){
				$pagemeta = esc_html(get_post_meta($post->ID, 'my_description', true));echo '<meta name="description" content="'.$pagemeta.'">';
			} else if (is_category()){
				$categorymeta = trim(strip_tags(category_description()));echo '<meta name="description" content="'.$categorymeta;
				if ($paged >= 2 || $page >= 2){ echo ' - ';show_page_number();echo '">';}else {echo '">';}
			} else if (is_tag()){
				$tagmeta = trim(strip_tags(tag_description()));echo '<meta name="description" content="'.$tagmeta;
				if ($paged >= 2 || $page >= 2){ echo ' - ';show_page_number();echo '">';}else {echo '">';}
			} else if (is_tax()){
				$categorymeta2 = trim(strip_tags(category_description()));echo '<meta name="description" content="'.$categorymeta2;
				if ($paged >= 2 || $page >= 2){ echo ' - ';show_page_number();echo '">';}else {echo '">';}
			} else if (is_front_page()){ 
				echo '<meta name="description" content="';bloginfo('description');global $paged,$page;
				if ($paged >= 2 || $page >= 2){ echo ' - ';show_page_number();echo '">';}else {echo '">';}
			} else if (is_search()){
				$searchkk2 =  get_search_query();echo '<meta name="description" content="「'.$searchkk2.'」の検索結果一覧です。';
				if ($paged >= 2 || $page >= 2){ echo ' - ';show_page_number();echo '">';}else {echo '">';}
			}
		?>

		<!-- favicon -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon-160x160.png" sizes="160x160">
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon-16x16.png" sizes="16x16">
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon-32x32.png" sizes="32x32">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="msapplication-TileImage" content="/mstile-144x144.png">

		<!-- css -->
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.6,user-scalable=yes" />
		<link rel="stylesheet" media="all" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/slick.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/slick-theme.css">
			
		<!--Google web master -->
		<meta name="google-site-verification" content="ekke14a7inuqcMh80AG_qcXNmT01vuyH92bGfYnpGV4" />

		<?php get_template_part('meta-social'); ?>
		<?php get_template_part('canvas'); ?>
		<?php wp_head(); ?>

		<!-- Google Analytics -->
		<script>
		 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		 	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		 	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		 })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		 ga('create', 'UA-59476152-1', 'auto');
		 ga('require', 'displayfeatures');
		 ga('require', 'linkid', 'linkid.js');
		 ga('send', 'pageview');
		</script>
		<!-- End Google Analytics -->
	</head>

	<body <?php body_class(); ?>>
		<div class="pl-circles" id="loftloader-wrapper">
        	<div class="loader">
          	<span></span>
        	</div>
      	</div>

		<!-- Facebook SDK -->
		<div id="fb-root"></div>
		<script>
			(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.5&appId=937381176315978";
			fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
		<!-- /Facebook SDK -->