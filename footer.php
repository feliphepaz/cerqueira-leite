	<footer>

	</footer>
	
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