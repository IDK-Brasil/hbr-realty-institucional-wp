<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$search_term = isset( $_GET['search'] ) ? sanitize_text_field( $_GET['search'] ) : '';

$args = [
    'post_type'      => 'post',
    'posts_per_page' => 6,
    'paged'          => $paged,
    'orderby'        => 'date',
    'order'          => 'DESC',
];

if ( ! empty( $search_term ) ) {
    $args['s'] = $search_term;
}

$query = new WP_Query( $args );
?>

<section class="posts-blog-idk-1225 home-blog-idk-1225 " id="blog">
    <?php 
    if ($query->have_posts()):  ?>
    <div class="container-posts">
    <?php
        while ($query->have_posts()): $query->the_post(); 
    ?>
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
        <?php endwhile; ?>
        </div>
        <div class="pagination">
            <?php
            echo paginate_links( [
                'total'   => $query->max_num_pages, 
                'current' => $paged,   
                'prev_text' => '',
                'next_text' => '',      
                'add_args' => [ 'search' => $search_term ],             
            ] );
            ?>
        </div>
        <?php wp_reset_postdata(); ?>

    <?php 
    else: 
    ?>
        
        <!-- Mensagem de Aviso -->
        <div class="no-results-message" style="width: 100%; text-align: center; margin-bottom: 30px;">
            <h3>Não foram encontrados resultados para sua busca.</h3>
            <p>Veja abaixo alguns dos artigos mais lidos em nosso blog.</p>
        </div>
 <div class="container-posts">
        <?php
        $args_popular = [
            'post_type'      => 'post',
            'posts_per_page' => 6, 
            'orderby'        => 'comment_count', 
            'order'          => 'DESC',
            'ignore_sticky_posts' => 1
        ];

        $popular_query = new WP_Query( $args_popular );

        if ($popular_query->have_posts()):
            while ($popular_query->have_posts()): $popular_query->the_post(); 
        ?>
            <!-- Mesmo Layout do Card -->
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
            <?php 
            endwhile;
            wp_reset_postdata(); // Reseta a query secundária
        endif; 
        ?>
</div>
    <?php endif; // Fim do if/else principal ?>
</section>