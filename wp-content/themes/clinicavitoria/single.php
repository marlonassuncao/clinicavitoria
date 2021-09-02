<?php 
    if(in_category(24)) {
        $post = $wp_query->post;
        include'template-curos-single.php';
    }
    elseif(in_category(23)) {
        $post = $wp_query->post;
        include'template-cases-single.php';
    }
    else {
        $post = $wp_query->post;
        include'template-tratamentos-single.php';
    }

?>
