    <!-- galerija 
    =========================================================================================-->
    <section class="galery">
        <div id="photo_galery">
            <div class="container">
                <div class="text-block">
                    <h2><?php the_field('g_section_title'); ?></h2>
                    <P><?php the_field('g_section_description'); ?></P>
                </div>

                <div class="galery-block">
                    <div class="photo-carousel">

                        <?php
                        $images = get_field('g_photo');
                        if ($images) : ?>
                            <?php foreach ($images as $image) : ?>
                                <div class="photo">

                                    <a id="gal1" data-fancybox="galerija1" href="<?php echo esc_url($image['sizes']['gallery_big']); ?>">
                                        <img src="<?php echo esc_url($image['sizes']['gallery_small']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    </a>

                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>