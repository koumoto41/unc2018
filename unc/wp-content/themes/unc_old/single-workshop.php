<?php
	// 情報コンバート
	$id      = $post->ID;
	$aryWorkshop = convWorkshopInfo($id);
?>
<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-9 col-xs-12">
			<div class="row">
				<h2 class="text-left title"><?= $aryWorkshop['name'] ?></h2>
				<hr />
				<div class="custom_single">

					<?php if ($aryWorkshop['image_lg'] != '') { ?>
						<p class="mb20"><img src="<?= $aryWorkshop['image_lg'] ?>" alt="<?= $aryWorkshop['name'] ?>" class="img-responsive" /></p>
					<?php } ?>

					<h3><?= $aryWorkshop['name'] ?></h3>
					<hr />
					<p><?= $aryWorkshop['description'] ?></p>
					<hr />
					<ul class="link_list">
						<li><span class="cate cate1">参加料金</span> <?= $aryWorkshop['cost'] ?></li>
						<li><span class="cate cate2">対象</span> <?= $aryWorkshop['subject'] ?></li>
					</ul>

					<?php if ($aryWorkshop['unitlink'] != '') { ?>
						<p class="text-right unit"><a href="<?= $aryWorkshop['unitlink'] ?>" target="_blank"><?= $aryWorkshop['unit'] ?></a></p>
					<?php } else { ?>
						<p class="text-right unit"><?= $aryWorkshop['unit'] ?></p>
					<?php } ?>


					<?php if ($aryWorkshop['timetable'] != '') { ?>
						<div class="pb20">
							<h3>TIMETABLE</h3>
							<hr />
							<?= $aryWorkshop['timetable'] ?>
						</div>
					<?php } ?>


					<?php if ($aryWorkshop['attention'] != '') { ?>
						<h3>ATTENTION</h3>
						<hr />
						<p class="pb20"><?= $aryWorkshop['attention'] ?></p>
					<?php } ?>

					<?php
						if (count($aryWorkshop['ex_link']) > 0) {
							echo '<h3>LINK</h3>'."\n";
							echo '<hr />'."\n";
							echo '<ul class="link_list">'."\n";
							foreach ($aryWorkshop['ex_link'] as $key => $value) {
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