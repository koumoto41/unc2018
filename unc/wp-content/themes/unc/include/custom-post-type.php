<?php
	// ▼カスタム投稿設定
	// +++++++++++++++++++++++++++++
	function create_post_type() {
		// ライブ
		register_post_type( 'live', array(
			'labels' => array(
				'name'          => __( 'LIVE一覧・登録' ),
				'singular_name' => __( 'LIVE一覧・登録' )
			),
			'public'        => true,
			'menu_icon'     => 'dashicons-format-audio',
			'menu_position' => 4,
			'has_archive'   => true,
			)
		);

		// ワークショップ
		register_post_type( 'workshop', array(
			'labels' => array(
				'name'          => __( 'WS一覧・登録' ),
				'singular_name' => __( 'WS一覧・登録' )
			),
			'public'        => true,
			'menu_icon'     => 'dashicons-hammer',
			'menu_position' => 5,
			'has_archive'   => true,
			)
		);

		// フード
		register_post_type( 'food', array(
			'labels' => array(
				'name'          => __( 'FOOD一覧・登録' ),
				'singular_name' => __( 'FOOD一覧・登録' )
			),
			'public'        => true,
			'menu_icon'     => 'dashicons-carrot',
			'menu_position' => 6,
			'has_archive'   => true,
			)
		);

		// マーケット
		register_post_type( 'market', array(
			'labels' => array(
				'name'          => __( 'MKT一覧・登録' ),
				'singular_name' => __( 'MKT一覧・登録' )
			),
			'public'        => true,
			'menu_icon'     => 'dashicons-store',
			'menu_position' => 7,
			'has_archive'   => true,
			)
		);

		// アートワーク
		register_post_type( 'artwork', array(
			'labels' => array(
				'name'          => __( 'ART一覧・登録' ),
				'singular_name' => __( 'ART一覧・登録' )
			),
			'public'        => true,
			'menu_icon'     => 'dashicons-admin-appearance',
			'menu_position' => 8,
			'has_archive'   => true,
			)
		);
	}
	add_action( 'init', 'create_post_type' );
/*
	register_taxonomy(
		'stage',
		'live',
		array(
			'label' => 'ステージ',
			'hierarchical' => true,
			'query_var' => true,
			'rewrite' => true
		)
	);
*/

?>