<?php
	$title       = DEF_TITLE;
	$keywords    = DEF_KEYWORDS;
	$description = DEF_DESCRIPTION;

	$og_type = 'article';

	if ( is_single() ) {
		// POST PAGE

    	$id = $post->ID;
    	$post_type = $post->post_type;

    	if ($post_type == 'post') {
    		$title = get_the_title().'｜UNC INFORMATION 一覧｜'.$title;
    	} else {
    		$tmp = retParentPage($post->post_type);
    		$title = get_the_title().'｜'.$tmp[0].'一覧｜'.$title;
    	}

	} elseif(is_archive()) {
    	// ARCHIVE
    	$tmp = retParentPage($post->post_type);
    	$title = $tmp[0].'一覧｜'.$title;;
	} elseif ( is_front_page() ) {
    	// TOP PAGE
    	$og_type = 'website';
	} elseif ( is_404() ) {
		// 404PAGE
		$title = '404 NOTFOUND｜'.$title;
	} else {
    	// PAGE
    	$keywords    = get_field('keywords');
    	$description = get_field('description');
    	$title       = get_field('title').'｜'.$title;
	}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="<?= $keywords ?>" />
		<meta name="description" content="<?= $description ?>" />
		<title><?= $title ?></title>
		<meta property="og:type" content="<?= $og_type ?>" />
		<meta property="og:image" content="<?= home_url('unc2018.png') ?>" />
		<meta property="og:url" content="<?= home_url('/') ?>" />
		<meta property="og:locale" content="ja_JP" />
		<meta property="og:description" content="<?= $description ?>" />
		<meta property="og:title" content="<?= $title ?>" />
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:site" content="@naturalcamp" />
		<link rel="apple-touch-icon" sizes="57x57" href="<?= THEME_URL ?>/favicons/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?= THEME_URL ?>/favicons/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?= THEME_URL ?>/favicons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?= THEME_URL ?>/favicons/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?= THEME_URL ?>/favicons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?= THEME_URL ?>/favicons/apple-touch-icon-120x120.png">
		<link rel="icon" type="image/png" href="<?= THEME_URL ?>/favicons/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="<?= THEME_URL ?>/favicons/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="<?= THEME_URL ?>/favicons/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="<?= THEME_URL ?>/favicons/manifest.json">
		<link rel="mask-icon" href="<?= THEME_URL ?>/favicons/safari-pinned-tab.svg" color="#000000">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="theme-color" content="#ffffff">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
		<link rel="stylesheet" media="all" href="<?= THEME_URL ?>/css/common.css" />
		<?php wp_head(); ?>
	</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.6";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

<div id="page" class="hfeed site">
	<?php tha_header_before(); ?>

	<?php if (is_front_page()): ?>
	<header id="masthead" class="site-header has-banner" role="banner">
        <?php tha_header_top(); ?>
		<img class="header-image" src="<?php echo esc_url(get_header_image()); ?>">
	</header>
	<?php endif; ?>

	<?php tha_header_after(); // MENU ?>

	<?php if ( !is_front_page()) : ?>
		<?php $container = "container"; ?>
	<?php else : ?>
		<?php $container = ""; ?>
	<?php endif; ?>

	<?php tha_content_before(); ?>
	<div id="content" class="site-content clearfix <?= $container; ?>">
		<?php tha_content_top(); ?>

		<div class="container">
			<div class="row">
				<div class="clearfix">
					<div class="col-md-6 col-xs-12 hidden-sm hidden-xs">
						<div class="row">
							<?php if (!is_front_page()): ?>
								<ol class="breadcrumb">
									<?= get_breadcrumb() ?>
								</ol>
							<?php endif; ?>
						</div><!-- row -->
					</div><!-- col -->
					<div class="col-md-6 col-xs-12">
						<div class="row text-right">
							<ul class="sns list-inline">
								<li>
									<a href="https://twitter.com/share" class="twitter-share-button" data-hashtags="unc2014">Tweet</a>
									<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
								</li>
								<li>
									<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fnatural-camp.jp%2F&amp;send=false&amp;layout=button_count&amp;width=120&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:120px; height:21px;" allowTransparency="true"></iframe>
								</li>
							</ul><!-- sns -->
						</div><!-- row -->
					</div><!-- col -->
				</div><!-- clearfix -->
			</div><!-- row -->
		</div><!-- container -->
