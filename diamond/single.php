<?php get_header(); ?>       
	<div class="panel panel-default panel-body" id="wp-generate-content">
		<div class="row">
			<div class="col-md-4">
				<div class="sidebar">
					<?php get_sidebar();?>
				</div>
			</div>
			<div class="col-md-8">            
				<div class="posts">
					<?php
						if(have_posts()):
							while(have_posts()):
								the_post();
								get_template_part('content');
					?>										
							<ul class="pager">
								<li class="previous">  
									<?php 
										previous_post_link( '%link', '<span class="previous-post">' . _x( '&larr;', 'Previous post link', 'diamond' ) . '%title</span>' );
									?>
								</li>
								<li class="next">
									<?php 
										next_post_link( '%link', '<span class="next-post">%title' . _x( '&rarr;', 'Next post link', 'diamond' ) . '</span>' );
									?>
								</li>
							</ul>									
						<?php					
							endwhile;
						endif;
					?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer();	?>