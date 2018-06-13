<?php
	// タイトル
	$title = esc_html(get_the_title());

	// 本文
	$content = esc_html(get_the_excerpt());
	$content = str_replace('続きを読む', ' MORE', $content);

	// 投稿日
	$date = esc_html(get_the_date());

	// URL
	$link = esc_url(get_the_permalink());

	// thumbnail URL
	$thumbnail = '';
	$tmp = wp_get_attachment_image_src( get_post_thumbnail_id() , 'thumbnail' );
	$thumbnail = checkImage($tmp[0], 'M');

	// category
	$cat      = get_the_category();
	$cat_id   = $cat[0]->cat_ID;
	$cat_name = $cat[0]->cat_name;

	$category = '<span class="cate cate'.$cat_id.'">'.$cat_name.'</span> ';

	// data diff
	$new_text = '';
	if(check_new_post( get_the_date('Y-m-d') )) {
		$new_text = '<span class="cate cate_new">NEW</span>';
	}
?>
<div class="col-md-3 col-xs-6 pb20 disp-inBlock img_opacity">
	<div class="row">
		<a href="<?= $link ?>">
		<div>
			<p><img src="<?= $thumbnail ?>" class="img-responsive center-block img-circle" alt="<?= $title ?>" /></p>
			<p class="text-center"><?= $new_text ?> <?= $category ?></p>
			<p>
				<strong><?= $title ?></strong><br>
				<span class="text"><?= $content ?></span>
			</p>
		</div>
		</a>
	</div>
</div>