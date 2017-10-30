<!-- Event Schedule -->
<section class="container mb-5 schedule">
	<div class="row">
		<div class="col-12 mb-4">
			<h3>Schedule</h3>
			<hr class="mb-2">
		</div>
	</div>
		<?php 
			$args = array(
				'post_type'	=>	'schedule',
				'order' => 'ACS',
			);

			$the_query = new WP_Query($args);
		?>

		<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<div class="row">
				<div class="col-12 col-md-3 text-center schedule-time pt-4">
					<strong><?php the_field('start_time'); ?> &ndash; <?php the_field('end_time'); ?></strong>
				</div>
				<div class="col-12 col-md-9 pb-2 pt-4 pl-md-4 pl-lg-5">
					<h5><?php the_title(); ?></h5>
					<?php the_content(); ?>
				</div>
			</div>
		<?php endwhile; endif; ?>
	</div>
</section>
<!-- End Event Schedule -->