 <!-- sentiment2 blokas 
    ================================================================================-->
 <section class="sentiment2 owl-carousel owl-theme">
     <?php
        if (have_rows('sentiment_carousel')) :
            while (have_rows('sentiment_carousel')) :
                the_row();
                ?>

             <div class="container">
                 <?php the_sub_field('text_carousel'); ?>
                 <p class="sent-name"><?php the_sub_field('author'); ?></p>
             </div>
     <?php
            endwhile;
        endif;
        ?>
 </section>