<div class="sidebar">
	<?php
		if(is_active_sidebar('sidebar-main')){
			get_search_form();
			dynamic_sidebar('sidebar-main');
		}	
	?>
</div>

