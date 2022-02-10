	<!DOCTYPE html>
	<html lang="ru">
	<head>
		<meta charset="UTF-8">  
		<!--meta name="viewport" content="width=1200px"-->
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />            
		<meta name="viewport" content="width=device-width, initial-scale=1">		
		<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
		<?php wp_head(); ?>
		<script>
			/*jQuery.noConflict();*/
		</script>	
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="<? bloginfo('template_url') ?>/css/slick.css">
		<link rel="stylesheet" href="<? bloginfo('template_url') ?>/css/jquery.fancybox.min.css">
		<link rel="stylesheet" href="<? bloginfo('template_url') ?>/css/main.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body <?php body_class(); ?>>
	<div class="wrapper" id="wrapper">
		<header class="header">
			<?php $post = get_post(13); ?>
			<div class="top">
				<div class="contain">
					<div class="top__row">
						<a href="/" class="logo"><img src="<? bloginfo('template_url') ?>/img/logo.svg"></a>
						<div class="col-mnu">
							<div class="hidden-mnu">
								<a href="#" class="toggle-mnu"><span></span></a>
							</div>
							<?php wp_nav_menu('menu=top-mnu'); ?>
						</div>
						<div class="top__phone-lang">							
							<a href="tel:<?php echo get_field('phone_number'); ?>" class="top__phone"><?php echo get_field('phone_number'); ?></a>
							<div class="top__lang"><img src="<? bloginfo('template_url') ?>/img/lang.svg" /></div>
						</div>
					</div>
				</div>
			</div>
			<?php wp_reset_postdata(); ?>
		</header>