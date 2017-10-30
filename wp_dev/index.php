<?php get_header(); ?>

<section class="container mb-5">
	<div class="row">
		<div class="col-12 mb-3">
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</div>
	</div>
</section>

<?php get_template_part('inc/speakers'); ?>

<?php get_template_part('inc/schedule'); ?>

<?php get_footer(); ?>