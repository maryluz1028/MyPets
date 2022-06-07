<div class="main__container w-full">
    <div class="max-w-[1200px] mx-auto py-4 lg:py-8">
        <section class="about-us w-full flex flex-col p-4 lg:flex-row py-20">
            <?php
            if(have_posts()):
            while(have_posts()):
                the_post();
                the_content();
            endwhile;
        endif;
            ?>
        </section>
    </div>
</div>

