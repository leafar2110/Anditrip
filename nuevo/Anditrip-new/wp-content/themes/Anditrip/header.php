<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">

<head>

	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title><?php bloginfo('name'); ?></title>
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory')?>/assets/img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php bloginfo('stylesheet_directory')?>/assets/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/navbar.css" />
	<!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.min.css" /> -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/ionicons.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/hover-min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/blog.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/plan.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/product.css"><!-- conflicto entre las clases  --->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/category.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/login.css">
	

	<link rel="stylesheet" href="assets/css/flag-icon.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
	crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300i,400,700,800" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">
	<?php wp_head(); ?>
</head>
<body>
	<?php $current_file = basename($_SERVER['PHP_SELF']).'/blog';?> <!-- esto es para saber si estoy en el home o no-->
	<!-- ----------------------------------navbar--------------------------- -->

<!-- <?php  get_template_part('partials/loader'); ?>  --> 
	<header>
		<nav class="navbar navbar-expand-md fixed-top navbar-dark ">
			<div class="container">
				<a class="navbar-brand" href="<?php echo bloginfo('url');?>"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo_anditrip.png" alt="anditrip" data-toggle="tooltip"
					data-placement="top" title="anditrip" /></a>
					<button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="navbar-collapse offcanvas-collapse nav justify-content-end
					" id="navbarsExampleDefault">
					<ul class="navbar-nav ">
						<li class="nav-item active" data-toggle="tooltip" data-placement="top" title="Search">
							<form class="form-inline my-2 my-lg-0">
								<div class="search">
									<svg x="0px" y="0px" viewBox="0 0 24 24" width="20px" height="20px">
										<g stroke-linecap="square" stroke-linejoin="miter" stroke="currentColor">
											<line fill="none" stroke-miterlimit="10" x1="22" y1="22" x2="16.4" y2="16.4" />
											<circle fill="none" stroke="currentColor" stroke-miterlimit="10" cx="10" cy="10" r="9" />
										</g>
									</svg>
									<div class="placeholder">
										<input type="text" placeholder="Search for something..." />
									</div>
								</div>
							</form>
						</li>
						<?php if ($current_file == 'index.php'): ?>
						<a href="index.php/?wmc-currency=USD" title="Money"><i class="fa fa-jpy"></i>Yuan<b class=""></b></a>
							<li>
								<a class="nav-link active nav-responsive" href="index.html"><?php echo _e('Home', 'apk'); ?></a>
							</li>
							<li><a class="nav-link  bajar nav-responsive" href="page-product.html"><?php echo _e('Destinations and plans', 'apk'); ?></a></li>
							<li><a class="nav-link  bajar nav-responsive" href="product-category.html"><?php echo _e('Colombia', 'apk'); ?></a></li>
							<li>
								<a class="nav-link  bajar nav-responsive" href="<?php bloginfo('url') ?>/index.php/blog.html"><?php echo _e('Blog', 'apk'); ?></a>
							</li>

							<?php else: ?>
								<li>
									<a class="nav-link active nav-responsive" href="<?php echo bloginfo('url').'/#top';?>"><?php echo _e('home', 'apk'); ?></a>
								</li>
								<li><a class="nav-link  bajar nav-responsive" href="<?php echo bloginfo('url').'/#top';?>"><?php echo _e('Destinations and plans', 'apk'); ?></a></li>
								<li><a class="nav-link  bajar nav-responsive" href="<?php echo bloginfo('url').'/#top';?>"><?php echo _e('Colombia', 'apk'); ?></a></li>
								<li>
									<a class="nav-link  bajar nav-responsive" href="<?php echo bloginfo('url').'/#top';?>"><?php echo _e('Blog', 'apk'); ?></a>
								</li>
							<?php endif; ?>

<?php $url_moneda = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];?>


<?php  
if (false !== strpos($url_moneda,'?wmc-currency=USD')): 
	$selector_money = '/?wmc-currency=CNY';// moneda yua ?>
	<li><a href="<?php echo $selector_money; ?>" title="Money"><i class="fab fa-jpy"></i>Yuan<b class=""></b></a></li>

	<?php  
else:
	$selector_money = 'index.php/?wmc-currency=USD'; //moneda dola            ?>
	<li><a style="color:#fff!important" href="<?php echo $selector_money; ?>" title="Money"><i class="fab fa-usd" style="color:#fff!important"></i>Dollar<b class=""></b></a></li>
<?php  endif;?>


							<li class="nav-item">
								<a class="nav-link" href="mailto: info@anditrip.com">info@anditrip.com</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link" href="tel:+86 1860 1668 338">+86 1860 1668 338</a>
							</li>
							<li class="nav-item  icon-nav ">

								<i class="fab fa-weixin qrnav" data-toggle="tooltip" data-placement="top" title="wechat">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/qr_anditrip.svg" alt="qr" data-toggle="tooltip"
									data-placement="top" title="wechatQR" /></i>
								</li>
								<li class="nav-item icon-nav">
									<i class="fas fa-user-circle phoen-login-signup-popup-open"  data-placement="top" title="Login" > </i>

								</li>

								<li>
									
									<?php if(is_active_sidebar('main_sidebar')){
										dynamic_sidebar('main_sidebar');
									}?>



								</li>
								<li><span class="flag-icon flag-icon-gr flag-icon-squared"></span></li>
							</ul>

						</div>
					</nav>
				</div>

				<div class="nav-scroller bg-white box-shadow  nav justify-content-center fixed-top d-none d-sm-block" style="top: 55px;">
					<nav class="nav nav-underline justify-content-center">

						<?php if ($current_file == 'index.php'): ?>
				
							<a class="nav-link bajar" href="<?php echo bloginfo('url');?>"><?php echo _e('Home', 'apk'); ?></a>
							<a class="nav-link  bajar" href="#destinations-plans"><?php echo _e('Destinations and plans', 'apk'); ?> </a>
							<a class="nav-link  bajar" href="#colombia"><?php echo _e('Colombia', 'apk'); ?></a>
							<a class="nav-link  bajar" href="<?php bloginfo('url') ?>/index.php/blog"><?php echo _e('Blog', 'apk'); ?></a>

							<?php else: ?>
						
								<a class="nav-link bajar" href="<?php bloginfo('url') ?>/#index"><?php echo _e('Home', 'apk'); ?></a>
								<a class="nav-link  bajar" href="<?php echo bloginfo('url').'/#destinations-plans';?>"><?php echo _e('Destinations and plans', 'apk'); ?> </a>
								<a class="nav-link  bajar" href="<?php echo bloginfo('url').'/#colombia';?>"><?php echo _e('Colombia', 'apk'); ?></a>
								<a class="nav-link  bajar" href="<?php bloginfo('url') ?>/index.php/blog"><?php echo _e('Blog', 'apk'); ?></a>

							<?php endif; ?>
						</nav>
					</div>
				</header>

				<!-- modal -->

				<style>
				.navbar-dark .navbar-toggler-icon {
					background-image: url("<?php echo get_template_directory_uri(); ?>/assets/img/menu.svg");
					width: 30px;
				}

			</style>

			