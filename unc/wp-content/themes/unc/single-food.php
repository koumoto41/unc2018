<?php
	// 情報コンバート
	$id      = $post->ID;
	$aryFood = convFoodInfo($id);
?>
<?php get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<article>
				<header class="entry-header">
					<h2><?= $aryFood['name'] ?></h2>
				</header>
				<div class="entry-content section_custom">
                    <?php if ($aryFood['image_lg'] != ''): ?>
						<p class="mb20"><img src="<?= $aryFood['image_lg'] ?>" alt="<?= $aryFood['name'] ?>" class="img-responsive center-block" /></p>
                    <?php endif; ?>

					<p class="pb20 description"><?= $aryFood['description'] ?></p>

					<?php if (count($aryFood['ex_link']) > 0): ?>
						<header class="entry-header">
							<h3>LINK</h3>
						</header>
						<ul class="link_list">
							<?php foreach ($aryFood['ex_link'] as $key => $value): ?>
								<?php if ($value['link_url'] != '' && $value['link_title'] != ''): ?>
									<li><a href="<?= $value['link_url'] ?>" target="_blank"><?= $value['link_title'] ?>：<?= $value['link_url'] ?></li>
								<?php endif; ?>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
				</div>
			</article>
		</main><!-- col -->
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>