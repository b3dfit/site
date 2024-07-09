<?php
/*
Plugin Name: Review Products
Description: Plugin para adicionar o Custom Post Type Tênis com campos personalizados para reviews de tênis.
Version: 1.0
Author: Weslley Alves
*/

include ('src/Store/CustomPostType.php');
include ('src/Store/Metaboxes.php');
include ('src/Store/Save.php');

include ('src/Tenis/CustomPostType.php');
include ('src/Tenis/Metaboxes.php');
include ('src/Tenis/Save.php');



function getValueCustomPostTypeReview($postId, $key, $type)
{
    return get_post_meta($postId, $type.'_'.$key, true);
}