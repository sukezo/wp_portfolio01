<?php get_header(); ?>

<!-- 下層ページメインビュー -->
<div class="p-sub-mv">
  <div class="p-sub-mv__title">
    <h2 class="c-sub-title" data-en="company">私たちについて</h2>
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

<section class="p-company">
  <?php get_template_part('parts/company-parts'); ?>
  <div class="p-company__contents">
    <div class="p-company__inner">
      <div class="p-company__ceo">
        <div class="p-company__ceo-img">
          <?php
          $company_ceo_img = get_field('company_ceo-img');
          if (!empty($company_ceo_img)) : ?>
          <img src="<?php echo esc_url($company_ceo_img['url']); ?>"
            alt="<?php echo esc_attr($company_ceo_img['alt']); ?>" />
          <?php endif; ?>
        </div>
        <p class="p-company__ceo-text">
          <?php the_field('company_ceo-message'); ?>
        </p>
      </div>
      <div class="p-company__info p-info">
        <h3 class="p-info__title">会社概要</h3>
        <div class="p-info__content">
          <dl class="p-info__content-item">
            <dt>社名</dt>
            <dd><?php the_field('company_name'); ?></dd>
          </dl>
          <dl class="p-info__content-item">
            <dt>設立</dt>
            <dd><?php the_field('company_date'); ?></dd>
          </dl>
          <dl class="p-info__content-item">
            <dt>代表取締役</dt>
            <dd><?php the_field('company_ceo-name'); ?></dd>
          </dl>
          <dl class="p-info__content-item">
            <dt>資本金</dt>
            <dd><?php the_field('company_capital'); ?></dd>
          </dl>
          <dl class="p-info__content-item">
            <dt>所在地</dt>
            <dd><?php the_field('company_address'); ?></dd>
          </dl>
        </div>
        <div class="p-company__map">
          <?php the_field('company_map'); ?>
          <a href="https://goo.gl/maps/DLWBegXxQmqLyPuw5">Google mapで見る</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>