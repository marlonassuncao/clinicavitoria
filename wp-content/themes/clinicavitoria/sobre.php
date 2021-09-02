<?php /*Template Name: Sobre*/ ?>
<?php 
    get_header(); 
    $fields = get_fields(); 
?>

<div id="slider">
    <div class="container-fluid">
        <?php putRevSlider( 'sobre' ); ?>
    </div>
</div>
<section class="section" id="sobre">
    <div class="container">
        <div class="row">
            <div class="img01">
                <figure class="she" data-aos="fade-right" data-aos-delay="150" data-aos-easing="ease-out-cubic"><img src="<?php bloginfo('template_directory'); ?>/app/images/01.png" alt="<?php wp_title(); ?>"></figure>
                <figure data-aos="fade-left" data-aos-delay="100" data-aos-easing="ease-out-cubic"><img src="<?php bloginfo('template_directory'); ?>/app/images/01.jpg" alt="<?php wp_title(); ?>"></figure>
            </div>
            <div class="col-md-6">
                <div class="tDir" data-aos="fade-in" data-aos-delay="100" data-aos-easing="ease-out-cubic">
                    <?php //if($fields['texto_2']) : echo $fields['texto_2']; endif; ?>
                    <h2>a clínica</h2>
                    <h3>NOSSA HISTÓRIA</h3>
                    <p>Fundada em 2006, a Clínica Vitória nasceu de um sonho e de uma visão extraordinária de futuro da Dra. Luciane Castaman, que sempre almejou  criar uma clínica de odontologia sofisticada, moderna e que priorizasse a humanização.</p>
                    <p>A excelência da equipe, o pioneirismo e a tecnologia fazem parte do nosso DNA. Vivemos em constante evolução, nos comprometendo em levar para os nossos pacientes sempre as melhores soluções e experiências.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section" id="missao">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="boxes">
                    <div class="box" data-aos="fade-in" data-aos-delay="100" data-aos-easing="ease-out-cubic">
                        <h2>missão</h2>
                        <p>Disponibilizar aos clientes os melhores e mais tecnológicos tratamentos odontológicos, promovendo saúde, beleza e autoconfiança.</p>
                    </div>
                    <div class="box" data-aos="fade-in" data-aos-delay="150" data-aos-easing="ease-out-cubic">
                        <h2>visão</h2>
                        <p>Ser reconhecida como a melhor clínica de odontologia de Rondônia.</p>
                    </div>
                    <div class="box" data-aos="fade-in" data-aos-delay="200" data-aos-easing="ease-out-cubic">
                        <h2>valores</h2>
                        <p>excelência, segurança, respeito, ética, compromisso, foco nas pessoas, transparência, responsabilidade.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="parallax" data-parallax-image="<?php bloginfo('template_directory'); ?>/app/images/bg02.jpg"></div>
</section>
<section class="section" id="modernidade">
    <div class="container">
        <figure class="bls" data-aos="fade-in" data-aos-delay="150"><img src="<?php bloginfo('template_directory'); ?>/app/images/bl.png" alt="<?php wp_title(); ?>"></figure>
        <div class="row">
            <div class="col-md-6">
                <div class="tDir" data-aos="fade-in" data-aos-delay="100" data-aos-easing="ease-out-cubic">
                    <h3>MODERNIDADE E<br>DETALHES QUE FAZEM<br>A DIFERENÇA</h3>
                    <p>Visando trazer o que há de melhor e mais moderno, com o conforto que nossos pacientes merecem, passamos por uma grande revitalização em 2021 e nos reafirmamos como uma das principais referências em Odontologia da região. Além de comprometidos a oferecer tratamentos eficazes, seguros e modernos, prezamos por uma experiência impecável em todos os pontos de contato com você, nosso cliente.</p>
                </div>
            </div>
            <div class="img01">
                <figure data-aos="fade-left" data-aos-delay="100" data-aos-easing="ease-out-cubic"><img src="<?php bloginfo('template_directory'); ?>/app/images/04.jpg" alt="<?php wp_title(); ?>"></figure>
            </div>
        </div>
    </div>
</section>
<section class="section" id="icos">
    <div class="container">
        <figure data-aos="zoom-in" data-aos-delay="150"><img src="<?php bloginfo('template_directory'); ?>/app/images/icos.png" alt="<?php wp_title(); ?>"></figure>
    </div>
</section>


<?php get_footer(); ?>