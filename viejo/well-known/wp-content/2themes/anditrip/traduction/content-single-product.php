<?php 
  $currentlang = get_bloginfo('language');
  if($currentlang=="en-US"):
    
    //***********************************************woocommerce/content-single-product.php******************************************************
    //Modal
      //Botton Buy this plan
      $botton_buy = 'Buy This Plan';
      //Card con Plan
        //button See Cart
          $see_cart = 'See Cart';
        $card_lleno_descrip = 'You Already Have a Plan In The Cart';

    //Contenido
      //Section-include
        //include
          $include = 'Included';
        //Domestic flight tickets in economic class
          $domestic = 'Domestic flight tickets in economic class';
        //Accommodation
          $accommodation = 'Accommodation';
        //Food
          $food = 'Food';
        //Language
          $language = 'Language';
        //Tours
          $tours = 'Tours';
        //Medical assistance card
          $medical = 'Medical assistance card';

      //Section-Not-Include
        //no include
          $no_include = 'Not Included';

      //Section-Itinerary-Provided
        //Itinerary-Provided
          $itinerary_provided = 'Itinerary Provided';
          //Download
            $download = 'Download Itinerary';

      //Section-Important
        //Important
            $important = 'Important';

      //Section-Price
        //Price
            $price = 'Price';

else:
  //***********************************************woocommerce/content-single-product.php******************************************************
    //Modal
      //Botton Buy this plan
      $botton_buy = '在波';
      //Card con Plan
        //button See Cart
          $see_cart = '在波';
        $card_lleno_descrip = '在波。跟我們來。在波。跟我們來。';

    //Contenido
      //Section-include
        //include
          $include = '在波哥';
        //Domestic flight tickets in economic class
          $domestic = '在波哥大與蒙塞拉特市遊覽';
        //Accommodation
          $accommodation = '在波哥大與蒙塞拉特';
        //Food
          $food = '大廳大教堂';
        //Language
          $language = '大廳大教堂';
        //Tours
          $tours = '大廳大教堂';
        //Medical assistance card
          $medical = '在波哥大與蒙塞拉特市遊';

      //Section-Not-Include
        //no include
          $no_include = '特市';

      //Section-Itinerary-Provided
        //Itinerary-Provided
          $itinerary_provided = '大廳大教堂';
          //Download
            $download = '大廳大教堂';

      //Section-Important
        //Important
            $important = '大廳大教堂';

      //Section-Price
        //Price
            $price = '教教教';

 ?>
<?php endif; ?>