<?php
/**
 * Template Name: page accueil
 */
?>

<?php while (have_posts()) : the_post(); ?>

<div class="intro">
  <?php //get_template_part('templates/content', 'page'); ?>
  <h1 class="text-xs-center logo"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo.png" alt="" width="100px"><br><?php bloginfo('name'); ?><br><small><?php bloginfo('description'); ?></small></h1>
</div>

<div class="column professionnels">
	<div class="wrapper">
		<h2><small class="thin">Vous êtes un</small> professionel</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur itaque natus totam doloremque cumque magnam fuga voluptatibus, aut voluptas harum obcaecati minus saepe doloribus est ipsa officia velit, quasi earum.</p>
		<a href="<?php bloginfo('url'); ?>/professionnels" class="btn btn-lg btn-primary-outline">Trouver votre matériel &#8594;</a>
	</div>
</div>
<div class="column particuliers">
	<div class="wrapper">
		<h2><small class="thin">Vous êtes un</small> particulier</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur itaque natus totam doloremque cumque magnam fuga voluptatibus, aut voluptas harum obcaecati minus saepe doloribus est ipsa officia velit, quasi earum.</p>
		<a href="<?php bloginfo('url'); ?>/particulier" class="btn btn-lg btn-primary-outline">Venez fouiner &#8594;</a>
	</div>
</div>

<?php endwhile; ?>


