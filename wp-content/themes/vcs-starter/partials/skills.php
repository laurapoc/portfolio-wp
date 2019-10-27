    <!-- skills blokas
    ======================================================================================== -->
    <section class="container">
        <div id="skills">
            <div class="skills_container">
                <div class="skills_block">
                    <div class="skills_contacts">
                        <div class="my_skills">
                            <h2><?php the_field('s_heading'); ?></h2>
                            <P>
                                <?php the_field('s_section_description'); ?>
                            </p>
                        </div>
                        <div class="contact_me">
                            <?php
                            $contact_link = get_field('s_contact_link');
                            // dump($contact_link);
                            ?>
                            <a id="contact_me" href="<?php echo $contact_link['url'] ?>" <?php echo $contact_link['target'] ? 'target="_blank"' : ''; ?>><?php echo $contact_link['title'] ?></a>
                        </div>
                    </div>
                </div>
                <div class="skills_block">
                    <div>
                        <div class="skills_scale">
                            <?php
                            if (have_rows('s_progress')) :
                                while (have_rows('s_progress')) :
                                    the_row();
                                    ?>
                                    <h3><?php the_sub_field('title'); ?></h3>
                            <div class="progress-bar">
                                <progress value="<?php the_sub_field('progress_bar'); ?>" max="100"></progress>
                                <span style="width: 60%;"><?php the_sub_field('text_field'); ?></span>
                            </div>
                            <?php
                                endwhile;
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>