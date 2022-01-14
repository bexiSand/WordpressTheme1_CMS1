<?php if (have_posts()) :
								while (have_posts()) : the_post(); ?>
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
										<i class="fa fa-user"></i> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
									</li>
									<li>	
										<i class="fa fa-tag"></i> 
										<?php 
											$categories = get_the_category();
											$separator = " , ";
											$output = ''; 

											if ($categories) {

												foreach ($categories as $category) {

													$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;
												
												}

											echo trim($output, $separator);

											}

											?>
									</li>
									</ul>
									<?php wpautop(the_content()); ?>
							</article>
							<?php endwhile; ?>
							
					<nav class="navigation pagination">
					<?php echo paginate_links(); ?>
					</nav>

							<?php
							else : 

								echo '<p>Det finns inga blogginlägg</p>';
							endif;
							?>