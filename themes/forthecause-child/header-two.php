<?php
if ( ! defined( 'ABSPATH' ) ) exit;
/**
 * Header Template Two
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
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

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
<link rel='stylesheet' id='googleFonts-css'  href='http://fonts.googleapis.com/css?family=Raleway%3A400%2C700&#038;ver=3.9.8' type='text/css' media='all' />
<script>
jQuery(document).ready(function($) {
    $(".tabs-menu a").click(function(event) {
        event.preventDefault();
        $(this).parent().addClass("active");
        $(this).parent().siblings().removeClass("active");
        var tab = $(this).attr("href");
        $(".tab-content").not(tab).css("display", "none");
        $(tab).fadeIn();
		
    });
	
	$("#verticalMenu a").click(function(event) {
        event.preventDefault();
        $(this).parent().addClass("active");
        $(this).parent().siblings().removeClass("active");
        var tab = $(this).attr("href");
        $(".tab-content").not(tab).css("display", "none");
        $(tab).fadeIn();
    });
	$(".category.tab.viso a").on("click", function() {
	
		$(".has-sub.viso ul").slideDown();
		$(".has-sub.corpo ul").slideUp();
	
	});
	$(".category.tab.corpo a").on("click", function() {
	
		
		$(".has-sub.viso ul").slideUp();
		$(".has-sub.corpo ul").slideDown();
		
	
	});
	$(".category.tab.bagno a").on("click", function() {
	
		
		$(".has-sub.viso ul").slideUp();
		$(".has-sub.corpo ul").slideUp();
		
	
	});
	$(".category.tab.all a").on("click", function() {
	
		
		$(".has-sub.viso ul").slideUp();
		$(".has-sub.corpo ul").slideUp();
		
	
	});
	//Linea viso
	$("#menu-item-703 a").attr("href", "#tab-2")
	$("#menu-item-703 a").click(function() {
    $('html, body').animate({
        scrollTop: $("#content").offset().top
    }, 500);
});
	$("#menu-item-703 a").click(function(event) {
        event.preventDefault();
        $(this).parent().addClass("active");
        $(this).parent().siblings().removeClass("active");
        var tab = $(this).attr("href");
        $(".tab-content").not(tab).css("display", "none");
        $(tab).fadeIn();
    });
	//Linea corpo
	$("#menu-item-702 a").attr("href", "#tab-3")
	$("#menu-item-702 a").click(function() {
    $('html, body').animate({
        scrollTop: $("#content").offset().top
    }, 500);
});
	$("#menu-item-702 a").click(function(event) {
        event.preventDefault();
        $(this).parent().addClass("active");
        $(this).parent().siblings().removeClass("active");
        var tab = $(this).attr("href");
        $(".tab-content").not(tab).css("display", "none");
        $(tab).fadeIn();
    });
	//Linea bagno
	$("#menu-item-701 a").attr("href", "#tab-4")
	$("#menu-item-701 a").click(function() {
    $('html, body').animate({
        scrollTop: $("#content").offset().top
    }, 500);
});
	$("#menu-item-701 a").click(function(event) {
        event.preventDefault();
        $(this).parent().addClass("active");
        $(this).parent().siblings().removeClass("active");
        var tab = $(this).attr("href");
        $(".tab-content").not(tab).css("display", "none");
        $(tab).fadeIn();
    });

	 $(document).scroll(function () {
    var scroll = $(document).scrollTop();


    if (scroll >= 1000) {
	
	$(".side-menu li a.active").removeClass("active");
		$(this).addClass("active");
	}
	});
	
	
	var stickyNavTop = $('#header').offset().top;
 
	var stickyNav = function(){
	var scrollTop = $(window).scrollTop();
		  
	if (scrollTop > stickyNavTop) { 
		$('#header').addClass('sticky');
	} else {
		$('#header').removeClass('sticky'); 
	}
	};
	 
	stickyNav();
	 
	$(window).scroll(function() {
		stickyNav();
	});
	

	$(".tabs-menu li").hover( function() {
		$(this).toggleClass("hover");
	});
	
	$(".side-menu li a").click(function() {
		$("a.active").removeClass("active");
		$(this).addClass("active");
		
        
	});

	
	$(".viewDetails").click(function() {
	
		alert($(this).attr("id"));
		
	
	});

$(document).ready(function(){
	$("#verticalMenu > ul > li > a").click(function(){
		
		$("#verticalMenu ul ul").slideUp();
		
		if(!$(this).next().is(":visible"))
		{
			$(this).next().slideDown();
		}
	})
})

$(function(){
          $('#menu-item-789 a:contains("Cart")').html('<img src="http://staging.glielementi.it/wp-content/uploads/2015/10/cart-icon1.png"/>')
    })

$(function() {
    $(document).on('click', function(e) {
        if (e.target.id == 'login') {
            $(".login").toggle();
        } else {
            $('.login').hide();
        }

    })
});	

$(function() {
    $(document).on('click', function(e) {
        if (e.target.id == 'menu-item-830 a') {
            $(".register").toggle();
        } else {
            $('.register').hide();
        }

    })
});	

});
</script> 
</head>
<body <?php body_class(); ?>>
<?php woo_top(); ?>
<?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>

<div class="col2-set" id="customer_login">

	<div class="col-1 login">

<?php endif; ?>
		<div class="arrow-up"></div>
		<h2><?php _e( 'Login', 'woocommerce' ); ?></h2>

		<form method="post" class="login">

			<?php do_action( 'woocommerce_login_form_start' ); ?>

			<p class="form-row form-row-wide">
				<label for="username"><?php _e( 'Username or email address', 'woocommerce' ); ?> <span class="required">*</span></label>
				<input type="text" class="input-text" name="username" id="username" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>" />
			</p>
			<p class="form-row form-row-wide">
				<label for="password"><?php _e( 'Password', 'woocommerce' ); ?> <span class="required">*</span></label>
				<input class="input-text" type="password" name="password" id="password" />
			</p>

			<?php do_action( 'woocommerce_login_form' ); ?>

			<p class="form-row">
				<?php wp_nonce_field( 'woocommerce-login' ); ?>
				<input type="submit" class="button" name="login" value="<?php esc_attr_e( 'Login', 'woocommerce' ); ?>" />
				<label for="rememberme" class="inline">
					<input name="rememberme" type="checkbox" id="rememberme" value="forever" /> <?php _e( 'Remember me', 'woocommerce' ); ?>
				</label>
			</p>
			<p class="lost_password">
				<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php _e( 'Lost your password?', 'woocommerce' ); ?></a>
			</p>

			<?php do_action( 'woocommerce_login_form_end' ); ?>

		</form>


<?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>

	</div>

	<div class="col-2 register">
		<div class="arrow-up-register"></div>
		<h2><?php _e( 'Register', 'woocommerce' ); ?></h2>

		<form method="post" class="register">

			<?php do_action( 'woocommerce_register_form_start' ); ?>

			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

				<p class="form-row form-row-wide">
					<label for="reg_username"><?php _e( 'Username', 'woocommerce' ); ?> <span class="required">*</span></label>
					<input type="text" class="input-text" name="username" id="reg_username" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>" />
				</p>

			<?php endif; ?>

			<p class="form-row form-row-wide">
				<label for="reg_email"><?php _e( 'Email address', 'woocommerce' ); ?> <span class="required">*</span></label>
				<input type="email" class="input-text" name="email" id="reg_email" value="<?php if ( ! empty( $_POST['email'] ) ) echo esc_attr( $_POST['email'] ); ?>" />
			</p>

			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

				<p class="form-row form-row-wide">
					<label for="reg_password"><?php _e( 'Password', 'woocommerce' ); ?> <span class="required">*</span></label>
					<input type="password" class="input-text" name="password" id="reg_password" />
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

    <?php woo_header_before(); ?>

	<header id="header" class="">
	
		<div class="col-full">
		

			<div class="section-wrapper">

				<?php woo_header_inside(); ?>

				<span class="nav-toggle"><a href="#navigation"><span><?php _e( 'Navigation', 'woothemes' ); ?></span></a></span>

			    <div class="site-header<?php if ( isset( $woo_options['woo_tagline'] ) && $woo_options['woo_tagline'] == "true" ) echo ' with-description'; ?>">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				</div>

		        <?php woo_nav_before(); ?>

				<nav id="navigation" role="navigation">

						<section class="menus">

						<a href="<?php echo home_url(); ?>" class="nav-home"><span><?php _e( 'Home', 'woothemes' ); ?></span></a>
						<?php
						if ( function_exists( 'has_nav_menu' ) && has_nav_menu( 'primary-menu' ) ) {
							echo '<h3>' . woo_get_menu_name('primary-menu') . '</h3>';
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

				        <a href="#top" class="nav-close"><span><?php _e('Return to Content', 'woothemes' ); ?></span></a>

				</nav><!-- /#navigation -->
				
				

			</div><!-- /.section-wrapper -->

		</div><!-- /.col-full -->

				<?php woo_nav_after(); ?>

	</header><!-- /#header -->

	<?php woo_content_before(); ?>