<section class="home-princ" id="index">
  <div class="container-full banner">


    <div id="banner-img">
     <?php $args = array(
       'post_type'      => 'product'
     );
     $ofertas = new WP_Query($args); ?>
     <?php if ($ofertas->have_posts()) : while( $ofertas->have_posts() ) : $ofertas->the_post(); ?>
      <?php if (get_field('ofertar_offers')==true):?>
        <?php $post_thumbnail_id = get_post_thumbnail_id();
        $url = wp_get_attachment_url( $post_thumbnail_id);
        ?>
        <div>
          <div class="mask-banner"></div>
          <img src="<?php the_field('img_offers'); ?>" />
          <div class="container  nav justify-content-end typed-banner">
            <h2 class="fadeInUp wow animated" id="typed"><?php the_field( 'title_offers' ); ?></h2>
            <!----------------------------------typed---------------------------------  -->
          </div>
          <div class="map zoomIn wow animated">
            <div class="ubicacion" style="background-image: url('<?php bloginfo('template_url') ?>/assets/img/map-b.png'); background-repeat: no-repeat; 
            "><?php the_field('playcer');?></div>
          </div>
          <a href="<?php the_permalink();?>" class="btn-banner zoomIn wow animated">
            <button class="btn  "><?php echo _e('See more', 'apk') ?></button></a>
          </div>
        <?php endif; ?>
      <?php endwhile; endif; wp_reset_query(); ?>



    </div>
  </div>
</section>



