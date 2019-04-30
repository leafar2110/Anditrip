</secction>
</div>
<?php include('traduction/footer.php'); ?>

<footer id="footer" class="footer">
  <div class="container">
    <div class="row">
      <div class="tamano-container">
              <div class="tamano">
                <div id="logo" class="footer-single">
                  <?php if ($current_file == 'index.php'): ?>
                    <a href="#top"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_blanco_anditrip.svg"></a>
                         <?php else: ?>
                            <a href="<?php echo bloginfo('url').'/#top';?>" class="nav-brand"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_blanco_anditrip.svg"></a>
                      <?php endif; ?>
                </div>
              </div>

               <div class="tamano">
                <div class="footer-single footer-space">
                  <h3><?php echo $about; ?></h3>
                  <p class="text-justify"><?php echo $description_about; ?><!-- Company specialized in travel in Latin America for the Chinese traveler. The name was chosen taking into account that it was global, easy to pronounce for Chinese people, easy to remember, that will start with A, that it was immediately understood that they are trips to America -->.</p>
                </div>
              </div>
               <div class="tamano footer-contac alinear">
                <div class="footer-single quick footer-space footer-contac">
                  <h3><?php echo $quick_contact; ?></h3>
                  <ul>
                   <!-- <li><i class="fa fa-envelope"></i><?php echo $email; ?></li>
                    <li><i class="fa fa-phone"></i><?php echo $phone; ?></li>


                    <li><a href=""><i class="fa fa-mobile fa-2x s2"></i> </a>  <a href=""><i class=" fa fa-wechat fa-2x i s2 "></i></a> </li>-->
                    <li> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/qr_anditrip.svg" width="130px"></li>
                  </ul>
                </div>
              </div>
               <div class="tamano footer-contac">
                <div class="footer-single footer-space footer-why">
                  <h3><?php echo $wantend; ?></h3>
                  <?php
                  $args = array(
                    'post_type' => 'product',
                    'best_selling_products' => 'yes',
                              'meta_key' => 'total_sales',
                    'orderby' => 'meta_value_num',
                    'posts_per_page' => 5,
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

              <div class="tamano footer-contac">
                <div class="footer-single quick footer-space footer-contac">
                  <h3><?php echo $payment; ?></h3>
                  <div id="placetopay">
                    <a href="https://www.placetopay.com"><img class="pay"width="70%"  src="<?php echo get_template_directory_uri(); ?>/assets/img/placetopay.svg"></a>
                  </div>
                 <div class="pagos-metodo">
                    <i class="fa fa-cc-amex"></i>
                    <i class="fa fa-cc-visa"></i>
                    <i class="fa fa-cc-mastercard"></i>
                    <i class="fa fa-cc-diners-club"></i>
                  </div>
                </div>
              </div>



      </div>

    </div>
    <div class="derechos">
      <div class="row separacion-top">
        <a href="http://slicegroup.xyz/" class="text-left col-md-6"><?php echo  $reserve; ?></a>
        <div class="text-rigth col-md-6">
           <a href="<?php echo get_site_url().'/index.php/faqs';?>"><?php echo  $faqs; ?></a>
          <a href="<?php echo get_site_url().'/index.php/privacy-policy';?>"><?php echo  $privacy; ?></a>
          <a href="<?php echo get_site_url().'/index.php/booking-terms';?>"><?php echo  $booking; ?></a>



        </div>
      </div>
    </div>
  </div>
    <a href="#top" id="back-top" class="bajar" style="position: fixed; bottom: 0; right: 0px"><i class="fa fa-angle-up fa-2x icono-home"></i></a>
</footer>
<?php wp_footer(); ?> <!-- funcion de footer para traer los cambios en el footer -->

</body>
</html>
<style>
  #placetopay{
    padding: 5px 0px;
  }
  .alinear li{
        text-align: center;
  }

  .tamano{
    width: 20%;
    float: left;
    padding: 0 8px;
        height: 100%;
    display: flex;
    justify-content: center;
  }
  .tamano-container{
    display: flex;
    justify-content: center;
    align-items: flex-start;
    flex-wrap: wrap;
    height: 170px;
  }
</style>