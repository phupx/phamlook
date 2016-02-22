<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<div class="entry-content">
    
    <div class="share-social" style="border-top:1px solid #dbdbdb; border-bottom:1px solid #dbdbdb; margin-bottom:20px; padding: 10px 0px; position: relative; clear: both; float:left; width:100%;">
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
    </div>
<br>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'gomedia' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	
	<?php edit_post_link( __( 'Edit', 'gomedia' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer>' ); ?>

</article><!-- #post-## -->

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