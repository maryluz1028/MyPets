<?php 
get_header();
?>
<div class="main__container w-full pt-12 pb-4">
    <div class="max-w-[1200px] mx-auto">
    <section class="posts-sidebar mb-12">
        <div class="posts-sidebar__container w-full flex flex-col lg:flex-row">
            <div class="posts_container w-full lg:w-2/3">
                <div class="posts_content_container w-full p-4">
                    <?php
                    if(have_posts()):
                        while(have_posts()):
                            the_post();
                            ?>
                            <div class="w-full mb-14">
                                <h1 class="font-bold text-maroon text-[30px] text-center md:text-[60px]"><?php the_title();?></h1>
                            </div>
                            <?php
                            the_content();
                            ?>
                            <hr class="my-8 text-gray">
                            <div class="tags w-full flex flex-row flex-wrap items-center">
                                <?php
                                the_tags('Etiquetas ',' ',' ');
                                ?>
                            </div>
                            <div class="author w-full bg-grayWhite p-6 rounded-xl mb-4">
                                <div class="container_information_author flex flex-col sm:flex-row sm:items-center">
                                    <div class="atuhor_photo_post w-[120px] h-[120px] flex justify-center items-center mb-4 sm:mb-0 sm:mr-4">
                                        <?= get_avatar(the_author_ID()) ?>
                                    </div>
                                    <div class="about_author flex flex-col sm:flex-1">
                                        <span class="text-sm font-bold text-maroon">Sobre el autor</span>
                                        <span class="text-xl font-bold text-maroon"><?php the_author_meta('nickname') ?></span>
                                        <p class="font-medium my-3"><?php the_author_meta('description') ?></p>
                                        <div class="redes_sociales_author flex flex-row">
                                            <a href="#" class="text-pink text-xl mr-4"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#" class="text-pink text-xl mr-4"><i class="fab fa-twitter"></i></a>
                                            <a href="#" class="text-pink text-xl mr-4"><i class="fab fa-instagram"></i></a>
                                            <a href="#" class="text-pink text-xl mr-4"><i class="fab fa-youtube"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
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
                    $html="<style>
                    .posts_content_container ul li::before{
                        content:'';
                        display:inline-block;
                        width:2rem;
                        height:2rem;
                        background-image:url(%s./assets/img/pawprint.png);
                        background-repeat:no-repeat;
                        margin-right:.5rem;
                    }
                    </style>";
                    printf($html,get_template_directory_uri());
                    ?>
                </div>
                <div class="coment_container w-full p-4">
                <div class="comments_post w-full bg-grayWhite p-6 rounded-xl">
                        <div class="w-full flex flex-col">
                            <div class="comments_post_list mb-4">
                                <h3 class="text-2xl font-bold text-maroon">2 Comentarios</h3>
                                <hr class="my-6 text-gray">
                                <?php comments_template() ?>
                            </div>
                            <div class="coments_post_form">
                                <?php
                                $args=array(
                                    'comment_notes_before'=>'',
                                    'title_reply_after'=>'</h3><hr class="text-gray">'
                                );
                                comment_form($args);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar_container w-full lg:w-1/3 p-4 lg:py-4 lg:pl-8 lg:pr-4">
                <div class="form-searchp w-full mb-8">
                    <h2 class="w-full leading-none text-maroon font-bold mb-8">Buscar</h2>
                    <?php get_search_form(); ?>
                </div>
                <div class="archive_list_category w-full flex-col mb-8">
                    <h2 class="archive_list_category_title text-maroon font-bold mb-8 leading-none">Categorias</h2>
                    <ul class="container_archive_list_category w-full flex flex-col">
                        <?php
                            $category = get_categories(array(
                                'taxonomy'=>'category',
                                'parent'=>0,
                            ));
                            foreach ($category as $cat) {
                            ?>
                            <a href="<?= get_category_link($cat->term_id); ?>">
                            <li><?= $cat->name?> <span><?= $cat->count?></span></li>
                            </a>
                            <?php
                            }
                        ?>
                    </ul>
                </div>
                <div class="social_profiles w-full flex flex-col mb-8">
                    <h2 class="social_profile_title text-maroon leading-none font-bold mb-8">Perfiles sociales</h2>
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