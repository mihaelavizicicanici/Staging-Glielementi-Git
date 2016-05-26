<?php
if ( ! defined( 'ABSPATH' ) ) exit;
/**
 * Template Name: Contact Form
 *
 * The contact form page template displays the a
 * simple contact form in your website's content area.
 *
 * @package WooFramework
 * @subpackage Template
 */

global $woo_options;
get_header();

$nameError = '';
$emailError = '';
$commentError = '';
$mathCheck = '';

//If the form is submitted
if( isset( $_POST['submitted'] ) ) {

	//Check to see if the honeypot captcha field was filled in
	if( trim( $_POST['checking'] ) !== '' ) {
		$captchaError = true;
	} else {

		// Check math field
		if( $_POST['mathCheck'] != 9 && strcasecmp( trim( $_POST['mathCheck'] ), 'nine' ) != 0  ) {
			$mathCheck = __( '[:en]You got the maths wrong [:it]Hai sbagliato il calcolo matematico', 'woothemes' );
			$hasError = true;
		} else {
			$math = trim( $_POST['mathCheck'] );
		}

		//Check to make sure that the name field is not empty
		if( trim( $_POST['contactName'] ) === '' ) {
			$nameError =  __( '[:en]You forgot to enter your name [:it]Inserisci il tuo nome', 'woothemes' );
			$hasError = true;
		} else {
			$name = trim( $_POST['contactName'] );
		}

		//Check to make sure sure that a valid email address is submitted
		if( trim( $_POST['email'] ) === '' )  {
			$emailError = __( '[:en]You forgot to enter your email address [:it]Inserisci il tuo indirizzo email', 'woothemes' );
			$hasError = true;
		} else if ( ! eregi( "^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email'] ) ) ) {
			$emailError = __( '[:en]You entered an invalid email address [:it]Hai inserito un indirizzo mail non valido', 'woothemes' );
			$hasError = true;
		} else {
			$email = trim( $_POST['email'] );
		}

		//Check to make sure comments were entered
		if( trim( $_POST['comments'] ) === '' ) {
			$commentError = __( '[:en]You forgot to enter your comments [:it]Inserisci un messaggio', 'woothemes' );
			$hasError = true;
		} else {
			$comments = stripslashes( trim( $_POST['comments'] ) );
		}

		//If there is no error, send the email
		if( ! isset( $hasError ) ) {

			$emailTo = get_option( 'woo_contactform_email' );
			$subject = sprintf( __( '[:en]Contact Form Submission from %s [:it]Richiesta di contatto inviata da %s', 'woothemes' ), esc_html( $name ) );
			$sendCopy = trim( $_POST['sendCopy'] );
			$body = __( "Name: $name \n\nEmail: $email \n\nComments: $comments", 'woothemes' );
			$headers = __( 'From: ', 'woothemes') . "$name <$email>" . "\r\n" . __( 'Reply-To: ', 'woothemes' ) . $email;

			wp_mail( $emailTo, $subject, $body, $headers );

			if( $sendCopy == true ) {
				$subject = __( '[:en]You emailed "gli elementi"[:it]Il tuo messaggio inviato a "gli elementi"', 'woothemes' );
				$headers = __( 'From: ', 'woothemes' ) . "$name <$emailTo>";
				wp_mail( $email, $subject, $body, $headers );
			}

			$emailSent = true;

		}
	}
}
?>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
jQuery(document).ready(function() {
	jQuery( 'form#contactForm').submit(function() {
		jQuery( 'form#contactForm .error').remove();
		var hasError = false;
		jQuery( '.requiredField').each(function() {
			if(jQuery(this).hasClass('math')) {
				if( jQuery.trim(jQuery(this).val()) != 9 && jQuery.trim(jQuery(this).val()).toLowerCase() != 'nine' ) {
					jQuery(this).parent().append( '<span class="error"><?php _e( '[:en]You got the maths wrong [:it]Hai sbagliato il calcolo matematico', 'woothemes' ); ?>.</span>' );
					jQuery(this).addClass( 'inputError' );
					hasError = true;
				}
			} else {
				if(jQuery.trim(jQuery(this).val()) == '') {
					var labelText = jQuery(this).prev( 'label').text();
					jQuery(this).parent().append( '<span class="error"><?php _e( '[:en]You forgot to enter your [:it]Inserisci', 'woothemes' ); ?> '+labelText+'.</span>' );
					jQuery(this).addClass( 'inputError' );
					hasError = true;
				} else if(jQuery(this).hasClass( 'email')) {
					var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
					if(!emailReg.test(jQuery.trim(jQuery(this).val()))) {
						var labelText = jQuery(this).prev( 'label').text();
						jQuery(this).parent().append( '<span class="error">'+labelText+' <?php _e( '[:en]invalid [:it]non corretta', 'woothemes' ); ?></span>' );
						jQuery(this).addClass( 'inputError' );
						hasError = true;
					}
				}
			}
		});
		if(!hasError) {
			var formInput = jQuery(this).serialize();
			jQuery.post(jQuery(this).attr( 'action'),formInput, function(data){
				jQuery( 'form#contactForm').slideUp( "fast", function() {
					jQuery(this).before( '<p class="tick"><?php _e( '[:en]<strong>Thanks!</strong> Your email was successfully sent [:it]<strong>Grazie!</strong> Il tuo messaggio è stato inviato correttamente', 'woothemes' ); ?></p>' );
				});
			});
		}

		return false;

	});
});
//-->!]]>
</script>

	<!-- MAP -->
   <?php if ( isset($woo_options['woo_contactform_map_coords']) && $woo_options['woo_contactform_map_coords'] != '' ) { $geocoords = $woo_options['woo_contactform_map_coords']; }  else { $geocoords = ''; } ?>
	<?php if ($geocoords != '') { ?>
		<section id="map" <?php if ( isset( $woo_options['woo_contact_panel'] ) && $woo_options['woo_contact_panel'] == 'true' ) { ?>class="float"<?php } ?>>
	    	<?php woo_maps_contact_output("geocoords=$geocoords"); ?>
		</section>
	<?php } ?>

    <div id="content" class="col-full">

    	<div class="section-wrapper">

    	<?php woo_main_before(); ?>

		<section id="main" class="fullwidth">

		<div class="section-wrapper">

            <article id="contact-page" class="page">

            <?php if( isset( $emailSent ) && true == $emailSent ) { ?>

                <p class="info"><?php _e( '[:en]Your email was successfully sent [:it]Il tuo messaggio è stato inviato correttamente', 'woothemes' ); ?></p>

            <?php } else { ?>

                <?php if ( have_posts() ) { ?>

                <?php while ( have_posts() ) { the_post(); ?>

                        <section class="entry">
	                        <?php the_content(); ?>

						   <?php if ( isset($woo_options['woo_contactform_map_coords']) && $woo_options['woo_contactform_map_coords'] != '' ) { $geocoords = $woo_options['woo_contactform_map_coords']; }  else { $geocoords = ''; } ?>

						   <?php if( ( isset( $woo_options['woo_contact_panel'] ) && $woo_options['woo_contact_panel'] == 'true' ) || ($geocoords != '') ) { ?>

						    	<section id="location-map">

						    		<h2><?php _e( '[:en]Get in touch [:it]Contattaci', 'woothemes' ); ?></h2>

						    		<!-- LOCATION -->
									<?php if ( isset( $woo_options['woo_contact_panel'] ) && $woo_options['woo_contact_panel'] == 'true' ) { ?>
                						<section id="location">
									    	<ul>
									    	    <?php if (isset($woo_options['woo_contact_title']) && $woo_options['woo_contact_title'] != '' ) { ?><li><span><?php echo esc_html( $woo_options['woo_contact_title'] ); ?></span><?php echo nl2br( esc_html( $woo_options['woo_contact_address'] ) ); ?></li><?php } ?>
									    	    <?php if (isset($woo_options['woo_contact_number']) && $woo_options['woo_contact_number'] != '' ) { ?><li><span><?php _e('Tel','woothemes'); ?></span> <?php echo esc_html( $woo_options['woo_contact_number'] ); ?></li><?php } ?>
									    	    <?php if (isset($woo_options['woo_contact_fax']) && $woo_options['woo_contact_fax'] != '' ) { ?><li><span><?php _e('Fax','woothemes'); ?></span> <?php echo esc_html( $woo_options['woo_contact_fax'] ); ?></li><?php } ?>
									    	    <?php if (isset($woo_options['woo_contactform_email']) && $woo_options['woo_contactform_email'] != '' ) { ?><li><span><?php _e('Email','woothemes'); ?></span> <a href="mailto:<?php echo esc_attr( $woo_options['woo_contactform_email'] ); ?>"><?php echo esc_html( $woo_options['woo_contactform_email'] ); ?></a></li><?php } ?>
									    	</ul>
										</section><!-- /.location -->
									<?php } ?>

						    	</section><!-- /#location-map -->

						    <?php } ?>

                			<!-- FORM -->

	                        <?php if( isset( $hasError ) || isset( $captchaError ) ) { ?>
                   		 	    <p class="alert"><?php _e( "[:en]There was an error submitting the form. [:it]Si è verificato un errore durante l'invio.", 'woothemes' ); ?></p>
                   		 	<?php } ?>
                   		 	<?php if ( get_option( 'woo_contactform_email' ) == '' ) { ?>
                   		 	    <?php echo do_shortcode( '[box type="alert"]' . __( "[:en]E-mail has not been setup properly. Please add your contact e-mail! [:it]L'indirizzo email non è stato inserito correttamente. Inserisci l'indirizzo corretto", 'woothemes' ) . '[/box]' );  ?>
                   		 	<?php } ?>


                   		 	<form action="<?php echo esc_url( get_permalink( get_the_ID() ) ); ?>" id="contactForm" method="post">

                   		 		<h2><?php _e( '[:en]Send us a message [:it]Inviaci un messaggio', 'woothemes' ); ?></h2>

                   		 	    <ol class="forms">
                   		 	        <li><label for="contactName"><?php _e( '[:en]Name [:it]Nome', 'woothemes' ); ?></label>
                   		 	            <input type="text" name="contactName" id="contactName" value="<?php if( isset( $_POST['contactName'] ) ) { echo esc_attr( $_POST['contactName'] ); } ?>" class="txt requiredField" />
                   		 	            <?php if($nameError != '') { ?>
                   		 	                <span class="error"><?php echo $nameError;?></span>
                   		 	            <?php } ?>
                   		 	        </li>

                   		 	        <li><label for="email"><?php _e( 'Email', 'woothemes' ); ?></label>
                   		 	            <input type="text" name="email" id="email" value="<?php if( isset( $_POST['email'] ) ) { echo esc_attr( $_POST['email'] ); } ?>" class="txt requiredField email" />
                   		 	            <?php if($emailError != '') { ?>
                   		 	                <span class="error"><?php echo $emailError;?></span>
                   		 	            <?php } ?>
                   		 	        </li>

                   		 	        <li class="textarea"><label for="commentsText"><?php _e( '[:en]Message [:it]Messaggio', 'woothemes' ); ?></label>
                   		 	            <textarea name="comments" id="commentsText" rows="5" cols="30" class="requiredField"><?php if( isset( $_POST['comments'] ) ) { echo esc_textarea( $_POST['comments'] ); } ?></textarea>
                   		 	            <?php if( $commentError != '' ) { ?>
                   		 	                <span class="error"><?php echo $commentError; ?></span>
                   		 	            <?php } ?>
                   		 	        </li>

                   		 	        <li class="riddle"><label for="mathCheck"><?php _e( '[:en]Solve: [:it]Risolvi:', 'woothemes' ); ?> 3 + 6 =</label>
		                                <input type="text" name="mathCheck" id="mathCheck" value="<?php if( isset( $_POST['mathCheck'] ) ) { echo esc_attr( $_POST['mathCheck'] ); } ?>" class="txt requiredField math" />
		                                <?php if($mathCheck != '') { ?>
		                                    <span class="error"><?php echo $mathCheck;?></span>
		                                <?php } ?>
		                            </li>

                   		 	        <li class="inline"><input type="checkbox" name="sendCopy" id="sendCopy" value="true"<?php if( isset( $_POST['sendCopy'] ) && $_POST['sendCopy'] == true ) { echo ' checked="checked"'; } ?> /><label for="sendCopy"><?php _e( '[:en]Send a copy of this email to yourself [:it]Invia una copia di questo messaggio al mio indirizzo email', 'woothemes' ); ?></label></li>
                   		 	        <li class="screenReader"><label for="checking" class="screenReader"><?php _e( '[:en]If you want to submit this form, do not enter anything in this field [:it]Se vuoi inviare questo messaggio, non completare questo campo', 'woothemes' ); ?></label><input type="text" name="checking" id="checking" class="screenReader" value="<?php if( isset( $_POST['checking'] ) ) { echo esc_attr( $_POST['checking'] ); } ?>" /></li>
                   		 	        <li class="buttons"><input type="hidden" name="submitted" id="submitted" value="true" /><input class="submit button" type="submit" value="<?php esc_attr_e( '[:en]Send Message [:it]Invia messaggio', 'woothemes' ); ?>" /></li>
                   		 	    </ol>
                   		 	</form>

                        </section>

                    <?php
                    		} // End WHILE Loop
                    	}
                    }
                    ?>

            </article><!-- /#contact-page -->
        </div>
		</section><!-- /#main -->

		<?php woo_main_after(); ?>

        </div><!-- /.section-wrapper -->

    </div><!-- /#content -->
<?php get_footer(); ?>