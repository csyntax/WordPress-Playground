	<article class="post" id="post-<?php the_ID(); ?>">
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2 class="post-header">				
				<a href="<?php the_permalink(); ?>" title="<?php sprintf( __( 'Permanent Link to %s', 'odie' ), the_title_attribute( 'echo=0' ) ); ?>">
					<?php the_title(); ?>
				</a>
			</h2>
			<div class="post-content">				
				<?php the_content();?>				
			</div>
			<div class="post-date">
				<?php the_date();?>
			</div>
			<div class="post-category">
				<?php the_category();?>
			</div>		
		</div>		
	</article>