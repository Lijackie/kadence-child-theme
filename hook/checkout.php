<?php

function checkout_form_before() {
    get_template_part( 'template-parts/cart-process');
}


add_action('woocommerce_before_checkout_form', 'checkout_form_before', 0);