<?php
/*
Template Name: Especialidades
*/
get_header();
?>

<main class="especialidades">
    <div class="container">
        <ul class="list-especialidades">
            <?php
            $especialidades = get_field('especialidades', '8');
            if (isset($especialidades)) { foreach ($especialidades as $especialidade) { ?> 
            <li style="background: url('<?= $especialidade['imagem_especialidade']; ?>') no-repeat center center">
                <h3><?= $especialidade['nome_especialidade']; ?></h3>
                <div class="home-especialidade-detail">
                    <h4><?= $especialidade['nome_especialidade']; ?></h4>
                    <p><?= $especialidade['chamada_especialidade']; ?></p>
                    <a class="cta" href="<?= $especialidade['link_especialidade']; ?>">Entre em contato</a>	
                </div>
            </li>
            <?php } } ?>
        </ul>
    </div>
</main>

<?php get_footer(); ?>