<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-9 col-xs-12">
			<div class="row">
				<h2 class="text-left title">NEWS</h2>
				<hr />
				<div class="clearfix panel_block">
<?php
				$postslist = get_posts('numberposts=12&orderby=date');

				if (have_posts()) {
					foreach ($postslist as $post) : setup_postdata($post);
						get_template_part( 'content', 'front' );
					endforeach;
				} else {

				}
				wp_reset_postdata();
?>
				</div><!-- clearfix -->
			</div><!-- row -->
		</div><!-- col -->
		<?php get_sidebar(); ?>
	</div><!-- row -->
</div><!-- container -->
<?php get_footer(); ?>