<?php
	$aryArtwork = array();

	if (have_posts()) {
		foreach ($posts as $k => $v) {

			// 情報コンバート
			$id = $v->ID;
			$aryArtwork[] = convArtworkInfo($id);

		}
	}

?>
<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-9 col-xs-12">
			<div class="row">
				<h2 class="text-left title">ARTWORK</h2>
				<hr />
<?php
				if (count($aryArtwork) > 0) {
					echo '<div class="clearfix panel_block">'."\n";
					foreach ($aryArtwork as $key => $value) {
						get_template_part( 'content', 'artwork' );
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