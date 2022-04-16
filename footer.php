	<footer class="footer">
		<div class="container">
			<div>
				<img class="footer-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo-cerqueira-alt.png" alt="">
				<nav class="footer-redes">
					<ul>
						<li>
							<a href="https://www.facebook.com/cerqueiraLeiteadvogadosassociados" target="_blank">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/facebook.svg" alt="">
							</a>
						</li>
						<li>
							<a href="https://www.instagram.com/cerqueiraleite.adv" target="_blank">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/instagram.svg" alt="">
							</a>
						</li>
						<li>
							<a href="https://www.linkedin.com/company/cerqueira-leite-advogados-associados" target="_blank">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/linkedin.svg" alt="">
							</a>
						</li>
					</ul>
				</nav>
			</div>
			<div>
				<p>
					CEB – Centro Empresarial Berrini
					<br>
					Av. Nova Independência, 87
					<br>
					10° Andar – CEP 04570-000 – Brooklin
					<br>
					São Paulo – Brasil
				</p>
			</div>
			<div>
				<p>
					atendimento@cerqueiraleite.com.br
					<br>
					Telefone/Fax: 55 (0xx17) 3222-6383
					<br>
					Telefone: 55 (0xx11) 2884-4878
					<br>
					Fax: 55 (0xx11) 2884-4877
				</p>
			</div>
			<div>
				<a href="">Política de Privacidade</a>
			</div>
		</div>
	</footer>

	<section class="copyright">
		<div class="container">
			<legend>Desenvolvido por Formulaviral - Todos os direitos reservados - 2021.</legend>
		</div>
	</section>
	
	<!-- Footer do Wordpress -->
	<?php wp_footer(); ?>
	<!-- Footer do Wordpress -->

	<!-- Swiper -->
	<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
	<script>
		const swiper = new Swiper('.swiper', {
			loop: true,
			slidesPerView: 2,
			pagination: {
				el: '.swiper-pagination',
			},
		});
	</script>
	<!-- Swiper -->
</script>
</body>
</html>