<?php 
if(have_rows('repeater_laukas')):
    while(have_rows('repeater_laukas')):
        the_row();
        ?>
        <!-- HTML blokas, kuris kartojasi -->
        <?php
    endwhile;
endif;
?>