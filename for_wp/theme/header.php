<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mega
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="https://gmpg.org/xfn/11">
  <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
 
 
	<?php wp_head(); ?>
</head>
	  <?php  // $tel = get_field('телефон', 'option');
					// 	$tel_str = str_replace(" ","", $tel);  
    ?>  
<!-- <body  > -->
<body class="bg-black">
<!--[if lt IE 11]><p   class="browsehappy container">К сожалению, вы используете устаревший браузер. Пожалуйста, <a href="http://browsehappy.com/" target="_blank">обновите ваш браузер</a>, чтобы улучшить производительность, качество отображаемого материала и повысить безопасность.</p><![endif]-->
	 <div class="main-wrapper">
		<!-- start header-->
			<header class="header" id="header">
				<!-- start top-nav-->
				<div class="top-nav block-with-lazy">
					<div class="top-nav__container container">
						<div class="row">
							<div class="col-lg-auto col">
								<div class="top-nav__logo"><a href="/"><img src="<?php echo the_field('логотип'); ?>" alt=""/></a>
								</div>
							</div>
							<div class="col d-none d-lg-block">
								<div class="top-nav__desctop-mnu">
									<ul class="menu" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
										<li class="menu-item" itemprop="item"><a href="#sTopCards" itemprop="url">Услуги</a></li>
										<li class="menu-item" itemprop="item"><a href="#sAbout" itemprop="url">О компании</a></li>
										<li class="menu-item" itemprop="item"><a href="#sCases" itemprop="url">Кейсы</a></li>
										<li class="menu-item" itemprop="item"><a href="#sFormAlt" itemprop="url">Контакты</a></li>
									</ul>
								</div>
							</div>
							<div class="top-nav__contacts-col col-sm-auto text-sm-right order-sm-0 order-last">
							<?php 	$tel = get_field('телефон_в_шапке');
											 $tel_str = str_replace(" ","", $tel);   
									  
									?>
								<a  class="top-nav__link top-nav__link--tel" href="tel:<?php echo $tel_str;  ?>"><?php echo	$tel;  ?></a>
								<br/>
								<a class="top-nav__link top-nav__link--mail" href="mailto:<?php echo the_field('email'); ?>"><?php echo the_field('email'); ?></a>
							</div>
							<div class="top-nav__mob-mnu-col col-auto d-block d-lg-none">
								<div class="toggle-menu-mobile toggle-menu-mobile--js d-lg-none"><span></span>
								</div>
								<div class="menu-mobile menu-mobile--js d-lg-none">
									<div class="toggle-menu-mobile toggle-menu-mobile--js"><span></span>
									</div>
									<div class="menu-mobile__inner">
										<div class="menu-mobile__logo"><a href="/"><img src="<?php echo the_field('логотип'); ?>" alt=""/></a>
										</div>
										<ul class="menu" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
											<li class="menu-item" itemprop="item"><a href="#sTopCards" itemprop="url">Услуги</a></li>
											<li class="menu-item" itemprop="item"><a href="#sAbout" itemprop="url">О компании</a></li>
											<li class="menu-item" itemprop="item"><a href="#sCases" itemprop="url">Кейсы</a></li>
											<li class="menu-item" itemprop="item"><a href="#sFormAlt" itemprop="url">Контакты</a></li>
										</ul>
										<div class="text-right"></div>
									</div>
								</div>
								<!--  мобильное меню-->
							</div>
						</div>
					</div>
				</div>
				<!-- end top-nav-->
			</header>
			<!-- end header-->