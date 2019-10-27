 <!-- "home" blokas 
    =====================================================================-->
 <section class="container">
     <div id="home">
         <div class="home">
             <?php
                if (have_rows('h_description_repeater')) :
                    while (have_rows('h_description_repeater')) :
                        the_row();
                        ?>
                     <div>
                         <h2><?php the_sub_field('title'); ?></h2>
                         <?php the_sub_field('description'); ?>
                     </div>
             <?php
                    endwhile;
                endif;
                ?>
         </div>
     </div>
 </section>