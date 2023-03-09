<?php get_header(); ?>

<!-- 下層ページメインビュー -->
<div class="p-sub-mv">
  <div class="p-sub-mv__title">
    <h2 class="c-sub-title" data-en="recruit">採用情報</h2>
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

<section class="p-recruit">
  <div class="p-recruit__bg">
    <div class="p-recruit__inner">
      <div class="p-recruit__catch">
        <h3 class="p-recruit__catch-title" data-en="<?php the_field('recruit_catch-en'); ?>">
          <?php the_field('recruit_catch-jp'); ?>
        </h3>
        <p class="p-recruit__catch-text"><?php the_field('recruit_catch-text'); ?></p>
      </div>
      <div class="p-recruit__bg-img"></div>
      <div class="p-recruit__Job-card p-job-card">
        <h3 class="p-job-card__title">募集中の職種</h3>
        <div class="p-job-card__content">
          <div class="p-job-card__content-inner">
            <h4 class="p-job-card__content-title">
              <?php the_field('recruit_job'); ?>
            </h4>
            <dl class="p-job-card__content-item">
              <dt>雇用形態</dt>
              <dd><?php the_field('recruit_job-type'); ?></dd>
            </dl>
            <dl class="p-job-card__content-item">
              <dt>給与</dt>
              <dd><?php the_field('recruit_salary'); ?></dd>
            </dl>
            <dl class="p-job-card__content-item">
              <dt>仕事内容</dt>
              <dd><?php the_field('recruit_work-content'); ?></dd>
            </dl>
            <dl class="p-job-card__content-item">
              <dt>勤務時間</dt>
              <dd><?php the_field('recruit_time'); ?></dd>
            </dl>
            <dl class="p-job-card__content-item">
              <dt>応募資格</dt>
              <dd><?php the_field('recruit_qualification'); ?></dd>
            </dl>
          </div>
          <div class="p-job-card__btn">
            <a href="https://google.com/" class="c-btn">応募する</a>
            <span>求人サイトへ遷移します</span>
          </div>
        </div>
      </div>
      <div class="p-recruit__movie">
        <h4 class="p-recruit__movie-title">社内ムービー</h4>
        <video class="p-recruit__movie-content" src="<?php the_field('recruit_movie'); ?>" controls></video>
        <div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>