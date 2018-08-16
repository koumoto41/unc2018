<?php
/**
 * The template for displaying all single posts.
 *
 * @package Moesia
 */

get_header();

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			<?php
				while(have_posts()) : the_post();
					$title     = esc_html(get_the_title());
					$eye_catch = esc_url(wp_get_attachment_url(get_post_thumbnail_id()));
					$content   = get_the_content();
				endwhile;
			?>

			<article>

                <?php if ($eye_catch != ''): ?>
					<div class="single-thumb">
                        <img src="<?= wp_get_attachment_url( get_post_thumbnail_id() ) ?>" alt="<?= $title ?>" class="img-responsive" />
					</div>
                <?php endif; ?>

				<header class="entry-header">
					<h2 class="entry-title"><?= $title ?></h2>
				</header>

				<div class="entry-content">
                    <?= $content; ?>
				</div>

			</article>
		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>