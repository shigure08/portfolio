<?php
//テーマのセットアップ
// HTML5でマークアップさせる
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
// Feedのリンクを自動で生成する
add_theme_support( 'automatic-feed-links' );
//アイキャッチ画像を使用する設定
add_theme_support( 'post-thumbnails' );
//カスタムメニュー
register_nav_menu( 'header__nav',  ' ヘッダーナビゲーション ' );
register_nav_menu( 'footer__nav',  ' フッターナビゲーション ' );
//メニュー用jsの読み込み
/*
function ptw_enqueue_scripts(){
  // スタイルシートディレクトリーを取得する。
  wp_enqueue_style( 'main_css', get_stylesheet_directory_uri() . '/css/style.css', "", '1.0.0' );
  wp_enqueue_style('fontawesome','https://use.fontawesome.com/releases/v5.6.1/css/all.css');
  
  wp_deregister_script( 'jquery');
  wp_enqueue_script( 'jquery', 
    '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', 
    array(), 
    '3.3.1', );
  wp_enqueue_script( 'loading', get_template_directory_uri() . '/js/loading.js');
 }
add_action('wp_enqueue_scripts','ptw_enqueue_scripts');
 */

function sample_scripts() {
  wp_enqueue_style( 'destyle', get_template_directory_uri() . '/css/destyle.css' );
  wp_enqueue_style('fontawesome','https://use.fontawesome.com/releases/v5.6.1/css/all.css');
  wp_enqueue_style('sample-style' , get_stylesheet_uri() );
  wp_deregister_script( 'jquery');
  wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), '3.3.1', );
  wp_enqueue_script( 'loading', get_template_directory_uri() . '/js/loading.js');
  wp_enqueue_script( 'toggle', get_template_directory_uri() . '/js/toggle.js');
}
add_action('wp_enqueue_scripts', 'sample_scripts');

define('LOGO_SECTION', 'logo_section'); //セクションIDの定数化
define('LOGO_IMAGE_URL', 'logo_image_url'); //セッティングIDの定数化
function themename_theme_customizer( $wp_customize ) {
 $wp_customize->add_section( LOGO_SECTION , array(
 'title' => 'ロゴ画像', //セクション名
 'priority' => 30, //カスタマイザー項目の表示順
 'description' => 'サイトのロゴ設定。', //セクションの説明
 ) );
 
 $wp_customize->add_setting( LOGO_IMAGE_URL );
 $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, LOGO_IMAGE_URL, array(
 'label' => 'ロゴ', //設定ラベル
 'section' => LOGO_SECTION, //セクションID
 'settings' => LOGO_IMAGE_URL, //セッティングID
 'description' => '画像をアップロードするとヘッダーにあるデフォルトのサイト名と入れ替わります。画像の大きさは70×70が推奨です。',
 ) ) );
 
}
add_action( 'customize_register', 'themename_theme_customizer' );//カスタマイザーに登録
 
//ロゴイメージURLの取得
function get_the_logo_image_url(){
 return esc_url( get_theme_mod( LOGO_IMAGE_URL ) );
}

//フッターウィジット
register_sidebar(array('name' => 'フッター１'));
register_sidebar(array('name' => 'フッター２'));
register_sidebar(array('name' => 'フッター３'));
register_sidebar(array('name' => 'フッター４'));



    /* SNSテーマカスタマイザー
    ---------------------------------------------------------- */
    add_action( 'customize_register', 'theme_customize' );

    function theme_customize($wp_customize){

    	//SNSアカウント設定
    	$wp_customize->add_section( 'sns_section', array(
    		'title' => 'SNSアカウント設定',
    		'priority' => 160,
    		'description' => 'SNSアカウントをお持ちの場合は以下に入力してください。',
    	));

    		//Facebook
    		$wp_customize->add_setting( 'facebook_display', array(
    			'type'  => 'option',
    		));
    		$wp_customize->add_control( 'facebook_display', array(
    			'section' => 'sns_section',
    			'settings' => 'facebook_display',
    			'label' => 'Facebookアイコンを表示する',
    			'type' => 'checkbox'
    		));
    		$wp_customize->add_setting( 'facebook_url', array(
    			'type'  => 'option',
    		));
    		$wp_customize->add_control( 'facebook_url', array(
    			'section' => 'sns_section',
    			'settings' => 'facebook_url',
    			'label' => 'FacebookアカウントのURL',
    			'type' => 'text'
    		));

    		//Twitter
    		$wp_customize->add_setting( 'twitter_display', array(
    			'type'  => 'option',
    		));
    		$wp_customize->add_control( 'twitter_display', array(
    			'section' => 'sns_section',
    			'settings' => 'twitter_display',
    			'label' => 'Twitterアイコンを表示する',
    			'type' => 'checkbox'
    		));
    		$wp_customize->add_setting( 'twitter_url', array(
    			'type'  => 'option',
    		));
    		$wp_customize->add_control( 'twitter_url', array(
    			'section' => 'sns_section',
    			'settings' => 'twitter_url',
    			'label' => 'TwitterアカウントのURL',
    			'type' => 'text'
    		));

    		//Instagram
    		$wp_customize->add_setting( 'instagram_display', array(
    			'type'  => 'option',
    		));
    		$wp_customize->add_control( 'instagram_display', array(
    			'section' => 'sns_section',
    			'settings' => 'instagram_display',
    			'label' => 'Instagramアイコンを表示する',
    			'type' => 'checkbox'
    		));
    		$wp_customize->add_setting( 'instagram_url', array(
    			'type'  => 'option',
    		));
    		$wp_customize->add_control( 'instagram_url', array(
    			'section' => 'sns_section',
    			'settings' => 'instagram_url',
    			'label' => 'InstagramアカウントのURL',
    			'type' => 'text'
    		));

    		//Youtube
    		$wp_customize->add_setting( 'youtube_display', array(
    			'type'  => 'option',
    		));
    		$wp_customize->add_control( 'youtube_display', array(
    			'section' => 'sns_section',
    			'settings' => 'youtube_display',
    			'label' => 'YouTubeアイコンを表示する',
    			'type' => 'checkbox'
    		));
    		$wp_customize->add_setting( 'youtube_url', array(
    			'type'  => 'option',
    		));
    		$wp_customize->add_control( 'youtube_url', array(
    			'section' => 'sns_section',
    			'settings' => 'youtube_url',
    			'label' => 'YouTubeアカウントのURL',
    			'type' => 'text'
			));
			//画像
			$wp_customize->add_section( 'img_section', array(
				'title' => 'メインビジュアル画像', //セクションのタイトル
				'priority' => 79, //セクションの位置
				'description' => '画像をアップロードしてください。', //セクションの説明
			));
	
				$wp_customize->add_setting( 'min_img' ); //設定項目を追加
				$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_img', array(
					'label' => 'メインビジュアル画像', //設定項目のタイトル
					'section' => 'img_section', //追加するセクションのID
					'settings' => 'min_img', //追加する設定項目のID
					'description' => 'メインビジュアル画像を設定してください。', //設定項目の説明
				)));
//メインビジュアルYouTube設定
$wp_customize->add_section( 'youtube_section', array(
	'title' => 'メインビジュアルYouTube設定',
	'priority' => 80,
	'description' => 'メインビジュアルにYouTubeを設置する場合は、以下の設定を入力してください。設定しない場合はすべてを空欄にすると動画の領域が消えます。',
));

	$wp_customize->add_setting( 'youtube_id', array(
		'type'  => 'option',
	));
	$wp_customize->add_control( 'youtube_id', array(
		'section' => 'youtube_section',
		'settings' => 'youtube_id',
		'label' => 'YouTube ID(https://www.youtube.com/watch?v=○○○○)の部分',
		'type' => 'text'
	));

	$wp_customize->add_setting( 'youtube_autoplay', array(
		'type'  => 'option',
	));
	$wp_customize->add_control( 'youtube_autoplay', array(
		'section' => 'youtube_section',
		'settings' => 'youtube_autoplay',
		'label' => '自動再生(しない: 0 する: 1)',
		'type' => 'text'
	));

	$wp_customize->add_setting( 'youtube_rel', array(
		'type'  => 'option',
	));
	$wp_customize->add_control( 'youtube_rel', array(
		'section' => 'youtube_section',
		'settings' => 'youtube_rel',
		'label' => '再生終了後に関連動画を表示(しない: 0 する: 1)',
		'type' => 'text'
	));

	$wp_customize->add_setting( 'youtube_volume', array(
		'type'  => 'option',
	));
	$wp_customize->add_control( 'youtube_volume', array(
		'section' => 'youtube_section',
		'settings' => 'youtube_volume',
		'label' => '音量(ミュート: 0 最大: 100)',
		'type' => 'text'
	));
	}

/* テーマカスタマイザーで設定された画像のURLを取得
    ---------------------------------------------------------- */
    //メインビジュアル画像
    function get_the_min_img_url(){
    	return esc_url( get_theme_mod( 'min_img' ) );
    }
