<?php /*Template Name:Especialidades*/ ?>
<?php 
    get_header(); 
    $fields = get_fields(); 
?>

<div id="slider">
    <div class="container-fluid">
        <?php putRevSlider( 'especialidades' ); ?>
    </div>
</div>
<section class="section" id="especialidades">
    <div class="container">
        <div class="row">
            <div class="col-md-12"> 
                <div class="icos">
                    <div class="ico" data-aos="fade-" data-aos-delay="100">
                        <a href="<?php bloginfo('url'); ?>/?p=453">
                            <figure><img src="<?php bloginfo('template_directory'); ?>/app/images/i1.svg" class="svg" alt="<?php wp_title(); ?>"></figure>
                            <h3>ODONTOLOGIA <br>ESTÉTICA</h3>
                        </a>
                    </div>
                    <div class="ico" data-aos="fade-" data-aos-delay="150">
                        <a href="<?php bloginfo('url'); ?>/?p=463">
                            <figure><img src="<?php bloginfo('template_directory'); ?>/app/images/i2.svg" class="svg" alt="<?php wp_title(); ?>"></figure>
                            <h3>ORTODONTIA</h3>
                        </a>
                    </div>
                    <div class="ico" data-aos="fade-" data-aos-delay="200">
                        <a href="<?php bloginfo('url'); ?>/?p=470">
                            <figure><img src="<?php bloginfo('template_directory'); ?>/app/images/i3.svg" class="svg" alt="<?php wp_title(); ?>"></figure>
                            <h3>PRÓTESE</h3>
                        </a>
                    </div>
                    <div class="ico" data-aos="fade-" data-aos-delay="250">
                        <a href="<?php bloginfo('url'); ?>/?p=472">
                            <figure><img src="<?php bloginfo('template_directory'); ?>/app/images/i4.svg" class="svg" alt="<?php wp_title(); ?>"></figure>
                            <h3>HALITOSE</h3>
                        </a>
                    </div>
                    <div class="ico" data-aos="fade-" data-aos-delay="300">
                        <a href="<?php bloginfo('url'); ?>/?p=474">
                            <figure><img src="<?php bloginfo('template_directory'); ?>/app/images/i5.svg" class="svg" alt="<?php wp_title(); ?>"></figure>
                            <h3>OZONIOTERAPIA</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>