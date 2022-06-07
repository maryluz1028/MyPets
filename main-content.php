<div class="main__container w-full">
   <section class="sliders w-full">
      <?php echo do_shortcode('[metaslider id="147"]'); ?>
   </section>
   <div class="max-w-[1200px] mx-auto pt-4 lg:pt-12">
      <section class="w-full posts-sidebar__container flex flex-col mb-12 lg:flex-row">
         <div class="posts_container w-full lg:w-2/3">
            <div class="w-full sm:flex sm:flex-row sm:flex-wrap">
            <?php
               if(have_posts()):
                  while(have_posts()):
                     the_post();
                     get_template_part('templates/views/Post');
                  endwhile;
               else:
            ?>
            <div class="notcontent w-full h-[50vh] flex items-center justify-center">
               <div class="notcontent_container text-center">
                  <img class="inline-block w-[150px] h-[150px]" src="<?= get_template_directory_uri()?>.'/assets/img/gear.gif'" alt="gear">
                  <p class="text-blackText text-2xl font-medium ">Disculpa las molestias</p>
                  <p class="text-pink text-3xl font-medium">La pagina web está en manteniemto, regrese dentro de unos minutos</p>
               </div>
            </div>
            <?php
               endif;
               rewind_posts();
            ?>
            </div>
            <?php
            if($GLOBALS['wp_query']->max_num_pages>1):
            ?>
            <div class="posts-pagination p-4 my-8 text-center">
               <?php the_posts_pagination();?>
            </div>
            <?php endif;?>
         </div>
         <div class="sidebar_container w-full lg:w-1/3 p-4">
            <div class="popular_posts w-full flex flex-col mb-8">
               <h2 class="title_popular_posts leading-none font-bold text-maroon mb-8">Entradas Popularess</h2>
               <?php
               if(have_posts()):
                  $args=array(
                     'post_per_page'=>4,
                     'meta_key'=> 'post_views',
                     'orderby'=>'meta_value_num',
                     'order'=>'DESC'
                  );
                  $popular_posts=new WP_Query($args);
                  while($popular_posts->have_posts()):
                     $popular_posts->the_post();
                     get_template_part('templates/views/Featured-post');
                  endwhile;
               endif;
               rewind_posts();
               ?>
            </div>
            <div class="categories_list w-full mb-8 ">
               <h2 class="title_categories_list font-bold text-maroon leading-none mb-8">Categorias</h2>
               <div class="categories w-full flex flex-col item-center md:flex-row lg:flex-wrap">
                  <?php $category= get_categories(
                        array(
                           'taxonomy'=>'category',
                           'parent'=>'0',
                        )
                     );
                     foreach($category as $cat){ ?>
                  <div class="w-full  mb-4 md:w-auto md:mr-4">
                     <?php  get_template_part('templates/views/Button',null,[
                           'class' => 'buttom--w-full buttom--categories',
                           'href' => get_category_link($cat->term_id),
                           'text' => $cat->name,
                           ]);
                     ;?>
                  </div>
                     <?php } ?>
               </div>
            </div>
            <div class="archive_list w-full mb-8">
               <h2 class="title_archive_list font-bold text-maroon leading-none mb-8">Lista de archivos</h2>
               <ul class=" container_archive_list w-full flex flex-col">
                        <?php wp_get_archives(array(
                           'type'=>'monthly',
                           'show_post_count'=>true,
                        ));?>
               </ul>
            </div>
            <div class="social_profiles w-full flex flex-col mb-8">
               <h2 class="social_profile_title font-bold text-maroon leading-none mb-8">Perfiles sociales</h2>
               <div class="w-full mb-4">
                  <?php get_template_part('templates/views/Button',null,[
                     'class'=>'buttom--w-full buttom--social buttom--facebook',
                     'icon'=>'fab fa-facebook-f',
                     'href'=>'https://www.facebook.com/',
                     'text'=>'Facebook',
                  ]);?>
               </div>
               <div class="w-full mb-4">
                  <?php get_template_part('templates/views/Button',null,[
                     'class'=>'buttom--w-full buttom--social buttom--instagram',
                     'icon'=>'fab fa-instagram',
                     'href'=>'https://www.instagram.com/',
                     'text'=>'Instagram',
                  ]);?>
               </div>
               <div class="w-full mb-4">
                  <?php get_template_part('templates/views/Button',null,[
                     'class'=>'buttom--w-full buttom--social buttom--twitter',
                     'icon'=>'fab fa-twitter',
                     'href'=>'https://www.twitter.com/',
                     'text'=>'Twitter',
                  ]);?>
               </div>
            </div>
         </div>
      </section>
      <section class=" w-full dont-miss mb-12">
         <h2 class="dont-miss-title font-bold text-maroon mb-8 px-4 ">No te pierdas</h2>
         <div class="dont-miss__container w-full flex flex-col sm:flex-row sm:flex-wrap ">
            <?php $args=array(
            'post_type'=>'post',
            'posts_per_page'=>3,
            'orderby'=>'rand',
            );
            $dontmiss=new WP_Query($args);
            if($dontmiss->have_posts()):
               while ($dontmiss->have_posts()):
                  $dontmiss->the_post();
                  get_template_part('templates/views/Post');
               endwhile;
            endif;
            rewind_posts();?>
         </div>
      </section>
      <section class=" w-full subscribe mb-12 px-4">
         <div class="subscribe_container w-full bg-bgsubscribe bg-cover bg-no-repeat bg-center mb-8 rounded-3xl">
            <div class="subscribe_filter w-full flex flex-col justify-center items-center lg:flex-row py-10 px-8 bg-blackrgba rounded-3xl">
               <div class="text-subscribe w-full">
                  <h2 class="text-white mb-8 font-bold">Suscribete a MyPets</h2>
                  <p class="text-white mb-8">¡Ingrese su correo electrónico y lo mantendremos informado con noticias y actualizaciones!</p>
               </div>
               <div class="w-full flex justify-center items-center" action="">
                  <form class="w-full flex flex-col justify-center sm:flex-row sm:relative" action="">
                  <?php 
                  get_template_part('templates/views/Input',null,[
                     'class'=>'input--rounded', 'placeholder'=>'Ingrese su correo', 'type'=>'email', 'requerid'=>'true' ]); ?>
                  <div class="mb-4 w-full sm:hidden"></div>
                  <?php
                  get_template_part('templates/views/Button',null,[
                     'class'=>'buttom--absolute', 'text'=>'suscribe ' ]); ?>
                  </form>
               </div>
            </div>
         </div>
      </section>
      <section class="populared w-full mb-12">
         <div class="container_populared w-full flex flex-col justify-center items-center lg:flex-row">
            <div class="w-full container_trending p-4 flex flex-col lg:w-1/3">
            <h2 class=" w-full trending_title text-maroon mb-4 font-bold">Tendencia</h2>
            <?php
            $args=array(
               'post_type'=>'post',
               'posts_per_page'=>'3',
               'orderby'=>'rand'
            );
            $trending_post=new WP_Query($args);
            if($trending_post->have_posts()):
               while($trending_post->have_posts()):
                  $trending_post->the_post();
                  get_template_part('templates/views/Featured-post');
               endwhile;
            endif;
            rewind_posts();
            ?>
         </div>
         <div class="w-full container_most_recent flex flex-col p-4 lg:w-1/3">
            <h2 class="w-full most_recent_title mb-4 text-maroon font-bold">Mas recientes</h2>
            <?php 
            $args=array(
               'post_type'=>'post',
               'posts_per_page'=>'3',
            );
            $post_recent=new WP_Query($args);
            if($post_recent->have_posts()):
               while($post_recent->have_posts()):
                  $post_recent->the_post();
                  get_template_part('templates/views/Featured-post');
               endwhile;
            endif;
            rewind_posts();
            ?>
         </div>
         <div class="w-full container_popular flex flex-col p-4 lg:w-1/3">
            <h2 class="w-full popular_title mb-4 font-bold text-maroon">Populares</h2>
            <?php
            $args=array(
               'posts_per_page'=>'3',
               'meta_key'=>'post_views',
               'orderby'=>'meta_value_num',
               'order'=> 'DESC'
            );
            $popular_posts=new WP_Query($args);
            if($popular_posts->have_posts()):
               while($popular_posts->have_posts()):
                  $popular_posts->the_post();
                  get_template_part('templates/views/Featured-post');
               endwhile;
            endif;
            rewind_posts();
            ?>
         </div>
         </div>
      </section>
   </div>
</div>



