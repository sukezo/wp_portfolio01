</main>

<?php if (is_front_page()) : ?>
  <div class="l-top-contact"></div>
<?php endif; ?>

<!-- お問い合わせ -->
<?php if (!is_page('contact')) : ?>
  <?php get_template_part('parts/contact-parts'); ?>
<?php endif; ?>

<!-- footer -->
<footer class="p-footer">
  <div class="p-footer__inner">
    <div id="js-scroll-top" class="js-scroll-top p-arrow"></div>
    <div class="p-footer__contents">
      <ul class="p-footer__list">
        <li class="p-footer__list-item"><a href="<?php echo esc_url(home_url('/')); ?>">home</a></li>
        <li class="p-footer__list-item"><a href="<?php echo esc_url(home_url('/news')); ?>">news</a></li>
        <li class="p-footer__list-item"><a href="<?php echo esc_url(home_url('/service')); ?>">service</a></li>
        <li class="p-footer__list-item"><a href="<?php echo esc_url(home_url('/works')); ?>">works</a></li>
        <li class="p-footer__list-item"><a href="<?php echo esc_url(home_url('/company')); ?>">company</a></li>
        <li class="p-footer__list-item"><a href="<?php echo esc_url(home_url('/recruit')); ?>">recruit</a></li>
        <li class="p-footer__list-item"><a href="<?php echo esc_url(home_url('/contact')); ?>">contact</a></li>
      </ul>
      <p class="p-footer__copyright">© PON DESIGN</p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>