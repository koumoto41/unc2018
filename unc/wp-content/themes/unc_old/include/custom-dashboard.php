<?php
//-----------------------------------------------------
// ■管理画面カスタマイズ
//-----------------------------------------------------

// ▼ダッシュボードウィジェットの項目非表示
function remove_dashboard_widgets() {
	global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
}
add_action('wp_dashboard_setup', 'remove_dashboard_widgets');

// ▼管理上部　メニューバーの項目の非表示
function remove_top_menubar( $wp_admin_bar ) {
	$wp_admin_bar->remove_node('updates');		// アップデート通知
	$wp_admin_bar->remove_node('wp-logo');		// Wpロゴ
	$wp_admin_bar->remove_node('comments');		// コメント
	$wp_admin_bar->remove_node('new-content');	// 新規投稿ボタン
	/* 管理バー右の部分 */
	$wp_admin_bar->remove_node('edit-profile');	// プロフィール編集
	$wp_admin_bar->remove_node('user-info');	// ユーザー
}
add_action( 'admin_bar_menu', 'remove_top_menubar', 1000 );

// ▼管理下部　フッター「WordPressリンク」を変更
function remove_footer_link () {
	echo '';
}
add_filter('admin_footer_text', 'remove_footer_link');

// ▼クイック編集非表示
function hide_inline_edit_link() {
	echo '<style type="text/css"><!-- span.inline { display: none; } --></style>';
}
add_action( 'admin_print_styles-edit.php', 'hide_inline_edit_link' );


//-----------------------------------------------------
// ■サイドバーカスタマイズ
//-----------------------------------------------------

// ▼メニューの順番
function custom_menu_order($menu_ord) {
	if (!$menu_ord) return true;

	return array(
		'index.php',
		'separator1',
		'edit.php',
		'edit.php?post_type=live',
		'edit.php?post_type=workshop',
		'edit.php?post_type=food',
		'edit.php?post_type=market',
		'edit.php?post_type=artwork',
		'separator2',
		'upload.php',
		'link-manager.php',
		'edit.php?post_type=page',
		'edit-comments.php',
		'separator3',
		'themes.php',
		'plugins.php',
		'users.php',
		'tools.php',
		'options-general.php',
		'separator-last',
	);
}
add_filter('custom_menu_order', 'custom_menu_order'); // Activate custom_menu_order
add_filter('menu_order', 'custom_menu_order');



//-----------------------------------------------------
// ■投稿画面カスタマイズ
//-----------------------------------------------------

// ▼カテゴリ新規追加、よく使うもの消去
function hide_category_tabs_adder() {
	global $pagenow;
	global $post_type;
	if (is_admin() && ($pagenow=='post-new.php' || $pagenow=='post.php' || $post_type=='article') ){
		echo '<style type="text/css">
		#category-tabs, #category-adder, #genre-tabs {display:none;}
		#xxx-tabs, #xxx-adder {display:none;}

		.categorydiv .tabs-panel {padding: 0 !important; background: none; border: none !important;}
		</style>';
	}
	echo '<style type="text/css">
		<!--
			#article-kind-tabs {display:none;}
			#architect-type-tabs {display:none;}
			#ivent-type-tabs {display:none;}
		-->
	</style>';
}
add_action( 'admin_head', 'hide_category_tabs_adder' );


// ▼エディタカスタマイズ
function custom_editor_settings( $initArray ){

	$initArray['block_formats']    = '見出し1=h2; 見出し2=h3; 見出し3=h4; 段落=p; グループ=div;';
	$initArray['fontsize_formats'] = '標準=1.0em 少し小さい=0.8em 少し大きい=1.5em 大きい=2.0em';

	return $initArray;
}
add_filter( 'tiny_mce_before_init', 'custom_editor_settings' );

function remove_hwstring_from_image_tag( $html, $id, $alt, $title, $align, $size ) {
	list( $img_src, $width, $height ) = image_downsize($id, $size);
	$hwstring = image_hwstring( $width, $height );
	$html = str_replace( $hwstring, '', $html );
	return $html;
}
add_filter( 'get_image_tag', 'remove_hwstring_from_image_tag', 10, 6 );


?>