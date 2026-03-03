<?php
// ==========================================================================
// WordPress テーマの基本設定
// ==========================================================================
function my_theme_setup() {
    // アイキャッチ画像を有効化
    add_theme_support('post-thumbnails');

    // タイトルタグ自動生成を有効化
    add_theme_support('title-tag');

    // RSSフィードリンクを自動生成
    add_theme_support('automatic-feed-links');

    // HTML5 マークアップのサポート（フォーム、コメント、ギャラリーなど）
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    // ウィジェットの部分的なリフレッシュを有効化
    add_theme_support('customize-selective-refresh-widgets');
}
add_action('after_setup_theme', 'my_theme_setup');

// ==========================================================================
// スクリプトとスタイルのエンキュー
// ==========================================================================
function enqueue_custom_scripts() {
  // Google Fonts のプリロードとスタイルシートの読み込み
  wp_enqueue_style(
      'google-fonts',
      'https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Noto+Sans+JP:wght@100..900&display=swap',
      array(),
      null
  );

  // SwiperのCSS
  wp_enqueue_style(
      'swiper-style',
      'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css',
      array(),
      null
  );

  // 独自のCSSスタイルシートの読み込み（ファイル更新でバージョン更新＝キャッシュバスティング）
  $style_path = get_theme_file_path('/assets/css/style.css');
  wp_enqueue_style(
    'custom-style',
    get_theme_file_uri('/assets/css/style.css'),
    array(),
    file_exists($style_path) ? (string) filemtime($style_path) : wp_get_theme()->get('Version')
  );

  // Rellax.jsの読み込み
  wp_enqueue_script(
      'rellax-script',
      'https://unpkg.com/rellax@latest/rellax.min.js',
      array(),
      null,
      true // deferを指定
  );

  // SwiperのJS
  wp_enqueue_script(
      'swiper-script',
      'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js',
      array(),
      null,
      true // deferを指定
  );

  // 独自のJavaScriptファイルの読み込み（ファイル更新でバージョン更新＝キャッシュバスティング）
  $script_path = get_theme_file_path('/assets/js/script.js');
  wp_enqueue_script(
      'custom-script',
      get_theme_file_uri('/assets/js/script.js'),
      array(),
      file_exists($script_path) ? (string) filemtime($script_path) : wp_get_theme()->get('Version'),
      true // deferを指定
  );
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

// ヘッダーへのプリロードやpreconnectの挿入
function enqueue_preload_headers() {
  echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
  echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
  echo '<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@700&display=swap" rel="preload" as="style" fetchpriority="high">' . "\n";
  echo '<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@700&display=swap" rel="stylesheet" media="print" onload="this.media=\'all\'">' . "\n";
}
add_action('wp_head', 'enqueue_preload_headers');

// ==========================================================================
// お問い合わせフォームの自動フォーマット設定の無効化
// ==========================================================================
function wpcf7_autop_return_false() {
  // Contact Form 7 のフォームで自動的に挿入される <p> タグや <br> タグを無効化
  return false;
}
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
// テーマサポートの機能を削減
function minimal_theme_setup() {
  remove_theme_support('automatic-feed-links');
  remove_theme_support('title-tag');
  remove_theme_support('post-thumbnails');
  remove_theme_support('custom-background');
  remove_theme_support('custom-header');
  remove_theme_support('widgets');
  remove_theme_support('editor-styles');
}
add_action('after_setup_theme', 'minimal_theme_setup');

// WordPressの不要なスクリプト・スタイルを削除
function remove_unused_scripts_styles() {
  // GutenbergブロックエディターのCSSを削除
  wp_dequeue_style('wp-block-library');

  // 絵文字関連のスクリプトを削除
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('wp_print_styles', 'print_emoji_styles');

  // jQueryの読み込みを削除（CF7がjQueryを必要としない場合）
  wp_deregister_script('jquery');
}
add_action('wp_enqueue_scripts', 'remove_unused_scripts_styles', 99);


// 不要な管理メニューを削除
function remove_admin_menus() {
  remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'remove_admin_menus');


// タイトルタグの自動生成を有効化
add_action( 'after_setup_theme', function() {
	add_theme_support( 'title-tag' );
} );
