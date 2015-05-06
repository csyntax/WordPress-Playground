	<article class="post" id="post-<?php the_ID(); ?>">
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2 class="post-header">				
				<?php the_title(); ?>				
			</h2>
			<div class="post-content">				
				<?php the_content();?>				
			</div>			
		</div>		
	</article>