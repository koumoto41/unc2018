<div class="col-md-3 col-xs-12">
	<div class="row-right">
		<div class="side_news mb20">
			<h4>Recent News</h4>
<?php
			$postslist = get_posts('numberposts=10&orderby=date');

			if (count($postslist) > 0) {
				echo '<dl>'."\n";
				foreach ($postslist as $post) : setup_postdata($post);
					get_template_part( 'side', 'news' );
				endforeach;
				echo '</dl>'."\n";

				echo '<p><a href="'.home_url('information').'" class="btn btn-primary btn-block">UNC INFORMATION</a></p>'."\n";

			} else {
				echo '<p>投稿がありません。</p>'."\n";
			}
			wp_reset_postdata();
?>
		</div>
		<div class="clearfix mb20 ml10 mr10">
			<div class="col-md-12 col-xs-6 pb10">
				<div class="row">
					<a href="<?= site_url('tosen') ?>"><img src="<?= THEME_URL ?>/images/banner/tosen.png" alt="渡船時刻表" class="img-responsive img_opacity" /></a>
				</div>
			</div>
			<div class="col-md-12 col-xs-6 pb10">
				<div class="row">
					<a href="<?= site_url('access') ?>"><img src="<?= THEME_URL ?>/images/banner/access.png" alt="会場までのアクセス" class="img-responsive img_opacity" /></a>
				</div>
			</div>
			<div class="col-md-12 col-xs-6 pb10">
				<div class="row">
					<a href="https://goo.gl/forms/sidggqmjunPLtKEt1" target="_blank"><img src="<?= THEME_URL ?>/images/banner/form.png" alt="出店申し込みフォーム" class="img-responsive img_opacity" /></a>
				</div>
			</div>
		</div>
		<div class="clearfix mb20">
			<div class="col-xs-12">
				<div class="row">
					<a href="<?= THEME_URL ?>/images/unc2017_leaflet_web.pdf" target="_blank"><img src="<?= THEME_URL ?>/images/unc2017guide.png" alt="UNC2017 GUIDEBOOK" class="img-responsive img_opacity" /></a>
				</div>
			</div>
		</div>
		<div class="clearfix mb20">
			<ul class="list-inline side_sns">
				<li>
					<a href="https://www.facebook.com/naturalcamp" target="_blank"><i class="fa fa-facebook-square"></i></a>
				</li>
				<li>
					<a href="https://twitter.com/naturalcamp" target="_blank"><i class="fa fa-twitter-square"></i></a>
				</li>
				<li>
					<a href="https://www.instagram.com/naturalcamp/" target="_blank"><i class="fa fa-instagram"></i></a>
				</li>
			</ul>
		</div>

	</div><!-- row-right -->
</div><!-- col -->