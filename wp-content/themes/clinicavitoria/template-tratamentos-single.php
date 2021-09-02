<?php 
    get_header(); 
    $categories = get_the_category();
    // print_r($categories[0]->term_id);die;
    
    $category_id = $categories[0]->cat_ID;
    $category_name = $categories[0]->name;

    // print_r($category_id);
    add_action( 'pre_get_posts', 'my_change_sort_order'); 
    function my_change_sort_order($query){
        $query->set( 'order', 'ASC' );
        $query->set( 'orderby', 'title' );  
    };
?>
<style>
    .<?php echo $post->post_name; ?>{
        color: #3b3b3b !important;
    }
</style>

<div id="slider">
    <div class="container-fluid">
        <?php if($category_id == 20) : putRevSlider( 'd1' ); elseif($category_id == 21) : putRevSlider( 'd2' ); else : putRevSlider( 'especialidades' ); endif; ?>
    </div>
</div>
<div class="section" id="sobre">
    <!-- <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title" data-aos="fade-right" data-aos-easing="ease-out-cubic">
                    <h2><?php echo $category_name; ?></h2>
                </div>
            </div>
        </div>
    </div> -->
    <div class="container">
        <div class="row">
            
            <div class="col-md-4">
                <ul class="menu nomobile" id="navrs" data-aos="fade-up" data-aos-delay="200" data-aos-easing="ease-out-cubic">
                    <?php if($post->ID == 470) :  ?>
                        <a href="<?php bloginfo('url'); ?>/?p=453">ODONTOLOGIA ESTÉTICA</a>
                        <a href="<?php bloginfo('url'); ?>/?p=463">ORTODONTIA</a>
                        <a href="<?php bloginfo('url'); ?>/?p=472">HALITOSE</a>
                        <a href="<?php bloginfo('url'); ?>/?p=474">OZONIOTERAPIA</a>
                    <?php elseif($post->ID == 472) :  ?>
                        <a href="<?php bloginfo('url'); ?>/?p=453">ODONTOLOGIA ESTÉTICA</a>
                        <a href="<?php bloginfo('url'); ?>/?p=463">ORTODONTIA</a>
                        <a href="<?php bloginfo('url'); ?>/?p=470">PRÓTESE</a>
                        <a href="<?php bloginfo('url'); ?>/?p=474">OZONIOTERAPIA</a>
                    <?php elseif($post->ID == 474) :  ?>
                        <a href="<?php bloginfo('url'); ?>/?p=453">ODONTOLOGIA ESTÉTICA</a>
                        <a href="<?php bloginfo('url'); ?>/?p=463">ORTODONTIA</a>
                        <a href="<?php bloginfo('url'); ?>/?p=470">PRÓTESE</a>
                        <a href="<?php bloginfo('url'); ?>/?p=472">HALITOSE</a>
                    <?php else : ?>    
                    <?php
                        $args = array(
                            'cat' => $category_id,
                            'showposts' => 100,
                        );

                        $posts = new WP_Query($args);

                        if( $posts->have_posts()) : 
                            while($posts->have_posts()) : $posts->the_post(); 

                    ?>
                        <a href="<?php the_permalink(); ?>" class="<?php echo $post->post_name; ?>"><span><?php the_title(); ?></span></a>

                    <?php endwhile; endif; wp_reset_query(); endif; ?>

                </ul>
            </div>
            <div class="col-md-8">

                <div class="tDir" data-aos="fade-in" data-aos-delay="400" data-aos-easing="ease-out-cubic">
                    <h2><?php the_title(); ?></h2>
                    <div class="img">
                        <?php
                            if (has_post_thumbnail()) { 
                                the_post_thumbnail('tratamentos'); 
                            }
                        ?>
                    </div>
                    <?php the_content(); ?>
                </div>


            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/TinyNav.js/1.2.0/tinynav.min.js"></script>

<style>
.tinynav {
    display: none
}

/* styles for mobile */
@media screen and (max-width: 992px) {
    .tinynav {
        display: block
    }

    #navrs {
        display: none
    }
}
</style>

<script>
jQuery(function() {
    jQuery("#navrs").tinyNav({
        active: 'selected',
        header: 'Seclecione uma opção',
        indent: '- ',
        label: ''
    });
});
</script>