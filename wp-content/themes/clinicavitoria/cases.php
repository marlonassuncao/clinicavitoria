<?php /*Template Name:Cases*/ ?>
<?php 
    get_header(); 
    $fields = get_fields(); 
?>

<div id="slider">
    <div class="container-fluid">
        <?php putRevSlider( 'cases' ); ?>
    </div>
</div>
<section class="section" id="procedimentos">
    <div class="container">
        <div class="row">
            <div class="col-md-12"> 
                <div class="title" data-aos="fade-in">
                    <h2>CONHEÇA OS CASOS CLÍNICOS QUE NOS ORGULHAM TODOS OS DIAS</h2>
                </div>

            </div>
            <div class="col-md-12">
                <div class="boxes">

                    <?php 
                        $args = array(
                            'showposts' => 6,
                            'cat' => 23
                        );

                        $the_query = new WP_Query($args);
                        $i = 0;

                        if($the_query->have_posts()) :
                            while($the_query->have_posts()) : $the_query->the_post(); $i++;
                    ?>

                    <a href="<?php the_permalink(); ?>" class="box" data-aos="fade-in" data-aos-easing="ease-out-cubic" data-aos-delay="100">
                        <figure>
                            <h3><?php the_title(); ?></h3>
                            <?php
                                if (has_post_thumbnail()) { 
                                    the_post_thumbnail(); 
                                }
                            ?>
                        </figure>
                    </a>
                    
                    <?php endwhile; endif; wp_reset_query(); ?>

                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>