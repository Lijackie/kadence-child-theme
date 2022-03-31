<?php

// 刪除 kadence hook
function remove_kadence_hook() {
    $kadence_theme_class = Kadence\Theme::instance();
    
    remove_action( 'woocommerce_before_cart', array( $kadence_theme_class->components['woocommerce'], 'cart_form_wrap_before' ) );
    remove_action( 'woocommerce_after_cart', 'woocommerce_cross_sell_display' );
}

add_action('init', 'remove_kadence_hook');


function cart_wrap_before() {
    //echo '<div class="flex flex-col w-[50%] mx-auto flex-end">';
    ob_start(); 
    ?>

    <div class="flex flex-col w-[50%] mx-auto flex-end">
        <?php get_template_part( 'template-parts/cart-process'); 
    
    echo ob_get_clean(); 
}   

add_action('woocommerce_before_cart', 'cart_wrap_before');

function cart_wrap_after() {
    echo '</div>';
}   

add_action('woocommerce_after_cart', 'cart_wrap_after');

