<?php get_header(); ?>
	<div class="panel panel-default" id="wp-generate-content">
		<div class="panel-body">
			<div class="row">
				<div class="col-md-4">				
					<?php get_sidebar();?>				
				</div>
				<div class="col-md-8">            
					<div class="archives" data-controler="archives">
						<?php if( have_posts()): ?>
							<article class="archive">
								<div class="archive-title">
									<?php
										if (is_day()):
											printf(__('<span class="arhive-post-date" id="day">Дневен Архив: %s', 'diamond'),''.get_the_date().'</span>');					
										elseif (is_month()):
											printf(__('<span class="arhive-post-date" id="month">Месечен Архив: %s', 'diamond'),''.get_the_date( _x( 'F Y','monthly archives date format', 'diamond')).'</span>');
										elseif (is_year()):
											printf(__('<span class="arhive-post-date" id="year">Годишен Архив: %s', 'diamond'),''.get_the_date( _x('Y','yearly archives date format', 'diamond')).'</span>' );
										else :
											_e( 'Архив', 'diamond' );
										endif;
									?>
								</div>
								<?php			
									while(have_posts()){
										the_post();				
										get_template_part( 'content', get_post_format() );
									}			
									else :
										get_template_part( 'content-none');
									endif; 
								?>
						</article>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>