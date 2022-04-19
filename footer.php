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
				<a href="/cerqueiraleite/politica-de-privacidade">Política de Privacidade</a>
				<a href="https://www.claataxassessment.com.br/" target="_blank">CLA Tax Assessment</a>
			</div>
		</div>
	</footer>

	<section class="copyright">
		<div class="container">
			<legend>Desenvolvido por Formulaviral - Todos os direitos reservados - 2021.</legend>
		</div>
	</section>

	<div class='cookie-container'>
      <div class='cookie'>
        <p>Permito o uso de cookies para:</p>
        <label for="marketing"><input type="checkbox" name='marketing' id="marketing" checked>Análise de Marketing</label>
        <label for="analytics"><input type="checkbox" name='analytics' id="analytics" checked>Analytics</label>
      </div>
      <button class='cta'>Salvar & Continuar</button>
    </div>
	
	<!-- Footer do Wordpress -->
	<?php wp_footer(); ?>
	<!-- Footer do Wordpress -->

	<!-- Swiper -->
	<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
	<script>
		const swiper = new Swiper('.swiper', {
			loop: true,
			slidesPerView: 1,
			pagination: {
				el: '.swiper-pagination',
			},
			breakpoints: {
				850: {
				slidesPerView: 2,
				},
  			}
		});
	</script>
	<!-- Swiper -->
</script>
</body>
</html>