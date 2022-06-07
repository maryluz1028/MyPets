<?php
get_header();
if(is_page('nosotros')){
    get_template_part('page-about');
}elseif(is_page('contacto')){
    get_template_part('page-contact');
}
get_footer();