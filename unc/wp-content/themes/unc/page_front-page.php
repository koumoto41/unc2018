<?php
/*
Template Name: Front Page
*/
?>
<?php get_header(); ?>

	<div id="primary" class="fp-content-area">
		<main id="main" class="site-main" role="main">
			<div class="entry-content">
				<div class="panel-layout">
					<!-- DAY -->
                    <?php get_template_part('content', 'front_back'); ?>
					<!-- INFO -->
                    <?php get_template_part('content', 'front_info'); ?>
					<!-- LIVE -->
					<?php get_template_part('content', 'front_live'); ?>
					<!-- MAP -->
                    <?php get_template_part('content', 'front_map'); ?>
					<!-- SUPPORT -->
                    <?php get_template_part('content', 'front_support'); ?>
				</div><!-- .panel-layout -->
			</div><!-- .entry-content -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
