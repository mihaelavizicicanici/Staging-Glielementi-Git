<?php
if ( ! defined( 'ABSPATH' ) ) exit;
/**
 * The default template for displaying content
 */

	global $woo_options;

/**
 * The Variables
 *
 * Setup default variables, overriding them if the "Theme Options" have been saved.
 */

 	$settings = array(
					'thumb_w' => 810,
					'thumb_h' => 405,
					'thumb_align' => 'aligncenter'
					);

	$settings = woo_get_dynamic_values( $settings );
	$settings = apply_filters( 'woo_get_dynamic_values', $settings );

?>

	<article <?php post_class(); ?>>

		<header>
			<h1><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
			<?php woo_post_meta(); ?>
		</header>

		<?php
			if ( isset( $woo_options['woo_post_content'] ) && $woo_options['woo_post_content'] != 'content' ) {
				woo_image( 'width=' . $settings['thumb_w'] . '&height=' . $settings['thumb_h'] . '&class=thumbnail ' . $settings['thumb_align'] );
			}
		?>

		<section class="entry">
		<?php if ( isset( $woo_options['woo_post_content'] ) && $woo_options['woo_post_content'] == 'content' ) { the_content( __( 'Continue Reading &rarr;', 'woothemes' ) ); } else { the_excerpt(); } ?>
		</section>
		
		<ul>

			<?php $the_query = new WP_Query( 'posts_per_page=5' ); ?>

			<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>


			<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>

			<li><?php the_excerpt(__('(more�)')); ?></li>

			<?php
			
			endwhile;
			
			wp_reset_postdata();
			
			?>

		</ul>
	
		<footer class="post-more">
		<?php if ( isset( $woo_options['woo_post_content'] ) && $woo_options['woo_post_content'] == 'excerpt' ) { ?>
			<span class="comments"><?php comments_popup_link( __( 'Leave a comment', 'woothemes' ), __( '1 Comment', 'woothemes' ), __( '% Comments', 'woothemes' ) ); ?></span>
			<span class="post-more-sep">&bull;</span>
			<span class="read-more"><a href="<?php the_permalink(); ?>" title="<?php esc_attr_e( 'Continue Reading &rarr;', 'woothemes' ); ?>"><?php _e( 'Continue Reading &rarr;', 'woothemes' ); ?></a></span>
		<?php } ?>
		</footer>

	</article><!-- /.post -->