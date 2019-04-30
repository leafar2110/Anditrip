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
<?php require('header.php'); ?>
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
      				  <h2 class="separacion separacion_top"><span><?php echo $description_offers; ?></span></h2>
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
 <?php require('footer.php'); ?>