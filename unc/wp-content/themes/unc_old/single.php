<?php
	while(have_posts()) : the_post();

		$title   = esc_html(get_the_title());
		$eycatch = esc_url(wp_get_attachment_url(get_post_thumbnail_id()));
		$content = get_the_content();

	endwhile;
?>
<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-9 col-xs-12">
			<div class="row">
				<div class="wp-editor">
					<h2 class="title jp_text"><?= $title ?></h2>
					<hr />
					<?php if ($eycatch != '') { ?>
						<p><img src="<?= wp_get_attachment_url( get_post_thumbnail_id() ) ?>" alt="<?= $title ?>" class="img-responsive" /></p>
						<hr />
					<?php } ?>
					<?= $content ?>
				</div>
			</div><!-- row -->
		</div><!-- col -->
		<?php get_sidebar(); ?>
	</div><!-- row -->
</div><!-- container -->
<?php get_footer(); ?>