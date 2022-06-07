
<div class="card w-full p-4 sm:w-1/2">
   <div class="card__container w-full h-full flex flex-col items-center">
      <div class="card__thumbnails-container max-w-full h-[300px]">
         <a href="<?php the_permalink();?>">
         <img class="max-w-full h-full object-cover rounded-3xl border border-grayWhite" src="<?= main_image_url('medium_large')?>" alt="">
         </a>
      </div>
      <div class="card__content-container w-full mt-4">
         <div class="card__content-btncategory w-full py-2">
         <?php 
            $term = get_the_terms($post->ID,'category');
            foreach($term as $ter):
               if($ter->parent===0):
               get_template_part('templates/views/Button',null,[
                     'class'=>'buttom--category',
                     'href'=> get_category_link($ter->term_id),
                     'icon'=>'fas fa-tag',
                     'text'=>$ter->name,
                  ]);
               endif;
            endforeach;
         ?>
         </div>
         <div class="card__content-title py-2" >
            <h3 class="title-post font-bold text-maroon hover:text-pink transition duration-500 ease-in">
            <a class="inline-block w-full" href="<?php the_permalink();?>">
            <?php the_title(); ?></a>
            </h3>
         </div>
         <div class="card_content-excerpt py-2">
            <?php  the_excerpt(); ?>
         </div>
         <?php get_template_part('templates/views/Author')?>

      </div>
   </div>
</div>


