<?php
if(have_comments()):
    ?>
    <ol>
        <?php WP_list_comments(); ?>
    </ol>
<?php
else:
endif;