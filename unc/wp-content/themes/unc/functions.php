<?php
// ▼投稿画面用CSS読み込み
//-----------------------------------------------------
add_editor_style();

// ▼アイキャッチ項目表示
//-----------------------------------------------------
add_theme_support('post-thumbnails');

// ▼使用関数設定
require_once locate_template('include/function-list.php');
// ▼カスタム投稿タイプ設定
require_once locate_template('include/custom-post-type.php');
// ▼ダッシュボードカスタマイズ
require_once locate_template('include/custom-dashboard.php');
// ▼リストカスタマイズ
require_once locate_template('include/custom-post-list.php');
// ▼WP_HEADカスタマイズ
require_once locate_template('include/custom-post-list.php');
// ▼項目コンバート
require_once locate_template('include/convert_text.php');
// ▼テーマ関数
require_once locate_template('include/functions_theme.php');


// ▼パンクズ表示
function get_breadcrumb(){
	global $post;
	$breadcrumb = '';
	$breadcrumb .= '<li><a href="'.home_url().'">HOME</a></li>';

	// CATEGORY
	if (is_category()){
		// リダイレクトさせる為処理無し
	// ARCHIVE
	} elseif(is_archive()) {
		$tmp = retParentPage($post->post_type);
		$breadcrumb .= '<li>'.$tmp[0].'</li>';
	// SINGLE
	} elseif(is_single()) {

		$id = $post->ID;
		$post_type = $post->post_type;

		if ($post_type == 'post') {
			$breadcrumb .= '<li><a href="'.home_url('information').'">UNC INFORMATION</a></li>';
		} else {
			$tmp = retParentPage($post->post_type);
			$breadcrumb .= '<li><a href="'.home_url($tmp[1]).'">'.$tmp[0].'</a></li>';
		}

		$title = get_the_title();
		$breadcrumb .= '<li>'.$title.'</li>'."\n";

	// ▼FRONT PAGE
	} elseif (is_front_page()) {

	// ▼PAGE
	} elseif(is_page()) {
		$breadcrumb .= '<li>'.get_field('title').'</li>';
	// ▼404
	} elseif(is_404()) {
		$breadcrumb .= '<li>404 NOTFOUND</li>';
	}

	return $breadcrumb;
}

// ▼post typeから上層ページを取得
function retParentPage($post_type) {
	$ret = array();
	switch($post_type) {
		case 'live':
			$ret[] = 'LINE-UP';
			$ret[] = 'live';
			break;
		case 'food':
			$ret[] = 'FOOD';
			$ret[] = 'food';
			break;
		case 'workshop':
			$ret[] = 'WORKSHOP';
			$ret[] = 'workshop';
			break;
		case 'market':
			$ret[] = 'MARKET';
			$ret[] = 'market';
			break;
		case 'artwork':
			$ret[] = 'ARTWORK';
			$ret[] = 'artwork';
			break;
	}
	return $ret;
}




