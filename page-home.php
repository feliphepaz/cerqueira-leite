<?php
/*
Template Name: Home
*/
get_header();
?>

<main class="home">
    <section class="home-especialistas">
        <div class="container">
            <h2 class="title">Nossos Especialistas</h2>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <?php
                    $especialistas = get_field('especialistas');
                    if (isset($especialistas)) { foreach ($especialistas as $especialista) { ?> 
                        <div style="background: url('<?= $especialista['imagem']; ?>') no-repeat center center" class="swiper-slide">
                            <div>
                                <h3><?= $especialista['nome']; ?></h3>
                                <p><?= $especialista['descricao']; ?></p>
                            </div>
                        </div>
                    <?php } } ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>