<?php
/*
Template Name: Equipe
*/
get_header();
?>

<main class="equipe">
    <section class="lideres">
        <div class="container">
            <h2 class="title">Líderes</h2>
            <p class="lideres-text">Cinco Heads tomam a frente das áreas de atuação do escritório, tomando decisões importantes e direcionando os casos com base em suas vastas experiências.</p>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <?php
                    $especialistas = get_field('especialistas', '8');
                    if (isset($especialistas)) { foreach ($especialistas as $especialista) { ?> 
                        <div style="background: url('<?= $especialista['imagem_especialista']; ?>') no-repeat center center" class="swiper-slide">
                            <div>
                                <h3><?= $especialista['nome_especialista']; ?></h3>
                                <p><?= $especialista['descricao_especialista']; ?></p>
                            </div>
                        </div>
                    <?php } } ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section> 

    <section class="home-cta">
        <div class="container">
            <h2 class="title">Corpo Jurídico</h2>
            <p>Especializado nas mais diversas áreas do direito corporativo, nosso corpo jurídico é formado por advogados preparados para atender a demanda de sua empresa.</p>
        </div>              
    </section>

    <section class="lideres">
        <div class="container">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <?php
                    $especialistas = get_field('especialistas', '8');
                    if (isset($especialistas)) { foreach ($especialistas as $especialista) { ?> 
                        <div style="background: url('<?= $especialista['imagem_especialista']; ?>') no-repeat center center" class="swiper-slide">
                            <div>
                                <h3><?= $especialista['nome_especialista']; ?></h3>
                                <p><?= $especialista['descricao_especialista']; ?></p>
                            </div>
                        </div>
                    <?php } } ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section> 

    <section class="home-cta">
        <div class="container">
            <h2 class="title">Staff</h2>
            <p>Altamente capaz, a nossa equipe administrativa atende nossas necessidades internas ou externas, sempre com um atendimento transparente e de altíssima qualidade.</p>
        </div>              
    </section>

    <section class="lideres">
        <div class="container">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <?php
                    $especialistas = get_field('especialistas', '8');
                    if (isset($especialistas)) { foreach ($especialistas as $especialista) { ?> 
                        <div style="background: url('<?= $especialista['imagem_especialista']; ?>') no-repeat center center" class="swiper-slide">
                            <div>
                                <h3><?= $especialista['nome_especialista']; ?></h3>
                                <p><?= $especialista['descricao_especialista']; ?></p>
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