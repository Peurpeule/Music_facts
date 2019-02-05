<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package music_fact
 */
// Alpha background color
// Format array : BackgroundAlphaColor + & + Menu elements color
$backgroundColorsTable = ['#de3926&#c53929', '#008C72&#02A676', '#034A8A&#046CC9'];
$colors = $backgroundColorsTable[array_rand($backgroundColorsTable, 1)];
$colors = explode( '&', $colors, 2);
$backgroundColor = $colors[0];

$imagesTable = ['image1.jpg', 'image2.jpg', 'image3.jpg'];
$image = $imagesTable[array_rand($imagesTable, 1)];
$menuColor = $colors[1]; ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <?php wp_head(); ?>
    <style> .fact-menu .fact-menu-element{ background-color: <?= $menuColor ?> } </style>
</head>

<body <?php body_class(); ?>>

    <?php
    $args = array(
        'post_type' => 'post',
        'orderby'   => 'rand',
        'posts_per_page' => 5,
    );

    $the_query = new WP_Query( $args );

    // The Loop
    if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) :
            $the_query->the_post(); ?>
            <div class="main-container container-illustration" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) no-repeat center; -webkit-background-size: cover">
                <div class="alpha-filter" style="background-color:<?= $backgroundColor ?>;"></div>
                <div class="illustration-box">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="fact-menu">
                    <a href="#" class="fact-menu-element">
                        <span><i class="fas fa-comment"></i></span>
                    </a>
                    <a href="#" class="fact-menu-element">
                        <span><i class="fas fa-arrow-alt-circle-right"></i></span>
                    </a>
                    <a href="#" class="fact-menu-element">
                        <span><i class="fas fa-tag"></i></span>
                    </a>
                    <a href="#" class="fact-menu-element">
                        <span><i class="fas fa-plus-circle"></i></span>
                    </a>
                </div>
            </div>
            <div class="main-container container-content">
                <div class="content-box">
                    <?php the_post_thumbnail(); ?>
                    <p><?php echo get_the_content(); ?></p>
                </div>
            </div>
        <?php endwhile;
        /* Restore original Post Data */
        wp_reset_postdata();
    endif; ?>


<?php
get_sidebar();
get_footer();
