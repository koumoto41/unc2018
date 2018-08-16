<?php
	$aryWorkshop = array();

	if (have_posts()) {
		foreach ($posts as $k => $v) {

			$id = $v->ID;
			if (get_post_status($id) == 'publish') {
				// 情報コンバート
				$aryWorkshop[] = convWorkshopInfo($id);
			}

		}
	}

?>
<?php get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<article>
				<header class="entry-header">
					<h2>WORKSHOP</h2>
				</header>
				<?php if (count($aryWorkshop) > 0): ?>
					<div class="section_custom">
						<div class="panel-grid panel-no-style" >
							<div id="employees" class="panel-grid-cell employees-area" >
								<div class="container">
									<?php foreach ($aryWorkshop as $key => $value): ?>
										<?php get_template_part( 'content', 'list' ); ?>
									<?php endforeach; ?>
								</div>
							</div>
						</div>
					</div>
				<?php else: ?>
					<?php get_template_part( 'content', 'comingsoon' ); ?>
				<?php endif; ?>
			</article>
		</main>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>