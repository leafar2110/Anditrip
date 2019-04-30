<section class="container blog" id="blog">
  <div class="info-blog">
    <h1 class="zoomIn wow animated title-section"><?php echo _e('Blog', 'apk') ?></h1>
    <div class="border-w"></div>
    <div class="arrow-home">
      <img src="<?php bloginfo('template_url') ?>/assets/img/arrow2.png" alt="">
    </div>
    <div class="row">
     <?php
     $loop = new WP_QUERY(array(
      'posts_per_page'  => 3
    ));

     if ( $loop->have_posts() )
     {

      while ( $loop->have_posts() )
      {
        $loop->the_post();
        ?>

        <div class=" col-md-6 col-xs-12 col-lg-4 zoomIn wow animated">
          <a href="<?php the_permalink() ?>">

            <div class="my-2 mx-auto p-relative bg-white shadow-1 blue-hover card-home">
              <div style="background: url('<?php the_post_thumbnail_url('medium');?>');  width: 100%;
              overflow: hidden;border-radius: 1px;height: 240px; background-size: cover;"
              class="d-block w-full">
              <p class="card-btn"><?php echo _e('Read More', 'apk') ?></p>
            </div>
            <div class="p-blog">
              <p class="mb-0 small font-weight-medium text-uppercase mb-1 text-muted lts-2px">
                <?php the_category() ?>
              </p>
              <h2 class=" font-weight-normal text-black card-heading mt-0 mb-1" style="line-height: 1.25;">
               <?php the_title(); ?>
             </h2>
             <p class="mb-1">
               <p><?php echo excerpt('15'); ?></p>
               &hellip;
             </p>
           </div>
         </div>

       </div>
     </a>

     <?php

   }

   

 }
 wp_reset_query();
 ?>


</div>
</a>
</div>
<style>
.post-categories {
  list-style: none!important;
}

.post-categories li a {
  letter-spacing: 2px!important;
  font-size: .8rem;
  color: #343a40;
  margin-top: 15px;
}
</style>
</section>