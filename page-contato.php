<?php
/*
Template Name: Contato
*/
get_header();
?>

<main class="contato">
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

    <section class="home-contato">
        <div class="container">
            <h2 class="title">Fale conosco!</h2>
            <p class="lideres-text">Quer tirar dúvidas? Você pode ligar, enviar um e-mail ou marcar uma visita para discutirmos sua demanda.</p>
            <div>
                <h3>Trabalhe conosco</h3>
                <p>Deseja fazer parte da nossa equipe? Preencha o formulário abaixo e envie o seu currículo. Assim que surgirem novas vagas, entraremos em contato.</p>
                <form action="/">
                    <input type="text" placeholder="Nome Completo"></input>
                    <input type="tel" placeholder="Telefone"></input>
                    <input type="email" placeholder="E-mail"></input>
                    <input type="file"></input>
                    <input type="submit"></input>
                </form>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>