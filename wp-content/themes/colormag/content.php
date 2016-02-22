<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package ThemeGrill
 * @subpackage ColorMag
 * @since ColorMag 1.0
 */
?>




<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   <?php do_action( 'colormag_before_post_content' ); ?>

   <?php if ( has_post_thumbnail() ) { ?>
      <div class="featured-image">
         <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail( 'colormag-featured-image' ); ?></a>
      </div>
   <?php } ?>

   <div class="article-content clearfix">

      <?php if( get_post_format() ) { get_template_part( 'inc/post-formats' ); } ?>

      <?php colormag_colored_category(); ?>

      <header class="entry-header">
         <h1 class="entry-title">
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>"><?php the_title(); ?></a>
         </h1>
      </header>
      
      <?php colormag_entry_meta(); ?>

      <div class="entry-content clearfix">
         <?php
            the_excerpt();
         ?>
         <!--
         <a class="more-link" title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><span><?php _e( 'Read more', 'colormag' ); ?></span></a>
         -->
         <a class="more-link" title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"></a>
         <a class="more-link">
         <span class="share-social">
         <!--Share Facebook-->
            <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count"></div>
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
      </div>

   </div>
   <div class="clearfix"></div>

   <?php do_action( 'colormag_after_post_content' ); ?>
<!--Facebook Share-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=523418611172033";
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
</article>
