<?php
function woocommerce_product_sort( $woocommerce_sort_orderby ) {
//changed name to popularity from WooCommerce Product Sorting
    $woocommerce_sort_orderby = str_replace("Default sorting", "Popularity", $woocommerce_sort_orderby);

    return $woocommerce_sort_orderby;

    }

add_filter( 'woocommerce_catalog_orderby', 'woocommerce_product_sort' );
add_filter( 'woocommerce_default_catalog_orderby_options', 'woocommerce_product_sort' );