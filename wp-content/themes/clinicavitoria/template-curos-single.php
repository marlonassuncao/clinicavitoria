<?php 
    get_header(); 
    $fields = get_fields(); 
?>

<div id="slider">
    <div class="container-fluid">
        <?php putRevSlider( 'workshop' ); ?>
    </div>
</div>
<section class="section" id="cursos">
    <div class="container">
        <figure class="bls" data-aos="fade-up" data-aos-delay="150">
            <img src="<?php bloginfo('template_directory'); ?>/app/images/bl.png" alt="<?php wp_title(); ?>">
        </figure>
        <div class="row">
            <div class="col-md-10 offset-md-1 title">
                <h2><?php the_title(); ?></h2>
                <h3><?php echo $fields['data']; ?></h3>
            </div>
            <div class="col-md-6">
                <div class="tDir" data-aos="fade-in" data-aos-delay="100" data-aos-easing="ease-out-cubic">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="img01">
                <h2>o workshop</h2>
                <figure data-aos="fade-left" data-aos-delay="100" data-aos-easing="ease-out-cubic"><img
                        src="<?php bloginfo('template_directory'); ?>/app/images/05.jpg" alt="<?php wp_title(); ?>">
                </figure>
            </div>
        </div>
    </div>
</section>
<section class="section" id="procedimentos">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title" data-aos="fade-in">
                    <h2>CONTEÚDO ABORDADO</h2>
                </div>
            </div>
            <div class="col-md-8">
                <div class="boxes">

                    <?php if($fields['fotos']) : foreach($fields['fotos'] as $k => $v) : ?>
                    <a href="<?php echo $v['url'];?>" data-fancybox="g" class="box" data-aos="fade-in"
                        data-aos-easing="ease-out-cubic" data-aos-delay="100">
                        <figure>
                            <img src="<?php echo $v['url'];?>" alt="<?php wp_title(); ?>">
                        </figure>
                    </a>

                    <?php endforeach;  endif;?>

                </div>
            </div>
            <div class="col-md-4">
                <h3>na teoria</h3>
                <?php echo $fields['conteudo_teorico']; ?>
                <h3>na prática</h3>
                <?php echo $fields['conteudo_pratico']; ?>
            </div>
        </div>
    </div>
</section>
<section class="section" id="perguntas">
    <div class="container">
        <div class="row">
            <div class="col-md-12" data-aos="fade-in" data-aos-delay="100">
                <h2>Perguntas Frequentes</h2>
            </div>
        </div>
        <div class="row">
            <div class="accordion">
                <dl>

                <?php if($fields['perguntas']) : foreach($fields['perguntas'] as $k => $v) : ?>
                    
                    <dt>
                        <a href="#accordion1" aria-expanded="false" aria-controls="accordion1"
                            class="accordion-title accordionTitle js-accordionTrigger"><?php echo $v['titulo'];?></a>
                    </dt>
                    <dd class="accordion-content accordionItem is-collapsed" id="accordion<?php echo $k; ?>" aria-hidden="true">
                        <p><?php echo $v['texto'];?></p>
                    </dd>

                <?php endforeach;  endif;?>

                </dl>
            </div>
        </div>
    </div>
</section>
<section class="section" id="inscricao">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div data-aos="fade-in" data-aos-delay="100" data-aos-easing="ease-out-cubic">
                    <h2>Inscrições Abertas</h2>
                    <p>Investimento</p>
                    <h3>
                        <?php echo $fields['preco']; ?>
                    </h3>
                    <div class="btnEnd" data-aos="fade-in" data-aos-easing="ease-out-cubic" data-aos-delay="100">
                        <a href="<?php bloginfo('url'); ?>/?page_id=15" class="btn">
                            inscreva-se
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

<script>
//uses classList, setAttribute, and querySelectorAll
//if you want this to work in IE8/9 youll need to polyfill these
(function() {
    var d = document,
        accordionToggles = d.querySelectorAll('.js-accordionTrigger'),
        setAria,
        setAccordionAria,
        switchAccordion,
        touchSupported = ('ontouchstart' in window),
        pointerSupported = ('pointerdown' in window);

    skipClickDelay = function(e) {
        e.preventDefault();
        e.target.click();
    }

    setAriaAttr = function(el, ariaType, newProperty) {
        el.setAttribute(ariaType, newProperty);
    };
    setAccordionAria = function(el1, el2, expanded) {
        switch (expanded) {
            case "true":
                setAriaAttr(el1, 'aria-expanded', 'true');
                setAriaAttr(el2, 'aria-hidden', 'false');
                break;
            case "false":
                setAriaAttr(el1, 'aria-expanded', 'false');
                setAriaAttr(el2, 'aria-hidden', 'true');
                break;
            default:
                break;
        }
    };
    //function
    switchAccordion = function(e) {
        console.log("triggered");
        e.preventDefault();
        var thisAnswer = e.target.parentNode.nextElementSibling;
        var thisQuestion = e.target;
        if (thisAnswer.classList.contains('is-collapsed')) {
            setAccordionAria(thisQuestion, thisAnswer, 'true');
        } else {
            setAccordionAria(thisQuestion, thisAnswer, 'false');
        }
        thisQuestion.classList.toggle('is-collapsed');
        thisQuestion.classList.toggle('is-expanded');
        thisAnswer.classList.toggle('is-collapsed');
        thisAnswer.classList.toggle('is-expanded');

        thisAnswer.classList.toggle('animateIn');
    };
    for (var i = 0, len = accordionToggles.length; i < len; i++) {
        if (touchSupported) {
            accordionToggles[i].addEventListener('touchstart', skipClickDelay, false);
        }
        if (pointerSupported) {
            accordionToggles[i].addEventListener('pointerdown', skipClickDelay, false);
        }
        accordionToggles[i].addEventListener('click', switchAccordion, false);
    }
})();
</script>