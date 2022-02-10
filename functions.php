<?php
/**
 * <title>タグを出力する
 */
add_theme_support( 'title-tag' );


/**
 * タイトルタグの区切り文字をエン・ダッシュから縦線に変更する
 */
add_filter('document_title_separator', 'my_document_title_separator');
function my_document_title_separator($separator){
    $separator = '|';
    return $separator;
}

/**
 * タイトルタグのテキストを変更する
 */
add_filter('document_title_parts', 'my_document_title_parts');
function my_document_title_parts($title){
    if (is_home()) {
        unset($title['tagline']); // タグラインを削除
        $title['title'] = '福井中央公民館test'; //テキストを変更
    }
    return $title;
}

/**
* アイキャッチ画像を使用可能にする
*/
add_theme_support( 'post-thumbnails' );

/**
* カスタムメニュー機能を使用可能にする
*/
add_theme_support( 'menus' );

/**
 * コメントの項目を変更する
 */
add_filter('comment_form_default_fields', 'my_comment_form_default_fields');
function my_comment_form_default_fields( $args ) {
    $args['author'] = ''; // 「名前」を削除
    $args['email'] = ''; // 「メールアドレス」を削除
    $args['url'] = ''; // 「サイト」を削除
    return $args;
}
/**
 * 特定のページでは自動整形機能を停止する
 */
//  add_action( 'wp', 'my_wpautop' );
//  function my_wpautop() {
//      if ( is_page('contact') ) {
//          remove_filter('the_content', 'wpautop');
//      }
//  }

 /*すべての投稿の自動整形機能を無効化*/
remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');



 //サイトマップにnoindex設定を反映させる
add_filter('wp_sitemaps_posts_query_args', 'wp_sitemaps_posts_query_args_noindex_custom');
if ( !function_exists( 'wp_sitemaps_posts_query_args_noindex_custom' ) ):
function wp_sitemaps_posts_query_args_noindex_custom($args){
  $args['post__not_in'] = get_noindex_post_ids();
  return $args;
}
endif;

//サイトマップにカテゴリー・タグのnoindex設定を反映させる
add_filter('wp_sitemaps_taxonomies_query_args', 'wp_sitemaps_taxonomies_query_args_noindex_custom');
if ( !function_exists( 'wp_sitemaps_taxonomies_query_args_noindex_custom' ) ):
function wp_sitemaps_taxonomies_query_args_noindex_custom($args){
  //カテゴリーの除外
  $category_ids = get_noindex_category_ids();
  if (($args['taxonomy'] == 'category') && $category_ids) {
    $args['exclude'] = $category_ids;
  }

  //タグの除外
  $tag_ids = get_noindex_tag_ids();
  if (($args['taxonomy'] == 'post_tag') && $tag_ids) {
    $args['exclude'] = $tag_ids;
  }
  return $args;
}
endif;

//サイトマップにカテゴリー・タグのnoindex設定を反映させる
add_filter('wp_sitemaps_taxonomies', 'wp_sitemaps_taxonomies_custum');
if ( !function_exists( 'wp_sitemaps_taxonomies_custum' ) ):
function wp_sitemaps_taxonomies_custum( $taxonomies ) {
  //サイトマップにカテゴリーを出力しない
  if (is_category_page_noindex()) {
    unset( $taxonomies['category'] );
  }

  //サイトマップにタグを出力しない
  if (is_tag_page_noindex()) {
    unset( $taxonomies['post_tag'] );
  }

  return $taxonomies;
}
endif;

//サイトマップにその他のアーカイブのnoindex設定を反映する
add_filter('wp_sitemaps_add_provider', 'wp_sitemaps_add_provider_custom', 10, 2);
if ( !function_exists( 'wp_sitemaps_add_provider_custom' ) ):
function wp_sitemaps_add_provider_custom( $provider, $name ) {
  if ( is_other_archive_page_noindex() && 'users' === $name ) {
      return false;
  }

  return $provider;
}
endif;


function add_stylesheet() {
    wp_enqueue_style(
        'reset',
        get_template_directory_uri().'/css/reset.css',
        array(), // これより先に読むCSSはないので空の配列
        '1.0',
        false // headタグ内に出力
    );
    wp_enqueue_style(
        'main',
        get_template_directory_uri().'/css/style.css',
        array('slick'),
        '1.0',
        false
    );
    wp_enqueue_style(
        'slick',
        'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css',
        array('reset'),
        '1.0',
        false
    );
    wp_enqueue_style(
        'main',
        get_template_directory_uri().'/css/style.css',
        array('modal'),
        '1.0',
        false
    );
    wp_enqueue_style(
        'modal',
        'https://cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/css/modaal.min.css',
        array('reset'),
        '1.0',
        false
    );
  }
  add_action('wp_enqueue_scripts', 'add_stylesheet');


  function add_script(){
    wp_enqueue_script(
        'slick-min',
        'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',
        array(),
        '1.0',
        true
    );
    wp_enqueue_script(
        'slider',
        get_template_directory_uri().'/js/slick.js',
        array('slick-min'),
        '1.0',
        true
    );
    wp_enqueue_script(
        'navigation',
        get_template_directory_uri().'/js/navigation.js',
        array(),
        '1.0',
        true
    );
    wp_enqueue_script(
        'modaal-min',
        'https://cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/js/modaal.min.js',
        array(),
        '1.0',
        true
    );
    wp_enqueue_script(
        'modal',
        get_template_directory_uri().'/js/modal.js',
        array('modaal-min'),
        '1.0',
        true
    );
  }
  add_action('wp_enqueue_scripts','add_script');

  
// functions.php
function the_pagination() {
  global $wp_query;
  if ( $wp_query->max_num_pages <= 1 )
  return;
  echo paginate_links( array(
  'format' => '?paged=%#%',
  'current' => max( 1, get_query_var('paged') ),
  'total' => $wp_query->max_num_pages,
  'prev_text'    => '&lt;',
  'next_text'    => '&gt;',
  'type' => 'list',
  'end_size' => 3,
  'mid_size' => 3
  ) );
}


  // index.php
  add_filter( 'parse_query', 'parse_query' );
  function parse_query( $query ) {
      if ( get_query_var( 'post_type' ) == 'news' ) {
          $query->set( 'posts_per_page', 12 );
      }
      if ( get_query_var( 'post_type' ) == 'ownersvoice' ) {
        $query->set( 'posts_per_page', 12 );
    }

  }

//タクソノミー選択画面で一つだけしか選択できないようにする。
// hoge_taxonomy の部分はタクソノミー名
add_action( 'admin_print_footer_scripts', 'select_to_radio_hoge_taxonomy' );
function select_to_radio_hoge_taxonomy() {
    ?>
    <script type="text/javascript">
    jQuery( function( $ ) {
        // 投稿画面
        $( '#taxonomy-voice_category input[type=checkbox]' ).each( function() {
            $( this ).replaceWith( $( this ).clone().attr( 'type', 'radio' ) );
        } );

        // 一覧画面
        var hoge_taxonomy_checklist = $( '.voice_category-checklist input[type=checkbox]' );
        hoge_taxonomy_checklist.click( function() {
            $( this ).parents( '.voice_category-checklist' ).find( ' input[type=checkbox]' ).attr( 'checked', false );
            $( this ).attr( 'checked', true );
        } );
    } );
    </script>
    <?php
}