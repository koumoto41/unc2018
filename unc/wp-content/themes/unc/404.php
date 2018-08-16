<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Moesia
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<article>

				<header class="page-header">
					<h2 class="page-title">NOT FOUND</h2>
				</header><!-- .page-header -->

				<div class="page-content">
					<div class="text-center pt20 pb20">
						<img src="<?= THEME_URL ?>/images/404.png" class="img-responsive center-block" alt="ページが見つかりません。" />
					</div>
				</div><!-- .page-content -->
			</article><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
