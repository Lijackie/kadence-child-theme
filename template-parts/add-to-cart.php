<?php

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}

$defaults = array(
    'quantity'   => 1,
    'class'      => implode(
        ' ',
        array_filter(
            array(
                'border-2 border-[#C7801D] border-solid rounded-full text-[#C7801D] text-sm md:text-lg md:leading-10 mx-auto block w-4/5 hover:bg-[#f7c545] text-ellipsis whitespace-normal',
                $product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
                $product->supports( 'ajax_add_to_cart' ) && $product->is_purchasable() && $product->is_in_stock() ? 'ajax_add_to_cart' : '',
            )
        )
    ),
    'attributes' => array(
        'data-product_id'  => $product->get_id(),
        'data-product_sku' => $product->get_sku(),
        'aria-label'       => $product->add_to_cart_description(),
        'rel'              => 'nofollow',
    ),
);

$args = apply_filters( 'woocommerce_loop_add_to_cart_args', wp_parse_args( $args, $defaults ), $product );

if ( isset( $args['attributes']['aria-label'] ) ) {
    $args['attributes']['aria-label'] = wp_strip_all_tags( $args['attributes']['aria-label'] );
}

echo apply_filters(
    'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
    sprintf(
        '<a href="%s" data-quantity="%s" class="%s" %s>%s</a>',
        esc_url( $product->add_to_cart_url() ),
        esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
        esc_attr( isset( $args['class'] ) ? $args['class'] : '' ),
        isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
        esc_html( $product->add_to_cart_text() )
    ),
    $product,
    $args
);