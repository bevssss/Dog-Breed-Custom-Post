<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>


<?php 

// Get The featured image
if( has_post_thumbnail() ){
	$featuredimg = get_the_post_thumbnail_url();
} else {
	$featuredimg = 'PATH-TO-DEFAULT-IMAGE';
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



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();?>

	
		<div class="flex-container">
			<div class="flex-item clearfix">
				<div class="dog-image">
						<img src="<?php echo get_the_post_thumbnail_url() ?>" />
				</div>
			</div>

			
				<div class="flex-item clearfix">
					<h1 class="post-title"><?php echo get_the_title(); ?></h1>
					<p><?php echo get_the_content();?> </p>
				</div>
			
			
				<div class="flex-item clearfix">
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
		

			<? the_post_navigation( array(
					'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'twentyseventeen' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
					'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'twentyseventeen' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
				) );


			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	
<!-- .wrap -->

<?php get_footer();
