<?php get_header(); ?>

<!-- 下層ページメインビュー -->
<div class="p-sub-mv">
  <div class="p-sub-mv__title">
    <h2 class="c-sub-title" data-en="news">お知らせ</h2>
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


<section class="p-single-news l-single-news">
  <div class="p-single-news__inner">
    <div class="p-single-news__main-contents">
      <h2 class="p-single-news__title"><?php the_title(); ?></h2>
      <div class="p-single-news__meta">
        <div class="p-single-news__date">
          <time datetime="<?php echo wp_date('y.m.d'); ?>">
            <?php echo wp_date('y.m.d'); ?>
          </time>
        </div>
        <div class="p-single-news__category">
          <?php
          $category = get_the_category();
          echo $category[0]->name;
          ?>
        </div>
      </div>
      <div class="p-single-news__img">
        <?php
        $single_news_img = get_field('single-news_img');
        if (!empty($single_news_img)) : ?>
        <img src="<?php echo esc_url($single_news_img['url']); ?>"
          alt="<?php echo esc_attr($single_news_img['alt']); ?>" />
        <?php endif; ?>
      </div>
      <p class="p-single-news__img-text"><?php the_field('single-new_text'); ?></p>
      <div class="p-single-news__sub-contents-l">
        <h3><?php the_field('single-news_heading-title'); ?></h3>
        <p><?php the_field('single-news_heading-text'); ?></p>
      </div>
      <div class="p-single-news__sub-contents-s">
        <h4><?php the_field('single-news_heading-title2'); ?></h4>
        <p><?php the_field('single-news_heading-text2'); ?></p>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>