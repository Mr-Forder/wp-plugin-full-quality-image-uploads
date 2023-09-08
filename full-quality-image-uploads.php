<?php
/*
* Plugin Name: Full Quality Image Uploads
* Description:  Disable WPs automatic image optimizer for perfect JPG quality on your image uploads.
*/


defined('ABSPATH') or die("Access denied.");


add_filter('wp_editor_set_quality', 'full_quality_img_uploads');
function full_quality_img_uploads()
{
    return 100;
}
