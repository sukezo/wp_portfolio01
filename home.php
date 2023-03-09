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

<section class="p-news">
  <div class="p-news__inner">
    <div class="p-news__contents">
      <?php
      if (have_posts()) :
        while (have_posts()) : the_post(); ?>
      <li class="p-news__news-item p-news-item">
        <a href="<?php the_permalink(); ?>" class="p-news-item__link">
          <div class="p-news-item__meta">
            <div class="p-news-item__date">
              <time datetime="<?php echo wp_date('y.m.d'); ?>">
                <?php echo wp_date('y.m.d'); ?>
              </time>
            </div>
            <div class="p-news-item__category">
              <?php
                  $category = get_the_category();
                  echo $category[0]->name;
                  ?>
            </div>
          </div>
          <p class="p-news-item__title">
            <?php the_title(); ?>
          </p>
        </a>
      </li>
      <? endwhile;
      endif;
      ?>
      <?php
      $archive_pagination = [
        'mid_size' => 1,
        'prev_text' => '<',
        'next_text' => '>',
        'screen_reader_text' => ' ',
      ];
      the_posts_pagination($archive_pagination);
      ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>