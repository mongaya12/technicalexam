<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package universityAnimalClinic
 */

?>

	<footer id="colophon" class="footer site-footer">
		<!-- Pre footer -->
		<?php get_template_part( 'template-parts/footer/content', 'prefooter' ); ?>
		<!-- End Pre footer -->

		<!-- footer -->
		<?php get_template_part( 'template-parts/footer/content', 'footer' ); ?>
		<!-- End footer -->

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
