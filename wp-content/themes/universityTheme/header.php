<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php the_field('title_page') ?></title>

	<?php wp_head();?>

</head>

<body>
	<div class="wrapper">
		<header class="header">
			<div class="header__container">
				<div class="header__menu menu">
					<div class="menu__icon">
						<span></span>
					</div>
					<nav class="menu__body">
						<?php the_field('header_tabs'); ?>
					</nav>
				</div>
				<a href="//digital/home" class="header__title">
					<h3 class="title-page">
						<span class="title-page__first-span"><?php the_field('header_title_big') ?></span>
						<span class="title-page__second-span"><?php the_field('header_title_small') ?></span>
						<?php the_field('header_title_basic') ?>
					</h3>
				</a>
				<a href="//digital/home" class="header__logo logo">
					<?php 
						$logo_img = '';
						if( $custom_logo_id = get_theme_mod('custom_logo') ){
							$logo_img = wp_get_attachment_image( $custom_logo_id, 'full', false, array(
								'class'    => 'logo',
								'itemprop' => 'logo',
							) );
						}
						
						echo $logo_img;
					?>
				</a>
			</div>
		</header>