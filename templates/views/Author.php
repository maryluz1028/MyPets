<div class="auhtor w-full flex flex-row items-center py-2 ">
   <div class="author__photo mr-2 flex items-center">
   <?= get_avatar(the_author_ID());?>
   </div>
   <div class="author__description flex flex-col justify-start">
      <div class="author__name p-1 font-bold text-maroon capitalize">
        <?php the_author_meta('nickname'); ?>
      </div>
      <div class="author__date p-1 text-sm text-grayBlack">
          <?php the_time('M d, Y'); ?>
      </div>
   </div>
</div>

