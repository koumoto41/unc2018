<?php
/** Enable W3 Total Cache Edge Mode */
define('W3TC_EDGE_MODE', true); // Added by W3 Total Cache

/**
 * The base configurations of the WordPress.
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

if (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'natural-camp.jp') {
	define('CONST_SERVER_MODE', true);
} else {
	define('CONST_SERVER_MODE', false);
}


// ** MySQL 設定 ** //
if (CONST_SERVER_MODE) {
	define('DB_NAME', 'LAA0038227-unc2017');
	define('DB_USER', 'LAA0038227');
	define('DB_PASSWORD', 'qfwcqkow');
	define('DB_HOST', 'mysql123.phy.lolipop.lan');
	define('DB_CHARSET', 'utf8');
	define('DB_COLLATE', '');

	define('WP_DEBUG', false);
} else {
	define('DB_NAME', 'unc2018');
	define('DB_USER', 'root');
	define('DB_PASSWORD', 'root');
	define('DB_HOST', 'localhost');
	define('DB_CHARSET', 'utf8');
	define('DB_COLLATE', '');

	define('WP_DEBUG', true);
	define('FS_METHOD', 'direct');
	define('WP_MEMORY_LIMIT', '1024M');
}


/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'ndug*K@HY5iy4c.OjK8,L(y91W4y2-I?ono}h;ED4c7&mc*VkK.6eUSD^*YXm5o|');
define('SECURE_AUTH_KEY', 'z|q>]5[>9LdIsQV;v`r^{E(m17:=R1xCYfAcA(t+Wf>UyuLD3/Br3>x*1ugoA wt');
define('LOGGED_IN_KEY', '84Ue`)u>}j%jDh+t~S_gy+BYN_(Ya[HPi$U;xDrj10S$:.3P)8vWdV4|>/hj~4CK');
define('NONCE_KEY', ' ^n@F].0t@/bC.>_f){_2ZsufdRi !4[!d9CCM1j@>^0vYv|4NqY#u3hZy`YYs-l');
define('AUTH_SALT', 'na!L+*Ba$VB_aY=Xa@oqNbi4FMoTf{S?:]OVe.V|izwRyLNMDMvH0z3o%7]^ H<V');
define('SECURE_AUTH_SALT', '1hc_|V(1!0nFgmVqblmG+G<%UoG)/}%Iw)T}L!Y1:x(IJ:c>~S+A3XR0dR$>8F-z');
define('LOGGED_IN_SALT', '5gQGgmrpj?qei^Lz{<t$aTvRpc]oLWgE~=8[8+Rg8#?p@.9FnIS 29EUZF?djnui');
define('NONCE_SALT', ',;pPr5MOk}jLyjE{_YL-JpW.sdiz^$wzDSweA0d]YKQaKIi,J uH8mM8hRP.ZZN|');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * ローカル言語 - このパッケージでは初期値として 'ja' (日本語 UTF-8) が設定されています。
 *
 * WordPress のローカル言語を設定します。設定した言語に対応する MO ファイルが
 * wp-content/languages にインストールされている必要があります。例えば de_DE.mo を
 * wp-content/languages にインストールし WPLANG を 'de_DE' に設定することでドイツ語がサポートされます。
 */
define('WPLANG', 'ja');
define('FS_METHOD', 'direct');
define('AUTOMATIC_UPDATER_DISABLED', true);
define('CONCATENATE_SCRIPTS', false);


/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH'))
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


// URL,パス
// +++++++++++++++++++++++++++++
// テーマディレクトリパス
define('DIR_PATH', ABSPATH . 'wp-content/themes/unc/');
// URL
define('DOMAIN_URL', 'http://natural-camp.test');
// サイトURL
define('SITE_URL', get_bloginfo('url'));
// ワードプレスURL
define('WP_URL', get_bloginfo('wpurl'));
// ワードプレステーマURL
define('THEME_URL', get_bloginfo('template_directory'));


// デフォルトキーワード
// +++++++++++++++++++++++++++++
// タイトルデフォルト
define('DEF_TITLE', get_bloginfo('name'));
// キーワードデフォルト
define('DEF_KEYWORDS', '牛窓ナチュラルキャンプ,牛窓ナチュラルキャンプ2018,うしまど,岡山県,瀬戸内市,黒島,無人島');
// ディスクリプションデフォルト
define('DEF_DESCRIPTION', get_bloginfo('description'));

// 比較する日付
define('DIFF_DAY', 14);

// LIVE STAGE配列
$aryCommonStage = array(
	'treestage'    => 'TreeStage',
	'littleforest' => 'LittleForest',
	'littleiviza'  => 'LittleIviza',
	'unkown'       => 'Unkown'
);