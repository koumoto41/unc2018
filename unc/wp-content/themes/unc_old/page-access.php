<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-9 col-xs-12">
			<div class="row">
				<h2 class="title">ACCESS</h2>
				<hr />
				<div class="wp-editor">
					<p class="lead title">
						牛窓ナチュラルキャンプには公共交通機関の利用やエコドライブの実践などで環境に優しいアクセスを！
					</p>
					<div class="clearfix mb20">
						<div class="col-md-4 col-xs-12 pb10">
							<a href="#train" class="btn btn-block btn-primary" >公共交通機関を利用する</a>
						</div>
						<div class="col-md-4 col-xs-12 pb10">
							<a href="#car" class="btn btn-block btn-success">車を利用する</a>
						</div>
						<div class="col-md-4 col-xs-12 pb10">
							<a href="#park" class="btn btn-block btn-warning">駐車場</a>
						</div>
					</div>
					<div id="maps" class="mb20"></div>

					<p class="fc_text3">チェックを変えるとフェリー乗り場までの経路を地図に表示します。</p>

					<ul id="root_radio">
						<li><input id="route1" checked="checked" name="route" type="radio" value="1" /> 大阪から会場（渡船場）までの経路を表示</li>
						<li><input id="route2" name="route" type="radio" value="2" /> 岡山から会場（渡船場）までの経路を表示</li>
						<li><input id="route3" name="route" type="radio" value="3" /> 邑久駅から会場（渡船場）までの経路を表示</li>
					</ul>
					<hr />
					<h3 id="train" class=" title">アクセス方法１．電車、バスなど公共交通機関を利用する</h3>
					<hr />
					<p class="mb20">
						会場は最寄駅の邑久駅からは少し不便な場所ですが、ハイキングや冒険好きな方にとっては、楽しみながらお越しいただける方法です！<br />駅からはバス、タクシーをお使いください。
					</p>
					<h4 class="fc_text1">◆ 岡山駅から</h4>
					<p class=" mb20">
						三宮（神戸)～邑久間だと所要時間約2時間30分。運賃は2,590円で楽しいゆらゆら電車旅！！<br /> 岡山～邑久間だと所要時間約25分。運賃は320円です。
					</p>

					<p><strong>1-在来線（赤穂線）利用</strong></p>
					<ul>
						<li>岡山駅から赤穂線乗車、約30分の「邑久駅」下車</li>
						<li>邑久駅から【東備バス「牛窓行」乗車、約20分で牛窓へ】</li>
						<li>会場へは綾浦もしくは牛窓オリーブ園入口で下車船着き場まで徒歩5分です。船の発着場所は牛窓漁港（ファミリーマート裏）です。</li>
						<li>タクシーの場合は邑久駅から船の発着場所の牛窓漁港（ファミリーマート裏）までは約15分。料金は約2,000円。</li>
					</ul>
					<p class="text-right">
						<a href="<?= THEME_URL ?>/images/3.pdf" target="_blank">バスの時刻表はこちら</a>
					</p>

					<p><strong>2-路線バス（両備バス）利用</strong></p>
					<ul class="mb20">
						<li>岡山駅バスターミナルから両備バス「西大寺行」乗車、約35分の「西大寺バスセンター」下車</li>
						<li>西大寺バスセンターから【東備バス「牛窓行」乗車、約35分で牛窓へ】。東備バス「牛窓行」は、北周りと南回りがあります。どちらも時間的に大差ありません。</li>
						<li>会場へは綾浦もしくは牛窓オリーブ園入口で下車船着き場まで徒歩5分です。船の発着場所は牛窓漁港（ファミリーマート裏）です。</li>
					</ul>
					<p class="text-right">詳しくはこちらも参考に：<a href="http://www.ushimado.info/main/access_tr.htm" target="_blank">牛窓町観光協会</a></p>

					<hr />
					<h3 class="title" id="car">アクセス方法２.車を利用する</h3>
					<hr />

					<p><strong>山陽道備前ＩＣ（大阪方面）から</strong></p>
					<ul class="mb30">
						<li>山陽自動車道「備前IC」下車</li>
						<li>「岡山ブルーライン」の道路標示に従い一般道を少しだけ経由し同線へ</li>
						<li>邑久IC下車、県道39号線を「牛窓」方面の道路標示に従い走行してください。</li>
					</ul>

					<p><strong>山陽道、瀬戸中央道早島ＩＣ（広島、高松方面）から</strong></p>
					<ul class="mb30">
						<li>山陽自動車道「早島IC」下車</li>
						<li>「備前、岡山」方面の道路標示に従い国道2号線バイパスを東に約20km走行します。</li>
						<li>「岡山ブルーライン」に接続しますので同線へ入ります。</li>
						<li>邑久IC下車、県道39号線を「牛窓」方面の道路標示に従い走行してください。</li>
						<li>早島ＩＣは、山陽道と瀬戸中央道の２路線にまたがっていますが１本の道路上の1箇所のICです。</li>
					</ul>

					<hr />
					<h3 class="title" id="park">駐車場</h3>
					<hr />
					<p class="lead fc_text1">
						お車でご来場の方は、カーシェアリング、エコドライブの実践で環境に優しいアクセスを！！<br />
						仲間と一緒にガソリンをシェアしましょう！
					</p>
					<p class="mb20">
						お車でお越しの方は、一般駐車場(無料)に停めて徒歩で、フェリー乗り場へ。<br />一般の方は、瀬戸内警察署近くの第一駐車場をご利用下さい。そちらから徒歩で渡船乗り場までお越し下さい。
					</p>
					<p class="mb20">
						島内へ車での乗り入れは不可です。<br />
						渡船乗り場側の専用駐車場に駐車のうえ渡船にて上陸下さい。<br />
						キャンプサイト利用者の方は、渡船乗り場でお荷物を降ろされたあと駐車場に駐車頂き、渡船乗り場まで来て頂くと便利です。
					</p>
					<div id="maps_p" class="mb20"></div>
				</div><!-- wp-editor -->
			</div><!-- row -->
		</div><!-- col -->
		<?php get_sidebar(); ?>
	</div><!-- row -->
</div><!-- container -->
<script src="//maps.googleapis.com/maps/api/js"></script>
<script src="<?= THEME_URL ?>/js/access.js"></script>
<?php get_footer(); ?>