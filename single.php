<?php

get_header(); ?>

<main>
<div class="site-content clearfix">
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							
								
			
			<?php if (have_posts()) :
				while (have_posts()) : the_post();

				if (get_post_format() == false) {
					get_template_part('content', 'single');
				} else {
					get_template_part('content', get_post_format());
                }
                ?>
                <article>
								<img
                            	src="<?php echo get_the_post_thumbnail_url(); ?>"
                            	alt=""
                           		>    
									<h2 class="title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h2>
									<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i><?php the_time ('j F, Y'); ?>
									</li>
									<li>
										<i class="fa fa-user"></i> <a href="author.php"><?php the_author(); ?></a>
									</li>
									<li>	
										<i class="fa fa-tag"></i><?php the_category( ', ' ); ?> 
									</li>
									</ul>
									<?php wpautop(the_content()); ?>
				</article>
            <?php
				endwhile;

				else :
					echo '<p>No content found</p>';

				endif;
			
			?>
			
                            
                            </article>
						</div>
						<?php get_sidebar(); ?>
					</div>
				</div>
			</section>
        </main>

<?php get_footer(); ?>