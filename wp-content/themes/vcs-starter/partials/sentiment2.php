 <!-- sentiment2 blokas 
    ================================================================================-->
 <section class="sentiment2 owl-carousel owl-theme">
     <?php
        if (have_rows('sentiment_carousel')) :
            while (have_rows('sentiment_carousel')) :
                the_row();
                ?>
                
     <div class="container">
         <P><?php the_sub_field('text_carousel'); ?></P>
         <p class="sent-name"><?php the_sub_field('author'); ?></p>
     </div>
     <?php
            endwhile;
        endif;
        ?>
 </section>