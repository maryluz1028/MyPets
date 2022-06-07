<?php
get_header();
?>
<div class="main__container w-full py-4">
    <div class="max-w-[1200px] mx-auto">
        <div class="search-result-message w-full px-4 my-4 md:my-8">
            <div class="w-full bg-paleYellow px-8 py-10 rounded-2xl">
                <h2 class="font-bold text-maroon">Resultado de Búsqueda para Categoria: <?= get_query_var('category_name'); ?></h2>
            </div>
        </div>
        <section class="posts-sidebar mb-12">
        <div class="posts-sidebar__container w-full flex flex-col lg:flex-row">
            <div class="posts_container w-full lg:w-2/3">
                <div class="posts_search_conatiner w-full">
                    <?php
                    if(have_posts()):
                        while(have_posts()):
                            the_post();
                            get_template_part('templates/views/Post');
                        endwhile;
                    else:
                    ?>
                    <div class="Nothing-found w-full p-4">
                        <p class="text-[40px] font-bold mb-8">¡Nada Encontrado!</p>
                        <p>Parece que no se encontró nada aquí. ¿Tal vez intentar una búsqueda?</p>
                    </div>
                    <?php
                    endif;
                    rewind_posts();
                    ?>
                </div>
                <?php if($GLOBALS['wp_query']->max_num_pages>1): ?>
                    <div class="posts-pagination p-4 my-8 text-center">
                        <?php the_posts_pagination();?>
                    </div>
                    <?php
                    endif;
                    ?>
            </div>
            <div class="sidebar_container w-full lg:w-1/3 p-4 lg:py-4 lg:pl-8 lg:pr-4">
                <div class="form-searchp w-full mb-8">
                    <h2 class="w-full leading-none text-maroon font-bold mb-8">Buscar</h2>
                    <?php get_search_form(); ?>
                </div>
                <div class="categories_list w-full mb-8">
                    <h2 class="title_categories_list leading-none font-bold mb-8">Categorias</h2>
                    <div class="categories w-full flex flex-col item-center md:flex-row lg:flex-wrap">
                        <?php $category= get_categories(
                            array(
                                'taxonomy'=>'category', 'parent'=>'0', ) ); foreach($category as $cat){ ?>
                                <div class="w-full mb-4 md:w-auto md:mr-4">
                                    <?php  get_template_part('templates/views/Button',null,[
                                        'class' =>
                                        'buttom--w-full buttom--categories', 'href' => get_category_link($cat->term_id), 'text' => $cat->name, ]); ;?>
                                </div>
                        <?php }?>
                    </div>
                </div>
                <div class="social_profiles w-full flex flex-col mb-8">
                    <h2 class="social_profile_title leading-none text-maroon font-bold mb-8">Perfiles sociales</h2>
                    <div class="w-full mb-4">
                        <?php get_template_part('templates/views/Button',null,[
                            'class'=>'buttom--w-full buttom--social buttom--facebook', 
                            'icon'=>'fab fa-facebook-f', 
                            'href'=>'https://www.facebook.com/', 
                            'text'=>'Facebook', ]);?>
                    </div>
                    <div class="w-full mb-4">
                        <?php get_template_part('templates/views/Button',null,[
                            'class'=>'buttom--w-full buttom--social buttom--instagram', 
                            'icon'=>'fab fa-instagram', 
                            'href'=>'https://www.instagram.com/', 
                            'text'=>'Instagram', ]);?>
                    </div>
                    <div class="w-full mb-4">
                        <?php get_template_part('templates/views/Button',null,[
                            'class'=>'buttom--w-full buttom--social buttom--twitter', 
                            'icon'=>'fab fa-twitter', 
                            'href'=>'https://www.twitter.com/', 
                            'text'=>'Twitter', ]);?>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </div>
</div>
<?php
get_footer();