<?php
if ( ! defined( 'ABSPATH' ) ) exit;

/*-----------------------------------------------------------------------------------*/
/* Start WooThemes Functions - Please refrain from editing this section */
/*-----------------------------------------------------------------------------------*/

// WooFramework init
require_once ( get_template_directory() . '/functions/admin-init.php' );

/*-----------------------------------------------------------------------------------*/
/* Load the theme-specific files, with support for overriding via a child theme.
/*-----------------------------------------------------------------------------------*/

$includes = array(
				'includes/theme-options.php', 						// Options panel settings and custom settings
				'includes/theme-functions.php', 					// Custom theme functions
				'includes/theme-actions.php', 						// Theme actions & user defined hooks
				'includes/theme-comments.php', 						// Custom comments/pingback loop
				'includes/theme-js.php', 							// Load JavaScript via wp_enqueue_script
				'includes/sidebar-init.php', 						// Initialize widgetized areas
				'includes/theme-widgets.php',						// Theme widgets
				'includes/theme-plugin-integrations.php'			// Theme plugin integrations
				);

// Allow child themes/plugins to add widgets to be loaded.
$includes = apply_filters( 'woo_includes', $includes );

foreach ( $includes as $i ) {
	locate_template( $i, true );
}

/*-----------------------------------------------------------------------------------*/
/* Plugin Integrations */
/*-----------------------------------------------------------------------------------*/
if ( is_woocommerce_activated() ) {
	locate_template( 'includes/theme-woocommerce.php', true );
} // End If Statement

if ( is_ideck_activated() ) {
	locate_template( 'includes/theme-ignition_deck.php', true );
} // End If Statement

/*-----------------------------------------------------------------------------------*/
/* You can add custom functions below */
/*-----------------------------------------------------------------------------------*/
// add item to cart on visit depending on cart total value

function add_product_to_cart() {
	if ( ! is_admin() ) {
		$product_id = 1390;
		$found = false;
		$cart_total = 50;
		//check if product already in cart
		if( WC()->cart->total >= $cart_total ) {
			if ( sizeof( WC()->cart->get_cart() ) > 0 ) {
				foreach ( WC()->cart->get_cart() as $cart_item_key => $values ) {
					$_product = $values['data'];
					if ( $_product->id == $product_id )
						$found = true;
				}
				// if product not found, add it
				if ( ! $found )
					WC()->cart->add_to_cart( $product_id );
			} 
		}
	}
}
add_action( 'template_redirect', 'add_product_to_cart' );

function wc_empty_cart_redirect_url() {
	return 'https://www.glielementi.it/shop-online/';
}
add_filter( 'woocommerce_return_to_shop_redirect', 'wc_empty_cart_redirect_url' );

// Hook in
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

// Our hooked in function - $fields is passed via the filter!
function custom_override_checkout_fields( $fields ) {
     unset($fields['billing']['billing_company']);
	 unset($fields['billing']['billing_state']);
	 unset($fields['billing']['billing_address_2']);
     unset($fields['shipping']['shipping_company']);
	 unset($fields['shipping']['shipping_address_2']);
     unset($fields['order']['order_comments']);
	 
	 $fields['billing']['codice_fiscale'] = array(
    'label'     => __('Codice fiscale', 'woocommerce'),
    'placeholder'   => _x('Codice fiscale', 'placeholder', 'woocommerce'),
    'required'  => true,
    'class'     => array('form-row-wide'),
    'clear'     => true
     );
	
     return $fields;
}

/*Reorder checkout fields*/

add_filter("woocommerce_checkout_fields", "order_fields");

function order_fields($fields) {

    $order = array(
        "billing_first_name", 
        "billing_last_name", 
		"billing_email",
		"billing_phone",
		"codice_fiscale", 
		"billing_address_1", 
		"billing_postcode",
		"billing_city",
		"billing_country",
    );
    foreach($order as $field)
    {
        $ordered_fields[$field] = $fields["billing"][$field];
    }

    $fields["billing"] = $ordered_fields;
    return $fields;

}


	/**
	 * Process the checkout
	 */
	add_action('woocommerce_checkout_process', 'my_custom_checkout_field_process');

	function my_custom_checkout_field_process() {
		// Check if set, if its not set add an error.
		if ( ! $_POST['codice_fiscale'] )
			wc_add_notice( __( 'Codice fiscale' ), 'error' );
	} 
	
	/**
	 * Update the order meta with field value
	 */
	add_action( 'woocommerce_checkout_update_order_meta', 'my_custom_checkout_field_update_order_meta' );

	function my_custom_checkout_field_update_order_meta( $order_id ) {
		if ( ! empty( $_POST['codice_fiscale'] ) ) {
			update_post_meta( $order_id, 'Codice fiscale', sanitize_text_field( $_POST['codice_fiscale'] ) );
		}
	}
	
	/**
	 * Display field value on the order edit page
	 */
	add_action( 'woocommerce_admin_order_data_after_billing_address', 'my_custom_checkout_field_display_admin_order_meta', 10, 1 );

	function my_custom_checkout_field_display_admin_order_meta($order){
		echo '<p><strong>'.__('Codice fiscale').':</strong> ' . get_post_meta( $order->id, 'Codice fiscale', true ) . '</p>';
	}
	
	/*Add codice fiscale to email*/
	/*add_filter('woocommerce_email_order_meta_keys', 'my_custom_order_meta_keys');

	function my_custom_order_meta_keys( $keys ) {
		 $keys[] = 'Codice fiscale'; // This will look for a custom field called 'Tracking Code' and add it to emails
		 return $keys;
	}*/
	 
	/*Add codice fiscale to admin email*/
	function email_order_meta_fields( $fields, $sent_to_admin, $order ) {
    $fields['codice_fiscale'] = array(
                'label' => __( 'Codice fiscale' ),
                'value' => get_post_meta( $order->id, '_codice_fiscale', true ),
            );
    return $fields;
	}
	add_filter('woocommerce_email_order_meta_fields', 'email_order_meta_keys', 10, 3 );

	/*Remove payment method*/
	//remove_action( 'woocommerce_checkout_order_review', 'woocommerce_checkout_payment', 20 );
	/*Add payment method to order notes*/
	//add_action( 'woocommerce_after_order_notes', 'woocommerce_checkout_payment', 20 );
/*Add LoginOut in Top Menu */
add_filter( 'wp_nav_menu_items', 'add_loginout_link', 10, 2 );
function add_loginout_link( $items, $args ) {
	if (is_user_logged_in() && $args->theme_location == 'top-menu') {
			$items .= '
<a href="'. wp_logout_url( home_url() ) .'" id="logout">Log Out</a>

';
	}
	elseif (!is_user_logged_in() && $args->theme_location == ' ') {
			$items .= '
<a  id="login" >Log In</a>';
	}
	return $items;
}

/*Change text add to cart button*/
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' );  // 2.1 +
add_filter( 'woocommerce_product_add_to_cart_text', 'woo_custom_cart_button_text' );     // 2.3 +
function woo_custom_cart_button_text() {
  return __( 'Acquista', 'woocommerce' );
}
// Set search results to display only 'product' post type results
if ( !is_admin() ) {
function searchfilter($query) {
    if ($query->is_search && !is_admin() ) {
        $query->set('post_type',array('product'));
    }
return $query;
}
add_filter('pre_get_posts','searchfilter');
}

//* Make Font Awesome available
add_action( 'wp_enqueue_scripts', 'enqueue_font_awesome' );
function enqueue_font_awesome() {

	wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css' );

}
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 15;' ), 15 );

//remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

add_action( 'woo_header_inside', 'woo_custom_add_searchform', 10 );
 
function woo_custom_add_searchform () {
    echo '<div id="header-search" class="header-search fr">' . "
";
    get_template_part( 'searchform' );
    echo '</div><!--/#header-search .header-search fr-->' . "
";
}

//add out of stock in catalog
add_action( 'woocommerce_after_shop_loop_item_title', 'stock_shop_page', 15 );
//create our function
function stock_shop_page() {
	global $product;
	$availability      = $product->get_availability();
	$availability_html = empty( $availability['availability'] ) ? '' : '<p class="stock ' . esc_attr( $availability['class'] ) . '">' . esc_html( $availability['availability'] ) . '</p>';
	echo apply_filters( 'woocommerce_stock_html', $availability_html, $availability['availability'], $product );
}

/*remove default sorting from shop page*/
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

// Display Custom Fields
add_action( 'woocommerce_product_options_general_product_data', 'woo_add_custom_general_fields' );

// Save Custom Fields
add_action( 'woocommerce_process_product_meta', 'woo_add_custom_general_fields_save' );

function woo_add_custom_general_fields() {

  global $woocommerce, $post;
  
  echo '<div class="options_group">';
  
  woocommerce_wp_text_input( 
	array( 
		'id'          => '_text_field', 
		'label'       => __( 'Newsletter teaser', 'woocommerce' ), 
		'placeholder' => 'Enter the custom value here...',
		'desc_tip'    => 'true',
		'description' => __( 'Enter the newsletter teaser here', 'woocommerce' ) 
	)
);
  
  echo '</div>';
	
}

function woo_add_custom_general_fields_save( $post_id ){
	
	// Text Field
	$woocommerce_text_field = $_POST['_text_field'];
	if( !empty( $woocommerce_text_field ) )
		update_post_meta( $post_id, '_text_field', esc_attr( $woocommerce_text_field ) );
}

/*Prevent default checking Payment*/
function wpchris_override_woo_checkout_scripts() {

        wp_deregister_script('wc-checkout');
        wp_enqueue_script('wc-checkout', get_stylesheet_directory_uri() . '/js/index.js', array('jquery', 'woocommerce', 'wc-country-select', 'wc-address-i18n'), null, true);
    }
    add_action('wp_enqueue_scripts', 'wpchris_override_woo_checkout_scripts');

    /*function wpchris_unselect_payment_method() {

        echo "<script>jQuery( '.payment_methods input.input-radio' ).removeProp('checked');</script>";
    }
    add_action('woocommerce_review_order_before_submit','wpchris_unselect_payment_method' );

    function wpchris_filter_gateways( $gateways ){

        global $woocommerce;

        foreach ($gateways as $gateway) {
            $gateway->chosen = 0;
        }

    return $gateways;
}
add_filter( 'woocommerce_available_payment_gateways', 'wpchris_filter_gateways', 1);*/
		
/*-----------------------------------------------------------------------------------*/
/* Don't add any code below here or the sky will fall down */
/*-----------------------------------------------------------------------------------*/
?>