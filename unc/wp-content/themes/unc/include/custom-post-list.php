<?php
	/*---------------------------------------------------------------
	ヘッダー変更
	-----------------------------------------------------------------*/

	// ▼LIVEPAGE
	function add_columns_live ($columns) {
		// サムネイル用のスタイル
		echo '<style>
		#title{width:300px;}
		.column-thumb{width:80px;}
		.column-s_flg{width:50px;}
		.column-flg{width:60px;}
		.column-kukaku{width:80px;}
		</style>';

		// 項目追加
		$a = array();
		$a['cb']       = $columns['cb'];
		$a['thumb']    = '<div class="dashicons dashicons-format-image"></div>';
		$a['title']    = 'アーティスト名';
		$a['flg']      = 'NEW!!!';
		$a['stage']     = 'ステージ';
		$a['modified'] = '最終更新日';

		return $a;
	}
	add_filter( 'manage_edit-live_columns', 'add_columns_live' );

	// ▼WORKSHOP
	function add_columns_workshop ($columns) {
		// サムネイル用のスタイル
		echo '<style>
		#title{width:300px;}
		.column-thumb{width:80px;}
		.column-s_flg{width:50px;}
		.column-flg{width:60px;}
		.column-kukaku{width:80px;}
		</style>';

		// 項目追加
		$a = array();
		$a['cb']       = $columns['cb'];
		$a['thumb']    = '<div class="dashicons dashicons-format-image"></div>';
		$a['title']    = 'ワークショップ名';
		$a['flg']      = 'NEW!!!';
		$a['modified'] = '最終更新日';

		return $a;
	}
	add_filter( 'manage_edit-workshop_columns', 'add_columns_workshop' );

	// ▼FOODPAGE ヘッダー変更
	function add_columns_food ($columns) {
		// サムネイル用のスタイル
		echo '<style>
		#title{width:300px;}
		.column-thumb{width:80px;}
		.column-s_flg{width:50px;}
		.column-flg{width:60px;}
		.column-kukaku{width:80px;}
		</style>';

		// 項目追加
		$a = array();
		$a['cb']       = $columns['cb'];
		$a['thumb']    = '<div class="dashicons dashicons-format-image"></div>';
		$a['title']    = '店舗名';
		$a['flg']      = 'NEW!!!';
		$a['modified'] = '最終更新日';

		return $a;
	}
	add_filter( 'manage_edit-food_columns', 'add_columns_food' );

	// ▼MARKETPAGE ヘッダー変更
	function add_columns_market ($columns) {
		// サムネイル用のスタイル
		echo '<style>
		#title{width:300px;}
		.column-thumb{width:80px;}
		.column-s_flg{width:50px;}
		.column-flg{width:60px;}
		.column-kukaku{width:80px;}
		</style>';

		// 項目追加
		$a = array();
		$a['cb']       = $columns['cb'];
		$a['thumb']    = '<div class="dashicons dashicons-format-image"></div>';
		$a['title']    = '店舗名';
		$a['flg']      = 'NEW!!!';
		$a['modified'] = '最終更新日';

		return $a;
	}
	add_filter( 'manage_edit-market_columns', 'add_columns_market' );

	// ▼ARTWORKPAGE ヘッダー変更
	function add_columns_artwork ($columns) {
		// サムネイル用のスタイル
		echo '<style>
		#title{width:300px;}
		.column-thumb{width:80px;}
		.column-s_flg{width:50px;}
		.column-flg{width:60px;}
		.column-kukaku{width:80px;}
		</style>';

		// 項目追加
		$a = array();
		$a['cb']       = $columns['cb'];
		$a['thumb']    = '<div class="dashicons dashicons-format-image"></div>';
		$a['title']    = 'アーティスト名';
		$a['flg']      = 'NEW!!!';
		$a['modified'] = '最終更新日';

		return $a;
	}
	add_filter( 'manage_edit-artwork_columns', 'add_columns_artwork' );


	/*---------------------------------------------------------------
	項目変更
	-----------------------------------------------------------------*/

	function add_thumb_column( $column, $post_id ) {

		$type = get_post_type($post_id);

		switch ( $column ) {
			case 'thumb':
				$strImg = '';
				$thumb  = wp_get_attachment_image_src(get_field($type.'_image'), 'thumbnail');
				// 画像がある場合
				$strImg .= '<img src="'.checkImage($thumb[0], 'M').'" class="column-thumb" />';
				echo $strImg;
				break;
			case 'title':
				echo esc_html(get_field($type.'_name'));
				break;
			case 'flg':
				if (get_field($type.'_flg') == '1') {
					echo '○';
				}
				break;
			case 'stage':
				echo esc_html(get_field($type.'_stage'));
				break;
			case 'modified':
				echo get_the_modified_date();
				break;
			default:
				break;
		}

	}
	add_action( 'manage_posts_custom_column', 'add_thumb_column', 10, 2 );
?>