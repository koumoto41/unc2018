<?php
	global $value;

	$new_text = '';
	if($value['flg'] == '1') {
		$new_text = '<p class="text-center"><span class="cate cate_new">NEW</span></p>';
	}
?>
<div class="col-sm-6 col-xs-12 pb20 disp-inBlock">
	<div class="row">
		<p><img src="<?= $value['image_lg'] ?>" class="img-responsive center-block" alt="<?= $value['name'] ?>" /></p>
		<?= $new_text ?>
		<h3 class="text-center"><?= $value['name'] ?></h3>
		<hr />
		<p class="pb20"><?= $value['description'] ?></p>
	</div>
</div>