<section class="home" id="destinations-plans">
  <div class=" desplan">
    <div class="row ">
      <div class="col-md-12">
        <div class="row no-gutters">
          <div class="col-md-12 col-lg-6 ">
            <div class="">
              <h1 class="zoomIn wow animated title-section"><?php echo _e('Destinations', 'apk'); ?></h1>
            </div>
            <div class="subtitle-home">
              <p><?php echo _e('Explore and select to see our plans.', 'apk'); ?></p>
              <div class="border-home">
              </div>
            </div>
            <div class="arrow-home-plan">
              <img src="<?php bloginfo('template_url') ?>/assets/img/arrow2.png" alt="">
            </div>
            <div class="destiny ">
              <div class="row no-gutters ">
                <div class="col-md-12">
                  <div class="carrousel-destino_desktop " id="desktop_slider">
                    <?php $args = array(

                      'orderby' => 'slug',
                      'order' => 'ASC'
                    );
                    $product_categories = get_terms('product_cat', $args);
                    $count = count($product_categories);


                    if ($count > 0) {
                      foreach ($product_categories as $product_category) {
                        ?>
                        <a id="<?php echo $product_category->term_id; ?>" class="filter-btn tab-cat" data-filter="<?php echo '.' . $product_category->term_id; ?>">
                          <div class="grid">


                            <figure id="efecct" class="effect-oscar effect">
                              <?php $thumbnail_id = get_woocommerce_term_meta($product_category->term_id, 'thumbnail_id', true);

                              $images = wp_get_attachment_image_src($thumbnail_id, 'medium');

                              ?>

                              <img id="img-cate" class="" src="<?php echo $images[0]; ?>" alt="<?php echo $product_category->name; ?>" />
                              <figcaption>
                                <h2><span><?php echo $product_category->name; ?></span></h2>
                                <p id="url-plan" style="display: none;"><?php echo $url_category = get_term_link( $product_category ) ?></p>
                                <p id="seemore-phone" onclick="window.location='<?php echo $url_category ?>';"><?php echo $view; ?></p>
                                


                              <!-- <p>
                          Oscar is a decent man. He used to clean porches with
                          pleasure.
                        </p> -->
                      </figcaption>
                    </figure>
                  </div>
                </a>

                <?php

              }
            }
            ?>
          </div>

        </div>
      </div>
    </div>
    <div id="arrow-destiny">
      <span class="arrow-top"><i class="fas fa-caret-up"></i></span>
      <span class="arrow-bottom"><i class="fas fa-sort-down"></i></span>
    </div>
  </div>
  <!-- -------------------------------------------------------------------------------------------------- -->

  <div class="col-md-12 col-xs-12 col-lg-6 planes" style="overflow: hidden;
  max-height: 542px;">
  <div class="">
    <h1 class="zoomIn wow animated title-section"><?php echo _e('Plans', 'apk'); ?></h1>

  </div>
  <div class="subtitle-home">
    <p ><?php echo _e('Explore and select to see our plans', 'apk'); ?> ( <span id="title-plan" ><?php echo _e('All available Plans', 'apk'); ?></span> )</p> 
    <div class="border-home">
    </div>
    <div class="arrow-home-plan">
      <img src="<?php bloginfo('template_url') ?>/assets/img/arrow2.png" alt="">
    </div>
    <ul class="courses" id="mix-wrapper">


      <?php 
      $currentlang = get_bloginfo('language');
      if($currentlang=="zh-CN"):?>

        <?php
        $args = array(
          'post_type' => 'product',

          'posts_per_page' => 5,

        );
        $loop = new WP_Query($args);
        ?>
        <?php while ($loop->have_posts()) : $loop->the_post();  global $product; ?>
          <?php if (get_field( 'text_chino' )==true):?>

            <li class="mix-target <?php
            $terms = get_the_terms($product->ID, 'product_cat');
            $nterms = get_the_terms($product->ID, 'product_tag');
            foreach ($terms as $term) {
              echo $product_cat_id = $term->term_id;
              $product_cat_name = $term->name;
              echo " ";
            }
            ?>" data-order="" data-year="">
            <a href="<?php the_permalink(); ?>">




              <div id="" class="item-plans">
                <div class="product-card">
                  <div id="product-front">
                    <div class="shadow"></div>
                    <div class="card-shadow" ><?php the_post_thumbnail('medium'); ?></div>
                    <div class="image_overlay"></div>
                    <!-- <div id="view_details">View details</div> -->
                    <div class="stats">
                      <div class="stats-container">
                        <!-- <span class="product_price">$39</span> -->
                        <h3 class="itemTitle"><?php the_title(); ?></h3>

                        <div class="days">
                         <?php if (!empty(trim(get_field('days_include')))) : ?>
                          <i class="far fa-calendar-alt"></i>

                          <span class="precio-home"><?php the_field('days_include'); ?> </span>
                        <?php endif; ?>

                      </div>

                      <div class="price">                     

                        <span>From: <?php echo $product->get_price_html(); ?></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </a>


        </li>

      <?php endif; ?>
    <?php endwhile;
    wp_reset_query();
  else:
    ?>
    <?php
    $args = array(
      'post_type' => 'product',

      'posts_per_page' => 5,

    );
    $loop = new WP_Query($args);
    ?>
    <?php while ($loop->have_posts()) : $loop->the_post();  global $product; ?>

      <li class="mix-target <?php
      $terms = get_the_terms($product->ID, 'product_cat');
      $nterms = get_the_terms($product->ID, 'product_tag');
      foreach ($terms as $term) {
        echo $product_cat_id = $term->term_id;
        $product_cat_name = $term->name;
        echo " ";
      }
      ?>" data-order="" data-year="">
      <a href="<?php the_permalink(); ?>">




        <div id="" class="item-plans">
          <div class="product-card">
            <div id="product-front">
              <div class="shadow"></div>
              <div class="card-shadow" ><?php the_post_thumbnail('medium'); ?></div>
              <div class="image_overlay"></div>
              <!-- <div id="view_details">View details</div> -->
              <div class="stats">
                <div class="stats-container">
                  <!-- <span class="product_price">$39</span> -->
                  <h3 class="itemTitle"><?php the_title(); ?></h3>

                  <div class="days">
                   <?php if (!empty(trim(get_field('days_include')))) : ?>
                    <i class="far fa-calendar-alt"></i>

                    <span class="precio-home"><?php the_field('days_include'); ?> </span>
                  <?php endif; ?>

                </div>

                <div class="price">                     

                  <span> <?php echo $product->get_price_html(); ?></span>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </a>


  </li>


<?php endwhile;
wp_reset_query();
endif;?>

<li>


 
</li>

</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<style> 

.d-visible{
 display: block !important;
 transition-duration:  1s;
 opacity: 1;
}
</style>