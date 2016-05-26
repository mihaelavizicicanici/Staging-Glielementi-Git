<?php

if ( ! defined( 'ABSPATH' ) ) exit;

/**

 * Page Template

 *

 * This template is the default page template. It is used to display content when someone is viewing a

 * singular view of a page ('page' post_type) unless another page template overrules this one.

 * @link http://codex.wordpress.org/Pages

 *

 * @package WooFramework

 * @subpackage Template

 */

	get_header();

	global $woo_options;

?>



    <div id="content" class="page col-full">
		<h1>Test Custom Template</h1>


        <div class="section-wrapper">



    	<?php woo_main_before(); ?>



		<section id="main" class="col-left">



        <?php

        	if ( have_posts() ) { $count = 0;

        		while ( have_posts() ) { the_post(); $count++;

        ?>

            <article <?php post_class(); ?>>



                <section class="entry">

                	<?php the_content(); ?>



					<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'woothemes' ), 'after' => '</div>' ) ); ?>

               	</section><!-- /.entry -->



				<?php edit_post_link( __( '{ Edit }', 'woothemes' ), '<span class="small">', '</span>' ); ?>



            </article><!-- /.post -->



            <?php

            	// Determine wether or not to display comments here, based on "Theme Options".

            	if ( isset( $woo_options['woo_comments'] ) && in_array( $woo_options['woo_comments'], array( 'page', 'both' ) ) ) {

            		comments_template();

            	}



				} // End WHILE Loop

			} else {

		?>

			<article <?php post_class(); ?>>

            	<p><?php _e( 'Sorry, no posts matched your criteria.', 'woothemes' ); ?></p>

            </article><!-- /.post -->

        <?php } // End IF Statement ?>



		</section><!-- /#main -->



		<?php woo_main_after(); ?>




        </div><!-- /.section-wrapper -->



    </div><!-- /#content -->



<?php get_footer(); ?>