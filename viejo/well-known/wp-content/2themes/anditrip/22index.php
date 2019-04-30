<?php get_header(); ?>
<div class="container">
  <div class="main-content mt-20 ov-hidden">
    <div class="col-md-8 sm-padding">
      <section id="main-content" class="main-wrapper mb-40">
        <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
          <div class="news-block padding-15 bg-white bd-grey mb-40">
            <article class="post resume">
              <header class="post-title">
                <h2 class="block-falcon mb-40"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <small class="meta"><?php the_time( get_option('date_format') ); ?> &bull; <a href=""><?php the_category(', '); ?></a></small>
              </header>
              <div class="post-content">
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="readmore"><?php _e('Seguir Leyendo', 'apk');?> &rarr;</a>
              </div>

              <p>Este post ha sido visto <?php  echo sprintf( _n( '%s vez', '%s veces', $post_views, 'your_textdomain' ), $post_views );?></p>
            </article>	<!-- article -->
          </div>
        <?php endwhile; endif; ?>
      </section><!-- /#main-content -->
    </div>
  </div>
</div>
<?php get_footer(); ?>
