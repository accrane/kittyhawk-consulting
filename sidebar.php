<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

// if ( ! is_active_sidebar( 'sidebar-1' ) ) {
// 	return;
// }

$address = get_field('address', 'option');
$charlottePhone = get_field('charlotte_phone', 'option');
$cellPhone = get_field('cell_phone', 'option');
$email = get_field('email_contact', 'option');
$address = get_field('address', 'option');
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php //dynamic_sidebar( 'sidebar-1' ); ?>

	<?php 
	echo '<p>';
		echo $address;
	echo '</p>';
	
	echo '<p>';
		echo 'Charlotte Phone: ' . $charlottePhone;
		echo 'Cell Phone: ' . $cellPhone;
	echo '</p>';

	echo '<p>';

	?>

		<a href="mailto:<?php echo antispambot($email); ?>">
		  <?php echo antispambot($email); ?>
		</a>

	</p>

</aside><!-- #secondary -->
