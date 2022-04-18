<?php
/*
Template Name: Vídeos
*/
get_header();
?>

<main class="videos">
    <div class="container">
        <ul>
            <?php
            $videos = get_field('videos');
            if (isset($videos)) { foreach ($videos as $video) { ?> 
            <li>
                <h3><?= $video['titulo_video']; ?></h3>
                <iframe width="100%" height="200" src="https://www.youtube.com/embed/<?= $video['codigo_video']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </li>
            <?php } } ?>
        </ul>
    </div>
</main>

<?php get_footer(); ?>