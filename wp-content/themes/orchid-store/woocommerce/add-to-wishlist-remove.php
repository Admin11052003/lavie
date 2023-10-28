<?php
/**
 * Add to wishlist button template - Remove button
 *
 * @author  Your Inspiration Themes
 * @package Orchid_Store
 */

/**
 * Template variables:
 *
 * @var $base_url string Current page url
 * @var $wishlist_url string Url to wishlist page
 * @var $exists bool Whether current product is already in wishlist
 * @var $show_exists bool Whether to show already in wishlist link on multi wishlist
 * @var $show_count bool Whether to show count of times item was added to wishlist
 * @var $show_view bool Whether to show view button or not
 * @var $product_id int Current product id
 * @var $product_type string Current product type
 * @var $label string Button label
 * @var $browse_wishlist_text string Browse wishlist text
 * @var $already_in_wishslist_text string Already in wishlist text
 * @var $product_added_text string Product added text
 * @var $icon string Icon for Add to Wishlist button
 * @var $link_classes string Classed for Add to Wishlist button
 * @var $available_multi_wishlist bool Whether add to wishlist is available or not
 * @var $disable_wishlist bool Whether wishlist is disabled or not
 * @var $template_part string Template part
 * @var $container_classes string Container classes
 * @var $found_in_list YITH_WCWL_Wishlist Wishlist
 * @var $found_item YITH_WCWL_Wishlist_Item Wishlist item
 */

if ( ! defined( 'YITH_WCWL' ) ) {
	exit;
} // Exit if accessed directly

global $product;
?>

<div class="yith-wcwl-add-button">
	<a href="<?php echo esc_url( add_query_arg( 'remove_from_wishlist', $product_id, $base_url ) ); ?>"
	rel="nofollow"
	data-item-id="<?php echo esc_attr( $found_item->get_id() ); ?>"
	data-product-id="<?php echo esc_attr( $product_id ); ?>"
	class="delete_item <?php echo esc_attr( $link_classes ); ?> button-general wish-list-button os-tooltip"
	data-title="<?php echo esc_attr( apply_filters( 'yith_wcwl_add_to_wishlist_title', $label ) ); ?>"
	data-tippy-content="<?php echo esc_attr( $label ); ?>"
>
		<span class="icon">
			<?php echo orchid_store_escape_svg( $icon ); ?>
		</span>
		<span class="text"><?php echo esc_html( $label ); ?></span>
	</a>

	<?php
	if ( $show_view ) :
		?>
		<a href="<?php echo esc_url( $found_in_list->get_url() ); ?>" class="view-wishlist button-general"><span class="icon"><i class="fa fa-eye"></i></span></a>
		<?php
	endif;
	?>
</div>
