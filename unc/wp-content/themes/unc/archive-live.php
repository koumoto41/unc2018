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

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<article>
				<header class="entry-header">
					<h2>LINE UP</h2>
				</header>

				<?php if (!$comming_soon): ?>
					<?php if (count($aryStage) > 0): ?>
						<div class="section_custom">

						<?php foreach ($aryStage as $stage_name => $stage_title): ?>
							<?php if ($stage_name != 'Unkown' && count($stage_title) > 0): ?>
								<h3><img src="<?= THEME_URL ?>/images/live/<?= $stage_name; ?>.png" alt="<?= $stage_name ?>" class="img-responsive"></h3>
							<?php endif; ?>

							<?php foreach ($stage_title as $type_name => $type_title): ?>

								<!-- <div class="live_genre"><?= $type_name; ?></div> -->

								<div class="panel-grid panel-no-style" >
									<div id="employees" class="panel-grid-cell employees-area" >
										<div class="container">
											<?php foreach ($type_title as $row): ?>
												<?php get_template_part( 'content', 'live' ); ?>
											<?php endforeach; ?>
										</div>
									</div>
								</div>

							<?php endforeach; ?>
						<?php endforeach; ?>
						</div>
					<?php endif; ?>
				<?php else: ?>
					<?php get_template_part( 'content', 'comingsoon' ); ?>
				<?php endif; ?>
			</article>
		</main><!-- col -->
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>