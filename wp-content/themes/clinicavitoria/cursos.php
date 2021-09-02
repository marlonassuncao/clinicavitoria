<?php /*Template Name:Cursos*/ ?>
<?php 
    get_header(); 
    $fields = get_fields(); 
?>

<div id="slider">
    <div class="container-fluid">
        <?php putRevSlider( 'cursos' ); ?>
    </div>
</div>
<section class="section" id="cursos">
    <div class="container">
        <figure class="bls" data-aos="fade-up" data-aos-delay="150"><img
                src="<?php bloginfo('template_directory'); ?>/app/images/bl.png" alt="<?php wp_title(); ?>"></figure>
        <div class="row">
            <div class="col-md-6">
                <div class="tDir" data-aos="fade-in" data-aos-delay="100" data-aos-easing="ease-out-cubic">

                    <?php 
                        $args = array(
                            'showposts' => 6,
                            'cat' => 24
                        );

                        $the_query = new WP_Query($args);
                        $i = 0;

                        if($the_query->have_posts()) :
                            while($the_query->have_posts()) : $the_query->the_post(); $i++;
                    ?>

                    <div class="boxagenda">
                        <h3><?php the_field('data'); ?></h3>
                        <h1><?php the_title(); ?></h1>
                        <a href="<?php the_permalink(); ?>" class="btn">
                            inscreva-se
                        </a>
                    </div>

                    <?php endwhile; endif; wp_reset_query(); ?>

                </div>
            </div>
            <div class="img01">
                <h2>Agenda</h2>
                <figure data-aos="fade-left" data-aos-delay="100" data-aos-easing="ease-out-cubic"><img
                        src="<?php bloginfo('template_directory'); ?>/app/images/05.jpg" alt="<?php wp_title(); ?>">
                </figure>
            </div>
        </div>
    </div>
</section>
<section class="section" id="especialidades">
    <div class="container">
        <div class="row">
            <div class="col-md-12" data-aos="fade-" data-aos-delay="100">
                <h2>DIFERENCIAIS DOS NOSSOS WORKSHOPS</h2>
            </div>
            <div class="col-md-12"> 
                <div class="icos">
                    <div class="ico" data-aos="fade-" data-aos-delay="100">
                        <figure><img src="<?php bloginfo('template_directory'); ?>/app/images/io1.svg" class="svg" alt="<?php wp_title(); ?>"></figure>
                        <h3>Aulas teóricas e práticas</h3>
                    </div>
                    <div class="ico" data-aos="fade-" data-aos-delay="150">
                        <figure><img src="<?php bloginfo('template_directory'); ?>/app/images/io2.svg" class="svg" alt="<?php wp_title(); ?>"></figure>
                        <h3>Protocolos exclusivos</h3>
                    </div>
                    <div class="ico" data-aos="fade-" data-aos-delay="200">
                        <figure><img src="<?php bloginfo('template_directory'); ?>/app/images/io3.svg" class="svg" alt="<?php wp_title(); ?>"></figure>
                        <h3>Fontes, artigos e teorias com embasamento científico</h3>
                    </div>
                    <div class="ico" data-aos="fade-" data-aos-delay="100">
                        <figure><img src="<?php bloginfo('template_directory'); ?>/app/images/io4.svg" class="svg" alt="<?php wp_title(); ?>"></figure>
                        <h3>Profissionais de excelência de todo o Brasil</h3>
                    </div>
                    <div class="ico" data-aos="fade-" data-aos-delay="150">
                        <figure><img src="<?php bloginfo('template_directory'); ?>/app/images/io5.svg" class="svg" alt="<?php wp_title(); ?>"></figure>
                        <h3>Suporte exclusivo pós-workshop para dúvidas</h3>
                    </div>
                    <div class="ico" data-aos="fade-" data-aos-delay="200">
                        <figure><img src="<?php bloginfo('template_directory'); ?>/app/images/io6.svg" class="svg" alt="<?php wp_title(); ?>"></figure>
                        <h3>Troca de experiências e networking durante os cursos</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>