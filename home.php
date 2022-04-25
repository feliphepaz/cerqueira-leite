<?php
get_header();
?>

<section class="posts">
    <div class='container'>
        <ul>
            <?php 
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $args = array(
                'post_type' => 'post',
                'category_name' => 'Artigos',
                'order' => 'DESC',
                'paged' => $paged
            );
            $posts = new WP_Query($args);
            if ( $posts->have_posts() ) : while ( $posts->have_posts() ) : $posts->the_post(); ?>
                <li>
                    <a class="blog-post" href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail(); ?>
                        <h3><?php the_title() ?></h3>
                        <legend><?php echo get_the_date() ?> - <?php echo the_time() ?></legend>
                    </a>
                </li>
            <?php endwhile; ?>
        </ul>

        <div class="nav-blog grid-16">
            <?php next_posts_link( '← Posts Antigos', $posts->max_num_pages ); ?>
            <?php previous_posts_link( 'Posts Novos →' ); ?>
        </div>

        <?php wp_reset_postdata(); endif; ?>
    </div>
</section>



<?php get_footer(); ?>