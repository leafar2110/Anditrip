<?php 
  $currentlang = get_bloginfo('language');
  if($currentlang=="en-US"):
    
    //***********************************************FOOTER******************************************************
      //Section-About
        //About-us
          $about = 'About Us';
        //description-About
          $description_about = 'Anditrip is a latinamerican travel agency with a professional experience in destinations such as Colombia, Perú, Ecuador, Panamá and Mexico.';
        //quick-contact
          $quick_contact = 'Quick Contact';
          //Email
            $email = 'info@anditrip.com';
            //Title-Email
              $title_email = 'Email';
          //Phone
            $phone = '+86 1860 1668 338';
            //Title-Phone
              $title_phone = 'Phone';
        //Productos mas vendidos
          $wantend = 'The Most Wanted';
        //Payment
          $payment = 'Payment Methods';
        //faqs
          $faqs = 'FAQS';

        //Privacy
          $privacy = 'Privacy Policy';
        //Booking
          $booking = 'Booking Terms';
          
       

    //page -> oferta
      //description
        $description_offers = 'Description';
?>
  <?php else:
      
    //***********************************************FOOTER******************************************************
      //Section-About
        //About-us
          $about = '關於我們';
        //description-About
          $description_about = '我們是Anditrip，您的旅行社，我們想與您分享拉丁美洲提供的驚人文化和體驗。跟我們來';
        //quick-contact
          $quick_contact = '快速聯繫';
          //Email
            $email = ' info@anditrip.com';
            //Title-Email
              $title_email = 'Email';
          //Phone
            $phone = '+86 1860 1668 338';
            //Title-Phone
              $title_phone = 'Phone';
        //Productos mas vendidos
          $wantend = '哥倫比亞';
        //Payment
          $payment = '生命中最美好';
        //Reserve
         //faqs
          $faqs = '中最美';
          $reserve =' © 我們想與您分享拉丁美洲提供的驚人文化和體驗';
        //Privacy
          $privacy = '享拉丁美洲';
        //Booking
          $booking = '享拉丁美洲';


 ?>
<?php endif; ?>
<!--end traduction-->