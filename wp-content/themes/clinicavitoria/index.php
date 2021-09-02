<?php /*Template Name:Home*/ ?>
<?php 
    get_header(); 
    $fields = get_fields(); 
?>
<div id="slider">
    <?php putRevSlider( 'slider' ); ?>
</div>

<section class="section" id="sobre">
    <div class="container">
        <figure class="bls" data-aos="fade-up" data-aos-delay="150"><img src="<?php bloginfo('template_directory'); ?>/app/images/bl.png" alt="<?php wp_title(); ?>"></figure>
        <div class="row">
            <div class="img01">
                <figure class="she" data-aos="fade-right" data-aos-delay="150" data-aos-easing="ease-out-cubic"><img src="<?php bloginfo('template_directory'); ?>/app/images/01.png" alt="<?php wp_title(); ?>"></figure>
                <figure data-aos="fade-left" data-aos-delay="100" data-aos-easing="ease-out-cubic"><img src="<?php bloginfo('template_directory'); ?>/app/images/01.jpg" alt="<?php wp_title(); ?>"></figure>
            </div>
            <div class="col-md-6">
                <div class="tDir" data-aos="fade-in" data-aos-delay="100" data-aos-easing="ease-out-cubic">
                    <?php //if($fields['texto_2']) : echo $fields['texto_2']; endif; ?>
                    <h2>A CLÍNICA VITÓRIA</h2>
                    <p>Fundada em 2006, a Clínica Vitória nasceu de um sonho e uma visão extraordinária de futuro de sua fundadora, Dra. Luciane Castaman, que sempre almejou criar uma clínica de odontologia completa, sofisticada e altamente tecnológica.</p>
                    <p>A excelência, o pioneirismo e a tecnologia fazem parte do DNA da clínica, que vive em constante evolução, se comprometendo a levar sempre as melhores soluções e experiências aos pacientes.</p>
                    <div data-aos="fade-in" data-aos-easing="ease-out-cubic" data-aos-delay="100">
                        <a href="<?php bloginfo('url'); ?>/?page_id=15" class="btn">
                           saiba mais
                        </a>
                    </div>
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
                    <div class="box" data-aos="fade-in" data-aos-easing="ease-out-cubic" data-aos-delay="100">
                        <a href="<?php bloginfo('url'); ?>/?page_id=15" class="btn">
                            conheça nossa equipe
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section" id="procedimentos">
    <div class="container">
        <div class="row">
            <div class="col-md-4"> 
                <div class="title" data-aos="fade-in">
                    <h2>TRATAMENTOS MODERNOS E PIONEIRISMO</h2>
                    <p>em tecnologias para<br>ransformar o seu sorriso.</p>
                </div>
                <div data-aos="fade-in" data-aos-easing="ease-out-cubic" data-aos-delay="100">
                    <a href="<?php bloginfo('url'); ?>/?page_id=17" class="btn">
                        veja todos tratamentos
                    </a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="boxes">
                    <a href="<?php bloginfo('url'); ?>/?page_id=330" class="box" data-aos="fade-in" data-aos-easing="ease-out-cubic" data-aos-delay="100">
                        <figure>
                            <h3>ALINHADORES INVISÍVEIS INVISALIGN</h3>
                            <img src="<?php bloginfo('template_directory'); ?>/app/images/p1.jpg" alt="<?php wp_title(); ?>">
                        </figure>
                    </a>
                    <a href="<?php bloginfo('url'); ?>/?page_id=330" class="box" data-aos="fade-in" data-aos-easing="ease-out-cubic" data-aos-delay="150">
                        <figure>
                            <h3>CLAREAMENTO DENTÁRIO A LASER</h3>
                            <img src="<?php bloginfo('template_directory'); ?>/app/images/p2.jpg" alt="<?php wp_title(); ?>">
                        </figure>
                    </a>
                    <a href="<?php bloginfo('url'); ?>/?page_id=330" class="box" data-aos="fade-in" data-aos-easing="ease-out-cubic" data-aos-delay="200">
                        <figure>
                            <h3>LAMINADOS EM RESINA COMPOSTA</h3>
                            <img src="<?php bloginfo('template_directory'); ?>/app/images/p3.jpg" alt="<?php wp_title(); ?>">
                        </figure>
                    </a>
                    <a href="<?php bloginfo('url'); ?>/?page_id=330" class="box" data-aos="fade-in" data-aos-easing="ease-out-cubic" data-aos-delay="250">
                        <figure>
                            <h3>OZONIOTERAPIA</h3>
                            <img src="<?php bloginfo('template_directory'); ?>/app/images/p4.jpg" alt="<?php wp_title(); ?>">
                        </figure>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section" id="cases">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="tDir" data-aos="fade-in" data-aos-delay="100" data-aos-easing="ease-out-cubic">
                    <h2>CASES QUE NOS<br>ORGULHAM<br>TODOS OS DIAS.</h2>
                    <div data-aos="fade-in" data-aos-easing="ease-out-cubic" data-aos-delay="100">
                        <a href="<?php bloginfo('url'); ?>/?page_id=15" class="btn">
                            Veja os nossos casos de sucesso
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="parallax" data-parallax-image="<?php bloginfo('template_directory'); ?>/app/images/bg01.jpg"></div>
</section>
<section class="section" id="workshops">
    <div class="container">
        <figure class="bls" data-aos="fade-up" data-aos-delay="150"><img src="<?php bloginfo('template_directory'); ?>/app/images/bl.png" alt="<?php wp_title(); ?>"></figure>
        <div class="row">
            <div class="img01">
                <figure data-aos="fade-left" data-aos-delay="100" data-aos-easing="ease-out-cubic"><img src="<?php bloginfo('template_directory'); ?>/app/images/03.jpg" alt="<?php wp_title(); ?>"></figure>
            </div>
            <div class="col-md-6">
                <div class="tDir" data-aos="fade-in" data-aos-delay="100" data-aos-easing="ease-out-cubic">
                    <h2>ATUALIZAÇÃO CONSTANTE PARA A EXCELÊNCIA EM ODONTOLOGIA.</h2>
                    <h2>CONHEÇA OS NOSSOS WORKSHOPS</h2>
                    <div data-aos="fade-in" data-aos-easing="ease-out-cubic" data-aos-delay="100">
                        <a href="<?php bloginfo('url'); ?>/?page_id=15" class="btn">
                           saiba mais
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>