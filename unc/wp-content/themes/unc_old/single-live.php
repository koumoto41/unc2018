<?php
	// 情報コンバート
	$id      = $post->ID;
	$aryLive = convLiveInfo($id);
?>
<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-9 col-xs-12">
			<div class="row">
				<h2 class="text-left title"><?= $aryLive['name'] ?></h2>
				<hr />
				<div class="custom_single">

					<?php if ($aryLive['image_lg'] != '') { ?>
						<p class="mb20"><img src="<?= $aryLive['image_lg'] ?>" alt="<?= $aryLive['name'] ?>" class="img-responsive" /></p>
					<?php } ?>

					<h3><?= $aryLive['name'] ?></h3>
					<hr />
					<p class="pb20 description"><?= $aryLive['description'] ?></p>

					<?php if ($aryLive['youtube'] != '') { ?>
						<div class="mb20">
							<h3>MOVIE</h3>
							<hr />
							<p class="youtube">
								<iframe width="560" height="315" src="<?= $aryLive['youtube'] ?>" frameborder="0" allowfullscreen></iframe>
							</p>
						</div>
					<?php } ?>

					<?php
						if (count($aryLive['ex_link']) > 0) {
							echo '<h3>LINK</h3>'."\n";
							echo '<hr />'."\n";
							echo '<ul class="link_list">'."\n";
							foreach ($aryLive['ex_link'] as $key => $value) {
								if ($value['link_url'] != '' && $value['link_title'] != '') {
									echo '<li><a href="'.$value['link_url'].'" target="_blank">'.$value['link_title'].'：'.$value['link_url'].'</li>'."\n";
								}
							}
							echo '</ul>'."\n";
						}
					?>

				</div><!-- custom_single -->
			</div><!-- row -->
		</div><!-- col -->
		<?php get_sidebar(); ?>
	</div><!-- row -->
</div><!-- container -->
<?php get_footer(); ?>