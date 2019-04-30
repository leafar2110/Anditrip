<?php
  $currentlang = get_bloginfo('language');
  if($currentlang=="en-US") {
  	 //Cart vacio
        //Botton Continue
        	$botton_continue = 'Continue';
  } else {
  	//Cart vacio
        //Botton Continue
        $botton_continue = '在波';
  }

  ?>
<!--end traduction-->
<?php
/**
 * Single variation cart button
 *
 * @see 	https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;
?>
<div class="woocommerce-variation-add-to-cart variations_button">
	<?php
		/**
		 * @since 3.0.0.
		 */
		do_action( 'woocommerce_before_add_to_cart_quantity' );

		woocommerce_quantity_input( array(
			'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
			'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
			'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( $_POST['quantity'] ) : $product->get_min_purchase_quantity(),
		) );


		/**
		 * @since 3.0.0.
		 */
		do_action( 'woocommerce_after_add_to_cart_quantity' );
		?>

		<button type="submit" class="single_add_to_cart_button button alt btn btn-modal btn-plan centro"><?php echo $botton_continue; ?></button>
		<input type="hidden" name="add-to-cart" value="<?php echo absint( $product->get_id() ); ?>" />
		<input type="hidden" name="product_id" value="<?php echo absint( $product->get_id() ); ?>" />
		<input type="hidden" name="variation_id" class="variation_id" value="0" />

	</div>
	<style>
	.centro{

	}
	.woocommerce-variation-add-to-cart{
		display: flex;
		justify-content: center;
	}
	.variations td, th {
		padding: 0px 7px 10px;

}
.price {

margin-top: -4% !important;
text-align: center!important;
display: flex!important;
justify-content: center!important;
padding: 10px!important;
float: none!important;
margin-top: auto!important;
margin-right: auto!important;

}
}

	}




	</style>
