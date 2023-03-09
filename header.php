<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Noto+Sans+JP:wght@400;700&display=swap"
    rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="p-header l-header js-header">
    <h1 class="p-header__logo">
      <a href="<?php echo esc_url(home_url('/')); ?>">WEB DESIGN</a>
    </h1>
    <button class="p-header__hamburger-btn js-hamburger-btn">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <nav class="p-header__nav p-header-nav js-drawer">
      <div class="p-header-nav__wrapper">
        <div class="p-header-nav__main">
          <ul class="p-header-nav__items">
            <li class="p-header-nav__item">
              <a href="<?php echo esc_url(home_url('/news')); ?>">news</a>
            </li>
            <li class="p-header-nav__item">
              <a href="<?php echo esc_url(home_url('/service')); ?>">service</a>
            </li>
            <li class="p-header-nav__item">
              <a href="<?php echo esc_url(home_url('/works')); ?>">works</a>
            </li>
            <li class="p-header-nav__item">
              <a href="<?php echo esc_url(home_url('/company')); ?>">company</a>
            </li>
            <li class="p-header-nav__item">
              <a href="<?php echo esc_url(home_url('/recruit')); ?>">recruit</a>
            </li>
            <li class="p-header-nav__item">
              <a href="<?php echo esc_url(home_url('/contact')); ?>">contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main>