<?php
	// 情報コンバート
	$id      = $post->ID;
	$aryMarket = convMarketInfo($id);
?>
<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-9 col-xs-12">
			<div class="row">
				<h2 class="text-left title"><?= $aryMarket['name'] ?></h2>
				<hr />
				<div class="custom_single">

					<?php if ($aryMarket['image_lg'] != '') { ?>
						<p class="mb20"><img src="<?= $aryMarket['image_lg'] ?>" alt="<?= $aryMarket['name'] ?>" class="img-responsive" /></p>
					<?php } ?>

					<h3><?= $aryMarket['name'] ?></h3>
					<hr />
					<p class="pb20"><?= $aryMarket['description'] ?></p>

					<?php
						if (count($aryMarket['ex_link']) > 0) {
							echo '<h3>LINK</h3>'."\n";
							echo '<hr />'."\n";
							echo '<ul class="link_list">'."\n";
							foreach ($aryMarket['ex_link'] as $key => $value) {
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