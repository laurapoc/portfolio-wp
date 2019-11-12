    <!-- education/experience blokas 
    ===================================================================================-->
    <section class="education_experience">
        <div id="education">
            <div class="container new">
                <h2><?php the_field('e_section_1_title'); ?></h2>
                <div class="education">
                    <div class="education_paragraph">
                    <?php the_field('e_section_1_description'); ?>
                    </div>
                    <div class="education_paragraph">
                        <?php
                        if (have_rows('e_sub_section_1')) :
                            while (have_rows('e_sub_section_1')) :
                                the_row();
                                ?>
                                <div class="education_list">
                                    <h3><?php the_sub_field('e_sub_title'); ?></h3>
                                    <p class="education_date"><?php the_sub_field('e_date'); ?></p>
                                    <div class="diploma_photo_link">
                                        <?php
                                                $diploma_link = get_sub_field('diploma_link');
                                                // dump($diploma_link);
                                                ?>
                                        <a href="<?php echo $diploma_link['url'] ?>" <?php echo $diploma_link['target'] ? 'target="_blank"' : ''; ?>><?php echo $diploma_link['title'] ?></a>
                                    </div>
                                    <?php the_sub_field('e_sub_description'); ?>
                                    <p class="education_description">                                    
                                    </p>
                                </div>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- ======================================================================== -->
        <div id="experience">
            <div class="container">
                <h2><?php the_field('ex_section_2_title'); ?></h2>
                <div class="experience">
                    <div class="experience_paragraph">
                    <?php the_field('ex_section_2_description'); ?>
                    </div>
                    <div class="experience_paragraph">
                        <?php
                        if (have_rows('ex_sub_section_2')) :
                            while (have_rows('ex_sub_section_2')) :
                                the_row();
                                ?>
                                <div class="experience_list">
                                    <h3><?php the_sub_field('ex_sub_title'); ?></h3>
                                    <p class="experience_date"><?php the_sub_field('ex_date'); ?></p>
                                    <?php the_sub_field('ex_sub_description'); ?> 
                                    <p class="education_description">                                    
                                    </p>
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