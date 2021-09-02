<?php get_header(); ?>

<div id="slider">
    <div class="container-fluid">
        <?php putRevSlider( 'busca' ); ?>
    </div>
</div>
<section class="section" id="blogarchive">
    <div class="container">
        <div class="row post">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="col-md-4 box" data-aos="fade-in" data-aos-delay="300" data-aos-duration="1000">
                <figure>
                    <a href="<?php the_permalink(); ?>">
                        <?php
                                if (has_post_thumbnail()) { 
                                    the_post_thumbnail('post'); 
                                }
                            ?>
                    </a>
                </figure>
                <div class="desc">
                    <small class="calendar"><?php the_time('d'); ?> . <?php the_time('M'); ?> . <?php the_time('Y'); ?></small>
                    <h1><?php the_title(); ?></h1>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>" class="btn">Veja mais</a>
                </div>
            </div>
            <?php endwhile; else : ?>
            <h3 class="noR">Sem registros encontrados!</h1>
            <?php endif; wp_reset_query();?>
        </div>
    </div>
</section>

<?php get_footer(); ?>