<?php

// thumbnail
add_theme_support('post-thumbnails');
add_image_size('tb', 120, 120, true);

function wpdev_custom_excerpt_length( $length ) {
    return 15;
   }
   add_filter( 'excerpt_length', 'wpdev_custom_excerpt_length');

add_filter('wpcf7_autop_or_not', '__return_false');

add_action('admin_init', function () {
    // Redirect any user trying to access comments page
    global $pagenow;

    if ($pagenow === 'edit-comments.php') {
        wp_redirect(admin_url());
        exit;
    }

    // Remove comments metabox from dashboard
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');

    // Disable support for comments and trackbacks in post types
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
});

// Close comments on the front-end
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);

// Hide existing comments
add_filter('comments_array', '__return_empty_array', 10, 2);

// Remove comments page in menu
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
});

// Remove comments links from admin bar
add_action('init', function () {
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
});

// title lenght
function the_titlesmall($before = '', $after = '', $echo = true, $length = false)
{$title = get_the_title();

    if ($length && is_numeric($length)) {
        $title = substr($title, 0, $length);
    }

    if (strlen($title) > 0) {
        $title = apply_filters('the_titlesmall', $before . $title . $after, $before, $after);
        if ($echo) {
            echo $title;
        } else {
            return $title;
        }

    }
}
