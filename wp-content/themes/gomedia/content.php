<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="entry-thumb-wrapper hidden-xs">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail( 'gomedia-post-thumb', array( 'class' => 'entry-thumb', 'alt' => esc_attr( get_the_title() ) ) ); ?></a>
		</div><!-- .entry-thumb-wrapper -->
	<?php endif; ?>

	<header class="entry-header">
    
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<?php gomedia_posted_on(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-excerpt">
		<?php the_excerpt(); ?>
        
        
	</div><!-- .entry-excerpt -->

</article><!-- #post-## -->

