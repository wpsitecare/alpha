<?php
/**
 * A template part for the site's default header.
 *
 * @package    Alpha\Templates
 * @subpackage CareLib
 * @copyright  Copyright (c) 2015, WP Site Care, LLC
 * @license    GPL-2.0+
 * @since      1.0.0
 */
?>
<?php tha_header_before(); ?>

<header <?php alpha_attr( 'header' ); ?>>

	<div <?php alpha_attr( 'wrap', 'header' ); ?>>

		<?php tha_header_top(); ?>

		<?php tha_header_bottom(); ?>

	</div>

</header><!-- #header -->

<?php tha_header_after(); ?>