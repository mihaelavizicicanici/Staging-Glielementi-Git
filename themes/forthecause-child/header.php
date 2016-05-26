<?php
if ( ! defined( 'ABSPATH' ) ) exit;
/**
 * Header Template
 *
 * Here we setup all logic and XHTML that is required for the header section of all screens.
 *
 * @package WooFramework
 * @subpackage Template
 */

 global $woo_options, $woocommerce;

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="google-site-verification" content="REIBTBMBrVYvPVM0e0P3iynFe_XmaHWeFvRMuhxYp4U" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	//bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'woothemes' ), max( $paged, $page ) );

	?></title>
<?php woo_meta(); ?>

<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>" />
<?php
wp_head();
woo_head();
?>
<script type='text/javascript' src='https://www.glielementi.it/wp-content/themes/forthecause-child/js/index.js'></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49476674-1', 'auto');
  ga('send', 'pageview');

</script>
<link rel='stylesheet' id='googleFonts-css'  href='https://fonts.googleapis.com/css?family=Raleway%3A400%2C700&#038;ver=3.9.8' type='text/css' media='all' />
<link rel='stylesheet' href='https://www.glielementi.it/wp-content/themes/forthecause-child/css/custom.css' type='text/css' />

</head>
<body <?php body_class(); ?>>

<?php woo_top(); ?>

<div class="popup"></div>
<div class="popup-modal"></div>
<div id="cookie-policy">
	<div class="text-policy">
		<p>Questo sito utilizza cookie tecnici e di profilazione, anche di terze parti, al fine di inviarti pubblicit&agrave; e servizi in linea con le tue preferenze e rendere pi&ugrave; rapido e migliore il suo utilizzo. Se vuoi saperne di pi&ugrave; o negare il consenso a tutti o ad alcuni cookie <a href="https://www.glielementi.it/privacy-policy/">clicca qui</a>. Chiudendo questo banner, scorrendo questa pagina o cliccando qualunque suo elemento acconsenti a ricevere tutti i cookie presenti su questo sito.
	</div>
	<div class="button-policy button">
		<p>OK</p>
	</div>
</div>
<div id="search-box"><!--a class="open-search-box"><img src="https://www.glielementi.it/wp-content/uploads/2015/11/ic_search_white_24dp_1x.png" /></a--><a class="icon-close-search"><img src="https://www.glielementi.it/wp-content/uploads/2016/01/1444064437_Danger.png" width="16" height="16"></a><?php get_sidebar(); ?></div>
<div class="mailchimp-popup">
	<?php

		if( function_exists( 'mc4wp_form' ) ) {
			mc4wp_show_form();
		}

?>
</div>
<div class="img-popup">
<a class="popup-img" href="https://www.glielementi.it/it/prodotto/crema-alle-cellule-staminali-vegetali/"><img src="https://www.glielementi.it/wp-content/uploads/2016/04/UP-10-festa-mamma_variante.jpg"/></a>
</div>
<?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>

<div class="col2-set" id="customer_login">

	<div class="col-1 login" id="login-popup">
		<div class="background-login">
			<?php endif; ?>
				<div class="background-popup"></div>
				<span class='close-popup'><a class='close-login'><img src='https://www.glielementi.it/wp-content/uploads/2016/01/1444064437_Danger.png' width="16" height="16" /></a></span>
				<div class="login-register-links">
					<a id="login3" class="active">Accedi</a>
					<a id="register3">Registrati</a>
				</div>
				

				<form method="post" class="login">

					<?php do_action( 'woocommerce_login_form_start' ); ?>

					<p class="form-row form-row-wide">
						
						<input type="text" class="input-text" name="username" id="username" placeholder="Email" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>" />
						<img src="https://www.glielementi.it/wp-content/uploads/2015/11/ic_email_black_18dp_1x.png" class="icon-input" width="18" height="18" />
					</p>
					<p class="form-row form-row-wide">
						
						<input class="input-text" type="password" name="password" id="password" placeholder="Password" />
						<img src="https://www.glielementi.it/wp-content/uploads/2015/11/ic_lock_black_18dp_1x.png" class="icon-input" width="18" height="18" />
					</p>

					<?php do_action( 'woocommerce_login_form' ); ?>

					<p class="form-row" style="margin-bottom: 20px;">
						<?php wp_nonce_field( 'woocommerce-login' ); ?>
						<input type="submit" class="button" name="login" value="<?php esc_attr_e( 'Login', 'woocommerce' ); ?>" />
						
						
					</p>
					<p class="lost_password">
						<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php _e( 'Lost your password?', 'woocommerce' ); ?></a>
					</p>

					<?php do_action( 'woocommerce_login_form_end' ); ?>

				</form>


			<?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>
		</div>	
	</div>

	<div class="col-2 register">
		
		<div class="background-popup"></div>
		<span class='close-popup'><a class='close-login'><img src='https://www.glielementi.it/wp-content/uploads/2016/01/1444064437_Danger.png' width="16" height="16" /></a></span>
		<div class="login-register-links">
			<a id="login2">Accedi</a>
			<a id="register2" class="active">Registrati</a>
		</div>
		

		<form method="post" class="register">

			<?php do_action( 'woocommerce_register_form_start' ); ?>

			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

				<p class="form-row form-row-wide">
					
					<input type="text" class="input-text" name="username" id="reg_username" placeholder="Username" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>" />
					<img src="https://www.glielementi.it/wp-content/uploads/2015/11/ic_email_black_18dp_1x.png" class="icon-input" width="18" height="18" />
				</p>

			<?php endif; ?>

			<p class="form-row form-row-wide">
				
				<input type="email" class="input-text" name="email" id="reg_email" placeholder="Email" value="<?php if ( ! empty( $_POST['email'] ) ) echo esc_attr( $_POST['email'] ); ?>" />
				<img src="https://www.glielementi.it/wp-content/uploads/2015/11/ic_email_black_18dp_1x.png" class="icon-input" width="18" height="18" />
			</p>

			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

				<p class="form-row form-row-wide">
					
					<input type="password" class="input-text" name="password" id="reg_password" placeholder="Password" />
					<img src="https://www.glielementi.it/wp-content/uploads/2015/11/ic_lock_black_18dp_1x.png" class="icon-input" width="18" height="18" />
				</p>

			<?php endif; ?>

			<!-- Spam Trap -->
			<div style="<?php echo ( ( is_rtl() ) ? 'right' : 'left' ); ?>: -999em; position: absolute;"><label for="trap"><?php _e( 'Anti-spam', 'woocommerce' ); ?></label><input type="text" name="email_2" id="trap" tabindex="-1" /></div>

			<?php do_action( 'woocommerce_register_form' ); ?>
			<?php do_action( 'register_form' ); ?>

			<p class="form-row">
				<?php wp_nonce_field( 'woocommerce-register' ); ?>
				<input type="submit" class="button" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>" />
			
			</p>

			<?php do_action( 'woocommerce_register_form_end' ); ?>

		</form>

	</div>

</div>
<?php endif; ?>


<div id="wrapper">

	<div id="inner-wrapper">
	
	<div class="" id="top-menu">
	<div class="text-slideshow">
		<a href="#" class="italian">Spedizione gratuita per acquisti superiori a 50 &euro;</a>
		<a href="#" class="english">Delivery within 4 working days from order confirmation</a>
	</div>
	
	<div id="small-logo">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="https://www.glielementi.it/wp-content/uploads/2016/01/Gli-Elementi-small-logo-1.png" width="27" height="32" /></a>
	</div>
	
    <?php woo_header_before(); ?>
	</div>
	
		<header id="header" class="">
		
			<div class="col-full">

				<div class="section-wrapper">
				
					<span class="nav-toggle"><a href="#navigation"><span><?php _e( 'Navigation', 'woothemes' ); ?></span></a></span>

					<?php woo_nav_before(); ?>

					<nav id="navigation" role="navigation" class="navigation">

							<section class="menus">
							<?php get_sidebar();?>
							
							<?php
							if ( function_exists( 'has_nav_menu' ) && has_nav_menu( 'primary-menu' ) ) {
								
								wp_nav_menu( array( 'depth' => 6, 'sort_column' => 'menu_order', 'container' => 'ul', 'menu_id' => 'main-nav', 'menu_class' => 'nav', 'theme_location' => 'primary-menu' ) );
							} else {
							?>
							<ul id="main-nav" class="nav">
								
								<?php if ( is_page() ) $highlight = 'page_item'; else $highlight = 'page_item current_page_item'; ?>
								<li class="<?php echo $highlight; ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e( 'Home', 'woothemes' ); ?></a></li>
								<?php wp_list_pages( 'sort_column=menu_order&depth=6&title_li=&exclude=' ); ?>
							</ul><!-- /#nav -->
							<?php } ?>
							<?php if ( is_woocommerce_activated() && isset( $woo_options['woocommerce_header_cart_link'] ) && 'true' == $woo_options['woocommerce_header_cart_link'] ) { ?>
								<h3><?php _e( 'Shopping Cart', 'woothemes' ); ?></h3>
								<ul class="nav cart">
									<li <?php if ( is_cart() ) { echo 'class="current-menu-item"'; } ?>>
										<?php woo_wc_cart_link(); ?>
									</li>
								</ul>
							<?php } ?>
							</section><!--/.menus-->
					</nav><!-- /#navigation -->
					
					

				</div><!-- /.section-wrapper -->
				
			</div><!-- /.col-full -->
			
			<!-- List nav in right part -->
			
			
					<?php woo_nav_after(); ?>
					

		</header><!-- /#header -->
	
	<?php woo_content_before(); ?>
	