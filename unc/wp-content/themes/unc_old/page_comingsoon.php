<?php
	//Template Name: COMMING SOON
	$page_id = get_the_ID();
	$page_slug = get_page($page_id)->post_name;

?>
<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-9 col-xs-12">
			<div class="row">
				<h2 class="title"><?= $page_slug ?></h2>
				<hr />
				<div class="wp-editor">
					<div class="pt20 pb20">
						<img src="<?= THEME_URL ?>/images/coming_soon.gif" class="img-responsive center-block" alt="準備中" />
					</div>
				</div>
			</div>
		</div><!-- col -->
		<?php get_sidebar(); ?>
	</div><!-- row -->
</div><!-- container -->
<?php get_footer(); ?>