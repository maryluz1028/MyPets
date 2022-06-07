<div class="featured_post w-full flex flex-row items-start mb-4">
    <div class="featured_post_container_img w-[114px] min-w-[114px] h-[114px] min-h-[114px] mr-4">
        <a href="<?php the_permalink(); ?>">
            <img class=" featured_post_img w-full h-full object-cover rounded-md border border-grayWhite" src="<?= main_image_url('thumbnail') ?>" alt="" />
        </a>
    </div>
    <div class="w-full featured_post_content flex flex-col">
        <div class="featured_post_title mb-1 ">
            <h4 class="title-featured-post font-bold text-maroon cursor-pointer transition duration-300 ease-in hover:text-pink">
            <a href="<?php the_permalink(); ?>">
                <p><?php the_title(); ?></p>
            </a>
            </h4>
        </div>
        <div class="featured_post_date flex flex-row items-center">
            <span class="text-pink mr-2 text-sm"><i class="far fa-clock"></i></span>
            <p class=" text-sm"><?php the_time('M d, Y')?></p>
        </div>
    </div>
</div>
