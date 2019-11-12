    <!-- "about me" blokas
    ============================================================================== -->
    <section class="about">
        <?php
        $image = get_field('a_profile');
        // dump($image);
        ?>
        <div class="about_container">
            <img src="<?php echo $image['sizes']['profile_small'] ?>" srcset="
            <?php echo $image['sizes']['profile_medium'] ?> 1000w,
            <?php echo $image['sizes']['profile_large'] ?>  2000w" sizes="(max-width: 1000px) 900px, (max-width: 2000px) 1200px" alt="<?php bloginfo('name'); ?>" />
            <div id="about_me">
                <div class="container">

                    <h2><?php the_field('a_section_title'); ?></h2>
                    <?php the_field('a_section_description'); ?>
                    <div class="about_details">

                        <?php
                        if (have_rows('a_sub_section_repeater')) :
                            while (have_rows('a_sub_section_repeater')) :
                                the_row();
                                ?>
                                <div class="about_column">
                                    <div class="icon">
                                        <?php the_sub_field('icon'); ?>
                                    </div>
                                    <div class="icon_block">
                                        <h3><?php the_sub_field('sub_title'); ?></h3>
                                        <?php the_sub_field('sub_description'); ?>
                                    </div>
                                </div>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>