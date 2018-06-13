<?php
	global $value;

	$new_text = '';
	if($value['flg'] == '1') {
		$new_text = '<p class="text-center"><span class="cate cate_new">NEW</span></p>';
	}

	$tmp = str_replace('(', '<br />(', $value['name']);

?>
<div class="col-md-4 col-xs-6 pb20 disp-inBlock img_opacity">
	<div class="row">
		<a href="<?= $value['link'] ?>" target="_blank">
			<p><img src="<?= $value['image_th'] ?>" class="img-responsive center-block img-circle" alt="<?= $value['name'] ?>" /></p>
			<?= $new_text ?>
			<h3 class="text-center"><?= $tmp ?></h3>
		</a>
	</div>
</div>