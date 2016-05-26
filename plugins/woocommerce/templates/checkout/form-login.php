<?php
/**
 * Checkout login form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( is_user_logged_in() || 'no' === get_option( 'woocommerce_enable_checkout_login_reminder' ) ) {
	return;
}

$info_message  = apply_filters( 'woocommerce_checkout_login_message', __( 'Returning customer?', 'woocommerce' ) );
$info_message .= ' <a href="#" class="showlogin">' . __( 'Click here to login', 'woocommerce' ) . '</a>';
wc_print_notice( $info_message, 'notice' );
?>

<?php
	woocommerce_login_form(
		array(
			'message'  => __( "[:en]If you have shopped with us before, please enter your details in the boxes below. If you are a new customer please proceed to the Billing &amp; Shipping section. [:it]Se hai già acquistato su glielementi.it, inserisci sotto la tua email e password per velocizzare la procedura d'acquisto.", 'woocommerce' ),
			'redirect' => wc_get_page_permalink( 'checkout' ),
			'hidden'   => true
		)
	);
?>
