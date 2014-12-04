	<article class="post" id="post-<?php the_ID(); ?>">
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2 class="post-header">
				<?php 
					echo '<span class="glyphicon glyphicon-search search-icon"></span>';
					_e('Нищо не е намерено:');
				?>
			</h2>
			<div class="post-content">			
				<?php 
					_e('Пробвайте с друга ключова дума.<br>');
					get_search_form();
				?>
			</div>									
		</div>		
	</article>