<?php get_header()?>

<main>


			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="hero">
                                <img
                                    src="<?php echo get_the_post_thumbnail_url(); ?>"
                                    alt=""
                                >                     
								<div class="text">
								<h1><?php the_title(); ?></h1>
								<p><?php echo wpautop(the_content()); ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
</main>

</div>

<?php get_footer()?>
