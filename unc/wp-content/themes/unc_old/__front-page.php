<?php
	//Template Name: INTRO PAGE
	$domain = 'http://natural-camp.jp';
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

		<!-- icons -->
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

		<!-- css -->
		<link rel="stylesheet" media="all" href="<?= THEME_URL ?>/css/bootstrap.min.css" />
		<link rel="stylesheet" media="all" href="<?= THEME_URL ?>/css/common.css" />
		<link rel="stylesheet" media="all" href="<?= THEME_URL ?>/css/intro.css" />
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

		<!-- js -->
		<script src="<?= THEME_URL ?>/js/jquery-1.8.3.js"></script>
		<script src="<?= THEME_URL ?>/js/bootstrap.min.js"></script>
		<script src="<?= THEME_URL ?>/js/jquery.maximage.min.js"></script>
		<?= wp_head(); ?>
		<!--[if lt IE 10]>
		<script src="<?= THEME_URL ?>/js/html5shiv/html5shiv.js"></script>
		<![endif]-->
</head>
<body>
	<div class="container_intro">
		<div>
			<img src="<?= THEME_URL ?>/images/intro/unc.jpg" alt="<?= DEF_TITLE ?>" class="img-responsive">
		</div>
		<h1>
			USHIMADO NATURAL CAMP<br>
			2017
		</h1>
		<h2>2017.9.16(sat)、9.17(sun)</h2>
		<div class="ticket">
			2017/8/1よりチケット発売開始
		</div>

		<!--sns start-->
		<div id="sns_intro">
			<a href="https://twitter.com/share" class="twitter-share-button" data-hashtags="unc2014">Tweet</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fnatural-camp.jp%2F&amp;send=false&amp;layout=button_count&amp;width=120&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:120px; height:21px;" allowTransparency="true"></iframe>
		</div>

		<div class="banner">
				<a href="https://goo.gl/forms/sidggqmjunPLtKEt1" target="_blank">
					<img src="<?= THEME_URL ?>/images/banner/form.png" alt="出店申し込みフォーム" class="img_opacity" />
				</a>
			</div>


		<div class="footer">
			<ul class="link">
				<li><a href="<?php echo $domain; ?>/2010" class="btn btn-block btn-primary pa10">UNC 2010</a></li>
				<li><a href="<?php echo $domain; ?>/2011" class="btn btn-block btn-success pa10">UNC 2011</a></li>
				<li><a href="<?php echo $domain; ?>/2012" class="btn btn-block btn-info pa10">UNC 2012</a></li>
				<li><a href="<?php echo $domain; ?>/2013" class="btn btn-block btn-warning pa10">UNC 2013</a></li>
				<li><a href="<?php echo $domain; ?>/2014" class="btn btn-block btn-danger pa10">UNC 2014</a></li>
				<li><a href="<?php echo $domain; ?>/2015" class="btn btn-block btn-primary pa10">UNC 2015</a></li>
				<li><a href="<?php echo $domain; ?>/2016" class="btn btn-block btn-success pa10">UNC 2016</a></li>
				<li><a href="mailto:info@natural-camp.jp" class="btn btn-block btn-info pa10">MAILTO UNC</a></li>
			</ul>
			<div class="copyright pt30">
				Copyright (C) 2017 Ushimado Natural Camp All Rights Reserved.
			</div>
		</div>
	</div>
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