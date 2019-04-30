<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 * @hooked WC_Structured_Data::generate_website_data() - 30
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

    <header class="woocommerce-products-header">

		<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>

			<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>

		<?php endif; ?>

		<?php
			/**
			 * woocommerce_archive_description hook.
			 *
			 * @hooked woocommerce_taxonomy_archive_description - 10
			 * @hooked woocommerce_product_archive_description - 10
			 */
			do_action( 'woocommerce_archive_description' );
		?>

    </header>

		<?php if ( have_posts() ) : ?>

			<?php
				/**
				 * woocommerce_before_shop_loop hook.
				 *
				 * @hooked wc_print_notices - 10
				 * @hooked woocommerce_result_count - 20
				 * @hooked woocommerce_catalog_ordering - 30
				 */
				do_action( 'woocommerce_before_shop_loop' );
			?>

			<?php woocommerce_product_loop_start(); ?>

				<?php woocommerce_product_subcategories(); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/**
						 * woocommerce_shop_loop hook.
						 *
						 * @hooked WC_Structured_Data::generate_product_data() - 10
						 */
						do_action( 'woocommerce_shop_loop' );
					?>

					<?php wc_get_template_part( 'content', 'product' ); ?>

				<?php endwhile; // end of the loop. ?>

			<?php woocommerce_product_loop_end(); ?>

			<?php
				/**
				 * woocommerce_after_shop_loop hook.
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action( 'woocommerce_after_shop_loop' );
			?>

		<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

			<?php
				/**
				 * woocommerce_no_products_found hook.
				 *
				 * @hooked wc_no_products_found - 10
				 */
				do_action( 'woocommerce_no_products_found' );
			?>

		<?php endif; ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
	?>

<?php get_footer( 'shop' ); ?>

<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<?php get_header(); ?>
  <?php $post_thumbnail_id = get_post_thumbnail_id();
      $url = wp_get_attachment_url( $post_thumbnail_id);
      ?>
 <section class="container-fluid" style="background-image: url(<?php echo $url; ?>)">

    <article class="container">
      <header class="row destiny-header">
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
    				  <i class="glyphicon glyphicon-triangle-bottom glyphicon-reviews"></i>
      				  <h2 class="separacion separacion_top"><span>Description</span></h2>
   				</div>
       			<p><?php the_content(); ?></p>
       		</div>	

       	</div>
       </div>
        </div>
      </div>
    </div>
<?php if ( comments_open() || get_comments_number() ) :
				
				endif;
			endwhile; // End of the loop.
			?>
<?php get_footer(); ?>

<?php get_header(); ?>
<div class="container">
  <div class="main-content mt-20 ov-hidden">
    <div class="col-md-8 sm-padding">
      <section id="main-content" class="main-wrapper mb-40">
        <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
          <?php $post_views = get_post_views(get_the_ID());?>
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
        <?php if (get_next_posts_link() || get_previous_posts_link()): ?>
          <div class="posts-nav cf">
            <?php next_posts_link(__('&larr; Previos', 'apk')); ?>
            <?php previous_posts_link(__('Recientes &rarr;', 'apk')); ?>
          </div>
        <?php endif; ?>

      </section><!-- /#main-content -->
    </div>
  </div>
</div>
<?php get_footer(); ?>
