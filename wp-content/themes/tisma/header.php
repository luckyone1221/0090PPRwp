<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tisma
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <title>title</title>
  <meta name="description" content="о чем страница">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,  shrink-to-fit=no">
  <link type="image/ico" href="img/favicon.ico" rel="shortcut icon">
  <meta name="format-detection" content="telephone=no">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
  $get_template_directory_uri=get_template_directory_uri();

  $mail = get_field('имейл00', 'option');
  $mail_href = 'mailto:'.get_field('имейл00', 'option');

  $tel = get_field('телефон00', 'option');
  $tel_href = "tel:+".str_replace('/[^0-9]/', "", $tel);
  $tel_wa_href = "https://wa.me/".str_replace('/[^0-9]/', "", $tel);

  $menu_args = array(
    'menu' => 'main_menu',
    'theme_location' => '',
    'container_class' => 'swiper menu-slide-js',
    'menu_class' => 'swiper-wrapper',
    'add_li_class'  => 'swiper-slide',
    'depth'	=> 1,
    'fallback_cb' => false
  );
?>
<div class="main-wrapper">
  <!--  мобильное меню-->
  <!-- start header-->
  <header class="header header--js" id="header">
    <!-- start top-nav-->
    <div class="top-nav block-with-lazy">
      <div class="container-lg">
        <div class="top-nav__row row align-items-center flex-nowrap">
          <div class="col-auto">
            <a class="top-nav__logo" href="/">
              <img loading="lazy" src="<?php echo get_field('лого_картинка', 'option');?>" alt=""/>
              <span>
                <?php echo get_field('лого_текст', 'option');?>
              </span>
            </a>
          </div>
          <div class="col-auto align-self-start">
            <div class="top-nav__since-row row">
              <div class="col-auto">
                <div class="top-nav__flag">
                  <?php echo get_field('оценка_флаг0', 'option'); ?>
                </div>
              </div>
              <div class="col">
                <div class="top-nav__stars">
                  <?php for ($i = 1; $i <= get_field('сложность0', 'option'); $i++) {?>
                    <svg class="icon icon-star ">
                      <use xlink:href="<?php echo $get_template_directory_uri ?>/public/img/svg/sprite.svg#star"></use>
                    </svg>
                  <?php } ?>
                </div>
                <div class="top-nav__s-txt">
                  <?php echo get_field('текст_флаг0', 'option');?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-auto d-none d-lg-block">
            <a class="top-nav__ball-row row scroll-link" href="#sContact">
              <div class="col-auto">
                <div class="top-nav__ball">
                  <img loading="lazy" src="<?php echo $get_template_directory_uri;?>/public/img/svg/location.svg" alt=""/>
                </div>
              </div>
              <div class="col">
                <div class="top-nav__txt">
                  <?php echo get_field('адрес00', 'option');?>
                </div>
              </div>
            </a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <div class="top-nav__ball-row row">
              <div class="col-auto">
                <div class="top-nav__ball"><img loading="lazy" src="<?php echo $get_template_directory_uri;?>/public/img/svg/clock.svg" alt=""/>
                </div>
              </div>
              <div class="col">
                <div class="top-nav__txt">
                  <?php echo get_field('режим_работы00', 'option');?>
                </div>
              </div>
            </div>
          </div>
          <div class="col text-end d-none d-sm-block">
            <a class="top-nav__mail" href="<?php echo $mail_href;?>">
              <?php echo $mail;?>
            </a>
            <div>
              <a class="top-nav__tell" href="<?php echo $tel_href;?>">
                <?php echo $tel;?>
              </a>
            </div>
          </div>
          <div class="col-auto d-none d-md-block">
            <a class="top-nav__callback-btn link-modal-js" href="#modal-call">Обратный звонок</a>
          </div>
          <div class="col-auto d-md-none ms-auto">
            <div class="row gx-1">
              <div class="col-auto">
                <a class="top-nav__wa-btn" href="<?php echo $tel_href;?>">
                  <img loading="lazy" src="<?php echo $get_template_directory_uri;?>/public/img/svg/tell-blue.svg" alt=""/>
                </a>
              </div>
              <div class="col-auto">
                <a class="top-nav__wa-btn" href="<?php echo $tel_wa_href;?>">
                  <img loading="lazy" src="<?php echo $get_template_directory_uri;?>/public/img/svg/wa2.svg" alt=""/>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end top-nav-->
    <!-- start topLine-->
    <div class="topLine" id="topLine">
      <div class="container-lg">
        <div class="menu">
          <?php
            wp_nav_menu($menu_args);
          ?>
        </div>
      </div>
    </div>
    <div class="fixed-line fixed-line--js">
      <div class="container-lg">
        <div class="fixed-line__row row align-items-center gy-3">
          <div class="col d-lg-none">
            <a class="fixed-line__logo" href="/">
              <img loading="lazy" src="<?php echo get_field('лого_картинка', 'option');?>" alt=""/>
              <span>
                <?php echo get_field('лого_текст', 'option');?>
              </span>
            </a>
          </div>
          <div class="col-lg order-lg-0 order-last">
            <div class="menu">
              <?php
                wp_nav_menu($menu_args);
              ?>
            </div>
          </div>
          <div class="fixed-line__mail-col col-auto text-end">
            <a class="fixed-line__mail" href="<?php echo $mail_href;?>">
              <?php echo $mail;?>
            </a>
            <div>
              <a class="fixed-line__tell" href="<?php echo $tel_href;?>">
                <?php echo $tel;?>
              </a>
            </div>
          </div>
          <div class="col-auto d-lg-none">
            <div class="row gx-1">
              <div class="col-auto">
                <a class="fixed-line__wa-btn" href="<?php echo $tel_wa_href;?>">
                  <img loading="lazy" src="<?php echo $get_template_directory_uri;?>/public/img/svg/wa2.svg" alt=""/>
                </a>
              </div>
            </div>
          </div>
          <div class="col-auto d-none d-lg-block">
            <a class="fixed-line__callback-btn link-modal-js" href="#modal-call">
              Обратный звонок
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- end topLine-->
  </header>
  <!-- end header-->