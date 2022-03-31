<?php

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

<li <?php wc_product_class( '', $product ); ?>>
    <a class="" href="<?php echo esc_url(get_permalink( $loop->post->ID )) ?>">
        <?php if ( $product->is_on_sale() ) : ?>
        <?php echo apply_filters( 'woocommerce_sale_flash', '<span class="onsale">' . esc_html__( 'Sale!', 'woocommerce' ) . '</span>', $post, $product ); ?>
        <?php endif; ?>
        <img src="<?php echo woocommerce_get_product_thumbnail($loop->post->ID); ?>" />

        <div class="">
            <h2><?php the_title(); ?></h2>
            <?php echo $product->get_price_html() ?>
        </div>

        <div>
			<?php
				echo apply_filters(
					'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
					sprintf(
						'<a href="%s" data-quantity="%s" class="%s" %s>%s</a>',
						esc_url( $product->add_to_cart_url() ),
						esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
						esc_attr( isset( $args['class'] ) ? $args['class'] : 'button' ),
						isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
						esc_html( $product->add_to_cart_text() )
					),
					$product,
					$args
				);
			?>

        </div>
    </a>
</li>