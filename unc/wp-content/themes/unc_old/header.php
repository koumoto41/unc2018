<?php
	$title       = DEF_TITLE;
	$keywords    = DEF_KEYWORDS;
	$description = DEF_DESCRIPTION;

	$og_type = 'article';

	if ( is_single() ) { 				// ◇POST PAGE

		$id = $post->ID;
		$post_type = $post->post_type;

		if ($post_type == 'post') {
			$title = get_the_title().'｜UNC INFORMATION 一覧｜'.$title;
		} else {
			$tmp = retParentPage($post->post_type);
			$title = get_the_title().'｜'.$tmp[0].'一覧｜'.$title;
		}

	} elseif(is_archive()) {
		// ◇ARCHIVE
		$tmp = retParentPage($post->post_type);
		// $tmp = retParentPage($tmp);
		$title = $tmp[0].'一覧｜'.$title;;
	} elseif ( is_front_page() ) {
		// ◇TOP PAGE
		$og_type = 'website';
	} elseif ( is_404() ) {
		// ◇404PAGE
		$title = '404 NOTFOUND｜'.$title;
	} else {
		// ◇PAGE
		$keywords    = get_field('keywords');
		$description = get_field('description');
		$title       = get_field('title').'｜'.$title;
	}

?>
<!DOCTYPE html>
<html>
<head lang="ja">
	<meta charset="utf-8">
	<meta http-equiv="Content-Language" content="ja">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="keywords" content="<?= $keywords ?>" />
	<meta name="description" content="<?= $description ?>" />
	<title><?= $title ?></title>
	<meta property="og:type" content="<?= $og_type ?>" />
	<meta property="og:image" content="<?= home_url('unc2017.png') ?>" />
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
	<link rel="stylesheet" media="all" href="<?= THEME_URL ?>/css/bootstrap.min.css" />
	<link rel="stylesheet" media="all" href="<?= THEME_URL ?>/css/common.css" />
	<link rel="stylesheet" media="all" href="<?= THEME_URL ?>/css/imagelightbox.css" />
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
	<link href="https://fonts.googleapis.com/css?family=Fjalla+One|Signika" rel="stylesheet">
	<script src="<?= THEME_URL ?>/js/jquery-1.8.3.js"></script>
	<script src="<?= THEME_URL ?>/js/bootstrap.min.js"></script>
	<?= wp_head(); ?>
	<!--[if lt IE 10]>
	<script src="<?= THEME_URL ?>/js/html5shiv/html5shiv.js"></script>
	<![endif]-->
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

	<header>
		<div class="container">
			<div class="row">
				<div class="clearfix">
					<div class="col-md-5 col-sm-5 col-xs-12">
						<div class="row">
							<h1><a href="<?= home_url(); ?>"><img src="<?= THEME_URL ?>/images/header/logo.png" alt="<?= DEF_TITLE ?>" class="img-responsive center-block" /></a></h1>
						</div><!-- row -->
					</div><!-- col -->
					<div class="col-md-7 col-sm-7 col-xs-12">
						<div class="row text-right">
							<div class="navbar navbar-custom">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<div class="collapse navbar-collapse">
									<ul class="nav navbar-nav nav-justified">
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Information <b class="caret"></b></a>
											<ul class="dropdown-menu">
												<li><a href="<?= home_url('about') ?>">About</a></li>
												<li><a href="<?= home_url('ticket') ?>">Ticket</a></li>
												<li><a href="<?= home_url('access') ?>">Access</a></li>
												<li><a href="<?= home_url('support') ?>">Support</a></li>
												<li><a href="<?= home_url('qanda') ?>">Question</a></li>
												<li><a href="<?= home_url('attention') ?>">Attention</a></li>
												<li><a href="<?= home_url('tosen') ?>">渡船時刻表</a></li>
											</ul>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Live<b class="caret"></b></a>
											<ul class="dropdown-menu">
												<li><a href="<?= home_url('live') ?>">Line-up</a></li>
												<li><a href="<?= home_url('timetable') ?>">TimeTable</a></li>
											</ul>
										</li>
										<li><a href="<?= home_url('workshop') ?>">Workshop</a></li>
										<li><a href="<?= home_url('market') ?>">Market</a></li>
										<li><a href="<?= home_url('food') ?>">Food</a></li>
										<li><a href="<?= home_url('artwork') ?>">Artwork</a></li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Staying <b class="caret"></b></a>
											<ul class="dropdown-menu">
												<li><a href="<?= home_url('camping') ?>">Camping</a></li>
												<li><a href="<?= home_url('staying') ?>">Staying</a></li>
												<li><a href="http://kamp.jp/" target="_blank">Kamp</a></li>
											</ul>
										</li>
									</ul>
								</div><!-- collapse -->
							</div><!-- navbar -->
						</div><!-- row -->
					</div><!-- col -->
				</div><!-- row -->
			</div><!-- clearfix -->
		</div><!-- container -->
	</header>
	<!-- MAIN IMAGE -->
	<?php if (is_front_page()): ?>
	<div class="main_image">
		<div class="container">
			<div class="row">
				<img src="<?= THEME_URL ?>/images/header/unc.jpg" class="img-responsive">
			</div>
		</div>
	</div>
	<?php endif; ?>
	<!-- SNS BUTTON-->
	<div class="headerline">
		<div class="container">
			<div class="row">
				<div class="clearfix">
					<div class="col-md-6 col-xs-12 hidden-sm hidden-xs">
						<div class="row">
						<?php if (!is_front_page()){ ?>
							<ol class="breadcrumb">
								<?= get_breadcrumb() ?>
							</ol>
						<?php } ?>
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
	</div><!-- headerline -->