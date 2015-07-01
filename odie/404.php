<?php get_header(); ?>	
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
						_e('Нищо не намери','odie');
					?>	
				</h3>
				<div class="posts">
					<div class="post-content">				
						<?php 
							_e( 'Няма такaва страница', 'odie' ); 
						?>
					</div>
				</div>				
			</div>					
		</div>	
	</div>
<?php get_footer(); ?>