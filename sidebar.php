
<!----------------------hämtar innehållet i widgeten------------------------->

<?php if(is_active_sidebar("sidebar1")):?>
	<aside id="secondary" class="col-xs-12 col-md-3">
		<div id="sidebar">
    		<ul>
        		<?php dynamic_sidebar("sidebar1"); ?>
			</ul>
		</div>
	</aside>
<?php endif; ?>

					
