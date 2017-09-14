<?php
/**
 * Template Name: Home Page
 * @package understrap
 */

get_header(); ?>

<div class="wrapper" id="full-width-page-wrapper">
    <div  id="content" class="container">
        <div id="primary" class="col-md-12 content-area">
            <main id="main" class="site-main" role="main">
                <?php while ( have_posts() ) : the_post(); ?>

                    <?php
                    // If comments are open or we have at least one comment, load up the comment template
                    if ( comments_open() || get_comments_number() ) :

                    comments_template();

                    endif;
                    ?>
                    <div class="cats card-deck">
                        <?php
                        $items = get_pages(array('sort_column' => 'menu_order', 'child_of' => $post->ID, 'title_li' => null, 'echo' => 0));
                        $colors = ['card-blue', 'card-red', 'card-green'];
                        $colorIndex = 0;
                        $colorsSize = count($colors);
                        ?>
                        <?php foreach ($items as $i): ?>
                                <div class='card <?php echo $colors[$colorIndex++ % $colorsSize] ?>'>
                                    <?php if(has_post_thumbnail($i)): ?>
                                    <div class="card-max-img hidden-xs-down">
                                    <?php echo get_the_post_thumbnail($i); ?>
                                    </div>
                                    <?php endif; ?>
                                    <div class='card-block'>
                                        <h4 class='card-title'>
                                            <a href="<?php echo get_permalink($i);?>"><?php echo $i->post_title ?></a>
                                            <span class="subtitle"><?php echo get_post_meta($i->ID, "subtitle", true); ?></span>
                                        </h4>
                                        <p class='card-text'><?php echo get_the_excerpt($i) ?></p>

                                    </div>
                                </div>
                        <?php endforeach ;?>
                    </div>
                <?php endwhile; // end of the loop. ?>
            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- Container end -->
</div><!-- Wrapper end -->

<?php get_footer(); ?>
