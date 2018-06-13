<?php
	$title = esc_html(get_the_title());
	$date  = esc_html(get_the_date());
	$link  = esc_url(get_the_permalink());

	$new_text = '';
	if(check_new_post( get_the_date('Y-m-d') )) {
		$new_text = '<span class="cate cate_new">NEW</span> ';
	}
?>
<dt><?= $new_text ?><?= $date ?></dt>
<dd><a href="<?= $link ?>"><?= $title ?></a></dd>