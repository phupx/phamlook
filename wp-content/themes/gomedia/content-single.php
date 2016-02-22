<div class="entry-info entry-header col-md-2">

	<?php gomedia_post_author(); // Get the post author info. ?>

	<?php gomedia_social_sharing(); // Get the social sharing. ?>

	<?php
		$tags_list = get_the_tag_list( '<ul><li>','</li><li>','</li></ul>' );
		if ( $tags_list ) :
	?>
		<div class="entry-tags">
			<h3><?php _e( 'Tags', 'gomedia' ); ?></h3>
			<?php echo $tags_list; ?>
		</div>
	<?php endif; // End if $tags_list ?>

</div><!-- .col-md-2 -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php the_breadcrumb(); ?>
	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<time class="entry-date published" datetime="<?php echo get_the_date( 'c' ); ?>"><?php printf( __( 'Posted on %s', 'gomedia' ), esc_html( get_the_date() ) ); ?></time>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'gomedia' ) );
				if ( $categories_list && gomedia_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( 'in %1$s', 'gomedia' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>
			<?php edit_post_link( __( '&middot; Edit', 'gomedia' ), '<span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
    <span class="share-social" style="border-top:1px solid #dbdbdb; border-bottom:1px solid #dbdbdb; padding: 10px 0px; position: relative; clear: both; float:left; width:100%;">
        <!--Share Facebook-->
        <span>
        <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
        </span>
            <!--
            Chúng ta thay data-href="https://developers.facebook.com/docs/plugins/"
            bằng Link trên để việc share/comment lấy theo link từng bài viết riêng biệt
            -->
        <!--END Share Facebook-->
        <!--G+ share-->
        <span>
        <div class="g-plus" data-action="share" data-annotation="bubble" data-href="<?php the_permalink(); ?>" data-height="20"></div>
        <!--END G+-->
        <!--Tweeter-->
        <a href="https://twitter.com/share" class="twitter-share-button"{count}>Tweet</a>
        </span>
        <!--END-->
    </span>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'gomedia' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php gomedia_related_posts(); // Get the related posts. ?>

	<?php get_template_part( 'loop', 'nav' ); // Loads the loop-nav.php template  ?>
<!--FACEBOOK COMMENT-->    
<div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="800" data-numposts="5"></div>
<!--END FACEBOOK COMMENT-->    
	<?php
		// If comments are open or we have at least one comment, load up the comment template
		if ( comments_open() || '0' != get_comments_number() ) :
			comments_template();
		endif;
	?>
    
    
    
    <!--Facebook comment-->
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1753216101560907";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!--Facebook Share-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1753216101560907";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--End facebook-->
<!--G+ share-->
<script src="https://apis.google.com/js/platform.js" async defer>
  {lang: 'vi'}
</script>
<!--END G+-->
<!--Tweeter-->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<!--END-->

</article><!-- #post-## -->
