<?php get_header(); ?>

<!-- 下層ページメインビュー -->
<div class="p-sub-mv">
  <div class="p-sub-mv__title">
    <h2 class="c-sub-title" data-en="works">制作実績</h2>
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

<section class="p-works">
  <div class="l-inner">
    <div class="p-cards">
      <div class="c-card2">
        <div class="c-card2__img">
          <?php
          $works_image1 = get_field('works1_img');
          if (!empty($works_image1)) : ?>
            <img src="<?php echo esc_url($works_image1['url']); ?>" alt="<?php echo esc_attr($works_image1['alt']); ?>" />
          <?php endif; ?>
        </div>
        <h4 class="c-card2__title"><?php the_field('works1_title'); ?></h4>
      </div>
      <div class="c-card2">
        <div class="c-card2__img">
          <?php
          $works_image1 = get_field('works2_img');
          if (!empty($works_image1)) : ?>
            <img src="<?php echo esc_url($works_image1['url']); ?>" alt="<?php echo esc_attr($works_image1['alt']); ?>" />
          <?php endif; ?>
        </div>
        <h4 class="c-card2__title"><?php the_field('works2_title'); ?></h4>
      </div>
      <div class="c-card2">
        <div class="c-card2__img">
          <?php
          $works_image1 = get_field('works3_img');
          if (!empty($works_image1)) : ?>
            <img src="<?php echo esc_url($works_image1['url']); ?>" alt="<?php echo esc_attr($works_image1['alt']); ?>" />
          <?php endif; ?>
        </div>
        <h4 class="c-card2__title"><?php the_field('works3_title'); ?></h4>
      </div>
      <div class="c-card2">
        <div class="c-card2__img">
          <?php
          $works_image1 = get_field('works4_img');
          if (!empty($works_image1)) : ?>
            <img src="<?php echo esc_url($works_image1['url']); ?>" alt="<?php echo esc_attr($works_image1['alt']); ?>" />
          <?php endif; ?>
        </div>
        <h4 class="c-card2__title"><?php the_field('works4_title'); ?></h4>
      </div>
      <div class="c-card2">
        <div class="c-card2__img">
          <?php
          $works_image1 = get_field('works5_img');
          if (!empty($works_image1)) : ?>
            <img src="<?php echo esc_url($works_image1['url']); ?>" alt="<?php echo esc_attr($works_image1['alt']); ?>" />
          <?php endif; ?>
        </div>
        <h4 class="c-card2__title"><?php the_field('works5_title'); ?></h4>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>