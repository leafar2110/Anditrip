<?php 
  $currentlang = get_bloginfo('language');
  if($currentlang=="en-US"):
    //***********************************************HOME******************************************************
      //Navbar1 
        //Title-search
          $title_search = 'Search';
        
        //Money
          if (false !== strpos($url_moneda,'?wmc-currency=USD')) {
              $selector_money = 'index.php/?wmc-currency=CNY';// moneda yuan
              $ico = 'fa fa-jpy';
              $money = 'Yuan';
          } else {
              $selector_money = 'index.php/?wmc-currency=USD'; //moneda dolar
              $ico = 'fa fa-usd';
              $money ='Dollar';
          }
          //Title-money
            $title_money = 'Money';
        //Languaje
          $name_language = 'Chinese';
          $selector_language = '?lang=zh';
          //Title-languaje
            $title_language ='Language';
        //Email
          $email = ' info@anditrip.com';
          //Title-Email
            $title_email = 'Email';
        //Phone
          $phone = '+86 1860 1668 338';
          //Title-Phone
            $title_phone = 'Phone';

      //Navbar2
        //Home
          $home = "Home";
        //Destinations-and-plans
          $destinations_and_plans = 'Destinations and plans';
        //Colombia
          $colombia = 'Colombia';
        //Reviews
          $reviews = 'Reviews'; //-->oculto
        //Blog
          $blog = 'Blog';
        //Contact
          $contact = 'Contact'; //-->oculto

      //Slider
        $view = 'See more'; 

      //Section-explore
        $description_explore = 'Explore Latinamerica with us, we show you the best highlights';

      //Section-destinations
        $destinations = 'Destinations';
        //description-destinations
          $descrip_destinations ='Explore and select to see our plans.';

      //section-plans
        $plans = 'Plans';
        //Explore-plans
          $explore_plans = 'Enjoy our plans in';
        //Todos-los-planes
          $all_available = "All available Plans";


      //Section-Colombia 
        //Why-Colombia
          $why = 'Why Colombia?';
        //description-Colombia
          $description_colombia = "There's a place where kindness, joy, diversity, flavor and music come together";

      //Section-Blog
        $read = 'Read More'; 

?>
  <?php else:
    //***********************************************HOME******************************************************
      //Navbar1 
        //Title-search
          $title_search = '和音';
        
        //Money
          if (false !== strpos($url_moneda,'?wmc-currency=USD')) {
              $selector_money = 'index.php/?wmc-currency=CNY';// moneda yuan
              $ico = 'fa fa-jpy';
              $money = '查';
          } else {
              $selector_money = 'index.php/?wmc-currency=USD'; //moneda dolar
              $ico = 'fa fa-usd';
              $money ='查查';
          }
                //Title-money
                  $title_money = '的地';
              //Languaje
                $name_language = '查多';
                $selector_language = '?lang=en';
                //Title-languaje
                  $title_language ='家家';
              //Email
                $email = 'i查看更多';
                //Title-Email
                  $title_email = '計劃';
              //Phone
                $phone = '查看更多查看更多';
                //Title-Phone
                  $title_phone = '和音';

            //Navbar2
              //Home
                $home = "家";
              //Destinations-and-plans
                $destinations_and_plans = '目的地和計劃';
              //Colombia
                $colombia = '哥倫比亞';
              //Reviews
                $reviews = '評測'; //-->oculto
              //Blog
                $blog = '博客';
              //Contact
                $contact = '聯繫'; //-->oculto

            //Slider
              $view = '查看更多'; 

            //Section-explore
              $description_explore = '快來和我們一起探索拉丁美洲，享受你生命中最美好的旅程。我們為哥倫比亞的每一端提供旅行';

            //Section-destinations
              $destinations = '目的地';
              //description-destinations
                $descrip_destinations ='味道和音在';

            //section-plans
              $plans = '計劃';
              //Explore-plas
                $explore_plans = '味道和音樂匯聚在'; //cambiar el nomvre de la variable
              //Todos-los-planes
                $all_available = "音樂匯";


            //Section-Colombia 
              //Why-Colombia
                $why = '為何選擇哥倫比亞';
              //description-Colombia
                $description_colombia = "有一個地方，善良，喜悅，多樣性，味道和音樂匯聚在一起";

            //Section-Blog
              $read = '目的地'; 
 ?>
<?php endif; ?>
<!--end traduction-->