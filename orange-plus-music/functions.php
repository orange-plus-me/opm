<?php 
//Pagenation
function pagination($pages = '', $range = 2)
{
     $showitems = ($range * 2)+1;//表示するページ数（５ページを表示）

     global $paged;//現在のページ値
     if(empty($paged)) $paged = 1;//デフォルトのページ

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;//全ページ数を取得
         if(!$pages)//全ページ数が空の場合は、１とする
         {
             $pages = 1;
         }
     }

     if(1 != $pages)//全ページが１でない場合はページネーションを表示する
     {
		 echo "<div class=\"pagenation\">\n";
		 echo "<ul>\n";
		 //Prev：現在のページ値が１より大きい場合は表示
         if($paged > 1) echo "<a href='".get_pagenum_link($paged - 1)."'><li class=\"prev\">&laquo;</li></a>\n";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                //三項演算子での条件分岐
                echo ($paged == $i)? "<li class=\"current-pagenation\"><p>".$i."</p></li>\n":"<a href='".get_pagenum_link($i)."'><li>".$i."</li></a>\n";
             }
         }
		//Next：総ページ数より現在のページ値が小さい場合は表示
		if ($paged < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\"><li class=\"next\">&raquo;</li></a>\n";
		echo "</ul>\n";
		echo "</div>\n";
     }
}

//表示件数

function isFirst() {
    global $wp_query;
    return ($wp_query->current_post === 0);
}

//RSS
add_theme_support( 'automatic-feed-links' );

//RSSにサムネイル
function rss_post_thumbnail($content) {
  global $post;
  if(has_post_thumbnail($post->ID)) {
    $content = '<div>' . get_the_post_thumbnail($post->ID) . '</div>' . get_the_content();
  }
  return $content;
}
add_filter('the_excerpt_rss', 'rss_post_thumbnail');
add_filter('the_content_feed', 'rss_post_thumbnail');

//カスタム投稿タイプ
add_action( 'init', 'register_cpt_work' );

function register_cpt_work() {

    $labels = array( 
        'name' => _x( 'WORKSを投稿', 'work' ),
        'singular_name' => _x( '投稿', 'work' ),
        'add_new' => _x( '新規追加', 'work' ),
        'add_new_item' => _x( 'WORKSを追加', 'work' ),
        'edit_item' => _x( 'WORKSを編集する', 'work' ),
        'new_item' => _x( 'New work', 'work' ),
        'view_item' => _x( 'View work', 'work' ),
        'search_items' => _x( '検索', 'work' ),
        'not_found' => _x( 'まだ投稿がありません。', 'work' ),
        'not_found_in_trash' => _x( 'No work found in Trash', 'work' ),
        'parent_item_colon' => _x( 'Parent work:', 'work' ),
        'menu_name' => _x( 'WORKS', 'work' ),
    );

    $args_cus = array( 
        'labels' => $labels,
        'hierarchical' => true,        
        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields' ,'page-attributes'),        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,                
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'menu_position' => 5,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'page'
    );
    register_post_type( 'work', $args_cus );

    register_taxonomy(
      'work_taxonomy',  
      'work',
      array(
        'label' => 'WORKS TAG',
        'labels' => array(
          'all_items' => 'WORKS TAG一覧',
          'add_new_item' => 'WORKS TAGを追加'
        ),
        'hierarchical' => true
      )
    );
}

//管理画面カスタム投稿にカテゴリ表記
function show_term_area( $defaults ) {$defaults['work_taxonomy'] = 'WORKS TAG';return $defaults;}
add_filter('manage_work_posts_columns', 'show_term_area', 15, 1);
 
function show_term_area_id($column_name, $id) {
if( $column_name == 'work_taxonomy' ) {$terms = $terms = get_the_terms( $id, 'work_taxonomy' );$cnt = 0;
foreach($terms as $var) {echo $cnt != 0 ? ", " : "";echo "<a href=\"" . get_admin_url() . "edit.php?work_taxonomy=" . $var->slug . "&post_type=work" . "\">" . $var->name . "</a>";++$cnt;}}}
add_action('manage_work_posts_custom_column', 'show_term_area_id', 15, 2);

//管理画面の並び替え、日時順
function set_post_types_admin_order( $wp_query ) {
  if (is_admin()) {
    $post_type = $wp_query->query['post_type'];
    if ( $post_type == 'work' ) {
      $wp_query->set('orderby', 'date');
      $wp_query->set('order', 'DESC');
    }
  }
}
add_filter('pre_get_posts', 'set_post_types_admin_order');   

//アイキャッチ画像を有効にする。
add_theme_support( 'post-thumbnails');
add_image_size( 'normal-t',300, 169, true );
add_image_size( 'big-mv',640, 360, true );

//画像の圧縮率改善
add_filter('jpeg_quality', function($arg){return 100;});

//wordpressのバージョン表示消す
remove_action('wp_head','wp_generator');

//メインカラムの横幅
if ( ! isset( $content_width ) ) $content_width = 960;

// favicon表示(管理画面)
function admin_favicon() {
  echo '<link rel="shortcut icon" type="image/x-icon" href="'.get_stylesheet_directory_uri().'/images/favicon.ico" />';
}
add_action('admin_head', 'admin_favicon');

//現在のページ数取得
function show_page_number() {
    global $wp_query;
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $max_page = $wp_query->max_num_pages;
    echo $paged;  
}

//投稿ボタン追加・動画
function add_my_quicktag() { 
?>
<script type="text/javascript">
//QTags.addButton('ID', 'ボタンのラベル', '開始タグ', '終了タグ');
QTags.addButton('movie','Youtube埋め込み','<div class="move">','</div>');
QTags.addButton('h3','h3','<h3>','</h3>');
</script>
<?php
}
add_action('admin_print_footer_scripts','add_my_quicktag');

//---------------------------------------------------------------------------------------------------
//一般設定に項目を追加

function add_contact_info_field( $whitelist_options ) {
    $whitelist_options['general'][] = 'works_title';
    $whitelist_options['general'][] = 'works_description';
    return $whitelist_options;
}
add_filter( 'whitelist_options', 'add_contact_info_field' );

function regist_contact_info_field() {
    add_settings_field( 'works_title', 'WORKS - タイトル', 'display_blog_title', 'general' );
    add_settings_field( 'works_description', 'WORKS - 説明文', 'display_catch_phrase', 'general' );
}
add_action( 'admin_init', 'regist_contact_info_field' );

function display_blog_title() {
    $blog_title = get_option( 'works_title' );
?>
    <input name="works_title" type="text" id="works_title" value="<?php echo esc_html( $blog_title ); ?>" class="regular-text">
<?php
}

function display_catch_phrase() {
    $catch_phrase = get_option( 'works_description' );
?>
    <input name="works_description" type="text" id="works_description" value="<?php echo esc_html( $catch_phrase ); ?>" class="regular-text">
<?php
}

//---------------------------------------------------------------------------------------------------
//特定の固定ページでウィジウィグ不可に
function disable_visual_editor_in_page(){
    global $typenow;
 
    $post_id = $_GET['post'];
    if( $typenow == 'page' ){
        if( $post_id== '2757' ){    // xxxページはビジュアルエディタ禁止
            add_filter('user_can_richedit', 'disable_visual_editor_filter');
        }
    }
}
function disable_visual_editor_filter(){
  return false;
}
add_action('load-post.php', 'disable_visual_editor_in_page');
add_action('load-post-now.php', 'disable_visual_editor_in_page');
?>