$(document).ready(function(){if($(window).width()>767)
{$('.rejilla6').slick({arrows:!0,autoplay:!1,infinite:!1,dots:!1,vertical:!0,verticalSwiping:!0,slidesPerRow:2,rows:2,prevArrow:$('.arrow-top'),nextArrow:$('.arrow-bottom'),speed:1500,})}else{$('.rejilla6').slick({arrows:!0,autoplay:!1,infinite:!1,dots:!1,vertical:!0,verticalSwiping:!0,slidesPerRow:1,rows:2,prevArrow:$('.arrow-top'),nextArrow:$('.arrow-bottom'),speed:1500,})}
$('.rejilla6').find('.effect').on('click',function(){$("#permalink-plan").removeClass("boton-visible");$(".effect").removeClass("active");$(this).addClass("active");var $name_plan=($(this).find('h2 span').text());var $permalink_plan=($(this).find('#url-plan').text());$('#title-plan').text($name_plan);$("#permalink-plan").attr("href",$permalink_plan);console.log($permalink_plan);$("#permalink-plan").addClass('boton-visible')});$(".bajar").click(function(event){if(this.hash!==""){event.preventDefault();var hash=this.hash;$('html, body').animate({scrollTop:$(hash).offset().top-0},1200,function(){window.location.hash=hash})}})});$(document).scroll(function(){var scroll=$(document).scrollTop();if(scroll){$(' .button-burger').fadeIn();$(' .button-burger').css({'width':' 100%','height':'43px','right':'-36rem','background':'#0000005c','border-radiius':'7px','position':'fixed'});$('.hamburger').css({'top':' -7','padding':'11px 15px',})}else{$('.button-burger').fadeIn();$('.button-burger').css({'display':'inline-block','background':'#ca151c',})}})
var $burguer=document.getElementById('burguer');var $menu=document.getElementById('menu');var $squeeze=document.getElementById('squeeze');function toggleMenu(){$menu.classList.toggle('active');$squeeze.classList.toggle('is-active')};$burguer.addEventListener('click',toggleMenu)