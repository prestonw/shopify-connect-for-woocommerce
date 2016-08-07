<?php
/**
 * Plugin Name: Shopify Connect for WooCommerce
 * Plugin URI:  https://secretpizza.party
 * Description: Connect your WooCommerce site with Shopify
 * Version:     1.0.0
 * Author:      secret pizza party
 * Author URI:  https://secretpizza.party
 * License:     GPLv2
 * Text Domain: shopify-connect
 */

/**
 * Copyright (c) 2016 secret pizza party (email : hey@secretpizza.party)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2 or, at
 * your discretion, any later version, as published by the Free
 * Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

function shopify_wc_connect_meta_box() {
    require_once( 'inc/metabox.php' );
    new Shopify_WC_Connect_Meta_Box();
}

add_action( 'load-post-new.php', 'shopify_wc_connect_meta_box' );
add_action( 'load-post.php', 'shopify_wc_connect_meta_box' );

if ( ! is_admin() ) {
    require_once( 'inc/front-end.php' );
}
