<?php
	//Template Name: INTRO PAGE
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		<meta name="keywords" content="<?= DEF_KEYWORDS ?>" />
		<meta name="description" content="<?= DEF_DESCRIPTION ?>" />
		<title><?= DEF_TITLE ?></title>
		<meta property="og:type" content="website" />
		<meta property="og:image" content="<?= SITE_URL ?>/unc.png" />
		<meta property="og:url" content="<?= SITE_URL ?>" />
		<meta property="og:locale" content="ja_JP" />
		<meta property="og:description" content="<?= DEF_DESCRIPTION ?>" />
		<meta property="og:title" content="<?= DEF_TITLE ?>" />
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:site" content="@naturalcamp" />
		<link rel="icon" href="<?= SITE_URL ?>/favicon.ico" type="image/x-icon" />
		<link rel="Shortcut Icon" type="image/x-icon" href="<?= SITE_URL ?>/favicon.ico" />
		<link rel="apple-touch-icon-precomposed" href="<?= SITE_URL ?>/apple-touch-icon-precomposed.png" />
		<link rel="stylesheet" media="all" href="<?= THEME_URL ?>/css/bootstrap.min.css" />
		<link rel="stylesheet" media="all" href="<?= THEME_URL ?>/css/theme.css" />
		<link rel="stylesheet" media="all" href="<?= THEME_URL ?>/css/common.css" />
		<link rel="stylesheet" media="all" href="<?= THEME_URL ?>/css/intro.css" />
		<script src="<?= THEME_URL ?>/lib/jquery/jquery-1.8.3.js"></script>
		<script src="<?= THEME_URL ?>/lib/maximage/jquery.maximage.min.js"></script>
		<?= wp_head(); ?>
		<!--[if lt IE 10]>
		<script src="<?= THEME_URL ?>/js/html5shiv/html5shiv.js"></script>
		<![endif]-->
</head>
<body>
	<img class="background_img" src="<?= THEME_URL ?>/intro/img/back.jpg" alt="牛窓ナチュラルキャンプ2018" />

	<section id="container_intro">
		<div class="pb20">
			<img src="<?= THEME_URL ?>/images/intro/logo.png" alt="牛窓ナチュラルキャンプ2015 開催決定" />
		</div>

		<!--sns start-->
		<div id="sns_intro" class="mt40">
			<a href="https://twitter.com/share" class="twitter-share-button" data-hashtags="unc2014">Tweet</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fnatural-camp.jp%2F&amp;send=false&amp;layout=button_count&amp;width=120&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:120px; height:21px;" allowTransparency="true"></iframe>
		</div>
		<!--sns end-->
		<!--
		<div class="mt40 youtube">
			<iframe width="600" height="338" src="//www.youtube.com/embed/8X5go6L_k3I" frameborder="0" allowfullscreen></iframe>
		</div>
		-->
		<div class="footer mt30">
			<!-- <div class="border"></div> -->
			<ul class="link">
				<li><a href="<?= SITE_URL ?>/2010" class="btn btn-block btn-primary pa10">UNC 2010</a></li>
				<li><a href="<?= SITE_URL ?>/2011" class="btn btn-block btn-success pa10">UNC 2011</a></li>
				<li><a href="<?= SITE_URL ?>/2012" class="btn btn-block btn-info pa10">UNC 2012</a></li>
				<li><a href="<?= SITE_URL ?>/2013" class="btn btn-block btn-warning pa10">UNC 2013</a></li>
				<li><a href="<?= SITE_URL ?>/2014" class="btn btn-block btn-danger pa10">UNC 2014</a></li>
				<li><a href="mailto:info@natural-camp.jp" class="btn btn-block btn-info pa10">MAILTO UNC</a></li>
			</ul>
			<div class="copyright pt30">
				Copyright (C) 2015 Ushimado Natural Camp All Rights Reserved.
			</div>
		</div>




	</section>
	<div id="fb-root"></div>
	<script type="text/javascript">
		(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1";
				fjs.parentNode.insertBefore(js, fjs);
			}
			(document, 'script', 'facebook-jssdk')
		);
	</script>
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-24542939-1']);
		_gaq.push(['_trackPageview']);

		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
	<?= wp_footer(); ?>
</body>
</html>