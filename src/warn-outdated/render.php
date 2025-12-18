<?php
/**
 * PHP file to use when rendering the block type on the server to show on the front end.
 *
 * The following variables are exposed to the file:
 *     $attributes (array): The block attributes.
 *     $content (string): The block default content.
 *     $block (WP_Block): The block instance.
 *
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
$post_date = get_the_date( 'Y-m-d' );
$published = new DateTime( $post_date );
$now = new DateTime();
$interval = $published->diff( $now );
$years_old = $interval->y;

if ( $years_old > 0 ) {
	echo "<p " . get_block_wrapper_attributes() . ">";
	echo 'Fair warning. This post is more than ' . esc_html( $years_old ) . ' years old. And it is probable that the author would not agree with what is written';
}
?>
</p>
