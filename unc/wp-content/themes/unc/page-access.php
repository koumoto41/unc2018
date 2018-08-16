<?php
/**
 * アクセスページ
 */
	get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<article>
				<header class="entry-header">
					<h2>ACCESS</h2>
				</header>
				<div class="entry-content">
					<div id="maps" class="mb20"></div>
					<div class="mb20">
						<h3 class="fc_text1 mb20">大芦高原キャンプ場</h3>
						<p>
							〒701-2614<br>
							岡山県美作市上山 岡山県美作市上山2350-1<br>
							電話 : 080-1646-1647<br>
						</p>
					</div>
					<hr>
					<div class="mb20">
						<h3 class="fc_text1 mb20">交通</h3>
						<h4>岡山市内からお越しの場合</h4>
						<p class="mb20">車で約１時間</p>
						<h4>高速自動車道をご利用の場合</h4>
						<p>中国自動車道　美作インターから車で約30分</p>
					</div>
				</div>
			</article>
		</main>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvUpcCwyAfFSQJK45WY8EPjGwkOM-TYN8"></script>
<script>

	var lat_lng = new google.maps.LatLng(34.890126, 134.134560);
	var myOptions = {
		zoom: 17,
		center: lat_lng,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	map = new google.maps.Map(document.getElementById("maps"),myOptions);

	var markerOption = {
		position: lat_lng,
		map: map
	};
	marker = new google.maps.Marker(markerOption);

</script>
