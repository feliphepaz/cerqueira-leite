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
            <div class="slide" id="slide-lideres">
                <ul>
                    <?php
                    $especialistas = get_field('especialistas', '8');
                    if (isset($especialistas)) { foreach ($especialistas as $especialista) { ?> 
                        <li style="background: url('<?= $especialista['imagem_especialista']; ?>') no-repeat center center">
                            <div>
                                <h3><?= $especialista['nome_especialista']; ?></h3>
                                <p><?= $especialista['descricao_especialista']; ?></p>
                            </div>
                        </li>
                    <?php } } ?>
                    </ul>
            </div>
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
            <div class="slide" id="slide-juridico">
                <ul>
                    <?php
                    $juridicos = get_field('juridicos');
                    if (isset($juridicos)) { foreach ($juridicos as $juridico) { ?> 
                        <li style="background: url('<?= $juridico['imagem_juridico']; ?>') no-repeat center center">
                            <div>
                                <h3><?= $juridico['nome_juridico']; ?></h3>
                                <p><?= $juridico['descricao_juridico']; ?></p>
                            </div>
                        </li>
                    <?php } } ?>
                </ul>
            </div>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <?php
                    $juridicos = get_field('juridicos');
                    if (isset($juridicos)) { foreach ($juridicos as $juridico) { ?> 
                        <div style="background: url('<?= $juridico['imagem_juridico']; ?>') no-repeat center center" class="swiper-slide">
                            <div>
                                <h3><?= $juridico['nome_juridico']; ?></h3>
                                <p><?= $juridico['descricao_juridico']; ?></p>
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
            <div class="slide" id="slide-staff">
                <ul>
                    <?php
                    $staffs = get_field('staffs');
                    if (isset($staffs)) { foreach ($staffs as $staff) { ?> 
                        <li style="background: url('<?= $staff['imagem_staff']; ?>') no-repeat center center">
                            <div>
                                <h3><?= $staff['nome_staff']; ?></h3>
                                <p><?= $staff['descricao_staff']; ?></p>
                            </div>
                        </li>
                    <?php } } ?>
                </ul>
            </div>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <?php
                    $staffs = get_field('staffs');
                    if (isset($staffs)) { foreach ($staffs as $staff) { ?> 
                        <div style="background: url('<?= $staff['imagem_staff']; ?>') no-repeat center center" class="swiper-slide">
                            <div>
                                <h3><?= $staff['nome_staff']; ?></h3>
                                <p><?= $staff['descricao_staff']; ?></p>
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