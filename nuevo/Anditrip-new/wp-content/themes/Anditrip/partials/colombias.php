<section class="home " id="colombia">
  <div class=" info-colom container">
    <h1 class="zoomIn wow animated title-section"><?php echo _e('Why Colombia?','apk'); ?></h1>
    <div class="border-w"></div>
    <!-- <img src="assets/img/arrow.png" alt=""> -->
    <div class="arrow-home">
      <img src="<?php bloginfo('template_url') ?>/assets/img/arrow2.png" alt="">
    </div>
    <div class="row">

      <!-- ------------------------------why colombias----------------------------------- -->
      <?php $argsBanner = array( 'post_type' => 'colombia', 
        'showposts' => 111,  );  

        $Banners = new WP_Query($argsBanner); ?>   
        <?php if ($Banners->have_posts()) : while($Banners->have_posts() ) : $Banners->the_post(); ?>  
          <?php $post_thumbnail_id = get_post_thumbnail_id( $Banners->id );  
          $url = wp_get_attachment_url( $post_thumbnail_id);?> 
          <div class="col-md-12 col-xs-12 col-lg-4 fadeInLeft wow animated">
            <div class="grid">
              <figure class="effect-bubba">
                <img src="<?php the_post_thumbnail_url('medium');?>"
                alt="img02" />
                <figcaption>
                  <h2><span><?php the_title(); ?></span></h2>
                  <p><?php echo excerpt('55'); ?></p>
                  <a href="<?php the_permalink() ?>"><?php echo _e('View more','apk'); ?></a>
                </figcaption>
              </figure>
            </div>
          </div>
        <?php endwhile; endif; ?>

      </div>
    </div>
  </section>