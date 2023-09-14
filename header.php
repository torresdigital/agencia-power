<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cenote
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"&gt;>

	<?php wp_head(); ?>

    <!-- Hotjar Tracking Code for https://www.torresdigital.com.br/ -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:2172101,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>

</head>

    <!-- $ Sudo su- torres digital -->
    <div id="sudo-su" class="sudo-su">

<body <?php body_class(); ?>>

    <!-- $ Sudo su- SDK -->

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v9.0&appId=1551462751835247&autoLogAppEvents=1" nonce="vcNPGiEh"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v9.0&appId=485686475585905&autoLogAppEvents=1" nonce="UiYsYzSG"></script>

<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
}
?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cenote' ); ?></a>

	<header id="masthead" class="site-header tg-site-header <?php cenote_header_class(); ?>">
		<?php if ( true === get_theme_mod( 'cenote_enable_header_top', true ) ) : ?>
			<div class="tg-header-top">
				<div class="tg-container tg-flex-container tg-flex-space-between tg-flex-item-centered">
					<?php get_template_part( 'template-parts/header/header', 'top' ); ?>
				</div>
			</div><!-- .tg-header-top -->
		<?php endif; ?>

		<div class="tg-header-bottom">
			<?php get_template_part( 'template-parts/header/header', 'bottom' ); ?>
		</div>

	</header><!-- #masthead -->

	<?php do_action( 'cenote_after_header' ); ?>

    <!-- $ Sudo su- torres digital BackGround Head -->
    <div id="torres-digital-background-head" class="torres-digital-background-head"></div>

	<div id="content" class="site-content">

		<div class="tg-container tg-flex-container tg-flex-space-between">

