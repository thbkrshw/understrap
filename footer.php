<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */
?>


<div class="container hidden-lg-up">
    <div class="col-md-12 ">
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'small-footer',
            'container_class' => 'smallBottomMenu',
            'menu_class' => '',
            'fallback_cb' => '',
            'menu_id' => 'top-bottom-menu'
            // 'walker' => new walker_nav_menu()
        )
    );
    ?>
    </div>
</div>


<div class="wrapper hidden-md-down" id="wrapper-footer">
    <div class="container footer">
        <div class="col-md-12 footer-container">
            <?php
                wp_nav_menu([
                    'theme_location'  => 'footer',
                    // 'container_class' => 'collapse navbar-toggleable-xs exCollapsingNavbar',
                    'container_class' => '',
                    // 'menu_class'      => 'nav navbar-nav pull-xs-left col-sm-8',
                    'menu_class'      => ' col-sm-8 my-0 pl-0',
                    'fallback_cb'     => '',
                    'menu_id'         => 'footer-menu',
                    'walker'          => new wp_bootstrap_navwalker()
                ]);
            ?>
            <img class="footer-style" src="<?php bloginfo('template_directory'); ?>/img/footer.png"/>
        </div>
    </div><!-- container end -->
</div><!-- wrapper end -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>