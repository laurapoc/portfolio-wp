  <!-- contact me blokas 
    =====================================================================================-->
  <section class="contact-info">
      <div id="contact_me_block">
          <div class="container">
              <h2><?php the_field('c_heading'); ?></h2>
              <div class="contact-container">
                  <div class="input">
                      <?php the_field('c_description'); ?>
                      <?php the_field('c_post_address'); ?>

                      <div class="contact">
                          <?php
                            if (have_rows('c_address_links')) :
                                while (have_rows('c_address_links')) :
                                    the_row();
                                    ?>
                                  <?php $contact_link = get_sub_field('sub_link'); ?>
                                  <p><span class="span-link"><?php the_sub_field('sub_links_name'); ?></span><a class="contact-link" href="<?php echo $contact_link['url'] ?>" <?php echo $contact_link['target'] ? 'target="_blank"' : ''; ?>><?php echo $contact_link['title'] ?></a></p>
                          <?php
                                endwhile;
                            endif;
                            ?>
                      </div>
                  </div>
                  <div class="input">
                      <?php echo do_shortcode(get_field('c_form_shortcode')); ?>
                  </div>
              </div>
          </div>
      </div>
  </section>