<?php 

add_theme_support( 'post-thumbnails' );

the_post_thumbnail();

the_post_thumbnail('thumbnail');       // Thumbnail (por defecto 150px x 150px max)
the_post_thumbnail('medium');          // Media resolución (por defecto 300px x 300px max)
the_post_thumbnail('large');           // Alta resolución (por defecto 640px x 640px max)
the_post_thumbnail('full');            // Resolución original de la imagen (sin modificar)

the_post_thumbnail( array(100,100) ); 

/******************truncar cantidad de palabras*****************/
function excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).'...';
	} else {
		$excerpt = implode(" ",$excerpt);
	}
	$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
	return $excerpt;
}
/******************truncar cantidad de palabras*****************/





/******************quitar rango de precios*****************/

function precio_desde( $price, $product ) {
     // Precio normal
	$prices = array( $product->get_variation_price( 'min', true ), $product->get_variation_price( 'max', true ) );
	$price = $prices[0] !== $prices[1] ? sprintf( __( '    %1$s ', 'woocommerce' ), wc_price( $prices[0] ) ) : wc_price( $prices[0] );
     // Precio rebajado
	$prices = array( $product->get_variation_regular_price( 'min', true ), $product->get_variation_regular_price( 'max', true ) );
	sort( $prices );
	$saleprice = $prices[0] !== $prices[1] ? sprintf( __( '    %1$s ', 'woocommerce' ), wc_price( $prices[0] ) ) : wc_price( $prices[0] );
	if ( $price !== $saleprice ) {
		$price = 5;
	}
	return $price;
}
add_filter( 'woocommerce_variable_sale_price_html', 'precio_desde', 10, 2 );
add_filter( 'woocommerce_variable_price_html', 'precio_desde', 10, 2 );
/******************quitar rango de precios*****************/


function ayudawp_modify_query_order( $query ) {
	if ( $query->is_home() && $query->is_main_query() ) {
		$query->set( 'orderby', 'title' );
		$query->set( 'order', 'ASC' );
	}
}
add_action( 'pre_get_posts', 'ayudawp_modify_query_order' );
//****************************************agregar campos de checkout de woocommerce******************************************************
//añade los campos a la pagina del checkout de la vista del cliente
add_action( 'woocommerce_after_order_notes', 'agrega_mi_campo_personalizado' );
function total_producto (){
  // foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
  //   $value->description;
  //     foreach ($cart_item as $key => $value) {
  //       $person = $value->description;
  //     };
  //   };
    //return $person;
	foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
		return $cart_item['quantity'];
	};
}


function apk_register_sidebar(){
	register_sidebar( array(
		'name'             => __('Sidebar principal','apk'),
		'id'               => 'main_sidebar',
		'description'      => __('Este es el Sidebar principal','apk'),
		'before_widget'    => '<div id="%1$s" class="widget %2$s">',
		'after_widget'     => '</div>',
		'before_title'     => '	<h3 class="widget-title">',
		'after_title'      => '</h3>',
	));

}
add_action('widgets_init', 'apk_register_sidebar');
