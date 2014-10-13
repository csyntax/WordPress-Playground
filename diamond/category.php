<?php get_header(); ?>
	<div class="panel panel-default panel-body" id="wp-generate-content">
			<div class="row">
				<div class="col-md-4">				
					<?php get_sidebar();?>				
				</div>
				<div class="col-md-8">            
					<div class="categories">
						<?php if(have_posts()): ?>
						<article class="category">
							<div class="category-title">
								<?php 
									printf( __( '<span class="category-name">Категория: %s', 'diamond' ), '' . single_cat_title( '', false ) . '</span>' );
								?>
							</div>
						<?php if(category_description()): ?>
							<div class="category-description">
								<?php echo category_description(); ?>
							</div>
						<?php 
							endif;						
							while (have_posts()){ 
								the_post();
								get_template_part('content');
							}
							else : 
								get_template_part('content-none');
							endif;
						?>
					</article>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>