<?php
	global $post;
	$posts = get_posts('numberposts=-1&post_type=post&orderby=date');
?>
<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-9 col-xs-12">
			<div class="row">
				<h2 class="title text-left">UNC INFORMATION</h2>
				<hr />
<?php
				if (count($posts) > 0) {
					echo '<div class="imformation">'."\n";
					echo '<dl>'."\n";

					foreach($posts as $post){

						$title = esc_html(get_the_title());
						$date  = esc_html(get_the_date());
						$url   = esc_url(get_the_permalink());

						// Data Diff
						$new_text = '';
						if(check_new_post( get_the_date('Y-m-d') )) {
							$new_text = '<span class="cate cate_new">NEW</span> ';
						}

						// category
						$category = '';
						$cat = get_the_category();
						$cat_id   = $cat[0]->cat_ID;
						$cat_name = $cat[0]->cat_name;
						$category = '<span class="cate cate'.$cat_id.'">'.$cat_name.'</span> ';

						echo '<dt>'.$new_text.$category.$date.'</dt>'."\n";
						echo '<dd><a href="'.$url.'">'.$title.'</a></dd>'."\n";

					}
					echo '</dl>';
					echo '</div>';
				}
?>
			</div><!-- row -->
		</div><!-- col -->
		<?php get_sidebar(); ?>
	</div><!-- row -->
</div><!-- container -->
<?php get_footer(); ?>