<?php
    /* Template Name: Template Right Sidebar */
?>

<?php get_header(); ?>

<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
						<h1><?php the_title(); ?></h1>
						<p><?php echo wpautop(the_content()); ?></p>
						</div>
                        <?php get_template_part("./partials/sidemenu"); ?>
					</div>
				</div>
			</section>
</main>

<?php get_footer(); ?>