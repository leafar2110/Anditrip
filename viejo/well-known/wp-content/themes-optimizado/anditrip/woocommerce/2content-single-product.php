<!-- traducir -->
<?php include_once(ABSPATH . 'wp-content/themes/anditrip/traduction/content-single-product.php'); ?>
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
  <section id="plan-page" class="container-fluid" style="background-image: url('<?php echo $url; ?>'); background-position: center!important;
    background-size: cover!important;">
    <article class="container">
      <header class="row destiny-header container" style="display:flex;"><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <div class="titulo-detalle">
            <h1><?php the_title(); ?></h1></br>
        </div>
      
        <div>
          <h2 class="preciouno"><?php echo $product->get_price_html();?></h2>
          <h2 class="calendario"><i class="fa fa-calendar-o " style="float: left;">   <?php the_field('days_include'); ?></i></h2>
        </div>
        
      </header>
    </article>
  </section>

  </div><!-- .summary -->

      </div>
    </section>
<style>

</style>

<style>

</style>

<div style="display: none;" class="btn-modal button-comprs hidden-lg hidden-md" data-toggle="modal" data-target="#myModal"><span class="fa fa-shopping-cart"></span>

</div>



 <div class="destiny-content separacion-top separacion container ">
    <div class="sidebar-destiny card-compra  comprar-plan">
      <div class="widget ">
        <div class="widget-one">
          <h3 class="text-center separacion"></h3>
          <div class="widget-destiny">
              <h4><?php echo $product->get_price_html();?></h4>
              <button type="submit" class="text-center btn btn-modal btn-modal" data-toggle="modal" data-target="#myModal" style="display: none;"><?php echo $botton_buy; ?></button>


          </div>
          <div id="contenedor-category" style="margin-top: 110px;">
                    <?php  $args = array(               
                             'orderby'    => 'slug',
                             'order'      => 'ASC'
                           );
                           $product_categories = get_terms( 'product_cat', $args );
                    $count = count($product_categories);
                    if ( $count > 0 ){
                      foreach ( $product_categories as $product_category ) {
                       ?>
                    <div class="grid">
                      <?php $thumbnail_id = get_woocommerce_term_meta($product_category->term_id, 'thumbnail_id', true);

                      $images = wp_get_attachment_image_src($thumbnail_id,'medium');
                     ?>
                   <figure class="effect-colombia effect-destino separacion">
                    <img src="<?php echo $images[0]; ?>" alt="<?php echo $product_category->name;?>"/>
                     <figcaption class="figcaption-flexbox">
                       <h2 class=""><span><?php echo $product_category->name; ?></span></h2>
                       <a href="<?php echo get_term_link( $product_category ) ?>">View more</a>
                     </figcaption>
                   </figure>
                 </div>
                 <?php
               }}
               ?>
          </div>
        </div>
      </div>
    </div>
       <section id="fancyTabWidget" class="tabs t-tabs">
      <ul class="nav nav-tabs fancyTabs window" role="tablist">
        <li class="tab fancyTab active">
          <!-- <div class="arrow-down"> <div class="arrow-down-inner"></div> </div>   -->
          <a id="tab1" href="#tabBody1" role="tab" aria-controls="tabBody1" aria-selected="true" data-toggle="tab" tabindex="0">
            <h4 class="hidden-x hidden-xs"><?php echo $include; ?> </h4>
            <h4 class=" hidden-lg hidden-md hidden-sm"><i class="fa fa-check-circle icono-responsive"></i> </h4>
            </a>
            <div class="whiteBlock"></div>
          </li>
<!-- nueva--> <li class="tab fancyTab">
            <!-- <div class="arrow-down"><div class="arrow-down-inner"></div></div> -->
            <a id="tab2" href="#tabBody2" role="tab" aria-controls="tabBody2" aria-selected="true" data-toggle="tab" tabindex="0"></span>
            <h4 class=" hidden-xs"><?php echo  $no_include; ?></h4>
            <h4 class=" hidden-lg hidden-md hidden-sm"><i class="fa fa-times-circle icono-responsive "></i> </h4>
            </a>
            <div class="whiteBlock"></div>
          </li>

          <li class="tab fancyTab">
            <!--  <div class="arrow-down"><div class="arrow-down-inner"> </div> </div> -->
            <a id="tab3" href="#tabBody3" role="tab" aria-controls="tabBody3" aria-selected="true" data-toggle="tab" tabindex="0"></span><h4 class="hidden-x  hidden-xs"><?php echo $itinerary_provided; ?></h4>
            <h4 class=" hidden-lg hidden-md hidden-sm"><i class="fa fa-map icono-responsive "></i> </h4>
            </a>
            <div class="whiteBlock"></div>
          </li>

          <li class="tab fancyTab">
            <!--  <div class="arrow-down"><div class="arrow-down-inner"> </div> </div> -->
            <a id="tab4" href="#tabBody4" role="tab" aria-controls="tabBody4" aria-selected="true" data-toggle="tab" tabindex="0"></span><h4 class="hidden-x  hidden-xs"><?php echo $important; ?></h4>

            <h4 class=" hidden-lg hidden-md hidden-sm"><i class="fa fa-info-circle icono-responsive"></i> </h4>
            </a>
            <div class="whiteBlock"></div>
          </li>

           <!-- precio -->
          <li class="tab fancyTab">
            <a id="tab5" href="#tabBody5" role="tab" aria-controls="tabBody5" aria-selected="true" data-toggle="tab" tabindex="0"></span><h4 class=" hidden-xs"><?php echo $price; ?></h4>
            <h4 class=" hidden-lg hidden-md hidden-sm"><i class="fa fa-dollar icono-responsive "></i> </h4>
            
            </a>
            <div class="whiteBlock"></div>
          </li>
        </ul>
   

        <div id="myTabContent" class="tab-content fancyTabContent" aria-live="polite">
          <div class="tab-pane  fade " id="tabBody1" role="tabpanel" aria-labelledby="tab1" aria-hidden="false" tabindex="0">
            <div>
              <div class="row">
                <div class="col-md-12">
                  <div class="plan-descripcion include">
                      <h2 class=""> </h2>
                      <div class="border-include"></div>
                       <div class="centrar-flecha">
                         <i class="glyphicon glyphicon-triangle-bottom glyconarow "></i>
                     </div>
                    <div class="row">
                      <div class="col-md-6">
                         <!-- domestic -->
                        <?php if (!empty(trim(get_field('domestic_include')))):?>
                          <h3><i class="fa fa-plane icons-planes"></i><span><?php echo $domestic; ?></span></h3>
                          <p><?php the_field('domestic_include'); ?></p>
                        <?php endif;?>
                        <!-- /domestic -->

                        <!-- food -->
                        <?php if (!empty(trim(get_field('food_include')))):?>
                          <h3><i class="fa fa-cutlery icons-planes"></i><span><?php echo $food; ?></span></h3>
                          <p></i><?php the_field('food_include'); ?></p>
                        <?php endif;?>
                        <!-- /food -->

                        <!-- tours -->
                        <?php if (!empty(trim(get_field('tours_include')))):?>
                          <h3><i class="fa fa-globe icons-planes"></i><span><?php echo $tours; ?></span></h3>
                          <p><?php the_field('tours_include'); ?></p>
                        <?php endif;?>
                        <!-- /tours -->
                      </div>

                      <div class="col-md-6">
                        <!-- days -->
                        <!-- <?php //if (!empty(trim(get_field('days_include')))):?>
                          <h3><i class="fa fa-calendar-o icons-planes"></i><span><?php //echo $days; ?></span></h3>
                          <p><?php //the_field('days_include'); ?></p>
                        <?php //endif;?> -->
                        <!-- /days -->

                        <!-- accommodation -->
                        <?php if (!empty(trim(get_field('acommodation_include')))):?>
                          <h3><i class="fa fa-building icons-planes"></i><span><?php echo $accommodation; ?></span></h3>
                          <p><?php the_field('acommodation_include'); ?></p>
                        <?php endif;?>
                        <!-- /accommodation -->

                         <!-- language -->
                        <?php if (!empty(trim(get_field('language_include')))):?>
                          <h3><i class="fa fa-comments-o icons-planes"></i><span><?php echo $language; ?></span></h3>
                          <p><?php the_field('language_include'); ?></p>
                        <?php endif;?>
                        <!-- /language -->

                         <!-- medical -->
                        <?php if (!empty(trim(get_field('card_medical_include')))):?>
                          <h3><i class="fa fa-user-md icons-planes"></i><span><?php echo $medical; ?></span></h3>
                          <p><?php the_field('card_medical_include'); ?></p>
                        <?php endif;?>
                        <!-- /medical -->
                      </div>
                    </div>

                   </div>
                 </div>
                </div>
               </div>
              </div>
                <!--new tab-->
               <div class="importante tab-pane  fade" id="tabBody2" role="tabpanel" aria-labelledby="tab2" aria-hidden="true" tabindex="0">
                <div class="row">
                  <div class="col-md-12">
                    <div class="plan-descripcion no-includesepar">
                     <h2 class=""> </h2>
                      <div class="border-include"></div>
                       <div class="centrar-flecha">
                         <i class="glyphicon glyphicon-triangle-bottom glyconarow "></i>
                     </div>
                       <!-- no_include_description -->
                        <?php if (!empty(trim(get_field('no_include_description')))):?>
                         <p><?php the_field('no_include_description'); ?></p>
                        <?php endif;?>
                        <!-- /no_include_description -->
                        </div>
                      </div>
                  </div>
                </div>
                <div class="tab-pane plan-descripcion itinerario fade" id="tabBody3" role="tabpanel" aria-labelledby="tab3" aria-hidden="true" tabindex="0">
                  <div class="row">
                    <div class="col-md-12 itinerary">
                      <h2 class=""></h2>
                        <div class="border-include"></div>
                       <div class="centrar-flecha">
                         <i class="glyphicon glyphicon-triangle-bottom glyconarow "></i>
                     </div>

                      <!-- Itinerary -->
                        <?php if (!empty(trim(get_field('iterary_include')))):?>
                          <?php the_field('iterary_include'); ?>
                               <div id="button-download">
                               <!-- download -->
                                  <?php if (!empty(trim(get_field('download_include')))):?>
                                    <a href="<?php echo the_field('download_include');?>" download class="btn btn-default btn-itinerario"><?php echo $download; ?></a>
                                  <?php endif;?>
                                <!-- /download -->
                              </div>
                        <?php endif;?>
                        <!-- /Itinerary -->
                      </div>
                    </div>
                  </div>
                

                <div class="importante tab-pane  fade" id="tabBody4" role="tabpanel" aria-labelledby="tab4" aria-hidden="true" tabindex="0">
                <div class="row">
                  <div class="col-md-12">
                    <h2 class="text-ceter"></h2>
                   <div class="border-include"></div>
                       <div class="centrar-flecha">
                         <i class="glyphicon glyphicon-triangle-bottom glyconarow "></i>
                     </div>
                      <!-- Important -->
                        <?php if (!empty(trim(get_field('important_include')))):?>
                          <p><?php the_field('important_include'); ?></p>     
                        <?php endif;?>
                        <!-- /Important -->
                    </div>
                  </div>
                </div>

                <div class="precio tab-pane  fade active in" id="tabBody5" role="tabpanel" aria-labelledby="tab5" aria-hidden="true" tabindex="0">
                <div class="row">
                  <div class="col-md-12">
                    <h2 class="text-ceter"></h2>
                   <div class="border-include"></div>
                       <div class="centrar-flecha">
                         <i class="glyphicon glyphicon-triangle-bottom glyconarow "></i>
                     </div>
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

                            <?php  $stars = $room = $price_variation = [];$count = 0; ?>
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
                                $rooms[$count] = trim($nombre[4],',');
                                $price_variations[$count] = $product_variation->get_price_html();
                           
                              $count++;
                            }?>
                            <?php $price_count = $count; 
                             $stars = array_unique($stars);
                             $rooms = array_unique($rooms);
                            
                            // $price_variation = array_unique($price_variation);

                              ?>
                      <table class="table table-bordered" style="text-align: center;">
                        <thead>
                          <tr>
                            <th style="text-align: center;"><?php echo 'Hotel'; ?></th>
                           <?php foreach ($rooms as $room):?>
                                
                            <th style="text-align: center;"><?php echo $room; ?></th>
                            <?php endforeach; ?>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($stars as $start):?>
                          <tr>                    
                            <td><?php echo $start; ?></td>

                          </tr>
                          <?php endforeach; ?>
                          
                          
                        </tbody>

                      </table>

                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
        <?php 
         foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
       $quantify_cart = $cart_item['quantity'];
     };
         ?>

        <!-- The Modal -->
              <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                  <div class="form-container formulario-modal">
                  <?php if ($quantify_cart == ""):?>
                    <h1 class="titulo-secciones titulo-margin text-center">
                    <?php the_title(); ?></h1></br>

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
                       <p> <?php echo $card_lleno_descrip; ?></p> 
                       <a href="<?php echo $url = 'http://' . $_SERVER['SERVER_NAME'].'/anditrip_colombia/index.php/cart/'?>" class="btn btn-default btn-modal"><?php echo $see_cart;?></a></div>
                  <?php endif; ?>
                    
                  </div>

                </div>
              </div>
                   <style>
               .texto-modal{
                       margin-top: 3rem;
                text-align: center;
                font-size: 17px;
              }
            </style>
              <!-- end Modal -->
        <?php get_footer(); ?>


<style>
.precio .table th{
  color: #ca151c;;
  text-align: center;
}

figure.effect-destino {
    max-height: 130px !important;
}

figure.effect-destino img {
    max-height: 150px !important;
}

figure.effect-destino:hover  h2{
    padding-top: 33%!important;
}
figure.effect-destino h2 {
    padding-top: 50%!important;
}

body > div.test > div.destiny-content.separacion-top.separacion.container > div{
  justify-content: center;
  text-align: center;
}

body > div.test > div.destiny-content.separacion-top.separacion.container > div > div > div > span{
  font-size: larger;
    font-weight: 900;
}
.itinerary h6{
   line-height: 40px;
}
.no-includesepar ul  li, .no-includesepar ol  li {
    padding-top: 25px;
}
.price-product{
      width: 28%!important;
}
</style>
<script>
  $(document).ready(function(){

  $(".itinerary").find('h6').prepend("<i class='fa fa-calendar-o'></i>  ");

});

</script>
