<footer id="footer" class="page-footer blue-grey lighten-1">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text"><?php _e('Vote for Sylvain Durif','durif'); ?></h5>
        <p class="grey-text text-lighten-4"><?php _e('In his quest to contact the Orion, help Sylvain Durif by financing his election campaign and vote for the future of the country.','durif'); ?></p>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text"><?php _e('More informations','durif'); ?></h5>
        <?php
        $args=array(
            'theme_location' => 'footer', // nom du slug
            'menu' => 'footer_fr', // nom à donner cette occurence du menu
            'container' => 'ul',
            'container_class' => 'footer_menu',
        );
        wp_nav_menu($args);
        ?>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
    © 2014 Team Wordpress Hetic
    </div>
  </div>
</footer>

<!-- Execution de la fonction wp_footer() obligatoire ! -->
<?php wp_footer();  ?>
</body>
</html>
