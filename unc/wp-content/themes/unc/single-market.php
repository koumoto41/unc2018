<?php
	// 情報コンバート
	$id      = $post->ID;
	$aryMarket = convMarketInfo($id);
?>
<?php get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<article>
				<header class="entry-header">
					<h2><?= $aryMarket['name'] ?></h2>
				</header>
				<div class="entry-content section_custom">
                    <?php if ($aryMarket['image_lg'] != ''): ?>
						<p class="mb20"><img src="<?= $aryMarket['image_lg'] ?>" alt="<?= $aryMarket['name'] ?>" class="img-responsive center-block" /></p>
                    <?php endif; ?>

					<p class="pb20 description"><?= $aryMarket['description'] ?></p>

                    <?php if (count($aryMarket['ex_link']) > 0): ?>
						<header class="entry-header">
							<h3>LINK</h3>
						</header>
						<ul class="link_list">
                            <?php foreach ($aryMarket['ex_link'] as $key => $value): ?>
                                <?php if ($value['link_url'] != '' && $value['link_title'] != ''): ?>
									<li><a href="<?= $value['link_url'] ?>" target="_blank"><?= $value['link_title'] ?>：<?= $value['link_url'] ?></li>
                                <?php endif; ?>
                            <?php endforeach; ?>
						</ul>
                    <?php endif; ?>
				</div>
			</article>
		</main>
	</div><!-- row -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>