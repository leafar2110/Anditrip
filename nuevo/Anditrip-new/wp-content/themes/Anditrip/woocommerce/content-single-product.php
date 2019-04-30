<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see       https://docs.woocommerce.com/document/template-structure/
 * @author    WooThemes
 * @package   WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
}
global $product;
get_header(); ?>

<?php $post_thumbnail_id = get_post_thumbnail_id();
$url = wp_get_attachment_url( $post_thumbnail_id);
?>
<div class="product">
	<section>

		<div class="plan" style=" background-image: url(<?php the_post_thumbnail_url('full');?>);">
			<div class="mask-plan">
				<div class="container content-colombia">
					<div class="title-plans">

						<i class="fas fa-map-marker-alt"></i>
						<h1>
							<?php the_title(); ?>
						</h1>




					</div>
					<div class="info-category">
						<ul>
							<li>
								<p><i class="far fa-calendar-alt"></i><?php the_field('days_include'); ?> </p>
							</li>
							<li>
								<p><span class=""><?php echo $product->get_price_html();?></span></p>
							</li>
						</ul>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>


<style>

</style>

<style>

</style>

<div style="display: none;" class="btn-modal button-comprs hidden-lg hidden-md" data-toggle="modal" data-target="#myModal"><span class="fa fa-shopping-cart"></span>

</div>


<section class="container">
	<div class="select-plan">
		<!-- Modal compra -->
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary btn-plan " data-toggle="modal" data-target="#exampleModalCenter">
			<?php echo _e('Buy this plan', 'apk'); ?>	
		</button>

	</div>
	<!-- Modal compra -->


	<div class="plan-list ">
		<div class="row ">
			<div class="col-md-4 d-none d-sm-inline-block">
				
				<?php  $args = array(

					'orderby'    => 'slug',
					'order'      => 'ASC'
				);
				$product_categories = get_terms( 'product_cat', $args );
				$count = count($product_categories);


				if ( $count > 0 ){
					foreach ( $product_categories as $product_category ) {
						?>


						<a href="<?php echo get_term_link( $product_category ) ?>" class="filter-btn" data-filter="<?php echo '.'.$product_category->term_id; ?>">
							<div class="grid-plan">
								<figure class="effect-oscar">
									<?php $thumbnail_id = get_woocommerce_term_meta($product_category->term_id, 'thumbnail_id', true);

									$images = wp_get_attachment_image_src($thumbnail_id,'large');
									?>
									<img src="<?php echo $images[0]; ?>"
									alt="<?php echo $product_category->name; ?>" />
									<figcaption>
										<h2> <span><?php echo $product_category->name; ?></span></h2>
									</figcaption>
								</figure>
							</div>
						</a>

						<?php
					}}
					?>
				</div>
				<div class="col-md-12 col-lg-8">
					<div class="d-inline-flex">
<div class="tab-wrapper">
  <style>
      .imgtab img{
          width="20px!important"
      }
  </style>
  <ul class="tab-menu">
    <li class="active">		<img class="imgtab" src="<?php echo get_template_directory_uri(); ?>/assets/img/formulario-chequeado.svg" width="20px" alt="">

								<p class="d-none d-sm-inline-block"><?php echo _e('Included', 'apk'); ?></p></li>
    <li>	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/formulario-chequeado_nuevo (otra copia).svg" width="20px" alt="">
								<p class="d-none d-sm-inline-block"><?php echo _e('No Included', 'apk'); ?> </p>
</li>
    <li>	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/marcador-de-posicion (1).svg" width="20px" alt="">

								<p class="d-none d-sm-inline-block"><?php echo _e('Itinerary Provided', 'apk'); ?> </p></li>
    <li>	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg.svg" width="20px" alt="">
								<p class="d-none d-sm-inline-block"><?php echo _e('Important', 'apk'); ?> </p></li>
    <li>			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dollar-symbol.svg" width="20px" alt="">
								<p class="d-none d-sm-inline-block"><?php echo _e('Price', 'apk'); ?> </p></li>
  </ul>
  
  <div class="tab-content tabs-plan">
    <div>	<div class="row">
									<div class="col-md-10">
										<h3><i class="fas fa-plane-departure"></i><?php echo _e('Domestic flight tickets in economic class', 'apk'); ?> </h3>
										<p>
											<ul>
												<li>		<?php the_field( 'domestic_include' ); ?></li>
											</ul>
										</p>
										<h3><i class="fas fa-utensils"></i><?php echo _e('Food', 'apk'); ?></h3>
										<p style="background:red !important;">
											<ul>
												<li>	<?php the_field( 'food_include' ); ?></li>
											</ul>
										</p>
										<h3><i class="fas fa-globe-americas"></i><?php echo _e('Tours', 'apk'); ?></h3>
										<p>
											<ul>
												<li>	<?php the_field( 'tours_include' ); ?></li>
											</ul>

										</p>
									</div>
								</div></div>
    <div>	<p>
									<?php the_field( 'no_include_description' ); ?>
								</p></div>
    <div>	<?php the_field( 'important_include' ); ?></div>
       <div>	<?php the_field( 'important_include' ); ?></div>
       <div>
								<?php 
								$args = array(
									'post_type'     => 'product_variation',
									'post_status'   => array( 'private', 'publish' ),
									'numberposts'   => -1,
									'orderby'       => 'menu_order',
									'order'         => 'asc',
                         'post_parent'   => get_the_ID() // get parent post-ID
                       );
								$variations = get_posts( $args );
								?>

								<?php  $stars = $room = $price_variation = [];$count = 0; $array_stars =[];?>
								<?php foreach ( $variations as $variation ) {
                              // get variation ID
									$product_name = $product->name;
									$variation_ID = $variation->ID;
                              $product_mas_id = $product_name.' (#'.$variation_ID.')';//concatenacion del nombre y el id del producto
                              $product_mas_id = strlen($product_name);
                              //cantidad de caracteres que posee el nombre del producto mas el id
                              // get variations meta
                              $product_variation = new WC_Product_Variation( $variation_ID );
                              $product_variation->get_formatted_name().'<br>';
                              $name_producto = substr($product_variation->get_formatted_name(),$product_mas_id+7);//nombre del producto eliminando el titulo del plan
                              $nombre = (explode(" ",$name_producto));
                              $stars[$count] = trim($nombre[2],',');
                              $name_fila = trim($nombre[1],'class="description">');
                              $name_fila = trim($name_fila,':');
                              $rooms[$count] = trim($nombre[4],',');
                              $price_variations[$count] = $product_variation->get_price_html();
                              
                              $count++;
                            }?>
                            <?php $aux = 0;$contador = 0;$fila =0; $global = 0;$count_stars=0;?>
                            <?php $price_count = $count; 
                            $stars = array_unique($stars);
                            $rooms = array_unique($rooms);
                            
                            // $price_variation = array_unique($price_variation);
//echo count($price_variations) - count($stars);
                            ?>
                            <?php $s=0; ?>
                            <?php foreach ($stars as $star) {
                            	$array_stars[$s] = $star;
                            	$s++; 
                            } ?>

                            
                            <?php for ($i = 0; $i < count($array_stars) ; $i++) {
                            	$fila++;
                            	for ($j =$aux; $j < count($price_variations)+count($array_stars); $j++) {
                            		$global ++;
                            		if ($j ==$aux) {

                                  //echo $i.$j.' / ';
                            			$contador =0;
                            			$hotel_price[$i][$contador] = $array_stars[$count_stars];
                            			$count_stars++;
                            			
                            		}else{
                                    //echo $contador;
                            			if ((count($price_variations) / count($array_stars)) >= $contador ) {
                                      //echo $contador.' / ';
                            				$hotel_price[$i][$contador] = $price_variations[$global-count($array_stars)];
                            			}else{
                                        //echo 'entro';
                            				$global-=2;
                            				$aux =count($price_variations) / count($array_stars);
                            				$contador=0;
                            				break;
                            			}     
                            		}
                            		$contador++;
                            	}
                                //echo '</br>';
                            } ?>
                            <?php //var_dump($hotel_price); ?>
                            <table class="table table-bordered" style="text-align: center;">
                            	<thead>
                            		<tr>
                            			<th style="text-align: center;"><?php echo $name_fila; ?></th>
                            			<?php foreach ($rooms as $room):?>

                            				<th style="text-align: center;"><?php echo $room; ?></th>
                            			<?php endforeach; ?>
                            		</tr>
                            	</thead>
                            	<tbody>
                            		<?php $c=0; ?>
                            		<?php foreach ($hotel_price as $hotel_precio) {
                            			$c++;
                            			echo '<tr>';
                            			for ($i = 0; $i <= count($price_variations) / count($array_stars); $i++) {
                            				echo '<th>'.$hotel_precio[$i].'</th>';
                            			}
                            			echo '</tr>';
                            		} ?>
                            	</tbody>

                            </table>
                            <?php 
                foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                	$quantify_cart = $cart_item['quantity'];
                };
                ?></div>
  </div><!-- //tab-content -->
  
</div><!-- //tab-wrapper -->




  </div><!-- //tab-content -->
  
</div><!-- //tab-wrapper -->


                <!-- Modal -->
                <div class="modal fade modal-ca" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                	<div class="modal-dialog modal-dialog-centered" role="document">
                		<div class="modal-content">
  			<!-- <div class="modal-header">
  				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  					<span aria-hidden="true">&times;</span>
  				</button>
  			</div> -->
  			<div class="modal-body">
  				<?php if ($quantify_cart == ""):?>
  					<!-- <h1 class="titulo-secciones titulo-margin text-center">
  					</h1></br> -->

  					<?php
                      /**
                      * woocommerce_before_single_product hook.
                      *
                      * @hooked wc_print_notices - 10
                      */
                      do_action( 'woocommerce_before_single_product_sumary' );

                      if ( post_password_required() ) {
                      	echo get_the_password_form();
                      	return;
                      }
                      ?>


                      <?php
                      /**
                      * woocommerce_single_product_summary hook.
                      *
                      * @hooked woocommerce_template_single_title - 5
                      * @hooked woocommerce_template_single_rating - 10
                      * @hooked woocommerce_template_single_price - 10
                      * @hooked woocommerce_template_single_excerpt - 20
                      * @hooked woocommerce_template_single_add_to_cart - 30
                      * @hooked woocommerce_template_single_meta - 40
                      * @hooked woocommerce_template_single_sharing - 50
                      * @hooked WC_Structured_Data::generate_product_data() - 60
                      */
                      do_action( 'woocommerce_single_product_summary' );
                      ?>
                      <?php else: ?>

                      	<div class="texto-modal">
                      		<p> <?php echo _e('You Already Have a Plan In The Cart','apk'); ?></p> 
                      		<a href="<?php echo bloginfo('url').'/cart'?>" class="btn btn-default btn-modal"><?php echo _e('SEE CART', 'apk');?></a></div>
                      	<?php endif; ?>

                      </div>
                      <!-- <div class="modal-footer">
                      	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      	<button type="button" class="btn btn-primary btn-plan " style="text-transform: capitalize;">Save changes</button>
                      </div> -->
                    </div>

                  </div>
                </div>
              </div>
