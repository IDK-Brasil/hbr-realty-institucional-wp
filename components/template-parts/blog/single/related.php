<?php
// Pega as categorias do post atual
$categories = get_the_category();

if ( $categories ) {
    $cat_ids = array();
    foreach ( $categories as $category ) {
        $cat_ids[] = $category->term_id;
    }

    $args = array(
        'category__in'     => $cat_ids,
        'post__not_in'     => array( get_the_ID() ), // Exclui o post atual
        'posts_per_page'   => 6, // Quantidade
        'ignore_sticky_posts' => 1
    );

    $related_query = new WP_Query( $args );

    if ( $related_query->have_posts() ) : ?>
        <section class="related-posts container home-blog-idk-1225">
            <h3>Outros Artigos</h3>
            <div class="swiper-slide">
                <div class="blog-card">
                    <?php if (has_post_thumbnail()): ?>
                        <div class="blog-card__image">
                            <img src="<?php the_post_thumbnail_url('medium_large'); ?>" alt="<?php the_title(); ?>">
                            <?php
                            $category = get_the_category();
                            if (! empty($category)):
                            ?>
                                <span class="blog-card__category">
                                    <?php echo esc_html($category[0]->name); ?>
                                </span>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <div class="blog-card__content">
                        <p class="small blog-card__date"><?php echo get_the_date('j \d\e F \d\e Y'); ?></p>
                        <h5><?php the_title(); ?></h5>
                        <div class="blog-card__excerpt"><?php the_excerpt(); ?></div>
                        <a class="blog-card__link" href="<?php the_permalink(); ?>">
                            <p>Artigo Completo</p> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right-black-icon.svg" alt="Seta para direita">
                        </a>
                    </div>
                </div>
            </div>
        </section>
    <?php
    endif;
    wp_reset_postdata();
}
?>