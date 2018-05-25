<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'twentyseventeen-panel ' ); ?> >

	<?php if ( has_post_thumbnail() ) :
		$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'twentyseventeen-featured-image' );

		// Calculate aspect ratio: h / w * 100%.
		$ratio = $thumbnail[2] / $thumbnail[1] * 100;
		?>

		<div class="panel-image" style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);">
			<div class="panel-image-prop" style="padding-top: <?php echo esc_attr( $ratio ); ?>%"></div>
		</div><!-- .panel-image -->

	<?php endif; ?>

	<div class="panel-content">
		<div class="wrap">
			<div class="entry-wrapper">
				<header class="entry-header">
					<?php // the_title( '<h2 class="entry-title">', '</h2>' ); ?>
	
					<?php
	
						if ( get_field('section_header') ) { ?>
	
						<h2 class='entry-header'><?php the_field('section_header') ?></h2>
						
	
					<?php } ?>

					<?php
	
						if ( get_field('section_header-2') ) { ?>

							<h2 class='entry-header'><?php the_field('section_header-2') ?></h2>
						

					<?php } ?>
					
					<?php twentyseventeen_edit_link( get_the_ID() ); ?>
	
				</header><!-- .entry-header -->
	
				<div class="entry-content">
	
					<?php
	
						if ( get_field('section_text') ) { ?>
	
						<p class='entry-content'><?php the_field('section_text') ?></p>
	
					<?php } ?>

					<?php
	
						if ( get_field('section_text-2') ) { ?>

						<p class='entry-content'><?php the_field('section_text-2') ?></p>

					<?php } ?>
	
					<?php
						/* translators: %s: Name of current post */
						the_content( sprintf(
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
							get_the_title()
						) );
					?>
				</div><!-- .entry-content -->
			</div>

		</div><!-- .wrap -->
	</div><!-- .panel-content -->

</article><!-- #post-## -->
