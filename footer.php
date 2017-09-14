<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */
?>




<?php get_sidebar('footerfull'); ?>

<div class="wrapper" id="wrapper-footer">
    
    <div class="container footer">


            <div class="col-md-12 footer-container">
    

    <!-- The WordPress Menu goes here -->
<?php wp_nav_menu(
    array(
        'theme_location' => 'footer',
        'container_class' => 'collapse navbar-toggleable-xs exCollapsingNavbar',
        'menu_class' => 'nav navbar-nav pull-xs-left',
        'fallback_cb' => '',
        'menu_id' => 'footer-menu',
        'walker' => new wp_bootstrap_navwalker()
    )
); ?>

    <ul class="nav navbar-nav footer-list">

    <?php

    // foreach (["SARL Dutheil &amp; fils", "&copy; ".date('Y'), "Mentions légales"] as $v) {
    //     echo "<li class='nav-item'>$v</li>";
    // }
    ?>

    </ul>


</div>
        
    </div><!-- container end -->
    
</div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>