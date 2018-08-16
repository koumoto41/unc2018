<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Moesia
 */
?>
	</div><!-- #content -->
	<div id="sidebar-footer" class="footer-widget-area clearfix" role="complementary">
		<div class="container">
			<div class="sidebar-column col-md-4 col-sm-4 mb20">
				<aside id="text-3" class="widget widget_text">
					<h3 class="widget-title">Facebook</h3>
					<div class="textwidget">
						<div class="fb-page" data-href="https://www.facebook.com/naturalcamp/" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/naturalcamp/"><a href="https://www.facebook.com/naturalcamp/">牛窓ナチュラルキャンプ</a></blockquote></div></div>
					</div>
				</aside>
			</div>
			<div class="sidebar-column col-md-4 col-sm-4 mb20">
				<aside id="recent-posts-4" class="widget widget_recent_entries">
					<h3 class="widget-title">Twitter</h3>
					<div class="textwidget">
						<a class="twitter-timeline" href="https://twitter.com/naturalcamp" data-widget-id="316695920269983745">@naturalcamp からのツイート</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					</div>
				</aside>
			</div>
			<div class="sidebar-column col-md-4 col-sm-4 mb20">
				<aside id="moesia_contact_info-3" class="widget moesia_contact_info_widget">
					<h3 class="widget-title">Contact</h3>
					<div class="contact-address"><span><i class="fa fa-home"></i>Ushimado Natural Camp実行委員会</div>
					<div class="contact-phone"><span><i class="fa fa-phone"></i>Phone: </span>086-254-1611</div>
					<div class="contact-email mb15"><span><i class="fa fa-envelope"></i>Email: </span><a href="mailto:info@natural-camp.jp">info@natural-camp.jp</a></div>
					<div class="contact-email"><span><i class="fa fa-facebook"></i>Facebook: </span><a href="https://www.facebook.com/events/1895957710450870/">Contact</a></div>
				</aside>
			</div>
		</div>
	</div>
	<footer id="colophon" class="site-footer" role="contentinfo">
			<?php tha_footer_top(); ?>
			<div class="site-info container text-center">
				Copyright (C) 2018 Ushimado Natural Camp All Rights Reserved.
			</div><!-- .site-info -->
			<?php tha_footer_bottom(); ?>
		</footer><!-- #colophon -->
		<?php tha_footer_after(); ?>
	</div><!-- #page -->

	<?php wp_footer(); ?>

</body>
</html>
