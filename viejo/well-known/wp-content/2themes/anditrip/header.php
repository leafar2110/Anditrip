<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory')?>/assets/img/favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?php bloginfo('stylesheet_directory')?>/assets/img/favicon.ico" type="image/x-icon">
  <title><?php wp_title('|', true, 'right');?><?php bloginfo('name');?></title>
  <?php wp_head(); ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php $current_file = basename($_SERVER['PHP_SELF']);?> <!-- esto es para saber si estoy en el home o no-->
<header>
  <?php
$url_moneda = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];//determina cual es la moneda que tiene la pag
  include('traduction/home-header.php');
   ?>
<?php $index = get_permalink(); ?>
  <nav id="top" class="navbar navbar-default header_top">
    <div class="container">
      <div class="navbar-header">
         <?php if ($current_file == 'index.php'): ?>
              <a href="#top" class="nav-brand">
            <?php else: ?>
              <a href="<?php echo bloginfo('url').'/#top';?>" class="nav-brand">
        <?php endif; ?>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_blanco_anditrip.svg" width="140px">
        </a>
      </div>
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <div class="buscador">
              <form class="form-buscador" action="index.html" method="post">
                <input id="express-form-typeahead" type="search" name="" value="" placeholder="Search...">
              </form>
              <a id="active-search" title="<?php echo $title_search; ?>" for="#express-form-typeahead" class="fa fa-search"></a>
            </div>
          </li>
          <li class="dropdown currency"><a href="<?php echo $selector_money?>" title="<?php echo $title_money; ?>"><i class="<?php echo $ico?>"></i><?php echo $money; ?><b class=""></b></a>
          </li>
          <li class="dropdown language"><a href="<?php echo $selector_language; ?>" title="<?php echo $title_language; ?>"><?php echo $name_language; ?><b></b></a>
          </li>
          <li class="visible-lg visible-md"><a href="mailto:joe@example.com?subject=feedback" title="<?php echo $title_email; ?>"><?php echo $email; ?></a></li>
          <li class="visible-lg visible-md"><a href="#" title="<?php echo $title_phone; ?>"><i class="fa fa-phone"></i><?php echo $phone; ?></a></li>
          <li><a href="#"><i class="fa fa-wechat fa-2x"></i></a></li>
         <li><a href="#" class="phoen-login-signup-popup-open" ><i class="fa fa-user-circle fa-2x"></i></a></li>
        </ul>
      </div>
    </div>
  </nav>
   <nav class="navbar navbar-default navbar-principal nav-second sub-menu hidden-xs">
    <div class="container">
      <div class="">
        <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-center">
           <?php if ($current_file == 'index.php'): ?>
              <li><a href="#top" class="bajar"><?php echo $home;?></a></li>
              <li><a href="#destinations-plans" class="bajar"><?php echo $destinations_and_plans;?></a></li>
              <li><a href="#colombia" class="bajar"><?php echo $colombia;?></a></li>
              <li><a href="#blog" class="bajar"><?php echo $blog;?></a></li>

            <?php else: ?>
              <li><a href="<?php echo bloginfo('url').'/#top';?>"><?php echo $home;?></a></li>
              <li><a href="<?php echo bloginfo('url').'/#destinations-plans';?>"><?php echo $destinations_and_plans; ?></a></li>
              <!--<li><a href="<?php echo bloginfo('url').'/#reviews';?>"><?php echo $reviews;?></a></li>-->
              <li><a href="<?php echo bloginfo('url').'/#colombia';?>"><?php echo $colombia;?></a></li>
              <li><a href="<?php echo bloginfo('url').'/#blog';?>"><?php echo $blog;?></a></li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <div class="visible-xs" id="main">
  <div class="button-burger" id="burguer">
    <div class="hamburger hamburger--squeeze" id="squeeze">
      <div class="hamburger-box">
        <div class="hamburger-inner"></div>
      </div>
    </div>
  </div>
  <nav class="menu" id="menu">
   <div class="frame-menu">
    <ul class="nav navbar-nav navbar-right">
      <li>
        <div class="buscador">
          <form class="form-buscador" action="index.html" method="post">
            <input id="express-form-typeahead" type="search" name="" value="" placeholder="Search...">
          </form>
          <a id="active-search" title="<?php echo $title_search; ?>" for="#express-form-typeahead" class="fa fa-search"></a>
        </div>
      </li>
      <li class="dropdown currency"><a href="<?php echo $selector_money?>" title="<?php echo $title_money; ?>"><i class="<?php echo $ico?>"></i><?php echo $money; ?><b class=""></b></a>
      </li>
      <li class="dropdown language"><a href="<?php echo $selector_language; ?>" title="<?php echo $title_language; ?>"><?php echo $name_language; ?><b></b></a>
          </li>
          <?php if ($current_file == 'index.php'): ?>
            <li><a href="#top" class="bajar"><?php echo $home;?></a></li>
            <li><a href="#destinations-plans" class="bajar"><?php echo $destinations_and_plans;?></a></li>
            <li><a href="#reviews" class="bajar"><?php echo $reviews;?></a></li>
            <li><a href="#colombia" class="bajar"><?php echo $colombia;?></a></li>
            <li><a href="#blog" class="bajar"><?php echo $blog;?></a></li>
          <?php else: ?>
            <li><a href="<?php echo bloginfo('url').'/#top';?>"><?php echo $home;?></a></li>
            <li><a href="<?php echo bloginfo('url').'/#destinations-plans';?>"><?php echo $destinations_and_plans; ?></a></li>
            <li><a href="<?php echo bloginfo('url').'/#colombia';?>"><?php echo $colombia;?></a></li>
            <li><a href="<?php echo bloginfo('url').'/#blog';?>"><?php echo $blog;?></a></li>
          <?php endif; ?>
        </ul>
      </ul>
    </div>
  </nav>
</div>
</header>
<section class="content">
<div class="test">
   <style>
  #box-main{
    height: 100%;
    width: 100%;
    margin: 0;
    padding: 0;
    background-color: blue;
    z-index: 1;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .line{
   height: 1px;
   background: white;
   width: 100%;
   position: absoluted;
   display: inline-block;
 }
 .box-menu{
  width: 30px;
  height: 25px;
  position: relative;
  display: flex;
  justify-content: space-between;
  flex-direction: column;
  padding: 5px;
}
.button-burger{
 color: #000;
 position: fixed;
 top: 0px;
 right: 20px;
 font-size: 20px;
 cursor: pointer;
 z-index: 3;
 z-index: 1111!important;
}
.menu{
  background:rgba(255, 255, 255, 0.95);
  position: fixed;
  top: 0;
  right: -100%;
  bottom: 0;
  display: flex;
  align-items: center;
  width: 100%;
  height: 100%;
  transition: .7s;
  padding: 20px;
  z-index: 111;
}

.menu ul {
 padding: 0;
 flex: 1;
}
.frame-menu{
  width: 100%;
  height: 100%;
}
.menu.active{
  right: 0;
}
.menu li {
  display: block;
  margin: 0;
  padding: 8px 0;
  text-align: center;
}
.menu li > a {
 color: transparent;
 color: #c31f24;
 font-size: 30px;
 font-weight: bold;
}
 .hamburger {
  padding: 15px 15px;
  display: inline-block;
  cursor: pointer;
  transition-property: opacity, filter;
  transition-duration: 0.15s;
  transition-timing-function: linear;
  font: inherit;
  color: inherit;
  text-transform: none;
  background-color: transparent;
  border: 0;
  margin: 0;
  overflow: visible;
}
.hamburger-box {
  width: 30px;
  height: 25px;
  display: inline-block;
  position: relative; }

  .hamburger-inner {
    display: block;
    top: 50%;
    margin-top: -2px; }
    .hamburger-inner, .hamburger-inner::before, .hamburger-inner::after {
      width: 100%;
      height: 1px;
      background-color: rgb(232, 232, 232);
      border-radius: 4px;
      position: absolute;
      transition-property: transform;
      transition-duration: 0.15s;
      transition-timing-function: ease; }
      .hamburger-inner::before, .hamburger-inner::after {
        content: "";
        display: block; }
        .hamburger-inner::before {
          top: -10px; }
          .hamburger-inner::after {
            bottom: -10px; }

.hamburger--squeeze .hamburger-inner {
  transition-duration: 0.075s;
  transition-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19); }
  .hamburger--squeeze .hamburger-inner::before {
    transition: top 0.075s 0.12s ease, opacity 0.075s ease; }
    .hamburger--squeeze .hamburger-inner::after {
      transition: bottom 0.075s 0.12s ease, transform 0.075s cubic-bezier(0.55, 0.055, 0.675, 0.19); }

      .hamburger--squeeze.is-active .hamburger-inner {
        transform: rotate(45deg);
        transition-delay: 0.12s;
        transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1); }
        .hamburger--squeeze.is-active .hamburger-inner::before {
          top: 0;
          opacity: 0;
          transition: top 0.075s ease, opacity 0.075s 0.12s ease; }
          .hamburger--squeeze.is-active .hamburger-inner::after {
            bottom: 0;
            transform: rotate(-90deg);
            transition: bottom 0.075s ease, transform 0.075s 0.12s cubic-bezier(0.215, 0.61, 0.355, 1); }
          </style>