<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php wp_title();?></title>

	<?php wp_head();?> 
</head>
<body <?php body_class(); ?>>

		<header id="header">
		
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
						<a class="logo" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
					</div>
					<div class="col-sm-6 hidden-xs">
						<?php get_search_form(); ?>
					</div>
					<div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
							<i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="mobile-search">
			<form id="searchform" class="searchform">
				<?php get_search_form(); ?>
			</form>
        </div>

		<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">

						<?php
						$arguments =[
						"theme_location" => "primary-menu",
						"container" => "nav",
						];

						$menuItems = wp_nav_menu($arguments);
						?>

					</div>
				</div>
			</div>
		</nav> 
