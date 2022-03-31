<?php

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}

?>

<div class="swiper-slide">
    <a href="<?php echo esc_url(get_permalink( $loop->post->ID )) ?>">
        <?php echo woocommerce_get_product_thumbnail($loop->post->ID); ?>

        <p class="max-h-[50px] min-h-[48px] mt-7 mb-4 overflow-hidden break-words text-ellipsis"><?php the_title(); ?></p>
        <div class="font-bold text-[#c7801d] mb-3 text-lg"><?php echo $product->get_price_html() ?></div>


        <div>
            <?php get_template_part( '/template-parts/add-to-cart', $args ); ?>
        </div>
    </a>
</div>