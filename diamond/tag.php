<?php get_header(); ?>
	<div class="panel panel-default panel-body" id="wp-generate-content">
		<div class="row">
			<div class="col-md-4">				
				<?php get_sidebar();?>				
			</div>
			<div class="col-md-8">
				<div class="tags">
					<?php 
						if(have_posts()):
					?>
			<article class="tag">
				<div class="tag-title">
					<?php 
						printf( __( '<span class="tag-name">Етикет: %s', 'diamond' ),''. single_tag_title( '', false ) . '</span>' ); 
					?>
				</div>
					<?php 
						if(tag_description()): 
					?>
					<div class="tag-description">
						<?php  echo tag_description();?>
					</div>
				<?php endif; 			
					while(have_posts()){
						the_post();				
						get_template_part( 'content');
					}

			
		 else : 
			get_template_part( 'content-none'); 
		 endif; ?>
	</article>
		</div>
	</div>
	</div>
	</div>

<?php get_footer(); ?>