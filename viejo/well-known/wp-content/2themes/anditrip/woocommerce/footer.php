
<footer id="footer" class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div id="logo" class="footer-single">
					<?php if ($current_file == 'index.php'): ?>
						<a href="#top"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_blanco_anditrip.svg"></a>
           			 <?php else: ?>
              			<a href="<?php echo bloginfo('url').'/#top';?>" class="nav-brand"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_blanco_anditrip.svg"></a>
        			<?php endif; ?>
				</div>
			</div>

			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="footer-single footer-space">
					<h3><?php echo $about; ?></h3>
					<p class="text-justify"><?php echo $description_about; ?><!-- Company specialized in travel in Latin America for the Chinese traveler. The name was chosen taking into account that it was global, easy to pronounce for Chinese people, easy to remember, that will start with A, that it was immediately understood that they are trips to America -->.</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="footer-single quick footer-space footer-contac">
					<h3><?php echo $quick_contact; ?></h3>
					<ul>
						<li><i class="fa fa-envelope"></i> info@anditrip.com</li>
						<li><i class="fa fa-phone"></i> Phone:+86 1860 1668 338</li>


						<li><a href=""><i class="fa fa-mobile fa-2x s2"></i> </a>  <a href=""><i class=" fa fa-wechat fa-2x i s2 "></i></a> </li>
					</ul>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="footer-single footer-space footer-why">
					<h3><?php echo $colombia_footer; ?></h3>
					<?php
					$args = array(
					  'post_type' => 'product',
					  'best_selling_products' => 'yes',
					            'meta_key' => 'total_sales',
					  'orderby' => 'meta_value_num'
					);
					$loop = new WP_Query( $args );


					?>
						<ul>
							<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
							    <li><a href="<?php the_permalink(); ?>">- <?php the_title(); ?></li>
							<?php endwhile;
							?>

					</ul>
				</div>
			</div>
		</div>
		<div class="derechos">
			<div class="row separacion-top">
				<a href="http://slicegroup.xyz/" class="text-left col-md-6"> © Reserved Rights. Developed by Slice Group</a>
				<div class="text-rigth col-md-6">
					<a href="<?php echo get_site_url().'/index.php/privacy-policy';?>">Privacy policy</a>
					<a href="<?php echo get_site_url().'/index.php/booking-terms';?>">booking terms</a>
					<a href="<?php echo get_site_url().'/index.php/websites-terms';?>">Websites terms</a>
					<a href="<?php echo get_site_url().'/index.php/segure-purchase';?>">secure purchase</a>
				</div>
			</div>
		</div>
	</div>
		<a href="#" id="back-top" style="position: fixed; bottom: 0; right: 0px"><i class="fa fa-angle-up fa-5x icono-home"></i></a>
</footer>
</section>
<?php wp_footer(); ?> <!-- funcion de footer para traer los cambios en el footer -->
</body>
</html>