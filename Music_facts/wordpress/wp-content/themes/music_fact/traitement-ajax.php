<?php
    require_once("../../../wp-load.php");

    // Alpha background color
    // Format array : BackgroundAlphaColor + & + Menu elements color
    $backgroundColorsTable = ['#de3926&#c53929', '#008C72&#02A676', '#034A8A&#046CC9'];
    $colors = $backgroundColorsTable[array_rand($backgroundColorsTable, 1)];
    $colors = explode( '&', $colors, 2);
    $backgroundColor = $colors[0];
    $menuColor = $colors[1];

    $id = $_GET['id'];

    $new_args = array(
        'post_type' => 'post',
        'orderby'   => 'rand',
        'posts_per_page' => 1,
        'post__not_in' => array($id),
    );

    $new_query = new WP_Query( $new_args );

    // The Loop
    if ( $new_query->have_posts() ) :
        while ( $new_query->have_posts() ) :
            $new_query->the_post(); ?>
            <div class="id-container"><?php the_ID(); ?></div>
            <div class="main-container container-illustration" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) no-repeat center; -webkit-background-size: cover">
                <div class="alpha-filter" style="background-color:<?= $backgroundColor ?>;"></div>
                <div class="illustration-box">
                    <h1><?php echo $id; ?></h1>
                </div>
                <div class="fact-menu">
                    <a href="#" class="fact-menu-element" style="background-color:<?= $menuColor ?>">
                        <span><i class="fas fa-comment"></i></span>
                    </a>
                    <a href="#" class="fact-menu-element"style="background-color:<?= $menuColor ?>">
                        <span><i class="fas fa-plus-circle"></i></span>
                    </a>
                </div>
                <a href="#" class="next-button" style="background-color:<?= $menuColor ?>">
                    <i class="fas fa-angle-right"></i>
                </a>
            </div>
            <div class="main-container container-content">
                <div class="content-box">
                    <?php the_post_thumbnail(); ?>
                    <p><?php echo get_the_content(); ?></p>
                </div>
                <i class="fas fa-chevron-circle-down"></i>
            </div>
        <?php endwhile;
        /* Restore original Post Data */
        wp_reset_postdata();
    endif; ?>


