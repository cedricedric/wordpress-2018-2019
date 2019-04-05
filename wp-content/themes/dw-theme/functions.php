<?php
////
//ACTIVATE Wordpress components
add_theme_support( 'post-thumbnails' );

////
//Register Main menu
register_nav_menu( 'main', 'Navigation principale du site' );
register_nav_menu( 'footer', 'Navigation de fin de page' );

////
//Get Menu structure as array

function dw_getMenu() {
    $menu = [];
    $location = get_nav_menu_locations();

    foreach (wp_get_nav_menu_items($location['main']) as $post) {
        $item = new stdClass();
        var_dump($post);
        $item->label = $post->title;
        $item->url = $post->url;
        $item->children = [];

        if(!$post->menu_item_parent){
            $menu[$post->ID] = $item;

        }
        else {
            $menu[$post->menu_item_parent]->children[$post->ID] = $item;
        }
        var_dump($menu);
    }



    return $menu;
    //. définir ma function

}

//var_dump(dw_getMenu());