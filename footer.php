<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package d2interier
 */

if (!is_front_page()) {
  $front = home_url();
} else {
  $front = '#';
}
?>
<footer class="">
  <div class="container">
    <div class="row">
    	<div class="col-6 col-md-6 col-lg-2 logo-social">
        <a class="navbar-brand logo-a-footer" href="<?php echo $front; ?>"><img class="logo-img" src="<?php echo get_template_directory_uri(); ?>/img/logo_footer.png" alt="" ></a><br>
        <p>Будь всегда в курсе новинок:</p>
        <a href="https://www.facebook.com/d2interier/" class="social facebook" target="_blank"></a>
        <a href="https://www.instagram.com/d2.interier/" class="social instagram" target="_blank"></a>
    	</div>
    	<div class="col-6 col-md-6 col-lg-3 d-flex footer-menus">
        <div class="col-12 col-md-6 col-lg-8 info-footer-list">
          <?php
          wp_nav_menu( array(
            'menu' => 'Подвал меню 1',
            'container' => '',
            'container_id' => '',
            'menu_class' => 'info-footer',
            'menu_id' => '',
          ) ); ?>
        </div>
        <div class="col-12 col-md-6 col-lg-4 info-footer-list">
          <?php 
          wp_nav_menu( array(
            'menu' => 'Подвал меню 2',
            'container' => '',
            'container_id' => '',
            'menu_class' => 'info-footer',
            'menu_id' => '',
          ) );
          ?>
        </div> 
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <ul class="info-footer contacts">
          <li> г. Киев, ул.Здолбуновская 7-г</li>
          <li class="phone"><img src="<?php echo get_template_directory_uri(); ?>/img/kyivstar.png" alt="kyivstar"> +38 (098) 332-22-94</li>
          <li class="phone"><img src="<?php echo get_template_directory_uri(); ?>/img/life.png" alt="life"> +38 (063) 332-22-94</li>
          <li>inet@d2interier.com</li>
          <li> Ежедневно с 10.00 до 21.00</li>
          <li class="answer">Будем рады ответить <br>на ваши вопросы!</li>
        </ul>
      </div>
      <div class="col-12 col-md-6 col-lg-4 info-footer maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2542.6012189305306!2d30.603722715545647!3d50.41126909806853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4c599187c7089%3A0x9e95824b6df6778!2z0YPQuy4g0JfQtNC-0LvQsdGD0L3QvtCy0YHQutCw0Y8sIDfQkywg0JrQuNC10LIsIDAyMDAw!5e0!3m2!1sru!2sua!4v1562325859016!5m2!1sru!2sua" width="380" height="220" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
  </div>

  <div class="copyright">
    <p>© <?php echo date('Y'); ?>, D2 інтер'єр </p>
  </div>
</footer>

<?php wp_footer(); ?>

<script src="//code.jivosite.com/widget/1nJfVrZy2A" async></script>

</body>
</html>
