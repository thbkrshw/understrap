<?php
/**
 * Template Name: Home Page
 * @package understrap
 */

get_header(); ?>

<div class="wrapper" id="full-width-page-wrapper">
    <div  id="content" class="container">
        <div id="primary" class="col-md-12 content-area">
            <main id="main" class="site-home" role="main">
                <div class="cats card-deck">
                    <?php
                    // $items = get_pages(array('sort_column' => 'menu_order', 'child_of' => $post->ID, 'title_li' => null, 'echo' => 0));

$items = wp_get_nav_menu_items("MainMenu", array('sort_column' => 'menu_order',  'title_li' => null, 'echo' => 0));
                    $colors = ['card-blue', 'card-red', 'card-green'];
                    $colorIndex = 0;
                    $colorsSize = count($colors);
                    ?>
                    <?php foreach ($items as $i): ?>
                            <div class='card <?php echo $colors[$colorIndex++ % $colorsSize] ?>'>
                                <?php if(has_post_thumbnail($i->object_id)): ?>
                                <div class="card-max-img visible-lg-up">
                                <?php echo get_the_post_thumbnail($i->object_id); ?>
                                </div>
                                <?php endif; ?>
                                <div class='card-block'>
                                    <h4 class='card-title'>
                                        <a href="<?php echo get_permalink($i->object_id);?>"><?php echo $i->title ?></a>
                                        <span class="subtitle"><?php echo get_post_meta($i->object_id, "subtitle", true); ?></span>
                                    </h4>
                                    <p class='card-text'><?php echo get_the_excerpt($i->object_id) ?></p>

                                </div>
                            </div>
                    <?php endforeach ;?>
                </div>
            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- Container end -->
</div><!-- Wrapper end -->

<?php get_footer(); ?>
