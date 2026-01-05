<?php
$query = new WP_Query([
    'post_type'      => 'post',
    'posts_per_page' => 3,
]);
?>

<section class="home-blog-idk-1225" id="blog">
    <div class="container-lg">
        <h2 class="blog-title desktop-only">Nosso blog</h2>
        <h2 class="blog-title mobile-only">Nosso blog HBR</h2>

        <!-- DESKTOP GRID -->
        <div class="blog-grid desktop-only">
            <div class="blog-bg-left"></div>
            <div class="blog-bg-right"></div>

            <?php if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>
                    <div class="blog-card">
                        <?php if (has_post_thumbnail()): ?><div class="blog-card__image">
                                <img src="<?php the_post_thumbnail_url('medium_large'); ?>">

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
                            <p class="small blog-card__date"><?php echo get_the_date('j \d\e F \d\e Y'); ?>
                            </p>
                            <h5><?php the_title(); ?></h5>
                            <div class="blog-card__excerpt"><?php the_excerpt(); ?></div>
                            <a class="blog-card__link" href="<?php the_permalink(); ?>">
                                <p>Artigo Completo</p> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right-black-icon.svg" alt="Seta para direita">
                            </a>
                        </div>
                    </div>
            <?php endwhile;
                wp_reset_postdata();
            endif; ?>
        </div>

        <!-- MOBILE SWIPER -->
        <div class="blog-swiper mobile-only swiper">
            <div class="swiper-wrapper">
                <?php if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>
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
                                    <p class="small blog-card__date"><?php echo get_the_date('j \d\e F \d\e Y'); ?>
                                    </p>
                                    <h5><?php the_title(); ?></h5>
                                    <div class="blog-card__excerpt"><?php the_excerpt(); ?></div>
                                    <a class="blog-card__link" href="<?php the_permalink(); ?>">
                                        <p>Artigo Completo</p> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right-black-icon.svg" alt="Seta para direita">
                                    </a>
                                </div>
                            </div>
                        </div>
                <?php endwhile;
                    wp_reset_postdata();
                endif; ?>
            </div>

            <div class="swiper-arrows">
                <a href="/blog" class="btn secondary-btn-blue mobile-only">
                    Confira mais posts
                </a>

                <div class="swiper-button-prev">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-left.svg" class="arrow-icon">
                </div>

                <div class="swiper-button-next">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" class="arrow-icon">
                </div>
            </div>
        </div>

        <a href="/blog" class="btn primary-btn-blue desktop-only">
            Confira mais posts
        </a>
    </div>
</section>