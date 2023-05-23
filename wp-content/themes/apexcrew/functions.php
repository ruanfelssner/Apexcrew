<?php


function custom_excerpt_length( $length ) {
  return 12;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


add_filter( 'woocommerce_get_price_html', 'custom_price_format', 10, 2 );
add_filter( 'woocommerce_variable_price_html', 'custom_price_format', 10, 2 );
function custom_price_format( $price, $product ) {

    // 1. Variable products
    if( $product->is_type('variable') ){

        // Searching for the default variation
        $default_attributes = $product->get_default_attributes();
        // Loop through available variations
        foreach($product->get_available_variations() as $variation){
            $found = true; // Initializing
            // Loop through variation attributes
            foreach( $variation['attributes'] as $key => $value ){
                $taxonomy = str_replace( 'attribute_', '', $key );
                // Searching for a matching variation as default
                if( isset($default_attributes[$taxonomy]) && $default_attributes[$taxonomy] != $value ){
                    $found = false;
                    break;
                }
            }
            // When it's found we set it and we stop the main loop
            if( $found ) {
                $default_variaton = $variation;
                break;
            } // If not we continue
            else {
                continue;
            }
        }
        // Get the default variation prices or if not set the variable product min prices
        $regular_price = isset($default_variaton) ? $default_variaton['display_price']: $product->get_variation_regular_price( 'min', true );
        $sale_price = isset($default_variaton) ? $default_variaton['display_regular_price']: $product->get_variation_sale_price( 'min', true );
    }
    // 2. Other products types
    else {
        $regular_price = $product->get_regular_price();
        $sale_price    = $product->get_sale_price();
    }

    // Formatting the price
    if ( $regular_price !== $sale_price && $product->is_on_sale()) {
        // Percentage calculation and text
        $percentage = round( ( $regular_price - $sale_price ) / $regular_price * 100 ).'%';
        $percentage_txt = __(' Save', 'woocommerce' ).' '.$percentage;

        $price = '<del>' . wc_price($regular_price) . '</del> <ins>' . wc_price($sale_price) . $percentage_txt . '</ins>';
    }
    return $price;
}

function wpb_custom_new_menu() {
  register_nav_menu('menu-categorias-header',__( 'Menu Categorias Header' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

 
function bbloomer_remove_product_tabs( $tabs ) {
    unset( $tabs['additional_information'] );
    return $tabs;
}

function add_additional_class_on_li($classes, $item, $args) {
  if(isset($args->add_li_class)) {
      $classes[] = $args->add_li_class;
  }
  return $classes;
}

function add_menuclass($ulclass) {
   return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


add_filter('show_admin_bar', '__return_false');
add_filter( 'woocommerce_product_tabs', 'bbloomer_remove_product_tabs', 98 );
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

add_filter('woocommerce_variable_price_html','custom_from',10);
add_filter('woocommerce_grouped_price_html','custom_from',10);
add_filter('woocommerce_variable_sale_price_html','custom_from',10);
function custom_from($price){
    return false;
}

/**
 * Change number of related products output
 */ 
function woo_related_products_limit() {
  global $product;
	
	$args['posts_per_page'] = 3;
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args', 20 );
  function jk_related_products_args( $args ) {
	$args['posts_per_page'] = 3; // 4 related products
	$args['columns'] = 3; // arranged in 2 columns
	return $args;
}

function get_custom_post_type_template($single_template) {
  global $post;
 
  if ($post->post_type == 'product') {
       $single_template = dirname( __FILE__ ) . '/single-product.php';
  }
  return $single_template;
 }
 add_filter( 'single_template', 'get_custom_post_type_template' );


?>