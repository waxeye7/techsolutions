<?php
function get_theme_image_url($image_name) {
    // Get the URL of the theme's directory.
    $theme_directory = get_template_directory_uri();

    // Set the relative path to the image.
    $image_path = '/images/' . $image_name;

    // Combine the theme directory URL with the image path.
    $image_url = $theme_directory . $image_path;

    return $image_url;
}

?>