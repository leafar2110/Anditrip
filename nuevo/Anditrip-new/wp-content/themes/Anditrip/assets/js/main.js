  $(document).ready(function () {



    $(".filter-btn").click(function () {
     setTimeout(function () {
      $("#permalink-plan").addClass("d-visible");
    }, 500);

   });



    $('.tab-cat').find('.effect').on('click', function() {
      $(".effect").removeClass("active");
      $(this).addClass("active");
      var $name_plan=($(this).find('h2 span').text());
      console.log($name_plan);
      var $permalink_plan = ($(this).find('#url-plan').text());
      $('#title-plan').text($name_plan);
      $("#permalink-plan").attr("href", $permalink_plan);
      $("#img-cate").addClass('desplan-active')

    });


  });






  $(document).ready(function () {

    $('.search').each(function () {
      var self = $(this);
      var div = self.children('div');
      var placeholder = div.children('input').attr('placeholder');
      var placeholderArr = placeholder.split(/ +/);
      if (placeholderArr.length) {
        var spans = $('<div />');
        $.each(placeholderArr, function (index, value) {
          spans.append($('<span />').html(value + '&nbsp;'));
        });
        div.append(spans);
      }
      self.click(function () {
        self.addClass('open');
        setTimeout(function () {
          self.find('input').focus();
        }, 750);
      });
      $(document).click(function (e) {
        if (!$(e.target).is(self) && !jQuery.contains(self[0], e.target)) {
          self.removeClass('open');
        }
      });

        // hover language
        $('.language-dropdown').hover(
          function () {
            $(this).addClass('open');
          },
          function () {
            $(this).removeClass('open');
          }
          );
      });
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })



    // ------------------------------------------//
    $("#mix-wrapper").mixItUp({
      load: {
        sort: "order:asc"
      },
      animation: {
        duration: 700
      },
      selectors: {
        target: ".mix-target",
        filter: ".filter-btn",
        sort: ".sort-btn"
      },
      callbacks: {
        onMixEnd: function (state) {
          console.log(state);
        }
      }
    });



    // --------------------------------------------------//
    new WOW().init();

    // $(document).ready(function () {
      $(".lang-flag").click(function () {
        $(".language-dropdown").toggleClass("open");
      });
      $("ul.lang-list li").click(function () {
        $("ul.lang-list li").removeClass("selected");
        $(this).addClass("selected");
        if ($(this).hasClass('lang-en')) {
          $(".language-dropdown").find(".lang-flag").addClass("lang-en").removeClass("lang-es").removeClass(
            "lang-pt");
          $("#lang_selected").html("<p>CH</p>")
        } else if ($(this).hasClass('lang-pt')) {
          $(".language-dropdown").find(".lang-flag").addClass("lang-pt").removeClass("lang-es").removeClass(
            "lang-en");
          $("#lang_selected").html("<p>PT</p>")
        } else {
          $(".language-dropdown").find(".lang-flag").addClass("lang-es").removeClass("lang-en").removeClass(
            "lang-pt");
          $("#lang_selected").html("<p>ES</p>")
        }
        $(".language-dropdown").removeClass("open");
      });
    // })



    // -----------------------------------_
    // Typing Animation (Typed.js)
   // var typed = new Typed('#typed', {
    //  strings: ['Knout the millennial hitsory of latin america', 'Let the beach take away your problems'],
    //  typeSpeed: 80,
     // backSpeed: 80,
    //  fadeOut: true,
    //  loop: true
  //  });


    // scroll
    $(".bajar").click(function (event) {
      if (this.hash !== "") {
        event.preventDefault();
        var hash = this.hash;
        $('html, body').animate({
          scrollTop: $(hash).offset().top - 0
        }, 1200, function () {
          window.location.hash = hash
        })
      }
    })

    //asdfghjk
    $('.dropdown').hover(function () {
      $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(500);
    }, function () {
      $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(500);
    });

  });

  $(document).ready(function(){

  // Lift card and show stats on Mouseover
  $('.product-card').hover(function(){
    $(this).addClass('animate');
    $('div.carouselNext, div.carouselPrev').addClass('visible');      
  }, function(){
    $(this).removeClass('animate');     
    $('div.carouselNext, div.carouselPrev').removeClass('visible');
  }); 
  
  // Flip card to the back side
  $('#view_details').click(function(){    
    $('div.carouselNext, div.carouselPrev').removeClass('visible');
    $('.product-card').addClass('flip-10');
    setTimeout(function(){
      $('.product-card').removeClass('flip-10').addClass('flip90').find('div.shadow').show().fadeTo( 80 , 1, function(){
        $('#product-front, #product-front div.shadow').hide();      
      });
    }, 50);
    
    setTimeout(function(){
      $('.product-card').removeClass('flip90').addClass('flip190');
      $('#product-back').show().find('div.shadow').show().fadeTo( 90 , 0);
      setTimeout(function(){        
        $('.product-card').removeClass('flip190').addClass('flip180').find('div.shadow').hide();            
        setTimeout(function(){
          $('.product-card').css('transition', '100ms ease-out');     
          $('#cx, #cy').addClass('s1');
          setTimeout(function(){$('#cx, #cy').addClass('s2');}, 100);
          setTimeout(function(){$('#cx, #cy').addClass('s3');}, 200);       
          $('div.carouselNext, div.carouselPrev').addClass('visible');        
        }, 100);
      }, 100);      
    }, 150);      
  });     
  
  // Flip card back to the front side
  $('#flip-back').click(function(){   

    $('.product-card').removeClass('flip180').addClass('flip190');
    setTimeout(function(){
      $('.product-card').removeClass('flip190').addClass('flip90');
      
      $('#product-back div.shadow').css('opacity', 0).fadeTo( 100 , 1, function(){
        $('#product-back, #product-back div.shadow').hide();
        $('#product-front, #product-front div.shadow').show();
      });
    }, 50);
    
    setTimeout(function(){
      $('.product-card').removeClass('flip90').addClass('flip-10');
      $('#product-front div.shadow').show().fadeTo( 100 , 0);
      setTimeout(function(){            
        $('#product-front div.shadow').hide();
        $('.product-card').removeClass('flip-10').css('transition', '100ms ease-out');    
        $('#cx, #cy').removeClass('s1 s2 s3');      
      }, 100);      
    }, 150);      
    
  }); 

  
  /* ----  Image Gallery Carousel   ---- */
  
  var carousel = $('#carousel ul');
  var carouselSlideWidth = 335;
  var carouselWidth = 0;  
  var isAnimating = false;
  
  // building the width of the casousel
  $('#carousel li').each(function(){
    carouselWidth += carouselSlideWidth;
  });
  $(carousel).css('width', carouselWidth);
  


});

















$(document).ready(function() {
  
  var $wrapper = $('.tab-wrapper'),
      $allTabs = $wrapper.find('.tab-content > div'),
      $tabMenu = $wrapper.find('.tab-menu li'),
      $line = $('<div class="line"></div>').appendTo($tabMenu);
  
  $allTabs.not(':first-of-type').hide();  
 $tabMenu.filter(':first-of-type').find(':first')
  
  $tabMenu.each(function(i) {
    $(this).attr('data-tab', 'tab'+i);
  });
  
  $allTabs.each(function(i) {
    $(this).attr('data-tab', 'tab'+i);
  });
  
  $tabMenu.on('click', function() {
    
    var dataTab = $(this).data('tab'),
        $getWrapper = $(this).closest($wrapper);
    
    $getWrapper.find($tabMenu).removeClass('active');
    $(this).addClass('active');
    
    $getWrapper.find('.line').width(0);
    $(this).find($line).animate({'width':'100%'}, 'fast');
    $getWrapper.find($allTabs).hide();
    $getWrapper.find($allTabs).filter('[data-tab='+dataTab+']').show();
  });

});//end ready











