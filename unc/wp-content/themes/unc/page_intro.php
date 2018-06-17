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
		<link rel="apple-touch-icon" sizes="180x180" href="<?= THEME_URL ?>/favicons/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?= THEME_URL ?>/favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?= THEME_URL ?>/favicons/favicon-16x16.png">
		<link rel="manifest" href="/site.webmanifest">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="theme-color" content="#ffffff">
		<style>
			.image_block {
				position: fixed;
				top: -50%;
				left: -50%;
				width: 200%;
				height: 200%;
				z-index: -1;
			}
			.image_block img {
				position: absolute;
				top: 0;
				left: 0;
				right: 0;
				bottom: 0;
				margin: auto;
				min-width: 50%;
				min-height: 50%;
			}

			.sns {
				position: fixed;
				bottom: 0;
				width: 100%;
				height: 40px;
				text-align: center;
			}

			@media (max-width: 730px) {
				.image_block {
					top: 0;
					left: 0;
					width: 100%;
					height: auto;
				}
				.image_block img {
					bottom: auto;
				}
				.sns {
					bottom: 30%;
				}
			}
		</style>

		<?= wp_head(); ?>

	</head>
	<body>
		<div class="image_block">
			<img src="<?= THEME_URL ?>/intro/unc2018.jpg" alt="<?= DEF_TITLE ?>">
		</div>

		<!--sns start-->
		<div class="sns">
			<a href="https://twitter.com/share" class="twitter-share-button" data-hashtags="unc2014">Tweet</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fnatural-camp.jp%2F&amp;send=false&amp;layout=button_count&amp;width=120&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:120px; height:21px;" allowTransparency="true"></iframe>
		</div>
		<!--sns end-->

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