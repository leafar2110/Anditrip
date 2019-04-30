<?php get_header(); ?>
<?php if ( have_posts() ) : the_post(); ?>
	<section class="container-fld">
	<div class="contenido-blog">

	
		<div class="img-blog" style="background-image:url(<?php the_post_thumbnail_url('full');?>)">
		<div class="text-principal-blog">
			<h1><?php the_title(); ?></h1>
			
		</div>
		<div class="titulo-blog-view">
				<img class="avatar-blog" src="<?php bloginfo('template_url') ?>/assets/img/jefe.svg" alt="">
				<p><?php the_author(); ?></p>
				<p><?php the_date(); ?></p>
			</div>
		</div>

	</div>
	<div class="post-relacionado">

		<ul>

			<li><h1><?php echo _e('Related posts','apk'); ?></h1>
				<hr> 
			</li>


			
			<?php $terms = get_the_terms( get_the_ID(), 'category'); $categ = array();
			$loop	= new WP_QUERY(array(
				'category__in'		=> $categ,
				'posts_per_page'	=> 4,
				'post__not_in'		=>array(get_the_ID()),
				'orderby'			=>'rand'
			));

			if ( $loop->have_posts() ){ while ( $loop->have_posts() ){ $loop->the_post();?>
				<a href="<?php the_permalink() ?>">


              <div id="" class="item-plans">
                <div class="product-card">
                  <div id="product-front">
                    <div class="shadow"></div>
                    <div class="card-shadow" style="background-image:url(<?php the_post_thumbnail_url('medium');?>)"></div>
                    <div class="image_overlay"></div>
                    <!-- <div id="view_details">View details</div> -->
                    <div class="stats">
                      <div class="stats-container">
                        <!-- <span class="product_price">$39</span> -->
                        <span class="product_name"><h2> <?php the_title(); ?></h2></span> 
                      </div>
                    </div>
                      
                      </div>
                    </div>
                 

              </div>
					
				</a>

			<?php	}}	wp_reset_query();?>
		</ul>
	</div>
	<div class="contenedor-blog">

		<div class="text">
			<div class="compartir">
				<ul>
					<li><i class="fab fa-facebook-f"></i></li>
					<li><i class="fab fa-google-plus-g"></i></li>
					<li><i class="fab fa-twitter"></i></li>
				</ul>
			</div>
			<p style="    font-weight: 800;border-left: 5px solid #ca151c;
			padding: 0 10px;">The Colombian capital is a city with a lot to offer, its cultural diversity, nightlife, museums, its pleasant average temperature of 14 ° C and its modern and colonial buildings, make it one of the most visited destinations in the country.</p>
			<p ><?php the_content(); ?></p>
		</div>
	</div>

    <!-- <div class='container'>
   <hr>
        <div class='carrusel-galery'>
          <div class='galery'>
            <a href="">
                <div class='galery__item'>
                    <img class='img-fluid' src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRIAvmSTRPuUTDJI_QxF5LCOdbv42pKiXU9pkwUj1BW5fgfjETC'>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                  </div>
            </a>
            <a href="">
                <div class='galery__item'>
                    <img class='img-fluid' src='assets/img/amazonas.jpg'>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                  </div>
            </a>
            <a href="">
                <div class='galery__item'>
                    <img class='img-fluid' src='assets/img/amazonas.jpg'>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                  </div>
            </a>
            <a href="">
                <div class='galery__item'>
                    <img class='img-fluid' src='assets/img/amazonas.jpg'>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                  </div>
            </a>
            <a href="">
                <div class='galery__item'>
                    <img class='img-fluid' src='assets/img/amazonas.jpg'>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                  </div>
            </a>
          
          </div>
        </div>
    </div> -->
</section>

<?php else : ?>
	<p><?php _e('Ups!, esta entrada no existe.'); ?></p>
<?php endif; ?>




<!-- ------------------------------blog----------------------------------- -->

<?php get_footer(); ?>
