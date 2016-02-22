
	</div><!-- #main -->

	<footer id="footer" class="site-footer" role="contentinfo">
		
		<div class="container">
			<div class="row">

				<?php get_sidebar( 'footer' ); // Loads the sidebar-footer.php template. ?>

				<div id="site-bottom" class="clearfix">

					<?php get_template_part( 'menu', 'subsidiary' ); // Loads the menu-subsidiary.php template. ?>

					<div class="bottom-right col-xs-12 col-md-5">
						<?php printf( __( 'Theme: %1$s by %2$s.', 'gomedia' ), 'GoMedia', '<a href="http://www.theme-junkie.com/" rel="designer">ThemeJunkie</a>' ); ?> 
						<?php if ( of_get_option( 'gomedia_to_top', '1' ) ) { ?>
							<a class="backtotop" href="#top"><?php _e( 'Back To Top', 'gomedia' ); ?></a>
						<?php } ?>
					</div>

				</div>
				
			</div><!-- .row -->
		</div><!-- .container -->

	</footer><!-- #footer -->
	
</div><!-- #page -->

<?php wp_footer(); ?>

<!--Facebook Like Box-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1753216101560907";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

</body>
</html>
