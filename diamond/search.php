<?php get_header(); ?>
	<div class="panel panel-default panel-body" id="wp-generate-content">
		<div class="row">
			<div class="col-md-4">
				<div class="sidebar">
					<?php get_sidebar();?>
				</div>
			</div>
			<div class="col-md-8">
				<div class="search">
				<article class="search-results results found">
					<?php if (have_posts()): ?>		
						<div class="search-results-for">
							<?php 
								echo '<span class="glyphicon glyphicon-search search-icon"></span>';
								printf( __( 'Намерени резултати за: %s', 'diamond' ), '<span id="search-keyword">' . get_search_query() . '</span>' ); 
							?>
						</div>			
						<?php 
							while(have_posts()){
								the_post(); 
								get_template_part( 'content', get_post_format()); 
							}
						?>
				</article>
					<?php else : ?>
						<article class="search-results no-results not-found">				
							<div class="entry-title">
								<?php 
									echo '<span class="glyphicon glyphicon-search search-icon"></span>';
									_e('Нищо не е намерено:', 'diamond');
								?>
							</div>
							<div class="entry-content">								
									<?php
										_e('пробвайте с друга ключова дума<br>', 'diamond' ); 																
										get_search_form();
									?>
							</div>
						</article>
						
		<?php endif; ?>
	</div>
	</div>
	</div>
	</div>
<?php get_footer(); ?>