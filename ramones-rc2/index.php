<?php get_header(); ?>	
	<div class="container">
		<div class="row">             
			<div class="col-md-4">
				<div class="search-form">			
					<?php get_search_form(); ?>
				</div>
				<?php get_sidebar('main');?>
			</div>
            <div class="col-xs-12 col-md-8">                				
				<div class="posts">
					<?php 
						if(have_posts()){
							while(have_posts()){
								the_post();				 
								get_template_part("content");
							}
						}else{
							get_template_part("content","none");
						}
					?>	
				</div>	
				<?php ramones_content_nav( 'nav-below' ); ?>
			</div>            
		</div>		 
    </div> 
<?php get_footer(); ?>