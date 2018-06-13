<?php
	$aryFood = array();

	if (have_posts()) {
		foreach ($posts as $k => $v) {

			// 情報コンバート
			$id = $v->ID;
			if (get_post_status($id) == 'publish') {
				$aryFood[] = convFoodInfo($id);
			}

		}
	}

?>
<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-9 col-xs-12">
			<div class="row">
				<h2 class="text-left title">FOOD</h2>
				<hr />
<?php
				if (count($aryFood) > 0) {
					echo '<div class="clearfix panel_block">'."\n";
					foreach ($aryFood as $key => $value) {
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