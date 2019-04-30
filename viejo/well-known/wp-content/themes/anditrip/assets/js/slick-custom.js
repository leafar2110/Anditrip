$(document).ready(function () {
$('#carrusel').slick({
slidesToShow: 1,
arrows: false,
dots: true,
autoplay: true,
fade: true,
autoplaySpeed: 4000,
speed: 1800,
});
$('#widget').slick({
slidesToShow: 1,
arrows: true,
autoplay: true,
fade: true,
autoplaySpeed: 2000,
speed: 1800,
});
//cuando se cargue el dom
	$('.btn-modal').css('display','inline-block');
	$('.btn-modal-phone').css('display','inline-block');
	$('#contenedor-category').css('margin-top','50px');

 //cuando sea estatico
 	// $var = $('.woocommerce-variation-description p').text();
 	// $('.quantity-plan').val($var);
 //estatico
 //button-comprs
 $('.btn-modal').on('click',function(){
 	$var = $('.woocommerce-variation-description p').text();
 	$('.quantity-plan').val($var);
 })

 //cuando sea change
  	$('.formulario-modal').on('change', '#pa_rom-slug', function() {
   	var $variable = $('.woocommerce-variation-description p').text();
   	$('.quantity-plan').val($variable);

  //end change
 });
  	 $('#travelers-total').find('input').attr('required','true');
 });