<div class="p-company-parts">
  <?php
  $company_section = get_page_by_path('company');
  ?>
  <div class="p-company-parts__outside-inner">
    <div class="p-company-parts__inner">
      <div class="p-company-parts__contents">
        <div class="p-company-parts__left u-desktop">
          <div class="p-company-parts__img-l">
            <?php
            $company_section1 = get_field('company_main-img1', $company_section->ID);
            if (!empty($company_section1)) : ?>
            <img src="<?php echo esc_url($company_section1['url']); ?>"
              alt="<?php echo esc_attr($company_section1['alt']); ?>" />
            <?php endif; ?>
          </div>
          <div class="p-company-parts__img-s">
            <?php
            $company_section2 = get_field('company_main-img2', $company_section->ID);
            if (!empty($company_section2)) : ?>
            <img src="<?php echo esc_url($company_section2['url']); ?>"
              alt="<?php echo esc_attr($company_section2['alt']); ?>" />
            <?php endif; ?>
          </div>
        </div>
        <div class="p-company-parts__content">
          <?php if (is_front_page() ||  is_home()) : ?>
          <h2 class="c-section-title c-section-title--white" data-en="company">私たちについて</h2>
          <?php elseif (!is_front_page() ||  is_home()) : ?>
          <h2 class="p-company-parts__content-title">メッセージ</h2>
          <?php endif; ?>
          <div class="p-company-parts__catch-copy">
            <h3><?php the_field('company_main-catch', $company_section->ID); ?></h3>
          </div>
          <p class="p-company-parts__text"><?php the_field('company_main-text', $company_section->ID); ?></p>
          <?php if (is_front_page() ||  is_home()) : ?>
          <div class="p-company-parts__btn">
            <a href="<?php echo esc_url(home_url('/company')); ?>" class="c-btn">more</a>
          </div>
          <?php endif; ?>
        </div>
        <div class="p-company-parts__right u-desktop">
          <div class="p-company-parts__img-l">
            <?php
            $company_section3 = get_field('company_main-img3', $company_section->ID);
            if (!empty($company_section3)) : ?>
            <img src="<?php echo esc_url($company_section3['url']); ?>"
              alt="<?php echo esc_attr($company_section3['alt']); ?>" />
            <?php endif; ?>
          </div>
          <div class="p-company-parts__img-s">
            <?php
            $company_section4 = get_field('company_main-img4', $company_section->ID);
            if (!empty($company_section4)) : ?>
            <img src="<?php echo esc_url($company_section4['url']); ?>"
              alt="<?php echo esc_attr($company_section4['alt']); ?>" />
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="p-company-parts__dot1"></div>
    <div class="p-company-parts__dot2"></div>
    <div class="p-company-parts__dot3"></div>
    <div class="p-company-parts__dot4"></div>
    <div class="p-company-parts__dot5"></div>
    <div class="p-company-parts__dot6"></div>
    <div class="p-company-parts__dot7 u-mobile"></div> -->
  </div>
</div>