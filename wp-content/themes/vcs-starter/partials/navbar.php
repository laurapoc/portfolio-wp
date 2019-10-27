  <!-- NAVBAR
    ================================================================== -->
  <!-- menu juosta -->
  <header>
      <section class="container">
          <a href="#main-menu" id="main-menu-toggle" class="burger" aria-label="Open main menu">
              <span class="sr-only"></span>
              <span class="fa fa-bars" aria-hidden="true"></span>
          </a>
          <div class="menu">
              <nav class="main-nav">
                  <div class="img">
                      <?php
                        $image = get_field('logo', 'option');
                        ?>
                      <img id="logo" src="<?php echo $image['sizes']['logo']; ?>" alt="<?php bloginfo('name'); ?>">
                  </div>
                  <?php
                    $menu_settings = [
                        'manu_class' => false,
                        'container' => false,
                        'theme_location' => 'primary-navigation'
                    ];
                    wp_nav_menu($menu_settings);
                    ?>
              </nav>
          </div>
      </section>
  </header>