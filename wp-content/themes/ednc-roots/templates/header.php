<header id="header" class="banner visible-md-block visible-lg-block" role="banner">
  <div class="container-fluid">
    <div class="logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/public/imgs/logo-ednc.svg" alt="EducationNC" /></a>
    </div>

    <div class="caption">Including you in a conversation about our public schools</div>

    <div class="pull-right text-right">
      <ul class="list-inline minor-links small">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'minor_navigation',
          'container' => false,
          'items_wrap' => '%3$s'
        ));
        ?>
        <li><a href="" onclick="doGoogleLanguageTranslator('en|es'); return false;" title="en Español">en Español</a></li>
      </ul>

      <div class="search">
        <form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
          <div class="row">
            <div class="col-sm-12">
              <div class="input-group">
                <input class="form-control input-sm" type="text" placeholder="Search..." name="s" />
                <span class="input-group-btn">
                  <input type="submit" class="btn btn-sm" value="Go" class="postfix" />
                </span>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-default" data-topbar role="navigation">

    <div class="navbar-left">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'primary_navigation',
        'container' => false,
        'menu_class' => 'nav navbar-nav'
      ));
      ?>
    </div>

    <div class="navbar-right">
      <div class="social-media">
        <ul class="list-inline">
          <li><a class="icon-facebook" href="http://facebook.com/educationnc" target="_blank"></a></li>
          <li><a class="icon-twitter" href="http://twitter.com/educationnc" target="_blank"></a></li>
          <li><a class="icon-youtube" href="https://www.youtube.com/channel/UCJto5My-_AVw1Nx5AGq8TEQ" target="_blank"></a></li>
          <!-- <li><a class="icon-gplus" href="https://plus.google.com/100573388543000216336/about" target="_blank"></a></li> -->
          <!-- <li><a class="icon-instagram" href="#"></a></li> -->
          <!-- <li><a class="icon-linkedin" href="#"></a></li> -->
        </ul>
      </div>

      <div class="btn-group">
        <a href="<?php echo get_permalink('1491'); ?>" class="btn btn-default btn-lg"><small>Get Involved</small></a>
        <a href="https://support.ednc.org/donate" class="btn btn-primary btn-lg"><small>Donate Now</small></a>
      </div>
    </div>
  </nav>
</header>
