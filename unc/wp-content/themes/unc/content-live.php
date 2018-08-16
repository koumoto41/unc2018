<?php
	global $row;
?>
	<div class="col-md-4 col-sm-6 col-xs-6 mb30" style="text-align: center !important; ">
		<a href="<?= $row['link']; ?>"><img class="employee-photo wow zoomInDown" src="<?= $row['image_th']; ?>" alt="<?= $row['name']; ?>"></a>
		<h4 class="employee-name wow fadeInUp"><?= $row['name']; ?></h4>
		<span class="employee-position wow fadeInUp kind"><?= $row['type']; ?></span>

		<?php if ($row['youtube'] || $row['facebook'] || $row['homepage'] || $row['twitter']): ?>

		<div class="employee-social wow fadeInUp icon mt10">
			<?php if ($row['facebook']): ?>
			<a href="<?= $row['facebook']; ?>" target="_blank"><i class="fa fa-facebook"></i></a>
			<?php endif; ?>

			<?php if ($row['twitter']): ?>
			<a href="<?= $row['twitter'] ?>" target="_blank"><i class="fa fa-twitter"></i></a>
			<?php endif; ?>

			<?php if ($row['homepage']): ?>
			<a href="<?= $row['homepage'] ?>" target="_blank"><i class="fa fa-laptop"></i></a>
			<?php endif; ?>

			<?php if ($row['youtube']): ?>
				<a href="<?= $row['youtube'] ?>" target="_blank"><i class="fa fa-youtube"></i></a>
			<?php endif; ?>
		</div>

		<?php endif; ?>

	</div>
