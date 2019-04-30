<?php get_header(); ?>
<?php $post_thumbnail_id = get_post_thumbnail_id();
$url = wp_get_attachment_url( $post_thumbnail_id);
?>
<section class="container-fluid" style="background-image: url(<?php echo $url; ?>);     background-position: 50% 50%;
  background-size: cover;  height: 50%!important;">
  <article class="container">
    <header class="row content-blog">
      <h1><?php the_title(); ?></h1>
    </header>
  </article>
</section>
<?php
while ( have_posts() ) : the_post(); ?>
<div id="myTabContent" class="tab-content fancyTabContent" aria-live="polite">
  <div class="tab-pane  fade active in" id="tabBody0" role="tabpanel" aria-labelledby="tab0" aria-hidden="false" tabindex="0">
    <div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div id="reviews" class="text-center padd border-separacion ">
              <h2 class="separacion separacion_top"><span></span></h2>
            </div>
            <p><?php the_content(); ?></p>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<?php endwhile; // End of the loop.?>
<div class="comentarios">
  <?php if ( comments_open() || get_comments_number() ) : ?>
    <?php comments_template(); ?>
  <?php endif; ?>
</div>
<?php get_footer(); ?>
