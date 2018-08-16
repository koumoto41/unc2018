<?php
	global $value;

	$new_text = '';
	if($value['flg'] == '1') {
		$new_text = '<p class="text-center"><span class="cate cate_new">NEW</span></p>';
	}

	$tmp = str_replace('(', '<br />(', $value['name']);

?>
<div class="col-md-3 col-sm-6 col-xs-12 mb30" style="text-align: center !important; ">
	<a href="<?= $value['link']; ?>">
		<img class="employee-photo wow zoomInDown" src="<?= $value['image_th']; ?>" alt="<?= $value['name']; ?>">
	</a>
	<h4 class="employee-name wow fadeInUp"><?= $value['name']; ?></h4>
</div>