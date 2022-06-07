<div class="main__container w-full">
    <div class="max-w-[1200px] mx-auto py-4 lg:py-8">
        <section class="contacts w-full p-4">
            <div class="contact-form-information w-full flex flex-col mb-8 md:flex-row md:gap-8">
                <div class="contact-form w-full md:w-1/2">
                    <h1 class="text-maroon font-semibold mb-8">¡Mandanos un mensaje!</h1>
                    <?php
                    if(have_posts()):
                        while(have_posts()):
                            the_post();
                            the_content();
                        endwhile;
                    endif;
                    ?>
                </div>
                <div class="contact-information w-full md:w-1/2">
                    <div class="container-informartion bg-pink p-8 md:py-10 md:mt-8">
                    <div class="information w-full flex flex-col">
                        <h2 class="title-information text-white font-bold mb-8">Información</h2>
                        <p class="text-white mb-8">Mei te apeirian omittantur reformidans, duo in appetere interesset concludaturque. Est eruditi erroribus liberavisse in.</p>
                        <div class="data text-white font-semibold flex flex-col">
                            <a href="mailto:mypets@gmail.com" class="mb-4"><i class="fas fa-envelope"></i><span class="ml-4 text-yellow ">mypets@gmail.com</span></a>
                            <a href="tel:(123) 456-789" class=" mb-4"><i class="fas fa-phone-alt"></i><span class="ml-4">(123) 456-789</span></a>
                            <div class=" mb-4"><i class="fas fa-map-marker-alt"></i><span class="ml-4 ">Pet Street 123 - New York</span></div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="contact-location w-full">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.9841209705905!2d-77.00440488578896!3d-11.975600443839864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c566fa398f7f%3A0x9f899e3363da6454!2sSupermercado%20Metro%20-%20Pr%C3%B3ceres!5e0!3m2!1ses-419!2spe!4v1651531048153!5m2!1ses-419!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </div>
</div>