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
						if(have_posts()){
							while(have_posts()){
								the_post();				
								get_template_part("content");
							}
						}
						else{
							get_template_part("content-none");
						}
					?>
				</div>	
			</div>            
         </div>
	</div>  
<?php get_footer(); ?>