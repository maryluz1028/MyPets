<?php
get_header();
?>
<div class="main__container w-full">
    <div class="max-w-[1200px] mx-auto py-4  px-4 lg:py-8">
        <div class="w-full h-full flex flex-row justify-center items-center">
            <div class="max-w-[500px] flex flex-col text-center">
                <img src="<?= get_template_directory_uri().'/assets/img/notfound.png' ?>" alt="">
                <span class="text-2xl text-blackText mt-4">Lamentablemente esta página no existe</span>
            </div>
        </div>
    </div>
</main>
<?php
get_template_part( 'templates/partials/document-close' );
?>