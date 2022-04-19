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
            <a class="btn" href="/cerqueiraleite/equipe">Ver toda a equipe</a>
        </div>
    </section>

    <section class="home-cta">
        <div class="container">
            <h2 class="title">Comprometidos com seu sucesso</h2>
            <p>Com uma abordagem equilibrada e moderna, entregamos resultados consistentes, sustentados em 17 anos de experiência no direito corporativo</p>
            <a class="cta" href="/cerqueiraleite/contato">Entre em contato</a>
        </div>              
    </section>

    <section class="home-especialidades">
        <div class="container">
            <h2 class="title">Especialidades</h2>
            <ul class="list-especialidades">
                <?php
                $especialidades = get_field('especialidades');
                if (isset($especialidades)) { foreach (array_slice($especialidades, 0, 9) as $especialidade) { ?> 
                <li style="background: url('<?= $especialidade['imagem_especialidade']; ?>') no-repeat center center">
                    <h3><?= $especialidade['nome_especialidade']; ?></h3>
                    <div class="home-especialidade-detail">
                        <h4><?= $especialidade['nome_especialidade']; ?></h4>
                        <p><?= $especialidade['chamada_especialidade']; ?></p>
                        <a class="cta" href="<?= $especialidade['link_especialidade']; ?>">Saiba Mais</a>	
                    </div>
                </li>
                <?php } } ?>
            </ul>
            <a class="btn" href="/cerqueiraleite/especialidades">Ver mais</a>
        </div>
    </section>

    <section class="home-contato">
        <div class="container">
            <div>
                <h3>A sua empresa segura perante a lei</h3>
                <p>Preencha os campos abaixo e um advogado especializado entrará em contato com você.</p>
                <form action="/">
                    <input type="text" placeholder="Nome Completo"></input>
                    <input type="tel" placeholder="Telefone"></input>
                    <input type="email" placeholder="E-mail"></input>
                    <select>
                        <option>Especialista que precisa</option>
                        <option>Cível</option>
                        <option>Ambiental</option>
                        <option>Agronegócio</option>
                    </select>
                    <input type="submit"></input>
                </form>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>