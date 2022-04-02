<?php

defined( 'ABSPATH' ) || exit;

?>

<?php get_header(); ?>

<div class="bg-[#F8F5EF]">
    <div class="swiper swiper-hero">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <a href="echo esc_url(get_permalink( wc_get_page_id( 'product/g-cube-松露巧克力粉色小貨車鐵盒10顆裝' ) )">
                    <!-- <img class="" src="<?php echo esc_url(home_url()); ?>/wp-content/uploads/2022/03/godiva_product_20220222181051_901.png"> -->
                    <img class="w-full h-full"
                        src="<?php echo get_stylesheet_directory_uri(); ?>/src/kitchen_adventurer_caramel.jpg" />
                </a>
            </div>
            <div class="swiper-slide">
                <a href="echo esc_url(get_permalink( wc_get_page_id( 'product/片裝巧克力禮盒24片裝' ) )">
                    <img class="w-full h-full"
                        src="<?php echo get_stylesheet_directory_uri(); ?>/src/kitchen_adventurer_cheesecake_brownie.jpg" />
                </a>
            </div>
            <div class="swiper-slide">
                <a href="echo esc_url(get_permalink( wc_get_page_id( 'product/春季巧克力花形鐵盒15顆裝' ) )">
                    <img class="w-full h-full"
                        src="<?php echo get_stylesheet_directory_uri(); ?>/src/kitchen_adventurer_donut.jpg" />
                </a>
            </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
    </div>
    <div class="md:mx-20 md:pt-12 md:pb-14">
        <p class="text-center text-2xl tracking-widest font-bold recommand-title">最新商品</p>
        <div class="relative px-10 w-full mx-auto">
            <div class="swiper swiper-new-product">
                <div class="swiper-wrapper text-center">
                    <?php
                    $args = array(
                      'post_type' => 'product',
                      'posts_per_page' => 8,
                      'orderby' => 'date',
                      'order'=> "desc",
                    );
                    $loop = new WP_Query( $args );
                    if ( $loop->have_posts() ) {
                      while ( $loop->have_posts() ) : $loop->the_post();
                          get_template_part( '/template-parts/new-product', $args );
                      endwhile;
                    } else {
                      echo __( '沒有最新產品' );
                    }
                    wp_reset_postdata();
                  ?>
                </div>
            </div>
            <div class="swiper-button-prev swiper-button-prev-new-product"></div>
            <div class="swiper-button-next swiper-button-next-new-product"></div>
            <div class="swiper-scrollbar"></div>
        </div>
        <div class="mt-16 text-center">
            <a href="<?php echo esc_url(get_permalink( wc_get_page_id( 'shop' ) )) ?>"
                class="text-[#C7801D] text-lg all-product-link cursor-pointer">查看全部</a>
        </div>
    </div>
</div>

<div class="mt-5">
    <div class="max-w-3xl mx-auto">
        <div class="flex flex-wrap justify-center">
            <a class="w-[30%] m-1.5"
                href="echo esc_url(get_permalink( wc_get_page_id( 'product/g-cube-松露巧克力粉色小貨車鐵盒10顆裝' ) )">
                <img class=""
                    src="<?php echo esc_url(home_url()); ?>/wp-content/uploads/2022/03/godiva_product_20220222181051_901.png">
            </a>
            <a class="w-[30%] m-1.5"
                href="echo esc_url(get_permalink( wc_get_page_id( 'product/g-cube-松露巧克力粉色小貨車鐵盒10顆裝' ) )">
                <img class=""
                    src="<?php echo esc_url(home_url()); ?>/wp-content/uploads/2022/03/godiva_product_20220222180910_189.png">
            </a>
            <a class="w-[30%] m-1.5"
                href="echo esc_url(get_permalink( wc_get_page_id( 'product/g-cube-松露巧克力粉色小貨車鐵盒10顆裝' ) )">
                <img class=""
                    src="<?php echo esc_url(home_url()); ?>/wp-content/uploads/2022/03/godiva_product_20220222180733_083.png">
            </a>
            <a class="w-[30%] m-1.5"
                href="echo esc_url(get_permalink( wc_get_page_id( 'product/g-cube-松露巧克力粉色小貨車鐵盒10顆裝' ) )">
                <img class=""
                    src="<?php echo esc_url(home_url()); ?>/wp-content/uploads/2022/03/godiva_product_20210709115333_320.png">
            </a>
            <a class="w-[30%] m-1.5"
                href="echo esc_url(get_permalink( wc_get_page_id( 'product/g-cube-松露巧克力粉色小貨車鐵盒10顆裝' ) )">
                <img class=""
                    src="<?php echo esc_url(home_url()); ?>/wp-content/uploads/2022/03/godiva_product_20210709114903_738.png">
            </a>
            <a class="w-[30%] m-1.5"
                href="echo esc_url(get_permalink( wc_get_page_id( 'product/g-cube-松露巧克力粉色小貨車鐵盒10顆裝' ) )">
                <img class=""
                    src="<?php echo esc_url(home_url()); ?>/wp-content/uploads/2022/03/godiva_product_20200830152334_886.png">
            </a>
        </div>
    </div>
</div>

<?php get_footer(); ?>