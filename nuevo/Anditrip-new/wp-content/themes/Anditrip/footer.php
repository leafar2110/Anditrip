  <!-- --------------------------------------footer--------------------------- -->

  <footer class="footer d-none d-sm-block ">
    <div class="container ">
      <div class="row ">
        <div class="col logo-footer">
          <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_anditrip.png" alt="" data-toggle="tooltip"
            data-placement="top" title="ANDITRIP" /></a>
          </div>
          <div class="col">
            <h3><?php echo _e('About Us', 'apk'); ?></h3>
            <p><?php echo _e('Anditrip is a latinamerican travel agency with a professional experience in destinations such as Colombia, Perú, Ecuador, Panamá and Mexico..', 'apk'); ?></p>
          </div>
          <div class="col qr-footer">
            <h3><?php echo _e('Quick Contact', 'apk'); ?></h3>
            <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/qr_anditrip.svg" alt="qr" data-toggle="tooltip"
              data-placement="top" title="wechatQR" /></a>
            </div>
            <div class="col">
              <h3><?php echo _e('The Most Wanted', 'apk'); ?></h3>
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
                  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></li>
                  <?php endwhile;
                  ?>

                </ul>
              </div>
              <div class="col">
                <h3><?php echo _e('Payment Methods', 'apk'); ?></h3>
                <img src="<?php echo get_template_directory_uri();?>/assets/img/place.svg" alt="" data-toggle="tooltip" data-placement="top" title="PLACETOPAY">
                <svg data-toggle="tooltip" data-placement="top" title="PLACETOPAY" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 675 169" style="enable-background:new 0 0 675 169;"
                xml:space="preserve" height="30px" wi>
                <style type="text/css">
                .st0 {
                  fill: #FFFFFF;
                }

                .st1 {
                  fill: #ffffff;
                }
              </style>
              <g>
                <g>
                  <g>
                    <path class="st0" d="M189.2,99.8h-19.1v19.8h-12.7V52.3c10.6,0,21.2-0.1,31.7-0.1C222.1,52.2,222.2,99.8,189.2,99.8z M170.2,88.1
                    h19.1c16.3,0,16.2-23.9,0-23.9h-19.1V88.1z" />
                    <path class="st0" d="M233.3,52.4v67.3h-11.6V52.4H233.3z" />
                    <path class="st0" d="M281.2,72.2h11.3v47.4h-11.1l-0.6-6.9c-2.7,5.6-10.1,8.3-15.4,8.4c-14,0.1-24.4-8.6-24.4-25.2
                    c0-16.4,10.9-24.9,24.7-24.8c6.4,0,12.4,3,15.1,7.7L281.2,72.2z M252.7,95.8c0,9,6.3,14.4,14,14.4c18.5,0,18.5-28.8,0-28.8
                    C259,81.5,252.7,86.8,252.7,95.8z" />
                    <path class="st0" d="M344.1,113.5c-5.5,5.4-11.3,7.5-18.3,7.5c-13.8,0-25.2-8.3-25.2-25.1s11.5-25.1,25.2-25.1
                    c6.7,0,11.9,1.9,17.1,7l-7.4,7.8c-2.8-2.5-6.3-3.8-9.5-3.8c-7.9,0-13.7,5.8-13.7,14c0,9,6.2,13.9,13.5,13.9
                    c3.8,0,7.5-1.1,10.4-3.9L344.1,113.5z" />
                    <path class="st0" d="M361.3,100.1c0.8,5.9,5.9,10.1,14.1,10.1c4.3,0,10-1.6,12.7-4.4l7.5,7.4c-5,5.2-13.2,7.7-20.4,7.7
                    c-16.4,0-26.1-10.1-26.1-25.3c0-14.4,9.8-24.8,25.2-24.8c15.9,0,25.8,9.8,24,29.3L361.3,100.1L361.3,100.1z M387,90.4
                    c-0.8-6.2-5.6-9.2-12.3-9.2c-6.4,0-11.5,3.1-13.3,9.2H387z" />
                    <g>
                      <g>
                        <path class="st1" d="M421.9,58.8v13.5H435v10.1h-13.2v20.5c0,4.5,2.5,6.7,6.2,6.7c1.8,0,3.9-0.6,5.7-1.4l3.3,10
                        c-3.4,1.3-6.2,1.9-9.7,2c-10.3,0.4-17-5.5-17-17.3V82.4h-8.9V72.3h8.9V60.1L421.9,58.8z" />
                      </g>
                    </g>
                    <g>
                      <g>
                        <path class="st1" d="M490.9,95.9c0,13.7-9.3,24.7-24.7,24.7c-15.4,0-24.6-11.1-24.6-24.7c0-13.6,9.4-24.7,24.5-24.7
                        C481.1,71.2,490.9,82.4,490.9,95.9z M453.2,95.9c0,7.2,4.3,14,12.9,14c8.6,0,12.9-6.7,12.9-14c0-7.1-5-14-12.9-14
                        C457.7,81.9,453.2,88.8,453.2,95.9z" />
                      </g>
                    </g>
                    <path class="st0" d="M531.6,99.8h-19v19.8h-12.7V52.3c10.6,0,21.2-0.1,31.7-0.1C564.5,52.2,564.6,99.8,531.6,99.8z M512.5,88.1
                    h19c16.3,0,16.2-23.9,0-23.9h-19V88.1z" />
                    <path class="st0" d="M599.6,72.2h11.3v47.4h-11.1l-0.6-6.9c-2.7,5.6-10.1,8.3-15.4,8.4c-14,0.1-24.4-8.6-24.4-25.2
                    c0-16.4,10.9-24.9,24.7-24.8c6.3,0,12.4,3,15.1,7.7L599.6,72.2z M571.1,95.8c0,9,6.3,14.4,14,14.4c18.5,0,18.5-28.8,0-28.8
                    C577.4,81.5,571.1,86.8,571.1,95.8z" />
                    <path class="st0" d="M666.5,72.2l-29,67.3h-12.9l8.9-20.6l-19-46.7h13.7l7.2,20.5L640,106l4.9-13.1l8.7-20.8L666.5,72.2
                    L666.5,72.2z" />
                  </g>
                </g>
                <g>
                  <path class="st1" d="M18.3,161.5c-1.2,0-2.4-0.3-3.4-0.9c-2.1-1.2-3.4-3.5-3.4-6v-35.7c0-2.5,1.3-4.7,3.4-6l51.6-29.8L25.2,59.3
                  v30.2c0,3.8-3.1,6.9-6.9,6.9c-3.8,0-6.9-3.1-6.9-6.9V47.4c0-2.5,1.3-4.7,3.4-6c2.1-1.2,4.7-1.2,6.9,0l61.9,35.7
                  c2.1,1.2,3.4,3.5,3.4,6s-1.3,4.7-3.4,6l-58.4,33.7v19.8l88.2-50.9c3.1-1.8,5-5,5-8.6s-1.9-6.8-5-8.6L14.9,17.6
                  c-3.3-1.9-4.4-6.1-2.5-9.4c1.9-3.3,6.1-4.4,9.4-2.5l98.5,56.9c7.4,4.3,11.9,12,11.9,20.5s-4.4,16.3-11.9,20.5l-98.5,56.9
                  C20.7,161.2,19.5,161.5,18.3,161.5z" />
                </g>
              </g>
            </svg>
            <ul class="card-pay">
              <li><img src="<?php echo get_template_directory_uri();?>/assets/img/logo-american-express.png" alt="" data-toggle="tooltip" data-placement="top" title="AMERICAN EXPRESS"></li>

              <li><img src="<?php echo get_template_directory_uri();?>/assets/img/logo-de-pago-visa.png" alt="" data-toggle="tooltip" data-placement="top" title="VISA"></li>
              <li><img src="<?php echo get_template_directory_uri();?>/assets/img/logotipo-de-la-tarjeta-maestro.png" alt="" data-toggle="tooltip" data-placement="top"
                title="MAESTRO"></li>

                <li><img src="<?php echo get_template_directory_uri();?>/assets/img/logotipo-de-la-tarjeta-de-credito-diners-club.png" alt="" data-toggle="tooltip"
                  data-placement="top" title="DINERS CLUB"></li>

                </ul>
              </div>
            </div>
          </div>
          <!-- <a href="#top" id="back-top" class="bajar" style="position: fixed; bottom: 0; right: 0px"><i class="fa fa-angle-up fa-2x icono-home"></i></a> -->

        </footer>
        <!-- -----------------------footer responsive---------------------------------- -->
        <div id="accordion" class="d-block d-sm-none ">

          <div class="card">
            <div class="logo-footer logo2">
              <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo_anditrip.png" alt="" /></a>
            </div>
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                aria-controls="collapseOne">
                <?php echo _e('About Us','apk'); ?>

              </button>
            </h5>
          </div>

          <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">

              <p><?php echo _e(' Anditrip is a latinamerican travel agency with a professional experience in destinations such as Colombia, Perú, Ecuador, Panamá and Mexico..','apk'); ?>
              
            </p>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingTwo">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
            aria-controls="collapseTwo">
            <?php echo _e('The Most Wanted','apk'); ?> 

          </button>
        </h5>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
        <div class="card-body">
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
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></li>
            <?php endwhile;
            ?>
          </ul>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingThree">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
          aria-controls="collapseThree">
          <?php echo _e(' Payment Methods','apk'); ?> 
        </button>
      </h5> 
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">

        <img src="<?php echo get_template_directory_uri();?>/assets/img/place.svg" alt="">
        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        x="0px" y="0px" viewBox="0 0 675 169" style="enable-background:new 0 0 675 169;" xml:space="preserve"
        height="30px" wi>
        <style type="text/css">
        .st0 {
          fill: #FFFFFF;
        }

        .st1 {
          fill: #ffffff;
        }
      </style>
      <g>
        <g>
          <g>
            <path class="st0" d="M189.2,99.8h-19.1v19.8h-12.7V52.3c10.6,0,21.2-0.1,31.7-0.1C222.1,52.2,222.2,99.8,189.2,99.8z M170.2,88.1
            h19.1c16.3,0,16.2-23.9,0-23.9h-19.1V88.1z" />
            <path class="st0" d="M233.3,52.4v67.3h-11.6V52.4H233.3z" />
            <path class="st0" d="M281.2,72.2h11.3v47.4h-11.1l-0.6-6.9c-2.7,5.6-10.1,8.3-15.4,8.4c-14,0.1-24.4-8.6-24.4-25.2
            c0-16.4,10.9-24.9,24.7-24.8c6.4,0,12.4,3,15.1,7.7L281.2,72.2z M252.7,95.8c0,9,6.3,14.4,14,14.4c18.5,0,18.5-28.8,0-28.8
            C259,81.5,252.7,86.8,252.7,95.8z" />
            <path class="st0" d="M344.1,113.5c-5.5,5.4-11.3,7.5-18.3,7.5c-13.8,0-25.2-8.3-25.2-25.1s11.5-25.1,25.2-25.1
            c6.7,0,11.9,1.9,17.1,7l-7.4,7.8c-2.8-2.5-6.3-3.8-9.5-3.8c-7.9,0-13.7,5.8-13.7,14c0,9,6.2,13.9,13.5,13.9
            c3.8,0,7.5-1.1,10.4-3.9L344.1,113.5z" />
            <path class="st0" d="M361.3,100.1c0.8,5.9,5.9,10.1,14.1,10.1c4.3,0,10-1.6,12.7-4.4l7.5,7.4c-5,5.2-13.2,7.7-20.4,7.7
            c-16.4,0-26.1-10.1-26.1-25.3c0-14.4,9.8-24.8,25.2-24.8c15.9,0,25.8,9.8,24,29.3L361.3,100.1L361.3,100.1z M387,90.4
            c-0.8-6.2-5.6-9.2-12.3-9.2c-6.4,0-11.5,3.1-13.3,9.2H387z" />
            <g>
              <g>
                <path class="st1" d="M421.9,58.8v13.5H435v10.1h-13.2v20.5c0,4.5,2.5,6.7,6.2,6.7c1.8,0,3.9-0.6,5.7-1.4l3.3,10
                c-3.4,1.3-6.2,1.9-9.7,2c-10.3,0.4-17-5.5-17-17.3V82.4h-8.9V72.3h8.9V60.1L421.9,58.8z" />
              </g>
            </g>
            <g>
              <g>
                <path class="st1" d="M490.9,95.9c0,13.7-9.3,24.7-24.7,24.7c-15.4,0-24.6-11.1-24.6-24.7c0-13.6,9.4-24.7,24.5-24.7
                C481.1,71.2,490.9,82.4,490.9,95.9z M453.2,95.9c0,7.2,4.3,14,12.9,14c8.6,0,12.9-6.7,12.9-14c0-7.1-5-14-12.9-14
                C457.7,81.9,453.2,88.8,453.2,95.9z" />
              </g>
            </g>
            <path class="st0" d="M531.6,99.8h-19v19.8h-12.7V52.3c10.6,0,21.2-0.1,31.7-0.1C564.5,52.2,564.6,99.8,531.6,99.8z M512.5,88.1
            h19c16.3,0,16.2-23.9,0-23.9h-19V88.1z" />
            <path class="st0" d="M599.6,72.2h11.3v47.4h-11.1l-0.6-6.9c-2.7,5.6-10.1,8.3-15.4,8.4c-14,0.1-24.4-8.6-24.4-25.2
            c0-16.4,10.9-24.9,24.7-24.8c6.3,0,12.4,3,15.1,7.7L599.6,72.2z M571.1,95.8c0,9,6.3,14.4,14,14.4c18.5,0,18.5-28.8,0-28.8
            C577.4,81.5,571.1,86.8,571.1,95.8z" />
            <path class="st0" d="M666.5,72.2l-29,67.3h-12.9l8.9-20.6l-19-46.7h13.7l7.2,20.5L640,106l4.9-13.1l8.7-20.8L666.5,72.2
            L666.5,72.2z" />
          </g>
        </g>
        <g>
          <path class="st1" d="M18.3,161.5c-1.2,0-2.4-0.3-3.4-0.9c-2.1-1.2-3.4-3.5-3.4-6v-35.7c0-2.5,1.3-4.7,3.4-6l51.6-29.8L25.2,59.3
          v30.2c0,3.8-3.1,6.9-6.9,6.9c-3.8,0-6.9-3.1-6.9-6.9V47.4c0-2.5,1.3-4.7,3.4-6c2.1-1.2,4.7-1.2,6.9,0l61.9,35.7
          c2.1,1.2,3.4,3.5,3.4,6s-1.3,4.7-3.4,6l-58.4,33.7v19.8l88.2-50.9c3.1-1.8,5-5,5-8.6s-1.9-6.8-5-8.6L14.9,17.6
          c-3.3-1.9-4.4-6.1-2.5-9.4c1.9-3.3,6.1-4.4,9.4-2.5l98.5,56.9c7.4,4.3,11.9,12,11.9,20.5s-4.4,16.3-11.9,20.5l-98.5,56.9
          C20.7,161.2,19.5,161.5,18.3,161.5z" />
        </g>
      </g>
    </svg>
    <ul class="card-pay">
      <li><img src="<?php echo get_template_directory_uri();?>/assets/img/logo-american-express.png" alt=""></li>

      <li><img src="<?php echo get_template_directory_uri();?>/assets/img/logo-de-pago-visa.png" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri();?>/assets/img/logotipo-de-la-tarjeta-maestro.png" alt=""></li>

      <li><img src="<?php echo get_template_directory_uri();?>/assets/img/logotipo-de-la-tarjeta-de-credito-diners-club.png" alt=""></li>

    </ul>
  </div>
</div>
</div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/offcanvas.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.js"></script>
<!-- <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script> -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.mixitup.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/typed.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/wow.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>
  $('.post-module').hover(function () {
    $(this).find('.description').stop().animate({
      height: "toggle",
      opacity: "toggle"
    }, 300);
  });
</script>
<?php wp_footer(); ?>
</body>
</html>