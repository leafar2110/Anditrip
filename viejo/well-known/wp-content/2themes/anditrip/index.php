<?php include('header.php'); ?>
<!-- Slider -->
<div class="container-full">
    <div id="slider-offers">
         <div id="carrusel" class="slider">
    <?php $args = array(
     'post_type'      => 'product'
    );
    $ofertas = new WP_Query($args); ?>
    <?php if ($ofertas->have_posts()) : while( $ofertas->have_posts() ) : $ofertas->the_post(); ?>
      <?php if (get_field('ofertar_offers')==true):?>
          <?php $post_thumbnail_id = get_post_thumbnail_id();
          $url = wp_get_attachment_url( $post_thumbnail_id);
          ?>
          <div class="item-slider">
            <div class="img-slider" style="background-image: url(<?php the_field('img_offers'); ?>)">
              <div class="mask">
                <div class="container">
                  <div class="content-slider">

                    <h2 class="">
                    <?php the_field('title_offers');?></h2>
                    <a href="<?php the_permalink();?>" class="btn btn-default"><?php echo $view; ?></a>
                  </div>
                </div>
              </div>
             <div class="ubicacion">
              <div class="col-md-10">
               <h2><i class="fa fa-map-marker"></i></h2>
               <p><?php the_field('playcer'); ?> </p>
             </div>
           </div>
            </div>
          </div>
      <?php endif; ?>
        <?php endwhile; endif; wp_reset_query(); ?>

  </div>
  </div>
</div>
<section>
<div class="container-full fix"  id="destinations-plans" >
 <div class="centrar-titulo"> <p class="text-center sub-titulo"><?php echo $description;?></p></div>
  <div class="mejor">
    <div class="destinys ">
        <div class="text-center padd ">
             <h2 class=""><?php echo $destinations;?></h2>
                <p><?php echo $descrip_destinations; ?></p>
              <div class="border-include"></div>
              <div class="centrar-flecha">
                <i class="glyphicon glyphicon-triangle-bottom glyconarow "></i>
              </div>
        </div>
       <div class="rejilla6 portfolioFilter">
      <?php  $args = array(
         
          'orderby'    => 'slug',
          'order'      => 'ASC'
        );
        $product_categories = get_terms( 'product_cat', $args );
        $count = count($product_categories);

        if ( $count > 0 ){
          foreach ( $product_categories as $product_category ) {
              ?>
              <a id="<?php echo $product_category->term_id; ?>" class="destiny" data-filter="<?php echo '.'.$product_category->term_id; ?>">
                <div class="grid">
                  <figure id="effect" class="effect">
                    <?php $thumbnail_id = get_woocommerce_term_meta($product_category->term_id, 'thumbnail_id', true);

                    $images = wp_get_attachment_image_src($thumbnail_id,'medium');
                     ?>

                    <img src="<?php echo $images[0]; ?>" alt="<?php echo $product_category->name;?>"/>
                     <figcaption class="figcaption-flexbox">
                      <h2><span><?php echo $product_category->name; ?></span></h2>
                       <p id="url-plan" style="display: none;"><?php echo $url_category = get_term_link( $product_category ) ?></p>
                      <p id="seemore-phone" onclick="window.location='<?php echo $url_category ?>';"><?php echo $view; ?></p>
                    </figcaption>
                  </figure>
                </div>
              </a>
              <?php
            }}
            ?>
          </div>
          <div id="arrow-destiny">
            <span class="arrow-top"><i class="glyphicon glyphicon-triangle-top glyconarow"></i></span>
            <span class="arrow-bottom"><i class="glyphicon glyphicon-triangle-bottom glyconarow"></i></span>
          </div>
        </div>
        <div class="plans container-full">
            <div class="text-center padd ">
                 <h2 class=""><?php echo $plans;?></h2>
                  <?php echo $descrip_destinations;?>
                 (<p id="title-plan" style="display: inline-block;"><?php echo $all_available; ?></p>)
                  <div class="border-include"></div>
                  <div class="centrar-flecha">
                    <i class="glyphicon glyphicon-triangle-bottom glyconarow "></i>
                  </div>
            </div>
          <div class="rejilla9 portfolioContainer">
            <?php
            $args = array(
              'post_type' => 'product',
              'best_selling_products',
              'posts_per_page' => 5,
              'orderby' => 'rand'
            );
            $loop = new WP_Query( $args );
            ?>
            <?php while( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
              <div class="plan <?php
              $terms = get_the_terms( $product->ID, 'product_cat' );
        $nterms = get_the_terms( $product->ID, 'product_tag'  );
        foreach ($terms  as $term  ) {
            echo $product_cat_id = $term->term_id;
              $product_cat_name = $term->name;
             echo " ";}
            ?>">
                <a href="<?php the_permalink(); ?>">
                <div class="card">
                  <div class="card-thumb">
                    <?php the_post_thumbnail('medium'); ?>
                  </div>
               <div class="plan-content">
                    <div class="centrar-flecha"> <p class="text-center "><?php the_title(); ?></p></div>
                    <div class="plan-content-price ">
                      <!-- days -->
                        <?php if (!empty(trim(get_field('days_include')))):?>
                         <i class="fa fa-calendar-o " style="float: let;" > <?php the_field('days_include'); ?></i>
                        <?php endif;?>
                        <!-- /days -->
                      <div class="price-home">
                        <?php echo $product->get_price_html();?>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
              </div>
            <?php endwhile;
            wp_reset_query();
            ?>
          </div>
             <a id="permalink-plan" class="" style="display: none;" href="#">+</a>
        </div>
      </div>
    </div>
  </section>
    <div class="container">
      <section id="colombia" class="info-single-colombia">
        <div class="text-center padd border-separacion ">
          <i class="glyphicon glyphicon-triangle-bottom glyphicon-reviews"></i>
          <h2 class="separacion separacion_top font-colombia"><span><?php echo $why;?></span></h2>
        </div>
        <p class="text-why"><?php echo $colombia_description;?></p>
        <div class="row">
          <div class="col-sm-12">
            <?php $args = array(
              'post_type'      => 'colombia',
              'field' => 'slug',
              'order'          => 'DEC',
            );
            $colombia = new WP_Query($args); ?>
            <?php if ($colombia->have_posts()) : while( $colombia->have_posts() ) : $colombia->the_post(); ?>
              <div class="col-sm-4  " >
                <div class="info-img">
                  <div class="grid">
                    <figure class="effect-colombia">
                      <?php the_post_thumbnail();  ?>
                      <figcaption class="figcaption-flexbox">
                         <h2 style="position: absolute !important;"><span><?php the_title(); ?></span></h2>
                         <?php the_excerpt(); ?>
                      </figcaption>
                    </figure>
                  </div>
                </div>
              </div>
            <?php endwhile; endif; ?>
          </div>
        </div>
      </div>
    </section>
    <!-- End Why Colombia -->
    <section class="blog-section">
      <div class="container">
        <div id="blog" class="text-center padd border-separacion ">
          <i class="glyphicon glyphicon-triangle-bottom glyphicon-reviews"></i>
          <h2 class="separacion separacion_top"><span><?php echo $blog;?></span></h2>
        </div>
        <div class="row">
          <?php $args = array(
              'post_type'      => 'post',
              'posts_per_page' => 3,
              'orderby' => 'rand'

            );
            $posts = new WP_Query($args); ?>
          <div class="blog-posts">
            <?php if ($posts->have_posts()) : while( $posts->have_posts() ) : $posts->the_post(); ?>

              <div class="col-sm-4 " >
                <div class="cards-blog">
                  <div class="card-thumb">
                    <a href="<?php the_permalink(); ?>">
                      <div class="card-icon">
                        <i class="fa fa-chek"><strong><?php echo $read; ?></strong></i>
                      </div>
                    <?php the_post_thumbnail('medium'); ?></a>
                  </div>
                  <div class="blog-content">
                    <div class="entry-header ">
                      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                      <span class="cetagory">in <strong><?php the_category(); ?></strong></span>
                    </div>
                    <div class="entry-content">
                      <p><?php the_excerpt(); ?></p>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile; endif; ?>
          </div>
        </section>
        <?php require('footer.php'); ?>
</div>
<script>
  $(window).on('load', function(){
        var $container = $('.portfolioContainer');
        if ($container.length) {
          $container.isotope({
              filter: '*',
              animationOptions: {
                  duration: 750,
                  easing: 'linear',
                  queue: false
              }
          });
          $('.portfolioFilter a').click(function(){
              $('.portfolioFilter .current').removeClass('current');
              $(this).addClass('current');

              var selector = $(this).attr('data-filter');
              $container.isotope({
                  filter: selector,
                  animationOptions: {
                      duration: 750,
                      easing: 'linear',
                      queue: false
                  }
               });
               return false;
          });
        }
    });
</script>
