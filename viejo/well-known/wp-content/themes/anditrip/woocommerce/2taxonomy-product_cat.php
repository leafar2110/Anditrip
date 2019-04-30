<?php include_once(ABSPATH . 'wp-content/themes/anditrip/traduction/taxonomy-product_cat.php'); ?>

<?php get_header(); ?>

<?php if ( is_product_category() ){
    global $wp_query;

    // get the query object
    $cat = $wp_query->get_queried_object();

    // get the thumbnail id using the queried category term_id
     $category_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
		// get the title id using the queried category term_id
		$title = get_woocommerce_term_meta( $cat->term_id, 'title', true );
    // get the image URL
    $image = wp_get_attachment_url( $category_id );

	}?>

<section class="container-fluid posi fix-p" style="background-image: url('<?php echo $image; ?>');  background-position: 50% 50%!important;
background-size: cover!important;">
	<div class="mask-destino">
	<article class="container">
		<header class="row destiny-header">
			
			<h1><?php echo $cat->name; ?></h1>
		</header>
		<div class="actividad">
			<?php 
			       $product_categories = get_terms( 'product_cat');
				$slug_current = get_query_var( 'product_cat', $args );
			?>
			<?php foreach ( $product_categories as $product_category ):?>
				<?php $thumbnail_id = get_woocommerce_term_meta($product_category->term_id, 'thumbnail_id', true);?>
				<?php if ($slug_current == $product_category->slug): ?>
					<i class="fa fa-star icono-planes fa-2x "><p><?php echo the_field('temperature_destinations',$product_category);?></p></i>
					<i class="fa fa-sun-o fa-cloud fa-2x icono-planes"><p><?php echo the_field('wheather_destinations',$product_category);?></p></i>
					<i class="fa fa-thermometer-three-quarters  fa-2x icono-planes"><p><?php echo the_field('temperature_destinations',$product_category);?></p></i>		
				<?php break;endif; ?>
			<?php endforeach;?>
			<div class="desc">
			</div>
		</div>
	</article>
	</div>
</section>
<div class="destiny-content separacion-top separacion container">
	<div class="sidebar-destiny">
		<div class="widget">
			<div class="widget-one">
				<h3 class="text-center separacion"><?php echo $more_destinations; ?></h3>
				<div class="widget-destiny">
			<?php  $args = array( 
			         'orderby'    => 'slug',
			         'order'      => 'ASC'
			       );
			       $product_categories = get_terms( 'product_cat', $args );
	        $count = count($product_categories);
	        if ( $count > 0 ){
	          foreach ( $product_categories as $product_category ) {
	              ?>
						<?php  $thumbnail_id = get_woocommerce_term_meta($product_category->term_id, 'thumbnail_id', true);?>
					<?php if ($category_id != $thumbnail_id): ?>
						
					<div class="grid">
				<?php  $images = wp_get_attachment_image_src($thumbnail_id,'medium'); ?>
				 <figure class="effect-colombia effect-destino separacion">
					 <img src="<?php echo $images[0]; ?>" alt="<?php echo $product_category->name;?>"/>
					<figcaption class="figcaption-flexbox">
						 <h2 class=""><span><?php echo $product_category->name; ?></span></h2>


						 <a href="<?php echo get_term_link( $product_category ) ?>">View more</a>
					 </figcaption>
				 </figure>
			 </div>
			 <?php endif ?>
			 <?php
		 }}
		 ?>
				</div>
			</div>
		</div>
	</div>
	<div class="destinys-content">
		<h3 class="text-center separacion"><?php echo $plans; ?></h3>

		<?php while( have_posts() ) : the_post(); ?>
			<?php $post_thumbnail_id = get_post_thumbnail_id( $post_id );
      $url = wp_get_attachment_image_src($post_thumbnail_id,'large'); ?>
      <a href="<?php the_permalink(); ?>" title="<?php echo the_title(); ?>">
		<div class="card-destinys">
	<div class="card-destinys-content">
<div class="img-plan" style="background-image: url('<?php echo $url[0]; ?>');">

</div>
<div class="plan-destiny">
	<a href="<?php the_permalink(); ?>">
	<h2 class="separacion"><?php echo the_title(); ?></h2>
	<p><?php the_field('description_product_category'); ?></p>
</a>
</div>
</div>
</a>
	<div class="atributes-plan">
		<!-- days -->
		<?php if (!empty(trim(get_field('days_include')))):?>
			<!-- Si no esta vacio -->
			<div class="caja">
				<a href="<?php the_permalink(); ?>" class="text-left"><i class="fa fa-calendar-o"></i></a>	
				<div class="info">
					<p><?php the_field('days_include'); ?></p>
				</div>

			</div>

		<?php endif;?>
		<!-- /days -->

		<!-- domestic -->
		<?php if (!empty(trim(get_field('domestic_include')))):?>
			<!-- Si no esta vacio -->
			<div class="caja">
				<a href="#" class="text-left"> <i class="fa fa-plane"></i> 	</a>
				<div class="info">
					<p class=""><?php echo $domestic; ?></p> 
				</div>
			</div>
		<?php endif;?>
		<!-- /domestic -->

		<!-- Hotel -->
		<?php if (!empty(trim(get_field('acommodation_include')))):?>
			<!-- Si no esta vacio -->
			<div class="caja">
				<a href="#" class="text-left"> <i class="fa fa-building"></i> </a>
				<div class="info">
					<p><?php echo $hotel; ?> </p>
				</div>

			</div>
		<?php endif;?>
		<!-- /Hotel -->
		<a href="<?php the_permalink(); ?>" class="text-right"><?php echo $product->get_price_html(); ?></a>
	</div>
</div>
<?php endwhile; ?>
	</div>
</div>
<?php get_footer(); ?>

<style>
.caja i{
font-size: 20px;

}

.caja {
position: relative; /*Para poder ubicar la info dentro de la caja*/
/*margin: -32px auto;*/

}
.caja p{
margin: -2px 0px 1px;
}
.info {
position: absolute; /*Info sobre la imagen*/
margin-top: -4%;
left: 5px; /*Desplazamos a partir de la esquina superior izquierda*/
zoom: 1;
filter: alpha(opacity=0); /*Opacidad Para IE */
opacity: 0; /*Inicialmente transparente */
padding: 5px;
color: white;
background: black;
-moz-transition:all ease .8s; /*Aplicamos una ligera transición*/
-webkit-transition:all ease .8s ;
transition:all ease .8s;
}
.caja:hover .info {
filter: alpha(opacity=80);
opacity: .8; /*Al hacer hover sobre la caja hacemos visible los datos*/
}


	
figure.effect-destino {
    max-height: 130px !important;
}

figure.effect-destino img {
    max-height: 150px !important;
}

figure.effect-destino:hover  h2{
    padding-top: 33%!important;
}
figure.effect-destino h2 {
    padding-top: 50%!important;
}

.actividad {


}
div.atributes-plan  a.text-left > i{
	margin-right: 5px;
}

.atributes-plan .text-left {
    font-size: initial;
    margin-top: 1%;
    display: flex;
    font-size: 14px;
}
.grid img{
	height: 100%;
}
</style>
