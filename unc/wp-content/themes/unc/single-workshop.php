<?php
	// 情報コンバート
	$id      = $post->ID;
	$aryWorkshop = convWorkshopInfo($id);
?>
<?php get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<article>
				<header class="entry-header">
					<h2><?= $aryWorkshop['name'] ?></h2>
				</header>
                <?php if ($aryWorkshop['unitlink'] != ''): ?>
					<p class="text-right unit"><a href="<?= $aryWorkshop['unitlink'] ?>" target="_blank"><?= $aryWorkshop['unit'] ?></a></p>
                <?php else: ?>
					<p class="text-right unit"><?= $aryWorkshop['unit'] ?></p>
                <?php endif; ?>

				<div class="entry-content section_custom">
                    <?php if ($aryWorkshop['image_lg'] != ''): ?>
						<p class="mb20"><img src="<?= $aryWorkshop['image_lg'] ?>" alt="<?= $aryWorkshop['name'] ?>" class="img-responsive center-block"" /></p>
                    <?php endif; ?>

					<p class="pb20 description"><?= $aryWorkshop['description'] ?></p>

					<ul class="condition_list">
						<li><span class="cate cate1">参加料金</span> <?= $aryWorkshop['cost'] ?></li>
						<li><span class="cate cate2">対象</span> <?= $aryWorkshop['subject'] ?></li>
					</ul>

					<?php if ($aryWorkshop['timetable'] != ''): ?>
						<div class="pb20">
							<header class="entry-header">
								<h3>TIMETABLE</h3>
							</header>
							<?= $aryWorkshop['timetable'] ?>
						</div>
					<?php endif; ?>

					<?php if ($aryWorkshop['attention'] != ''): ?>
						<div class="pb20">
							<header class="entry-header">
								<h3>ATTENTION</h3>
							</header>
							<?= $aryWorkshop['attention'] ?>
						</div>
					<?php endif; ?>

					<?php if (count($aryWorkshop['ex_link']) > 0): ?>
						<header class="entry-header">
							<h3>LINK</h3>
						</header>
						<ul class="link_list">
							<?php foreach ($aryWorkshop['ex_link'] as $key => $value): ?>
								<?php if ($value['link_url'] != '' && $value['link_title'] != ''): ?>
									<li><a href="<?= $value['link_url'] ?>" target="_blank"><?= $value['link_title'] ?>：<?= $value['link_url'] ?></li>
								<?php endif; ?>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
				</div><!-- custom_single -->
			</article><!-- row -->
		</main><!-- col -->
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>