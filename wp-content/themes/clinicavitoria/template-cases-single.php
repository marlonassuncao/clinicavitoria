<?php 
    get_header(); 
    $fields = get_fields(); 
?>

<div id="slider">
    <div class="container-fluid">
        <?php putRevSlider( 'cases' ); ?>
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
            <div class="col-md-5">
                <h2><?php the_title(); ?></h2>
                <div class="img">
                    <?php
                        if (has_post_thumbnail()) { 
                            the_post_thumbnail(); 
                        }
                    ?>
                </div>
            </div>
            <div class="col-md-7">

                <div class="tDir" data-aos="fade-in" data-aos-delay="400" data-aos-easing="ease-out-cubic">
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