<?php

// function enqueue_name(){
//     // スタイルシート
//     wp_enqueue_style('style_name', get_template_directory_uri() . './assets/css/styles.css', array(), '1.0.0');
//     // スクリプトファイル
//     wp_enqueue_script('script_jquery', get_template_directory_uri() . './assets/js/script.js', array('jquery'), '1.0.0', true);
// }
// add_action('wp_enqueue_scripts','enqueue_name');


function my_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'my_setup' );

// Google Fontsのpreconnectリンクを追加する
function add_google_fonts_preconnect() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
}
add_action( 'wp_head', 'add_google_fonts_preconnect', 0 );

// css読み込み
function my_css() {
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Zen+Kaku+Gothic+New:wght@300;400;500;700;900&display=swap', array(), null );
	wp_enqueue_style( 'slick-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.0.0', 'all');
	wp_enqueue_style( 'slick-theme-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array(), '1.0.0', 'all');
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.1', 'all' );
}
add_action( 'wp_enqueue_scripts', 'my_css' );

// JS読み込み
function my_script() {
	wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.6.0.js', "", "1.1.1");
	wp_enqueue_script( 'slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', "", "1.1.1");
	wp_enqueue_script( 'assets', get_template_directory_uri() . '/assets/js/script.min.js', array( 'jquery' ), '1.0.1');

    if(is_front_page()){
        wp_enqueue_script( 'index', get_template_directory_uri() . '/assets/js/index.min.js', array( 'jquery' ), '1.0.1');
    }
    if(is_page('recruit')){
        wp_enqueue_script( 'recruit', get_template_directory_uri() . '/assets/js/recruit.min.js', array( 'jquery' ), '1.0.1');
    }
}
add_action( 'wp_enqueue_scripts', 'my_script' );

// サイドメニューを非表示
function remove_menus() {
	remove_menu_page( 'edit.php' ); // 投稿
}
add_action( 'admin_menu', 'remove_menus', 999 );

//reCAPTCHA
function load_recaptcha_js(){
 if (!is_page(array("recruit","confirm"))){
  wp_deregister_script( 'google-recaptcha' );
 }
}
add_action( 'wp_enqueue_scripts', 'load_recaptcha_js',100 );

//本体の更新通知を非表示
add_filter("pre_site_transient_update_core", "__return_null");
//プラグインの更新通知を非表示
add_filter("pre_site_transient_update_plugins", "__return_null");
//テーマの更新通知を非表示
add_filter("pre_site_transient_update_themes", "__return_null");