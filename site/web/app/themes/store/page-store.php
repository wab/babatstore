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
		<h2>Où acheter les articles ?</h2>
		<ul class="row storelist list-unstyled">
			<li class="col-md-2 col-sm-6 col-xs-12 item"><a href="#" class="nav-link"><p>
				<img src="<?php echo get_template_directory_uri(); ?>/dist/images/ebay.png" alt="Ebay" height="50" class="img-fluid">
			</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim necessitatibus est asperiores quos tempore perspiciatis !</p></a></li>
			<li class="col-md-2 col-sm-6 col-xs-12 item"><a href="#" class="nav-link">
				<p><img src="<?php echo get_template_directory_uri(); ?>/dist/images/leboncoin.png" alt="Le Bon coin" height="50" class="img-fluid"></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis minima iusto, soluta iste dolorem molestias quae dolorum. Odio esse iste voluptas asperiores. </p></a></li>
			<li class="col-md-2 col-sm-6 col-xs-12 item"><a href="#" class="nav-link">
				<p><img src="<?php echo get_template_directory_uri(); ?>/dist/images/priceminister.png" alt="Priceminister" height="50" class="img-fluid">
			</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit quibusdam totam nisi placeat voluptatum magni soluta quo debitis, aliquid quam.</p></a></li>
			<li class="col-md-2 col-sm-6 col-xs-12 item"><a href="#" class="nav-link">
				<p><img src="<?php echo get_template_directory_uri(); ?>/dist/images/amazon.png" alt="Amazon" height="50" class="img-fluid">
			</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos quod impedit cumque asperiores quo placeat facere</p></a></li>
			<li class="col-md-2 col-sm-6 col-xs-12 item"><a href="#" class="nav-link">
				<p><img src="<?php echo get_template_directory_uri(); ?>/dist/images/discogs.png" alt="Discogs" height="50" class="img-fluid">
			</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam eos alias vitae facilis, dolore.</p></a></li>
		</ul>
	</div>
</section>
<section class="section newsletter">
	<div class="container">
		<h2>Inscrivez-vous à la newsletter</h2>
		<form class="form-inline">
			<div class="form-group">
				<label class="sr-only" for="email">votre email</label>
				<input type="email" class="form-control" id="email" placeholder="Entrez votre email">
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary">
			</div>
		</form>
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