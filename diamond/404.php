<?php get_header(); ?>
	<div class="panel panel-default" id="wp-generate-content">
		<div class="panel-body">
			<div class="row">
				<div class="col-md-4">				
					<?php get_sidebar();?>				
				</div>
				<div class="col-md-8">            
					<div class="error" data-controler="404-error">
						<article id="error" class="error404 no-results not-found">				
							<div id="no-content">
								<?php 
									_e('Нищо не е намерено','diamond');
								?>						
							</div>			
							<div id="no-page">
								<?php 
								_e( 'Няма такава страница', 'diamond' ); 
								?>
							</div>				
						</article>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>