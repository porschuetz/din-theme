<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package din-theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area col-xs-6 col-sm-3 sidebar-offcanvas" role="complementary">
    <?
    $defaults = array(
    'theme_location'  => '',
    'menu'            => '',
    'container'       => 'nav',
    'container_class' => '',
    'container_id'    => '',
    'menu_class'      => 'menu list-group',
    'menu_id'         => '',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'depth'           => 1,
    'walker'          => ''
    );
    ?>
    <?php wp_nav_menu( $defaults ); ?>
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
