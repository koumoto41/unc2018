<?php
	$aryMarket = array();

	if (have_posts()) {
		foreach ($posts as $k => $v) {

			$id = $v->ID;
			if (get_post_status($id) == 'publish') {
				// 情報コンバート
				$aryMarket[] = convMarketInfo($id);
			}

		}
	}

?>
<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-9 col-xs-12">
			<div class="row">
				<h2 class="text-left title">MARKET</h2>
				<hr />
<?php
				if (count($aryMarket) > 0) {
					echo '<div class="clearfix panel_block">'."\n";
					foreach ($aryMarket as $key => $value) {
						get_template_part( 'content', 'list' );
					}
					echo '</div>'."\n";
				} else {
					get_template_part( 'content', 'comingsoon' );
				}
?>
			</div><!-- row -->
		</div><!-- col -->
		<?php get_sidebar(); ?>
	</div><!-- row -->
</div><!-- container -->
<?php get_footer(); ?>