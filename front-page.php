<?php get_header(); ?>

<!-- メインビュー -->
<div class="p-mv">
  <div class="p-mv__contents">
    <div class="p-mv__message">
      <div class="p-mv__en-message">
        <div class="u-mobile">
          <h2><?php the_field('mv-message_en-sp'); ?></h2>
        </div>
        <div class="u-desktop">
          <h2><?php the_field('mv-message_en-pc'); ?></h2>
        </div>
      </div>
      <div class="p-mv__jp-message">
        <div class="u-mobile">
          <h2><?php the_field('mv-message_jp-sp'); ?></h2>
        </div>
        <div class="u-desktop">
          <h2><?php the_field('mv-message_jp-pc'); ?></h2>
        </div>
      </div>
    </div>
    <div class="p-mv__btn">
      <a href="<?php echo esc_url(home_url('/contact')); ?>">contact</a>
    </div>
  </div>
</div>

<!-- お知らせ -->
<section class="p-top-news l-top-news">
  <div class="l-inner">
    <div class="p-top-news__contents">
      <h2 class="c-section-title c-section-title--left" data-en="news">お知らせ</h2>
      <ul class="p-top-news__list">
        <?php
        $news_query = new WP_Query();
        $param = array(
          'posts_per_page' => '3', //表示件数。-1なら全件表示
          'post_type' => 'post', //カスタム投稿タイプの名称を入れる←ここ変える(投稿だったらpost.カスタム投稿ならslug名)
          'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
          'order' => 'DESC'
        );
        $news_query->query($param);
        if ($news_query->have_posts()) : while ($news_query->have_posts()) : $news_query->the_post();
        ?>
            <li class="p-news-item">
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
        <?php
          endwhile;
        endif;
        wp_reset_postdata()
        ?>
      </ul>
    </div>
  </div>
</section>

<!-- 事業内容 -->
<section class="p-top-service l-top-service">
  <div class="l-inner">
    <div class="p-top-service__title">
      <h2 class="c-section-title c-section-title--white" data-en="service">事業内容</h2>
    </div>
    <ul class="p-top-service__cards p-cards">
      <?php
      $service_query = new WP_Query();
      $param = array(
        'posts_per_page' => '3', //表示件数。-1なら全件表示
        'post_type' => 'service', //カスタム投稿タイプの名称を入れる←ここ変える(投稿だったらpost.カスタム投稿ならslug名)
        'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
        'order' => 'DESC'
      );
      $service_query->query($param);
      if ($service_query->have_posts()) : while ($service_query->have_posts()) : $service_query->the_post();
      ?>
          <li class="c-card">
            <div class="c-card__img">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
              <?php else : ?>
                <img src="https://via.placeholder.com/500.png">
              <?php endif; ?>
            </div>
            <h3 class="c-card__title">
              <?php the_title(); ?>
            </h3>
            <p class="c-card__text">
              <?php the_field('service_top-text'); ?>
            </p>
          </li>
      <?php
        endwhile;
      endif;
      wp_reset_postdata()
      ?>
    </ul>
    <div class="p-top-service__btn">
      <a href="<?php echo esc_url(home_url('/service')); ?>" class="c-btn">more</a>
    </div>
  </div>
</section>

<!-- 制作実績 -->
<section class="p-top-works l-top-works">
  <?php
  $works_section = get_page_by_path('works');
  ?>
  <div class="p-top-works__inner">
    <div class="p-top-works__body">
      <div class="p-top-works__contents">
        <div class="p-swiper js-top-works__slider swiper">
          <div class="swiper-wrapper">
            <div class="p-swiper__item swiper-slide">
              <div class="p-swiper__img">
                <?php
                $works_image1 = get_field('works1_img', $works_section->ID);
                if (!empty($works_image1)) : ?>
                  <img src="<?php echo esc_url($works_image1['url']); ?>" alt="<?php echo esc_attr($works_image1['alt']); ?>" />
                <?php endif; ?>
              </div>
            </div>
            <div class="p-swiper__item swiper-slide">
              <div class="p-swiper__img">
                <?php
                $works_image2 = get_field('works2_img', $works_section->ID);
                if (!empty($works_image2)) : ?>
                  <img src="<?php echo esc_url($works_image2['url']); ?>" alt="<?php echo esc_attr($works_image2['alt']); ?>" />
                <?php endif; ?>
              </div>
            </div>
            <div class="p-swiper__item swiper-slide">
              <div class="p-swiper__img">
                <?php
                $works_image3 = get_field('works3_img', $works_section->ID);
                if (!empty($works_image3)) : ?>
                  <img src="<?php echo esc_url($works_image3['url']); ?>" alt="<?php echo esc_attr($works_image3['alt']); ?>" />
                <?php endif; ?>
              </div>
            </div>
          </div>
          <div class="p-swiper__pagination swiper-pagination"></div>
        </div>
        <div class="p-top-works__content c-section-content">
          <div class="c-section-content__title">
            <h2 class="c-section-title" data-en="works">制作実績</h2>
          </div>
          <p class="c-section-content__text"><?php the_field('works_top-message', $works_section->ID); ?></p>
          <div class="c-section-content__btn">
            <a href="<?php echo esc_url(home_url('/works')); ?>" class="c-btn">more</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 私たちについて -->
<section class="p-top-company l-top-company">
  <?php get_template_part('parts/company-parts'); ?>
</section>

<!-- 採用情報 -->
<section class="p-top-recruit l-top-recruit">
  <?php
  $recruit_section = get_page_by_path('recruit');
  ?>
  <div class="p-top-recruit__inner">
    <div class="p-top-recruit__contents">
      <div class="p-top-recruit__content c-section-content">
        <div class="c-section-content__title">
          <h2 class="c-section-title" data-en="recruit">採用情報</h2>
        </div>
        <p class="c-section-content__text"><?php the_field('recruit_message', $recruit_section->ID); ?></p>
        <div class="c-section-content__btn">
          <a href="<?php echo esc_url(home_url('/recruit')); ?>" class="c-btn">more</a>
        </div>
      </div>
      <div class="p-top-recruit__img">
        <?php
        $recruit_top_img = get_field('recruit_top-img', $recruit_section->ID);
        if (!empty($recruit_top_img)) : ?>
          <img src="<?php echo esc_url($recruit_top_img['url']); ?>" alt="<?php echo esc_attr($recruit_top_img['alt']); ?>" />
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>