<?php
function adp_load_styles_scripts() {
  //CSS
  wp_register_style('theme_style', get_stylesheet_uri(), '', '1.0', 'all');// para registrar el css
  wp_enqueue_style('theme_style');

  //JS

  wp_enqueue_script( 'script1', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'script10', get_template_directory_uri() . '/assets/js/isotope.min.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'script3', get_template_directory_uri() . '/assets/js/app.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'script4', get_template_directory_uri() . '/assets/js/buscador.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'script6', get_template_directory_uri() . '/assets/js/slick.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'script7', get_template_directory_uri() . '/assets/js/slick-custom.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'script8', get_template_directory_uri() . '/assets/js/uisearch.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'script9', get_template_directory_uri() . '/assets/js/img.js', array ( 'jquery' ), 1.1, true);
  }
add_action('wp_enqueue_scripts', 'adp_load_styles_scripts');

// Sin parámetro -> Post Thumbnail (Según el tema por medio de set_post_thumbnail_size())
the_post_thumbnail();

the_post_thumbnail('thumbnail');       // Thumbnail (por defecto 150px x 150px max)
the_post_thumbnail('medium');          // Media resolución (por defecto 300px x 300px max)
the_post_thumbnail('large');           // Alta resolución (por defecto 640px x 640px max)
the_post_thumbnail('full');            // Resolución original de la imagen (sin modificar)

the_post_thumbnail( array(100,100) );  // Otras resoluciones


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

  $currentlang = get_bloginfo('language');
  //english
  if($currentlang=="en-US") {

     // Quitar el rango de precios de los productos variables en woocommerce
     function precio_desde( $price, $product ) {
     // Precio normal
     $prices = array( $product->get_variation_price( 'min', true ), $product->get_variation_price( 'max', true ) );
     $price = $prices[0] !== $prices[1] ? sprintf( __( ' From   %1$s ', 'woocommerce' ), wc_price( $prices[0] ) ) : wc_price( $prices[0] );
     // Precio rebajado
     $prices = array( $product->get_variation_regular_price( 'min', true ), $product->get_variation_regular_price( 'max', true ) );
     sort( $prices );
     $saleprice = $prices[0] !== $prices[1] ? sprintf( __( ' From   %1$s ', 'woocommerce' ), wc_price( $prices[0] ) ) : wc_price( $prices[0] );
     if ( $price !== $saleprice ) {
     $price = 5;
     }
     return $price;
     }
     add_filter( 'woocommerce_variable_sale_price_html', 'precio_desde', 10, 2 );
     add_filter( 'woocommerce_variable_price_html', 'precio_desde', 10, 2 );

    function agrega_mi_campo_personalizado( $checkout ) {
      $total_cantidad = total_producto (); 
      echo '<div id="additional_checkout_field" class="title-traveler"><h2>' . __('Information Travelers') . '</h2></div>';
      $cont = 0;
      ?>
      <div id="travelers-total">
        <?php 
          $residuo = 9 % $total_cantidad ;
          if ($residuo == 0) {
            $col = 4;
          }else{
            $col = 6;
          }
         ?>
        <?php while ($cont < $total_cantidad):  ?>
          <?php $cont += 1; ?>
          <div class="<?php echo 'col-sm-'.$col; ?>">
            <div class="traveler-individual">
              <div class="cards-blog">
                <div class="blog-content">
                  <div class="entry-header ">
                    <h3 class="title-traveler"><?php echo 'Traveler: '.$cont; ?></h3>
                  </div>
                  <div class="entry-content">
                    <?php 
                      //name
                      woocommerce_form_field( 'traveler_name'.$cont, array(
                        'type'          => 'text',
                        'class'         => array('my-field-class form-row-wide'),
                        'label'         => __('Name:'),
                        'placeholder'   => __('Ej: renny'),
                        ), $checkout->get_value( 'traveler_name'.$cont ));

                      //lastname
                      woocommerce_form_field( 'traveler_lastname'.$cont, array(
                        'type'          => 'text',
                        'class'         => array('my-field-class form-row-wide'),
                        'label'         => __('Lastname:'),
                        'placeholder'   => __('Ej: Lugo'),
                        ), $checkout->get_value( 'traveler_lastname'.$cont ));

                      //DNI
                      woocommerce_form_field( 'traveler_dni'.$cont, array(
                        'type'          => 'number',
                        'class'         => array('my-field-class form-row-wide'),
                        'label'         => __('DNI:'),
                        'placeholder'   => __('Ej: 18462836'),
                        ), $checkout->get_value( 'traveler_dni'.$cont ));
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endwhile;?>       
      </div>
      
               <style>
                  .title-traveler{
                    color: #ca151c!important;
                    font-family: sans-serif;
                    text-align: center;
                  }
                  #additional_checkout_field
                  {
                    text-align: center;
                        padding: 25px;
                  }
                  .traveler-individual{
                    padding: 20px 0px;
                        margin-bottom: 20px;

                  }
                </style>
     <?php  
    }

  } 
  //chinese
  else {
    // Quitar el rango de precios de los productos variables en woocommerce
    function precio_desde( $price, $product ) {
    // Precio normal
    $prices = array( $product->get_variation_price( 'min', true ), $product->get_variation_price( 'max', true ) );
    $price = $prices[0] !== $prices[1] ? sprintf( __( ' 味道和   %1$s ', 'woocommerce' ), wc_price( $prices[0] ) ) : wc_price( $prices[0] );
    // Precio rebajado
    $prices = array( $product->get_variation_regular_price( 'min', true ), $product->get_variation_regular_price( 'max', true ) );
    sort( $prices );
    $saleprice = $prices[0] !== $prices[1] ? sprintf( __( ' 味道和   %1$s ', 'woocommerce' ), wc_price( $prices[0] ) ) : wc_price( $prices[0] );
    if ( $price !== $saleprice ) {
    $price = 5;
    }
    return $price;
    }
    add_filter( 'woocommerce_variable_sale_price_html', 'precio_desde', 10, 2 );
    add_filter( 'woocommerce_variable_price_html', 'precio_desde', 10, 2 );

    function agrega_mi_campo_personalizado( $checkout ) {
      $total_cantidad = total_producto (); 
      echo '<div id="additional_checkout_field" class="title-traveler"><h2>' . __('您的订单订单') . '</h2></div>';
      $cont = 0;
      ?>
      <div id="travelers-total">
        <?php 
          $residuo = 9 % $total_cantidad ;
          if ($residuo == 0) {
            $col = 4;
          }else{
            $col = 6;
          }
         ?>
        <?php while ($cont < $total_cantidad):  ?>
          <?php $cont += 1; ?>
          <div class="<?php echo 'col-sm-'.$col; ?>">
            <div class="traveler-individual">
              <div class="cards-blog">
                <div class="blog-content">
                  <div class="entry-header ">
                    <h3 class="title-traveler"><?php echo '您的订: '.$cont; ?></h3>
                  </div>
                  <div class="entry-content">
                    <?php 
                      //name
                      woocommerce_form_field( 'traveler_name'.$cont, array(
                        'type'          => 'text',
                        'class'         => array('my-field-class form-row-wide'),
                        'label'         => __('名字:'),
                        'placeholder'   => __('道: 地区'),
                        ), $checkout->get_value( 'traveler_name'.$cont ));

                      //lastname
                      woocommerce_form_field( 'traveler_lastname'.$cont, array(
                        'type'          => 'text',
                        'class'         => array('my-field-class form-row-wide'),
                        'label'         => __('姓氏:'),
                        'placeholder'   => __('道: 地区'),
                        ), $checkout->get_value( 'traveler_lastname'.$cont ));

                      //DNI
                      woocommerce_form_field( 'traveler_dni'.$cont, array(
                        'type'          => 'number',
                        'class'         => array('my-field-class form-row-wide'),
                        'label'         => __('街道地址:'),
                        'placeholder'   => __('道: 846地区'),
                        ), $checkout->get_value( 'traveler_dni'.$cont ));
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endwhile;?>       
      </div>
      
               <style>
                  .title-traveler{
                    color: #ca151c!important;
                    font-family: sans-serif;
                    text-align: center;
                  }
                  #additional_checkout_field
                  {
                    text-align: center;
                        padding: 25px;
                  }
                  .traveler-individual{
                    padding: 20px 0px;
                        margin-bottom: 20px;

                  }
                </style>
     <?php  
    }

  }
  
/**
 * Actualiza la información del pedido con el nuevo campo
 */

add_action( 'woocommerce_checkout_update_order_meta', 'actualizar_info_pedido_con_nuevo_campo' );
 
function actualizar_info_pedido_con_nuevo_campo( $order_id ) {
    $total_cantidad = total_producto (); 
    $cont = 0;
  while ($cont < $total_cantidad) {
    $cont ++;
      if ((! empty( $_POST['traveler_name'.$cont]) and (!empty( $_POST['traveler_lastname'.$cont])) and (!empty( $_POST['traveler_dni'.$cont])))) {
          update_post_meta( $order_id, 'Traveler Name'.$cont, sanitize_text_field( $_POST['traveler_name'.$cont] ) );
          update_post_meta( $order_id, 'Traveler Lastname'.$cont, sanitize_text_field( $_POST['traveler_lastname'.$cont] ) );
          update_post_meta( $order_id, 'Traveler DNI'.$cont, sanitize_text_field( $_POST['traveler_dni'.$cont] ) );
      }

    }
      update_post_meta( $order_id, 'traveler_count', $total_cantidad);
}


/**
 * Muestra el valor del nuevo campo Traveler Name en la página de edición del pedido
 */

add_action( 'woocommerce_admin_order_data_after_billing_address', 'mostrar_campo_personalizado_en_admin_pedido', 10, 1 );
 
function mostrar_campo_personalizado_en_admin_pedido($order){
   $cont = 0;
   echo '<p><strong>'.__('traveler_count').':</strong> ' . get_post_meta( $order->id, 'traveler_count', true ) . '</p>';
   $total_cantidad = (get_post_meta( $order->id, 'traveler_count', true ));
  while ($cont < $total_cantidad) {
    $cont ++;
    echo '<h1>'.'Registro de viajeros :'.$cont.'</h1>';
   echo '<p><strong>'.__('Traveler Name ').$cont.':</strong> ' . get_post_meta( $order->id, 'Traveler Name'.$cont, true ) . '</p>';
   echo '<p><strong>'.__('Traveler Lastname ').$cont.':</strong> ' . get_post_meta( $order->id, 'Traveler Lastname'.$cont, true ) . '</p>';
   echo '<p><strong>'.__('Traveler DNI ').$cont.':</strong> ' . get_post_meta( $order->id, 'Traveler DNI'.$cont, true ) . '</p>';
    }
}

/**
 * Incluye el campo Traveler Name en el email de notificación del cliente
 */
 
add_filter('woocommerce_email_order_meta_keys', 'muestra_campo_personalizado_email');
 
function muestra_campo_personalizado_email( $keys ) {
    $keys[] = 'Traveler Name';
    return $keys;
}

//elimina campos de chekout
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

function custom_override_checkout_fields( $fields ) {
//unset($fields['billing']['billing_first_name']);
//unset($fields['billing']['billing_last_name']);
unset($fields['billing']['billing_company']);
//unset($fields['billing']['billing_address_1']);
unset($fields['billing']['billing_address_2']);
//unset($fields['billing']['billing_city']);
//unset($fields['billing']['billing_postcode']);
//unset($fields['billing']['billing_country']);
//unset($fields['billing']['billing_state']);
//unset($fields['billing']['billing_phone']);
//unset($fields['order']['order_comments']);
unset($fields['billing']['billing_address_2']);
//unset($fields['billing']['billing_postcode']);
//unset($fields['billing']['billing_company']);
//unset($fields['billing']['billing_last_name']);
//unset($fields['billing']['billing_email']);
//unset($fields['billing']['billing_city']);
return $fields;
}

//quitar las migajas de pan
//add_action('wp_enqueue_scripts','mis_Estilos');
remove_action( 'woocommerce_before_main_content','woocommerce_breadcrumb', 20, 0);

//limitar el titulo de los post

function titulolargo($title){
    global $post;
    $title = $post->post_title;
    if (str_word_count($title) >= 12 ) //aqui definimos el máximo de palabras permitidas
        wp_die( __('Error: tu título sobrepasa el máximo de palabras razonable, vuelve atrás y mejóralo, tus lectores te lo agradecerán.') );
}
add_action('publish_post', 'titulolargo');


// comentarios
/**
   * Comment form hidden fields
   */
  function comment_form_hidden_fields()
  {
    comment_id_fields();
    if ( current_user_can( 'unfiltered_html' ) )
    {
      wp_nonce_field( 'unfiltered-html-comment_' . get_the_ID(), '_wp_unfiltered_html_comment', false );
    }
  }

  function format_comment($comment, $args, $depth) {

    $GLOBALS['comment'] = $comment; ?>

     <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">

         <div class="comment-intro">
             <em>commented on</em>
             <a class="comment-permalink" href="<?php echo htmlspecialchars ( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s'), get_comment_date(), get_comment_time()) ?></a>
             <em>by</em>
             <?php printf(__('%s'), get_comment_author_link()) ?>
         </div>

         <?php if ($comment->comment_approved == '0') : ?>
             <em><php _e('Your comment is awaiting moderation.') ?></em><br />
         <?php endif; ?>

         <?php comment_text(); ?>

         <div class="reply">
             <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
         </div>

<?php } 


if (is_singular() && is_admin()) {
 
function featured_image_required($hook) {
    if ( 'post.php' != $hook && 'post-new.php' != $hook ) {
        return;
    }
 
    wp_enqueue_script( 'featured-image-required', get_theme_file_uri('assets/js/img.js') );
}
add_action( 'admin_enqueue_scripts', 'featured_image_required' );
}
function featured_image_required($hook) {
    if ( 'post.php' != $hook && 'post-new.php' != $hook ) {
        return;
    }
 
    wp_enqueue_script( 'featured-image-required', get_theme_file_uri('assets/js/img.js') );
}
add_action( 'admin_enqueue_scripts', 'featured_image_required' );

?>