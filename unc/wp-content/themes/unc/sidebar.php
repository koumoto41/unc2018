<div id="secondary" class="widget-area" role="complementary">
	<aside class="widget widget_recent_entries">
		<h2 class="widget-title">Recent News</h2>
		<?php $posts_list = get_posts('numberposts=10&orderby=date'); ?>
		<?php if (count($posts_list) > 0): ?>
			<ul>
                <?php
                	foreach ($posts_list as $post) : setup_postdata($post);
                		get_template_part( 'side', 'news' );
                	endforeach;
                ?>
			</ul>
		<?php else: ?>
			<p>投稿がありません。</p>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>
	</aside>
	<aside>
		<a href="<?= SITE_URL ?>">
			<img src="<?= THEME_URL ?>/images/unc2018.jpg" class="img-responsive" alt="UNC2018">
		</a>
	</aside>
</div>
