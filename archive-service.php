<?php get_header(); ?>

<!-- 下層ページメインビュー -->
<div class="p-sub-mv">
  <div class="p-sub-mv__title">
    <h2 class="c-sub-title" data-en="service">事業内容</h2>
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

<section class="p-service">
  <div class="l-inner">
    <div class="p-service__contents">
      <?php
      if (have_posts()) :
        while (have_posts()) : the_post(); ?>
          <div class="p-service__item">
            <div class="p-service__item-img">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
              <?php else : ?>
                <img src="https://via.placeholder.com/500.png">
              <?php endif; ?>
            </div>
            <div class="p-service__item-content">
              <h3 class="p-service__item-title">
                <?php the_title(); ?>
              </h3>
              <p class="p-service__item-text">
                <?php the_field('service_sub-text'); ?>
              </p>
            </div>
          </div>
      <? endwhile;
      endif;
      ?>

    </div>
  </div>
</section>

<?php get_footer(); ?>