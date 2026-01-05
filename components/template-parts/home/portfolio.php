<?php
$id              = get_the_ID();
$portfolio_group = get_field('portfolio_section_home', $id);

if ($portfolio_group && is_array($portfolio_group)) {
    $title = $portfolio_group['title_portfolio_section_home'] ?? null;
    $cards = $portfolio_group['content_portfolio_section_home'] ?? [];
} else {
    $title = null;
    $cards = [];
}
?>

<section class="home-portfolio-idk-1225" id="portfolio">
    <div class="container-lg">
        <?php if ($title): ?>
            <h2 class="portfolio-title"><?php echo wp_kses_post($title); ?></h2>
        <?php endif; ?>

        <!-- DESKTOP GRID -->
        <div class="portfolio-grid desktop-only">
            <div class="portfolio-bg-left"></div>
            <div class="portfolio-bg-right"></div>

            <?php foreach ($cards as $index => $card):
                $img    = $card['image_content_portfolio_section_home'];
                $ctitle = $card['title_content_portfolio_section_home'];
                $desc   = $card['description_content_portfolio_section_home'];
                $link   = $card['link_content_portfolio_section_home'] ?? null;
            ?>
                <a href="<?php echo esc_url($link['url'] ?? '#'); ?>"
                    class="portfolio-card card-<?php echo $index + 1; ?>">

                    <div class="portfolio-card__image">
                        <?php if (! empty($img['url'])): ?>
                            <img src="<?php echo esc_url($img['url']); ?>" alt="">
                        <?php endif; ?>
                    </div>

                    <img class="portfolio-card__arrow"
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/rounded-arrow.svg"
                        alt="">

                    <div class="portfolio-card__content">
                        <h3><?php echo esc_html($ctitle); ?></h3>
                        <p class="portfolio-card__desc"><?php echo esc_html($desc); ?></p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>

        <!-- MOBILE SWIPER -->
        <div class="portfolio-swiper mobile-only swiper">
            <div class="swiper-wrapper">
                <?php foreach ($cards as $index => $card):
                    $img    = $card['image_content_portfolio_section_home'];
                    $ctitle = $card['title_content_portfolio_section_home'];
                    $desc   = $card['description_content_portfolio_section_home'];
                    $link   = $card['link_content_portfolio_section_home'] ?? null;
                ?>
                    <div class="swiper-slide">
                        <a href="<?php echo esc_url($link['url'] ?? '#'); ?>" class="portfolio-card">
                            <div class="portfolio-card__image">
                                <?php if (! empty($img['url'])): ?>
                                    <img src="<?php echo esc_url($img['url']); ?>" alt="">
                                <?php endif; ?>
                            </div>

                            <img class="portfolio-card__arrow"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/rounded-arrow.svg"
                                alt="">

                            <div class="portfolio-card__content">
                                <h3><?php echo esc_html($ctitle); ?></h3>
                                <p class="portfolio-card__desc"><?php echo esc_html($desc); ?></p>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="swiper-arrows">
                <div class="swiper-button-prev">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-left.svg" class="arrow-icon">
                </div>

                <div class="swiper-button-next">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" class="arrow-icon">
                </div>
            </div>
        </div>
    </div>
</section>