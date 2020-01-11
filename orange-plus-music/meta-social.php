
		<!--FACEBOOK meta-->
		<meta property="fb:app_id" content="937381176315978">	
		<meta property="og:type" content="<?php if($_SERVER["REQUEST_URI"] == "/"){echo "website";}else{echo "article";}?>">
		<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
		<meta property="fb:pages" content="674295266020542" />

		<?php if (is_single()){ ?>
			<meta property="article:author" content="https://www.facebook.com/yutaka.ishimatsu" />
			<meta property="article:publisher" content="https://www.facebook.com/orangeplusmusic/" />
		<?php }?>		

		<?php 
			global $paged,$page;
			if(is_post_type_archive()){				
				$worksnameogf = get_option( 'works_title' );echo '<meta property="og:title" content="'.$worksnameogf;
				if ($paged >= 2 || $page >= 2){ echo ' - ';show_page_number();echo '">';}else {echo '">';}
			} else if (is_category()){
				$catnameogf = single_cat_title('',false);echo '<meta property="og:title" content="カテゴリー「'.$catnameogf.'」の記事一覧' ;
				if ($paged >= 2 || $page >= 2){ echo ' - ';show_page_number();echo '">';}else {echo '">';}
			} else if (is_tag()){
				$tagnameogf = single_tag_title('',false);echo '<meta property="og:title" content="タグ「'.$tagnameogf.'」の記事一覧' ;
				if ($paged >= 2 || $page >= 2){ echo ' - ';show_page_number();echo '">';}else {echo '">';}
			} else if (is_tax()){
				$catname2ogf = single_cat_title('',false);echo '<meta property="og:title" content="タグ「'.$catname2ogf.'」の記事一覧' ;
				if ($paged >= 2 || $page >= 2){ echo ' - ';show_page_number();echo '">';}else {echo '">';}
			} else if(is_search()){
				$searchkk1ogf =  get_search_query();echo '<meta property="og:title" content="「'.$searchkk1ogf.'」の検索結果' ;
				if ($paged >= 2 || $page >= 2){ echo ' - ';show_page_number();echo '">';}else {echo '">';}
			} else {
				echo '<meta property="og:title" content="';wp_title( '|', true, 'right' ); bloginfo('name');
				if ($paged >= 2 || $page >= 2){ echo ' - ';show_page_number();echo '">';}else {echo '">';}
			}
		?>
		<?php 
			if (is_single()) { 
				if ($post->post_excerpt){ 
					echo '<meta property="og:description" content="'.$post->post_excerpt.'">';
				} else {
					$postsummaryogf = strip_tags($post->post_content);
					$postsummaryogf = str_replace("\n", "", $postsummaryogf);
					$postsummaryogf = mb_substr($postsummaryogf, 0, 100). "…"; 
					echo '<meta property="og:description" content="'.$postsummaryogf.'">';
				}
			} else if (is_post_type_archive()){
				$worksdescogf = get_option( 'works_description' );echo '<meta property="og:description" content="'.$worksdescogf;
				if ($paged >= 2 || $page >= 2){ echo ' - ';show_page_number();echo '">';}else {echo '">';}
			} else if (is_page()){
				$pagemetaogf = esc_html(get_post_meta($post->ID, 'my_description', true));echo '<meta property="og:description" content="'.$pagemetaogf.'">';
			} else if (is_category()){
				$categorymetaogf = trim(strip_tags(category_description()));echo '<meta property="og:description" content="'.$categorymetaogf;
				if ($paged >= 2 || $page >= 2){ echo ' - ';show_page_number();echo '">';}else {echo '">';}
			} else if (is_tag()){
				$tagmetaogf = trim(strip_tags(tag_description()));echo '<meta property="og:description" content="'.$tagmetaogf;
				if ($paged >= 2 || $page >= 2){ echo ' - ';show_page_number();echo '">';}else {echo '">';}
			} else if (is_tax()){
				$categorymeta2ogf = trim(strip_tags(category_description()));echo '<meta property="og:description" content="'.$categorymeta2ogf;
				if ($paged >= 2 || $page >= 2){ echo ' - ';show_page_number();echo '">';}else {echo '">';}
			} else if (is_front_page()){ 
				echo '<meta property="og:description" content="';bloginfo('description');global $paged,$page;
				if ($paged >= 2 || $page >= 2){ echo ' - ';show_page_number();echo '">';}else {echo '">';}
			} else if (is_search()){
				$searchkk2ogf =  get_search_query();echo '<meta property="og:description" content="「'.$searchkk2ogf.'」の検索結果一覧です。';
				if ($paged >= 2 || $page >= 2){ echo ' - ';show_page_number();echo '">';}else {echo '">';}
			} else {
				echo '<meta property="og:description" content="'; bloginfo('description'); echo '">';
			}
		?>
		<?php 
			if (is_single() || is_page()) {
				echo '<meta property="og:url" content="';the_permalink();echo '" />';
			} else if (is_home()) {
				echo '<meta property="og:url" content="';echo esc_url( home_url() );echo '" />';
			} else if (is_search()){
				$searchkk2ogff =  get_search_query();
				echo '<meta property="og:url" content="';echo esc_url( home_url() );echo '/?s='.$searchkk2ogff.'" />';
			} else {
				echo '<meta property="og:url" content="';echo home_url().$_SERVER['REQUEST_URI'];echo '" />';
			}
		?>
		<?php $str_fb = $post->post_content;$searchPattern_fb = '/<img.*?src=(["\'])(.+?)\1.*?>/i';
			if (is_single()){
				if (has_post_thumbnail()){
					$image_id_fb = get_post_thumbnail_id();
     				$image_fb = wp_get_attachment_image_src( $image_id_fb, 'full');
     				$image_logo_fb = get_template_directory_uri();
     				echo '<meta property="og:image" content="'.$image_fb[0].'">';echo "\n";
				} else if ( preg_match( $searchPattern_fb, $str_fb, $imgurl_fb ) && !is_archive()) {
     				echo '<meta property="og:image" content="'.$imgurl_fb[2].'">';echo "\n";
				} else {
     				echo '<meta property="og:image" content="https://orangeplus.me/wp-content/themes/orange-plus-music/images/logo.png">';echo "\n";
				}
				} else {
     				echo '<meta property="og:image" content="https://orangeplus.me/wp-content/themes/orange-plus-music/images/logo.png">';echo "\n";
			}
		?>
		<!-- /FACEBOOK meta-->
		

		<!--TWITTER meta-->
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:site" content="@orange_plus_me">
		<meta name="twitter:creator" content="@orange_plus_me">
		<meta name="twitter:domain" content="<?php echo home_url('/'); ?>">

		<?php 
			global $paged,$page;
			if(is_post_type_archive()){				
				$worksnameogt = get_option( 'works_title' );echo '<meta name="twitter:title" content="'.$worksnameogt;
				if ($paged >= 2 || $page >= 2){ echo ' - ';show_page_number();echo '">';}else {echo '">';}
			} else if (is_category()){
				$catnameogt = single_cat_title('',false);echo '<meta name="twitter:title" content="カテゴリー「'.$catnameogt.'」の記事一覧' ;
				if ($paged >= 2 || $page >= 2){ echo ' - ';show_page_number();echo '">';}else {echo '">';}
			} else if (is_tag()){
				$tagnameogt = single_tag_title('',false);echo '<meta name="twitter:title" content="タグ「'.$tagnameogt.'」の記事一覧' ;
				if ($paged >= 2 || $page >= 2){ echo ' - ';show_page_number();echo '">';}else {echo '">';}
			} else if (is_tax()){
				$catname2ogt = single_cat_title('',false);echo '<meta name="twitter:title" content="タグ「'.$catname2ogt.'」の記事一覧' ;
				if ($paged >= 2 || $page >= 2){ echo ' - ';show_page_number();echo '">';}else {echo '">';}
			} else if(is_search()){
				$searchkk1ogt =  get_search_query();echo '<meta name="twitter:title" content="「'.$searchkk1ogt.'」の検索結果' ;
				if ($paged >= 2 || $page >= 2){ echo ' - ';show_page_number();echo '">';}else {echo '">';}
			} else {
				echo '<meta name="twitter:title" content="';wp_title( '|', true, 'right' ); bloginfo('name');
				if ($paged >= 2 || $page >= 2){ echo ' - ';show_page_number();echo '">';}else {echo '">';}
			}
		?>
		<?php 
			if (is_single()) { 
				if ($post->post_excerpt){ 
					echo '<meta name="twitter:description" content="'.$post->post_excerpt.'">';
				} else {
					$postsummaryogt = strip_tags($post->post_content);
					$postsummaryogt = str_replace("\n", "", $postsummaryogt);
					$postsummaryogt = mb_substr($postsummaryogt, 0, 100). "…"; 
					echo '<meta name="twitter:description" content="'.$postsummaryogt.'">';
				}
			} else if (is_post_type_archive()){
				$worksdescogt = get_option( 'works_description' );echo '<meta name="twitter:description" content="'.$worksdescogt;
				if ($paged >= 2 || $page >= 2){ echo ' - ';show_page_number();echo '">';}else {echo '">';}
			} else if (is_page()){
				$pagemetaogt = esc_html(get_post_meta($post->ID, 'my_description', true));echo '<meta name="twitter:description" content="'.$pagemetaogt.'">';
			} else if (is_category()){
				$categorymetaogt = trim(strip_tags(category_description()));echo '<meta name="twitter:description" content="'.$categorymetaogt;
				if ($paged >= 2 || $page >= 2){ echo ' - ';show_page_number();echo '">';}else {echo '">';}
			} else if (is_tag()){
				$tagmetaogt = trim(strip_tags(tag_description()));echo '<meta name="twitter:description" content="'.$tagmetaogt;
				if ($paged >= 2 || $page >= 2){ echo ' - ';show_page_number();echo '">';}else {echo '">';}
			} else if (is_tax()){
				$categorymeta2ogt = trim(strip_tags(category_description()));echo '<meta name="twitter:description" content="'.$categorymeta2ogt;
				if ($paged >= 2 || $page >= 2){ echo ' - ';show_page_number();echo '">';}else {echo '">';}
			} else if (is_front_page()){ 
				echo '<meta name="twitter:description" content="';bloginfo('description');global $paged,$page;
				if ($paged >= 2 || $page >= 2){ echo ' - ';show_page_number();echo '">';}else {echo '">';}
			} else if (is_search()){
				$searchkk2ogt =  get_search_query();echo '<meta name="twitter:description" content="「'.$searchkk2ogt.'」の検索結果一覧です。';
				if ($paged >= 2 || $page >= 2){ echo ' - ';show_page_number();echo '">';}else {echo '">';}
			} else {
				echo '<meta name="twitter:description" content="'; bloginfo('description'); echo '">';
			}
		?>
		<?php 
			if (is_single() || is_page()) {
				echo '<meta name="twitter:url" content="';the_permalink();echo '" />';
			} else if (is_home()) {
				echo '<meta name="twitter:url" content="';echo esc_url( home_url() );echo '" />';
			} else if (is_search()){
				$searchkk2ogtt =  get_search_query();
				echo '<meta name="twitter:url" content="';echo esc_url( home_url() );echo '/?s='.$searchkk2ogtt.'" />';
			} else {
				echo '<meta name="twitter:url" content="';echo home_url().$_SERVER['REQUEST_URI'];echo '" />';
			}
		?>		
		<?php $str_tw = $post->post_content;$searchPattern_tw = '/<img.*?src=(["\'])(.+?)\1.*?>/i';
			if (is_single()){
				if (has_post_thumbnail()){
					$image_id_tw = get_post_thumbnail_id();
     				$image_tw = wp_get_attachment_image_src( $image_id_tw, 'full');
     				echo '<meta name="twitter:image" content="'.$image_tw[0].'">';echo "\n";
				} else if ( preg_match( $searchPattern_tw, $str_tw, $imgurl_tw ) && !is_archive()) {
     				echo '<meta name="twitter:image" content="'.$imgurl_tw[2].'">';echo "\n";
				} else {
     				echo '<meta name="twitter:image" content="https://orangeplus.me/wp-content/themes/orange-plus-music/images/logo.png">';echo "\n";
				}
				} else {
     				echo '<meta name="twitter:image" content="https://orangeplus.me/wp-content/themes/orange-plus-music/images/logo.png">';echo "\n";
			}
		?>
		<!-- /TWITTE meta-->