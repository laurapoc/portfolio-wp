    <!-- FOOTER
    =================================================================== -->
    <!-- social media buttons -->
    <section class="social-media">
        <div class="container">
            <h4><?php the_field('s_section_heading'); ?></h4>
            <div class="links">
                <?php
                if (have_rows('social_media_links')) :
                    while (have_rows('social_media_links')) :
                        the_row();
                        ?>
                        <?php $media_link = get_sub_field('link'); ?>
                        <a href="<?php echo $media_link['url'] ?>" <?php echo $media_link['target'] ? 'target="_blank"' : ''; ?>><?php the_sub_field('icon'); ?></a>
                <?php
                    endwhile;
                endif;
                ?>
                <!-- <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
                <a href="#"><i class="fab fa-linkedin fa-2x"></i></a> -->
            </div>
        </div>
    </section>