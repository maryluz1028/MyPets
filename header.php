<?php 
get_template_part( 'templates/partials/document-open' );
?>
<header class="w-full py-4 bg-yellow">
    <div class="relative flex flex-row justify-between items-center w-full px-4 mx-auto lg:max-w-[1200px]">
        <?php
        //Logo
        $custom_logo_id=get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id);
        ?>
        <a href="<?= home_url(); ?> ">
            <div class="logo-name flex flex-row items-center">
            <?php
                    get_template_part('templates/views/Logo',null,[
                        'src'=>$logo[0],
                        'alt'=> get_bloginfo('name'),
                    ]);
            ?>
            <h1 class="ml-2 font-bold text-white transition-[font-size] duration-1000 ease-linear">MyPets</h1>
            </div>
        </a>
        <?php
        //menu primary
        wp_nav_menu(
            array(
                'theme_location'=>'menu_primary',
                'container'=>'nav',
                'container_class'=>'navbar_menu_primary',
                'container_id'=>'navbar-primary',
                'menu'=> 'ul',
                'menu_class'=>'menu',
            )
            );
        ?>
        <div class="flex flex-row items-center">
            <?php
        //button search
        get_template_part('templates/views/Button',null,[
            'class'=>'buttom--search',
            'id'=>'buttom-search',
            'link'=>'#nose',
            'icon'=>'fas fa-search',
            'text'=>''
        ]);
        //buttom subscribir
        get_template_part('templates/views/Button',null,[
            'class'=>'buttom--subscribe hover--bg-maroon buttom--hidden',
            'link'=>'http://localhost/wordpress/mypets/',
            'icon'=>'fas fa-envelope',
            'text'=>'Subscribe',
        ]);
        //button burger mobile
        get_template_part('templates/views/Button',null,[
            'class'=>'buttom--bars',
            'id'=>'buttom-bars',
            'icon'=>'fas fa-bars',
            'text'=>''
        ]);
            ?>
        </div>
    </div>
</header>
<?php get_template_part('templates/views/Search-modal'); ?>
<main class="main w-full bg-white">
