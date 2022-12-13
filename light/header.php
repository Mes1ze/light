<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package light
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'light' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="header-container container">
			<div class="site-branding">
				<?php
					the_custom_logo();
				?>
			</div><!-- .site-branding -->
		
			<nav id="site-navigation" class="main-navigation navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'Menu 1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
			<div class="site-phone">
				<svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/	svg">
				<path d="M12.4185 14.3134C12.9048 15.3074 13.7105 16.1096 14.7068 16.5913C14.7797 16.6258 	14.8603 16.6408 14.9408 16.6347C15.0212 16.6286 15.0987 16.6017 15.1655 16.5566L16.6325 	15.5784C16.6973 15.5351 16.772 15.5087 16.8496 15.5016C16.9273 15.4944 17.0055 15.5068 	17.0772 15.5375L19.8215 16.7137C19.9148 16.7533 19.9926 16.8221 20.0433 16.9098C20.094 	16.9975 20.1148 17.0992 20.1027 17.1998C20.0159 17.8786 19.6848 18.5024 19.1712 	18.9546C18.6576 19.4067 17.9968 19.6562 17.3125 19.6562C15.1991 19.6562 13.1722 18.8167 	11.6777 17.3222C10.1833 15.8278 9.34375 13.8009 9.34375 11.6875C9.34379 11.0032 9.59324 	10.3424 10.0454 9.82881C10.4976 9.31522 11.1214 8.98405 11.8002 8.89731C11.9007 8.88514 	12.0025 8.90598 12.0902 8.95669C12.1779 9.00739 12.2467 9.08523 12.2863 9.17845L13.4635 	11.9252C13.4939 11.9962 13.5063 12.0737 13.4996 12.1507C13.4929 12.2277 13.4672 12.3019 	13.4249 12.3665L12.4501 13.856C12.4057 13.923 12.3795 14.0003 12.3739 14.0805C12.3684 	14.1607 12.3838 14.2409 12.4185 14.3134Z" fill="#FFA83E" fill-opacity="0.9" stroke="#FFA83E	" stroke-opacity="0.9" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>		
			</div><!-- .site-branding -->
				<p class="phone">8 800 547 55 66</p>
		</div>
	</header><!-- #masthead -->
