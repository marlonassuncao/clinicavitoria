<?php /*Template Name:Contato*/ ?>
<?php 
    get_header(); 
    $fields = get_fields(); 
?>

<div id="slider">
    <div class="container-fluid">
        <?php putRevSlider( 'contato' ); ?>
    </div>
</div>
<section class="section" id="contatoInterno"> 
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="img01">  
                    <figure data-aos="fade-right" data-aos-delay="100" data-aos-easing="ease-out-cubic"><img src="<?php bloginfo('template_directory'); ?>/app/images/c1.jpg" alt="<?php wp_title(); ?>"></figure>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img01">  
                    <figure class="c2" data-aos="fade-right" data-aos-delay="150" data-aos-easing="ease-out-cubic"><img src="<?php bloginfo('template_directory'); ?>/app/images/c2.jpg" alt="<?php wp_title(); ?>"></figure>
                    <figure class="bls" data-aos="fade-in" data-aos-easing="ease-out-cubic" data-aos-delay="100"><img src="<?php bloginfo('template_directory'); ?>/app/images/bl.png" alt="<?php wp_title(); ?>"></figure>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="tels">
                    <a href="tel:6933222555" target="_blank"><i class="ion-android-call"></i> <strong>69 3322.2555</strong></a>
                    <a href="https://api.whatsapp.com/send?phone=69984274389" target="_blank"><i class="ion-social-whatsapp-outline"></i> <strong>69 98427.4389</strong></a>
                    <a href="mailto:contato@clinicavitoriaodontologia.com.br">contato@clinicavitoriaodontologia.com.br</a>
                    <a href="https://goo.gl/maps/zB4XbrWXWYhZh7oj6" target="_blank">Av. Capitão Castro, 3241, Vilhena / RO</a>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-in" data-aos-easing="ease-out-cubic" data-aos-delay="100">
                <?php echo do_shortcode('[contact-form-7 id="24" title="Contato"]'); ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>