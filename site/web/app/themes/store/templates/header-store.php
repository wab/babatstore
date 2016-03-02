<header class="banner">
  <div class="container-fluid">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo.png" alt="" height="40px"> <?php bloginfo('name'); ?> <small><?php bloginfo('description'); ?></small> </a>
    <nav class="menu menu--ferdinand pull-right">
        <ul class="menu__list">
            <li class="menu__item menu__item--current"><a class="menu__link">l'activité</a></li>
            <li class="menu__item"><a class="menu__link">les stores</a></li>
            <li class="menu__item"><a class="menu__link">les dernières ventes</a></li>
            <li class="menu__item"><a class="menu__link">contact</a></li>
        </ul>
    </nav>
  </div>
</header>
