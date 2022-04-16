<!DOCTYPE html>
<!--[if IE]>	<html class="no-js ie"> <![endif]-->
<!--[if !IE]><!-->	<html class="no-js" lang="pt-br"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php bloginfo('name'); ?></title>

	<meta name="author" content="<?php bloginfo('name'); ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Wordpress Header -->
	<?php wp_head(); ?>
	<!-- Wordpress Header -->

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins&family=Questrial&display=swap" rel="stylesheet">
	<!-- Fonts -->

	<!-- Swiper Styles -->
	<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
	<!-- Swiper Styles -->
</head>

<body>

	<header class="header">
		<div class="container">
			<div class="header-top">
				<a href="/cerqueiraleite"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo-cerqueira.png" alt=""></a>
				<nav class="header-menu">
					<?php
						$args = array(
							'menu' => 'principal',
							'container' => false
						);
						wp_nav_menu($args);
					?>
				</nav>
			</div>
			<div class="header-main">
				<?php if (is_page_template('page-home.php')) { ?>
					<h1>Excelência em Direito Corporativo</h1>
					<p>Com uma abordagem equilibrada e moderna entregamos resultados consistentes</p>
					<a class="cta" href="">Fale com um advogado</a>	
				<?php } ?>	

				<?php if (is_page_template('page-sobre.php')) { ?>
					<h1>Conheça o Cerqueira Leite</h1>
				<?php } ?>	

				<?php if (is_page_template('page-equipe.php')) { ?>
					<h1>Quem faz tudo acontecer</h1>
					<p>Por trás de cada case de sucesso, existe uma equipe de advogados e staff dedicados</p>
				<?php } ?>

				<?php if (is_page_template('page-especialidades.php')) { ?>
					<h1>Somos especialistas em direito corporativo</h1>
					<p>O Cerqueira Leite Advogados Associados é formado por profissionais do mais alto nível, preparados para atender às mais diversas demandas do mundo empresarial. Está procurando uma área de atuação em específico? Procure na lista abaixo e clique para saber mais</p>
				<?php } ?>
			</div>
		</div>
	</header>