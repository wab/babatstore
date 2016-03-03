<?php
/**
 * Template Name: Store
 */
?>

<?php while (have_posts()) : the_post(); ?>
	<div class="section intro">
		<div class="container">
			<div class="contenu">
				<a name="activity" id="activity"></a>
				<?php get_template_part('templates/page', 'header'); ?>
  				<?php get_template_part('templates/content', 'page'); ?>
			</div>
		</div>
	</div>
<?php endwhile; ?>

<section class="stores section">
	<div class="container">
		<a name="stores" id="stores"></a>
		<h2>Où dénicher et acheter les articles ?</h2>
		<ul class="nav nav-inline">
			<li class="nav-item"><a href="#" class="nav-link"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/ebay.png" alt="Ebay" height="100"></a></li>
			<li class="nav-item"><a href="#" class="nav-link"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/leboncoin.png" alt="Le Bon coin" height="100"></a></li>
			<li class="nav-item"><a href="#" class="nav-link">Store 3</a></li>
		</ul>
	</div>
</section>

<section class="section bg-primary">
	<div class="container">
		<a name="sales" id="sales"></a>
		<h2>Les dernières ventes</h2>
		<div class="row">
			<article class="item col-md-4">
				<p><img src="http://placehold.it/350x250" alt="" class="img-rounded img-thumbnail"></p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam quia ipsum ea incidunt harum asperiores. Quos optio sed id necessitatibus quisquam cupiditate. Minus soluta facere necessitatibus quos perspiciatis ad? Harum?</p>
				<hr>
			</article>
			<article class="item col-md-4">
				<p><img src="http://placehold.it/350x250" alt="" class="img-rounded img-thumbnail"></p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam quia ipsum ea incidunt harum asperiores. Quos optio sed id necessitatibus quisquam cupiditate. Minus soluta facere necessitatibus quos perspiciatis ad? Harum?</p>
				<hr>
			</article>
			<article class="item col-md-4">
				<p><img src="http://placehold.it/350x250" alt="" class="img-rounded img-thumbnail"></p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam quia ipsum ea incidunt harum asperiores. Quos optio sed id necessitatibus quisquam cupiditate. Minus soluta facere necessitatibus quos perspiciatis ad? Harum?</p>
				<hr>
			</article>
			<article class="item col-md-4">
				<p><img src="http://placehold.it/350x250" alt="" class="img-rounded img-thumbnail"></p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam quia ipsum ea incidunt harum asperiores. Quos optio sed id necessitatibus quisquam cupiditate. Minus soluta facere necessitatibus quos perspiciatis ad? Harum?</p>
				<hr>
			</article>
			<article class="item col-md-4">
				<p><img src="http://placehold.it/350x250" alt="" class="img-rounded img-thumbnail"></p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam quia ipsum ea incidunt harum asperiores. Quos optio sed id necessitatibus quisquam cupiditate. Minus soluta facere necessitatibus quos perspiciatis ad? Harum?</p>
				<hr>
			</article>
			<article class="item col-md-4">
				<p><img src="http://placehold.it/350x250" alt="" class="img-rounded img-thumbnail"></p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam quia ipsum ea incidunt harum asperiores. Quos optio sed id necessitatibus quisquam cupiditate. Minus soluta facere necessitatibus quos perspiciatis ad? Harum?</p>
				<hr>
			</article>
		</ul>
	</div>
</section>