<?php get_header(); ?>

<!-- 下層ページメインビュー -->
<div class="p-sub-mv">
  <div class="p-sub-mv__title">
    <h2 class="c-sub-title" data-en="contact">お問い合わせ</h2>
  </div>
</div>

<!-- パンくず -->
<?php if (!is_front_page()) { ?>
<?php if (function_exists('bcn_display')) { ?>
<nav class="c-bread-crumbs">
  <div class="l-inner">
    <div class="c-bread-crumbs__contents" vocab="http://schema.org/" typeof="BreadcrumbList">
      <?php bcn_display(); ?>
    </div>
  </div>
</nav>
<?php } ?>
<?php } ?>

<section class="p-contact">
  <div class="l-inner">
    <p class="p-contact__text">
      Webサイトの制作のご依頼やお見積りなど、<br class="u-mobile">お気軽にご相談ください。
    </p>
    <div class="p-contact__form">
      <?php the_content(); ?>
    </div>
  </div>
</section>


<?php get_footer(); ?>