<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package light
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="site-info">
				<div class="adres">
				<?php
					echo get_field("footer-adres"); 
					?>
				</div>
				<div class="footer-logo">
					<?php
					echo get_field("footer-logo"); 
					?>
				</div>
				<div class="footer-navigation-1">
					<?php
					echo get_field("footer-menu"); 
					?> 
					<p>Главная</p>
					<p>О компании</p>
					<p>Проекты</p>
					<p>Этапы работы</p>
					<p>Контакты</p>
				</div>
				<div class="footer-navigation-2">
					<?php
					echo get_field("footer-uslugi"); 
					?> 
					<p>Освещение на участке</p>
					<p>Освещение в доме</p>
				</div>
				<div class="footer-navigation-3">
					<?php
					echo get_field("footer-kontakti"); 
					?>
					<p>8 800 547 55 66</p>
					<p>г. Москва, ул. Щербаковская 8</p>
				</div>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
