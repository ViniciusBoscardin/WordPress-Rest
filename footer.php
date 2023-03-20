<footer>
  <nav class="nav-footer">
    <?php
    $args = array(
      'menu' => 'principal',
      '_container_' => false
    );
    wp_nav_menu($args);
    ?>
  </nav>

  <p>Rest © 2015. Alguns direitos reservados.</p>
</footer>

<!-- FOOTER WORDPRESS  -->
<?php wp_footer(); ?>
<!-- FECHA FOOTER WORDPRESS  -->

</body>

</html>