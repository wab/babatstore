<?php
/**
 * Template Name: Store
 */
?>

<?php while (have_posts()) : the_post(); ?>
	<div class="section intro">
		<div class="container">
			<div class="contenu">
				<?php get_template_part('templates/page', 'header'); ?>
  				<?php get_template_part('templates/content', 'page'); ?>
			</div>
		</div>
	</div>
<?php endwhile; ?>

<section class="stores section">
	<div class="container">
		<h2>Où dénicher et acheter les articles ?</h2>
		<ul class="nav nav-inline">
			<li class="nav-item"><a href="#" class="nav-link">Store 1</a></li>
			<li class="nav-item"><a href="#" class="nav-link">Store 2</a></li>
			<li class="nav-item"><a href="#" class="nav-link">Store 3</a></li>
		</ul>
	</div>
</section>

<section class="section bg-primary">
	<div class="container">
		<h2>Les dernières ventes</h2>
		<div class="row">
			<article class="item col-md-4">
				<p><img src="http://placehold.it/350x150" alt="" class="img-rounded img-thumbnail"></p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam quia ipsum ea incidunt harum asperiores. Quos optio sed id necessitatibus quisquam cupiditate. Minus soluta facere necessitatibus quos perspiciatis ad? Harum?</p>
			</article>
			<article class="item col-md-4">
				<p><img src="http://placehold.it/350x150" alt="" class="img-rounded img-thumbnail"></p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam quia ipsum ea incidunt harum asperiores. Quos optio sed id necessitatibus quisquam cupiditate. Minus soluta facere necessitatibus quos perspiciatis ad? Harum?</p>
			</article>
			<article class="item col-md-4">
				<p><img src="http://placehold.it/350x150" alt="" class="img-rounded img-thumbnail"></p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam quia ipsum ea incidunt harum asperiores. Quos optio sed id necessitatibus quisquam cupiditate. Minus soluta facere necessitatibus quos perspiciatis ad? Harum?</p>
			</article>
		</ul>
	</div>
</section>