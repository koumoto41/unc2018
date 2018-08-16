<?php
	// 情報コンバート
	$id      = $post->ID;
	$aryLive = convLiveInfo($id);

	get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<article>
				<header class="entry-header">
					<h2><?= $aryLive['name'] ?></h2>
				</header>
				<div class="entry-content section_custom">

					<?php if ($aryLive['image_lg'] != ''): ?>
						<p class="mb20"><img src="<?= $aryLive['image_lg'] ?>" alt="<?= $aryLive['name'] ?>" class="img-responsive center-block"" /></p>
					<?php endif; ?>

					<div class="employee-social wow fadeInUp mb20 icon">
                        <?php if ($aryLive['facebook']): ?>
							<a href="<?= $aryLive['facebook']; ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                        <?php endif; ?>

                        <?php if ($aryLive['twitter']): ?>
							<a href="<?= $aryLive['twitter'] ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                        <?php endif; ?>

                        <?php if ($aryLive['homepage']): ?>
							<a href="<?= $aryLive['homepage'] ?>" target="_blank"><i class="fa fa-laptop"></i></a>
                        <?php endif; ?>

                        <?php if ($aryLive['youtube']): ?>
							<a href="<?= $aryLive['youtube'] ?>" target="_blank"><i class="fa fa-youtube"></i></a>
                        <?php endif; ?>
					</div>

					<p class="pb20 description"><?= $aryLive['description'] ?></p>

					<?php if ($aryLive['youtube_embed'] != ''): ?>
						<div class="mb20">
							<header class="entry-header">
								<h3>MOVIE</h3>
							</header>
							<p class="youtube">
								<iframe width="560" height="315" src="<?= $aryLive['youtube_embed'] ?>" frameborder="0" allowfullscreen></iframe>
							</p>
						</div>
					<?php endif; ?>

				</div>
			</article>
		</main>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>