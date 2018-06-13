<?php
	$aryPhoto = array();
	$ary = SCF::get('photo-gallery');

	foreach ($ary as $key => $value) {

		$arytemp = array();

		$tmp1 = wp_get_attachment_image_src($value['photo'],'thumbnail');
		$tmp2 = wp_get_attachment_image_src($value['photo'],'large');

		$tmp1 = $tmp1[0];
		$tmp2 = $tmp2[0];

		if ($tmp1 != '') {
			$arytemp['thumbnail'] = $tmp1;
			$arytemp['large']     = $tmp2;
			$arytemp['credit']    = $value['credit'];

			array_push($aryPhoto, $arytemp);
		}
	}
?>
<?php get_header(); ?>

<div class="row pb20">
	<div class="container">
		<h2 class="text-center title">PHOTO GALLERY 2015</h2>
		<hr />
		<div class="text-right mb20">Photo by Masami Hara</div>

		<div class="clearfix" id="lightbox">
<?php
		foreach ($aryPhoto as $key => $value) {
?>
			<div class="col-lg-2 col-md-2 col-sm-3 col-xs-6 pb20 block_hover">
				<a href="<?= $value['large'] ?>"><img src="<?= $value['thumbnail'] ?>" class="img-responsive m0a" alt="Photo by <?= $value['credit'] ?>" /></a>
			</div>
<?php
		}
?>
		</div>
	</div>
</div>
<?php get_footer(); ?>