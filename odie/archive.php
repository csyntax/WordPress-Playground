<?php get_header();?>	
	<div class="container">
		<div class="row">             
			<div class="col-md-4 sidebar">				
				<?php 
					get_search_form();				
                 	get_sidebar('main');
                 ?>
			</div>
            <div class="col-xs-12 col-md-8">
                <h3 class="post-header">
					<?php
						if (is_day()):
							printf(__('<span class="arhive-post-date" id="day">Дневен Архив: %s', 'odie'),''.get_the_date().'</span>');					
						elseif (is_month()):
								printf(__('<span class="arhive-post-date" id="month">Месечен Архив: %s', 'odie'),''.get_the_date( _x( 'F Y','monthly archives date format', 'diamond')).'</span>');
						elseif (is_year()):
								printf(__('<span class="arhive-post-date" id="year">Годишен Архив: %s', 'odie'),''.get_the_date( _x('Y','yearly archives date format', 'diamond')).'</span>' );
						else :
							_e( 'Архив', 'diamond' );
						endif;
					?>
				</h3>		
				<div class="posts">
					<?php 
						if(have_posts()){
							while(have_posts()){
								the_post();
								get_template_part("content");
							}
						}else{
							get_template_part( 'content-none');
						}
					?>
				</div>	
			</div>            
         </div>
    </div>  
<?php get_footer(); ?>