<?php get_header(); ?>	
	<div class="container">
		<div class="row">             
			<div class="col-md-4">				
				<?php 
					get_search_form();				
                 	get_sidebar('main');
                 ?>
			</div>
            <div class="col-xs-12 col-md-8">                				
				<div class="posts">
					<?php 
						if(have_posts()):
							while(have_posts()):
								the_post();				
								get_template_part("content");
					?>
					<ul class="pager">
						<li class="previous">  
							<?php 
								previous_post_link('%link','<span class="previous-post">'._x( '&larr;','Предишен пост','ramones').'%title</span>');
							?>
						</li>
						<li class="next">
							<?php 
								next_post_link('%link','<span class="next-post">%title'._x('&rarr;', 'Следващ пост', 'ramones').'</span>');
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
<?php get_footer(); ?>