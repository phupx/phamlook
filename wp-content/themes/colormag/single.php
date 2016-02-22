<?php
/**
 * Theme Single Post Section for our theme.
 *
 * @package ThemeGrill
 * @subpackage ColorMag
 * @since ColorMag 1.0
 */
?>


<?php get_header(); ?>

	<?php do_action( 'colormag_before_body_content' ); ?>

	<div id="primary">
    
		<div id="content" class="clearfix">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'single' ); 
                
                ?>
                
			<?php endwhile; ?>

		</div><!-- #content -->

      <?php get_template_part( 'navigation', 'single' ); ?>

      <?php if ( get_the_author_meta( 'description' ) ) : ?>
         <div class="author-box">
            <div class="author-img"><?php echo get_avatar( get_the_author_meta( 'user_email' ), '100' ); ?></div>
               <h4 class="author-name"><?php the_author_meta( 'display_name' ); ?></h4>
               
               <p class="author-description"><?php the_author_meta( 'description' ); ?></p>
               
         </div>
         
      <?php endif; ?>
      
      <?php if ( get_theme_mod( 'colormag_related_posts_activate', 0 ) == 1 )
         get_template_part( 'inc/related-posts' );
      ?>
      <a class="more-link">
      <span>
        <!--Share Facebook-->
            <div class="fb-share-button" data-href="<?php the_permalink(); ?>" data-layout="box_count"></div>
            <!--
            Chúng ta thay data-href="https://developers.facebook.com/docs/plugins/"
            bằng Link trên để việc share/comment lấy theo link từng bài viết riêng biệt
            -->
        <!--END Share Facebook-->
        <!--G+ share-->
        <div class="g-plus" data-action="share" data-annotation="bubble" data-href="<?php the_permalink(); ?>" data-height="20"></div>
        <!--END G+-->
        <!--Tweeter-->
        <a href="https://twitter.com/share" class="twitter-share-button"{count}>Tweet</a>
        <!--END-->
        </span>
        </a>
<!--Comment Facebook-->
      <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="800px" data-numposts="5"></div>
<!--End Code Comment Facebook-->
      <?php
         /* do_action( 'colormag_before_comments_template' );
         // If comments are open or we have at least one comment, load up the comment template
         if ( comments_open() || '0' != get_comments_number() )
            comments_template();
         do_action ( 'colormag_after_comments_template' ); */
      ?>

	</div><!-- #primary -->

	<?php colormag_sidebar_select(); ?>

	<?php do_action( 'colormag_after_body_content' ); ?>

<?php get_footer(); ?>

<?php
/* Javascript for facebook Share */
?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1753216101560907";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--JS Comment Facebook-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1753216101560907";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--END-->

<!--G+ share-->
<script src="https://apis.google.com/js/platform.js" async defer>
  {lang: 'vi'}
</script>
<!--END G+-->
<!--Tweeter-->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<!--END-->