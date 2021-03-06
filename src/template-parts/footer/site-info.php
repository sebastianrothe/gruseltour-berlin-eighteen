<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-info">
	<?php
if (function_exists('the_privacy_policy_link')) {
    the_privacy_policy_link('', '<span role="separator" aria-hidden="true"></span>');
}
?>
	<a href="/impressum/" class="imprint">Impressum</a>
	<span role="separator" aria-hidden="true"></span>
	<span>Gruseltour Berlin 👻 is made with ❤️ and ☕ in Berlin and Leipzig. © <?php echo date("Y"); ?></span>
	<span role="separator" aria-hidden="true"></span>
	<span>Unsere besonderen Stadtführungen gibt es auch in anderen Städten: <a href="https://gruseltour-leipzig.de/">Gruseltour Leipzig</a></span>
</div><!-- .site-info -->

<?php //get_template_part( 'template-parts/footer/form', 'tracking' ); ?>
