<?php
// Template Geral
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<section class='post'>
    <div class='container'>
        <div class="post-container">
            <h1><?php the_title(); ?></h1>
            <div class='post-info'>
                <p><?php the_date(); ?></p>
                <p><?= get_the_category()[0]->cat_name; ?></p>
            </div>
            <?php the_post_thumbnail() ?>
            <div class='post-text'><?php the_content(); ?></div>

            <div class='post-share'>
                <p>Compartilhe!</p>
                <div>
                    <?php 
                    $postUrl = 'http' . ( isset( $_SERVER['HTTPS'] ) ? 's' : '' ) . '://' . "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}"; 
                    ?>
                    <a target="_blank" class="share-button share-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $postUrl; ?>" title="Compartilhe no Facebook"><img src="<?= get_stylesheet_directory_uri() ?>/assets/facebook.svg" alt=""></a>

                    <a target="_blank" class="share-button share-twitter" href="https://twitter.com/intent/tweet?url=<?php echo $postUrl; ?>&text=<?php echo the_title(); ?>&via=<?php the_author_meta( 'twitter' ); ?>" title="Tweet isso"><img src="<?= get_stylesheet_directory_uri() ?>/assets/twitter.svg" alt=""></a>
                </div>
            </div>

            <nav class="post-nav">
            <?php
                $prev_post = get_previous_post(); 
                $id = $prev_post->ID ;
                $permalink = get_permalink( $id );

                $next_post = get_next_post();
                $nid = $next_post->ID ;
                $permalink = get_permalink($nid);
            ?>
                <ul>
                    <li>
                        <span class="nav-previous"><?php previous_post_link( '%link', __( 'Post Anterior', 'twentyeleven' ) ); ?> 
                            <a href="<?php echo $permalink; ?>" class="nav-arrow"><</a>
                            <h2><a href="<?php echo $permalink; ?>"><?php echo $prev_post->post_title; ?></a></h2>
                        </span>
                    </li>
                    <li>
                        <span class="nav-next"><?php next_post_link( '%link', __( 'Próximo Post', 'twentyeleven' ) ); ?>
                            <a href="<?php echo $permalink; ?>" class="nav-arrow">></a>
                            <h2><a href="<?php echo $permalink; ?>"><?php echo $next_post->post_title; ?></a></h2>
                        </span>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</section>

<?php endwhile; else: ?>
<p><?php _e('Post não encontrado'); ?></p>
<?php endif; ?>
    <?php wp_footer(); ?>
</body>
</html>
<?php get_footer(); ?>