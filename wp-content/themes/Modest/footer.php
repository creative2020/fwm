			</div> <!-- end #content-area -->
		</div> <!-- end .container -->
		
		<?php if ( is_home() && get_option('modest_blog_style') == 'false' && get_option('modest_footer_quote') == 'on' ) { ?>
			<div id="call-to-action">
				<div class="container">
					<p><?php echo get_option('modest_footer_quote_text'); ?>
						<a href="<?php echo get_option('modest_footer_quote_url'); ?>" class="learn-more"><span><?php _e('Learn More','Modest'); ?></span></a>
					</p>
					<span id="down-arrow"></span>
				</div> <!-- end .container -->	
			</div> <!-- end #call-to-action -->
		<?php } ?>
	</div> <!-- end .left-shadow -->	
</div> <!-- end .right-shadow -->				
<div class="clear"></div>
<div id="footer">
	<div class="right-shadow">
		<div class="left-shadow">
			<div id="footer-top">
				<div class="container">
					<div id="footer-widgets" class="clearfix">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : ?>
						<?php endif; ?>
					</div> <!-- end #footer-widgets -->	
					
					<div id="footer-bottom" class="clearfix">	
						<?php $menuClass = 'bottom-nav';
						$footerNav = '';
						
						if (function_exists('wp_nav_menu')) $footerNav = wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menuClass, 'echo' => false, 'depth' => '1' ) );
						if ($footerNav == '') show_page_menu($menuClass);
						else echo($footerNav); ?>
												
						<p id="copyright">&copy;2012 Christina Foster, Foster What Matters, Inc. All Rights Reserved.<br/><a href="http://www.onthemarkbranding.com">Produced by On the Mark Branding</a></p>
					</div> <!-- end #footer-bottom -->
				</div> <!-- end .container -->	
			</div> <!-- end #footer-top -->	
		</div> <!-- end .left-shadow -->	
	</div> <!-- end .right-shadow -->
</div> <!-- end #footer -->	

<?php include(TEMPLATEPATH . '/includes/scripts.php'); ?>
<?php wp_footer(); ?>
	
</body>
</html>