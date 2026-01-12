<?php

$search_term = isset( $_GET['search'] ) ? sanitize_text_field( $_GET['search'] ) : '';

?>

<section class="search-blog-idk-1225" id="search-blog">
    <form class="search" method="GET" action="<?php echo  get_home_url(); ?>/blog/" >
        
    <label>
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M16.6667 16.6662L13.6469 13.6465" stroke="black" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M3.33333 9.37467C3.33333 12.7114 6.03827 15.4163 9.37499 15.4163C12.7117 15.4163 15.4167 12.7114 15.4167 9.37467C15.4167 6.03795 12.7117 3.33301 9.37499 3.33301V3.33301C6.03838 3.33325 3.33357 6.03805 3.33333 9.37467" stroke="black" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <input type="text" name="search" placeholder="Procurar por..." value="<?php echo esc_attr( $search_term ); ?>">
    </label>
    </form>

    <?php
        $args = wp_parse_args( $args ?? [], [
            'show_count' => false,
            'class'      => 'default-cat-list'
        ] );

        $categories = get_categories();

        if ( empty($search_term) && $categories ) : ?>
            <ul class="categories-blog">
                <?php foreach ( $categories as $category ) : ?>
                    <li>
                        <a href="<?php echo get_category_link( $category->term_id ); ?>">
                            <?php echo $category->name; ?>
                        </a>
                        <?php if( $args['show_count'] ) : ?>
                            <span class="badge"><?php echo $category->count; ?></span>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p class="search-results-title">
        Resultados para a pesquisa de “<strong><?php echo esc_html( $search_term ); ?></strong>” 
        (<?php echo "0" ?>)
        </p>

        <?php endif; ?>
</section>