<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-9 col-xs-12">
			<div class="row">
				<h2 class="title jp_text">ボランティアスタッフ募集</h2>
				<hr />
				<div class="wp-editor contact-form">
					<p>
						牛窓ナチュラルキャンプ2017では、フェスを一緒に手伝っていただけるボランティアスタッフを募集しています。<br />去年までのスタッフも社会人や学生、岡山県外の方など様々な職業の方がいらっしゃいました。
					</p>
					<p>
						イベント当日のスタッフ、イベントまでの運営スタッフでも構いません。<br />
						無理のない程度に日程の合う感じでお手伝いいただければと思います。
					</p>
					<p>応募は下記フォームより受け付けております。一緒にナチュラルキャンプを作っていきましょう！</p>
					<p>※牛窓では宇宙人に連れ去られる可能性がありますが実行委員会は一切責任は負いません！</p>
					<hr />
					<h3>ボランティアスタッフ応募フォーム</h3>
					<?php
					// echo do_shortcode('[contact-form-7 id="103" title="staff_form"]');
					echo do_shortcode('[contact-form-7 id="114" title="staff_form"]');
					?>
				</div><!-- wp-editor -->
			</div><!-- row -->
		</div><!-- col -->
		<?php get_sidebar(); ?>
	</div><!-- row -->
</div><!-- container -->
<?php get_footer(); ?>