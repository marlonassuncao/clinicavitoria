    <section class="section" id="instagram">    
        <div class="container" data-aos="fade-in" data-aos-easing="ease-out-cubic" data-aos-delay="100">
            <div class="row">
                <div class="col-md-12">
                    <h2> 
                        siga a gente no instagram
                        <a href="https://www.instagram.com/clinicavitoriaodonto/" target="_blank">@clinicavitoriaodonto</a>
                    </h2>
                    <div class="title">
                        <?php echo do_shortcode('[instagram-feed]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section" id="contato">
        <div class="container">
            <div class="row">
                <div class="col-md-6" data-aos="fade-in" data-aos-easing="ease-out-cubic" data-aos-delay="100">
                    <div class="title">
                        <h2>contato</h2>
                        <p>Essa é a melhor forma de entrar em contato comigo. Deixei seu melhor e-mail que eu mesma retornarei para agendarmos uma entrevista.</p>
                    </div>
                    <?php echo do_shortcode('[contact-form-7 id="24" title="Contato"]'); ?>
                    <figure class="bls" data-aos="fade-in" data-aos-easing="ease-out-cubic" data-aos-delay="100"><img src="<?php bloginfo('template_directory'); ?>/app/images/bl.png" class="img-fluid" alt="<?php wp_title(); ?>"></figure>
                </div>
                <div class="col-md-6">
                    <div class="img01">
                        <figure data-aos="fade-right" data-aos-delay="150" data-aos-easing="ease-out-cubic"><img src="<?php bloginfo('template_directory'); ?>/app/images/02.jpg" class="img-fluid" alt="<?php wp_title(); ?>"></figure>
                    </div>
                    <div class="tels">
                        <a href="tel:6933222555" target="_blank"><i class="ion-android-call"></i> <strong>69 3322.2555</strong></a>
                        <a href="https://api.whatsapp.com/send?phone=69984274389" target="_blank"><i class="ion-social-whatsapp-outline"></i> <strong>69 98427.4389</strong></a>
                        <a href="mailto:contato@clinicavitoriaodontologia.com.br">contato@clinicavitoriaodontologia.com.br</a>
                        <a href="https://goo.gl/maps/zB4XbrWXWYhZh7oj6" target="_blank">Av. Capitão Castro, 3241, Vilhena / RO</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="section" id="footer">
        <div class="rodape">
            <div class="container">
                <small>Clínica Vitória ® <?php echo date('Y'); ?> Todos os direitos reservados.</small>
                <div class="sing">
                    <a href="https://www.brandly.com.br" target="_blank">
                        <img src="<?php bloginfo('template_directory');?>/app/images/brandly.svg"
                            alt="<?php wp_title();?>">
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer();?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/app/scripts/aos.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/app/scripts/parallax.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/app/scripts/main.min.js"></script>

    <?php if(wp_is_mobile()) : ?>
        <script>
            jQuery(document).ready(function () {
                jQuery('[data-fancybox]').fancybox({
                    loop : true,
                    margin : [10,0,10,0],
                    thumbs : {
                        autoStart : false,
                        axis      : 'x'
                    },
                });
            });
        </script>
    <?php else : ?>
        <script>
            jQuery(document).ready(function () {
                jQuery('[data-fancybox]').fancybox({
                    loop : true,
                    margin : [10,0,10,0],
                    thumbs : {
                        autoStart : true,
                        axis      : 'x'
                    },
                });
            });
        </script>
    <?php endif; ?>
    
    <script>
        function onpenVideoCick() {
            console.log('ok');
        }
        var swiper = new Swiper('.swiper-container-01', {
            slidesPerView: 1,
            slidesPerGroup: 1,
            spaceBetween: 10,
            loop: true,
            navigation: {
                nextEl: '.navswipernext',
                prevEl: '.navswiperprev',
            },
            // breakpoints: {
            //     992: {
            //         slidesPerView: 1,
            //         spaceBetween: 1,
            //         slidesPerGroup: 1,
            //     }
            // }
        });
    </script>

    </body>
</html>