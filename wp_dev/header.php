<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title(); ?></title>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	
<div id="wrapper">
	<header>
		<div class="aspot jumbotron">
			<div class="m-align">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-10 col-lg-8 col-xl-6">
							<h1><?php the_field('event_title'); ?></h1>
							<h2><?php the_field('event_sub_heading'); ?></span></h2>
							<p><?php the_field('event_copy'); ?></p>
							<ul class="dates mb-4">
								<li>Monday, June 6<sup>th</sup></li>
								<li>Tuesday, June 7<sup>th</sup></li>
								<li>Wendsday, June 8<sup>th</sup></li>
							</ul>
							<?php if(is_front_page()): ?>

								<a href="#" class="btn-primary">Register</a>

							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<main>
