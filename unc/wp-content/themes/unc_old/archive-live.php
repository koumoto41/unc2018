<?php
	$comming_soon = true;

	// ▼ステージ配列設定
	$aryStage = array();
	foreach ($aryCommonStage  as $k => $v) {
		$aryStage[$v] = array();
	}

	if (have_posts()) {
		foreach ($posts as $k => $v) {

			// 情報コンバート
			$id = $v->ID;
			if (get_post_status($id) == 'publish') {
				$comming_soon = false;

				// 情報コンバート
				$ary = convLiveInfo($id);

				$stage = $ary['stage'];
				$type  = $ary['type'];

				if (isset($aryStage[$stage][$type])) {
					$i = count($aryStage[$stage][$type]) + 1;
				} else {
					$aryStage[$stage][$type] = array();
					$i = 0;
				}

				$aryStage[$stage][$type][$i] = $ary;

			}

		}
	}

?>
<?php get_header(); ?>
<style>
<!--
.live_genre {
	margin: 25px 0;
	padding: 5px 10px;
	font-family: 'Fjalla One';
	font-size: 1.5em;
	background: #eee;
}
-->
</style>
<div class="container">
	<div class="row">
		<div class="col-md-9 col-xs-12">
			<div class="row">
				<h2 class="text-left title">LIVE</h2>
				<hr />
<?php
				if (!$comming_soon) {
					if (count($aryStage) > 0) {
						echo '<div>'."\n";

						foreach ($aryStage as $stage_name => $stage_title) {
							if ($stage_name != 'Unkown' && count($stage_title) > 0) {
								echo '<h3><img src="'.THEME_URL.'/images/live/'.$stage_name.'.png" alt="'.$stage_name.'" class="img-responsive"></h3>'."\n";
							}

							foreach ($stage_title as $type_name => $type_title) {

								echo '<div class="live_genre">'.$type_name.'</div>'."\n";
								echo '<div class="clearfix panel_block">'."\n";
									foreach ($type_title as $key => $value) {
										get_template_part( 'content', 'list' );
									}
								echo '</div>'."\n";

							}
						}
						echo '</div>'."\n";
					}
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