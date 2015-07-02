<?php get_header(); ?>	
    <div class="row">
        <div class="col-md-4 sidebar">				
            <?php 
                get_search_form();				
                get_sidebar("main");
            ?>
        </div>
        <div class="col-xs-12 col-md-8">	
            <h3 class="not-found">				
		<?php 
                    _e("Noting found", "odie");
		?>	
            </h3>								
	</div>					
    </div>	
<?php get_footer(); ?>