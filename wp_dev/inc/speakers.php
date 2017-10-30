<!-- Speakers -->
<section class="container mb-5">
	<div class="row">
		<div class="col-12 mb-3">
			<h3>Speakers</h3>
			<hr class="mb-2">
		</div>
		<?php 
			$args = array(
				'post_type'	=>	'speakers'
			);

			$the_query = new WP_Query($args);
		?>

		<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div class="col-12 col-md-3">
					<img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid mb-3">
					<h6><?php the_title(); ?></h6>
					<?php the_content(); ?>
				</div>
			<?php endwhile; endif; ?>
	</div>
</section>
<!-- End Speakers -->