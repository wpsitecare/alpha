<?php
/**
 * A template part for the site's default footer.
 *
 * @package   Alpha\TemplateParts
 * @author    Cipher Development
 * @copyright Copyright (c) 2018, Cipher Development, LLC
 * @since     1.0.0
 */
?>
<?php carelib_footer_before(); ?>

<footer <?php carelib_attr( 'site-footer' ); ?>>

	<div <?php carelib_attr( 'wrap', 'footer' ); ?>>

		<?php carelib_footer_top(); ?>

		<?php carelib_footer_bottom(); ?>

	</div><!-- .wrap -->

</footer><!-- .site-footer -->

<?php carelib_footer_after(); ?>
