<?php
	// ▼投稿日日付比較
	function check_new_post($date) {

		$flg = false;
		$today = date("Y-m-d");

		$timestamp1 = strtotime($today);
		$timestamp2 = strtotime($date);

		$seconddiff = abs($timestamp2 - $timestamp1);
		$daydiff    = $seconddiff / (60 * 60 * 24);

		if ($daydiff < DIFF_DAY) $flg = true;

		return $flg;
	}

	// ▼埋め込みyoutubeURL作成
	function embedYoutube($id) {
		$tmp = '';
		if ($id != '') $tmp = 'https://www.youtube.com/embed/'.$id;
		return $tmp;
	}

	// ▼画像の有無: $size 'M' or 'L'
	function checkImage($url, $size) {
		if ($url == '') {
			switch($size) {
				case 'M':
					$url = THEME_URL.'/images/no_image.png';
					break;
				case 'L':
					$url = THEME_URL.'/images/no_image.png';
					break;
			}
		}
		return $url;
	}

	// ▼ユーザエージェント判断
	function checkUserAgent() {
		$flg = false;
		$user_agent = $_SERVER['HTTP_USER_AGENT'];

		if ( strpos( $user_agent, 'iPhone' ) !== false
			|| strpos( $user_agent, 'Android' ) !== false
			|| strpos( $user_agent, 'iPod' ) !== false )
		{
			$flg = true;
		}
		return $flg;
	}
?>