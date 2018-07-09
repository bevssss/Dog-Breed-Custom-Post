<?php get_header(); ?>

<?php 
// Get the Characteristics field
if( get_field('description') ){
	$description = get_field('description');
}

// Get Dog Breed Group field
if( get_field('dog_breed_group') ){
	$dog_breed_group = get_field('dog_breed_group');
}

// Get Height field
if( get_field('height') ){
	$height = get_field('height');
}

// Get Weight field
if( get_field('weight') ){
	$weight = get_field('weight');
}

// Get Life span field
if( get_field('life_span') ){
	$life_span = get_field('life_span');
}

// Get Details Link: field
if( get_field('details_link') ){
	$details_link = get_field('details_link', false, false);
}

?>

<div class="wrap">
	<div id="primary" class="content-area description-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post();?>
		<div class="breed-description">
			<div class="container">
				<div class="col column clearfix">
					<h1 class="post-title"><?php echo get_the_title(); ?></h1>
					<p><?php echo $description; ?></p>
				</div>
			</div>
			<div class="container">
				<div class="col column clearfix">
					<h2>Vital Stats</h2>
						<div class="vitalstats">
							<p><strong>Dog Breed Group:</strong> <?php echo $dog_breed_group; ?></p>
							<p><strong>Height:</strong> <?php echo $height; ?></p>
							<p><strong>Weight:</strong> <?php echo $weight; ?> (estimated)</p>
							<p><strong>Life Span:</strong> <?php echo $life_span; ?> (estimated)</p>
							<p><a href="<?php echo $url ?>"><strong>Details Link</strong></a></p>
						</div>
				</div>
			</div>
		</div>
	<?php endwhile; ?>

</main>
	</div>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
