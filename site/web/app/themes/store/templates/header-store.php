<header class="banner">
  <div class="container-fluid">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo.png" alt="" height="40px"> <?php bloginfo('name'); ?> <small><?php bloginfo('description'); ?></small> </a>
    <nav class="menu menu--ferdinand pull-right">
        <ul class="menu__list">
            <li class="menu__item menu__item--current"><a class="menu__link">Home</a></li>
            <li class="menu__item"><a class="menu__link">Portfolio</a></li>
            <li class="menu__item"><a class="menu__link">Blog</a></li>
            <li class="menu__item"><a class="menu__link">Shop</a></li>
            <li class="menu__item"><a class="menu__link">Contact</a></li>
        </ul>
    </nav>
  </div>
</header>
