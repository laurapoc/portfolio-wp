    <!-- MAIN
===================================================================== -->
<section>
        <!-- viršutinis langas su nuotrauka -->
        <?php 
            $image = get_field('m_background');
            // dump($image);
        ?>
        <div class="hello" style="background-image: url(<?php echo $image['sizes']['main'] ?>);">
            <h1><?php the_field('m_heading'); ?></h1>
            <?php 
                $link = get_field('m_link');
                // dump($link);
            ?>
            
            <a class="more" href="<?php echo $link['url'] ?>" <?php echo $link['target'] ? 'target="_blank"' : ''; ?>><?php echo $link['title'] ?></a>
        </div>

    </section>