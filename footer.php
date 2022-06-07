</main>
<footer class="w-full bg-maroon px-4 py-[5rem]">
  <div class="container_footer flex flex-col justify-center items-center">
    <?php
    wp_nav_menu(array(
      'theme_location'=>'menu_redes',
      'container'=> 'nav',
      'container_class'=>'navbar_menu_redes',
      'menu'=>'ul',
      'menu_class'=>'menu'
    ));
    
    wp_nav_menu(array(
      'theme_location'=>'menu_primary',
      'container'=>'nav',
      'container_class'=>'navbar_menu_primary navbar_menu_primary_footer',
      'menu'=>'ul',
      'menu_class'=>'menu'
    )); 
    ?>
    <div class="w-full flex justify-center text-gray">
      <span>Copyright © Elior 2022. All Rights Reserved</span>
    </div>
  </div>
</footer>
<?php get_template_part( 'templates/partials/document-close' );
