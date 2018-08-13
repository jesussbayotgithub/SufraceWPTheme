<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
<div class="crew-block">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6 col-sm-7 section-1">
                <div class="row align-items-center">
                    <div class="logo-wrapper">
                    <a href="<?=get_permalink();?>" title="<?=the_field('page_title');?>" class="logo"><img alt="<?=the_field('page_title');?>" src="<?=THEME_IMAGE_URL?>/logo.png"></a>
                    </div>
                    <div class="main-hdr">
                        <h1><?=the_field('surface_header_title');?></h1>
                    </div>
                    <!-- SECTION 1B -->
                    <div class="col-md-10 section-1b" data-aos="fade-up">
                        <div class="row justify-content-center">
                            <div class="offset-md-1 col-md-9">
                                <div class="block">
                                    <h2><?=the_field('section_title');?></h2><?=the_field('section_content');?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- SECTION 1B -->
                </div>
            </div>


            <div class="col-md-4 col-sm-5 section-main">
                <div class="row">
                        <div class="mobile-content">
                            <h2><?=the_field('section_title');?></h2><?=the_field('section_content');?>
                        </div>
                        <a class="btn btn-primary call-btn" href="<?=the_field('call_us_link');?>">CALL US TODAY</a>
                        <a class="tel-no" href="<?=the_field('call_us_link');?>">
                            <img src="<?=THEME_IMAGE_URL?>/call.svg"> <?=the_field('call_us_title');?>
                            <span></span>
                        </a>
                    <div class="cover"></div>
                </div>
            </div>
        </div>

        <!--SECTION-->
        <div class="row justify-content-center">

            <div class="col-12 tile-grid mob show-on-mobile">
                <div class="title-2" data-aos="fade-up">
                    <h2>What Makes Surface <span>Better</span></h2>
                </div>
            </div>

            <div class="col-lg-4 col-md-5 col-sm-6">
                <ul class="row grid-row">
                    <li class="col-12 tile-grid" data-aos="fade-up">
                        <div class="tile-title">
                            <h3>01.</h3><h2><?=the_field('cont_01_title');?></h2>
                        </div>
                        <div class="cover">
                            <div class="cov-content">
                                <p><?=the_field('cont_01_content');?></p>
                            </div>
                        </div>
                        <?php
                        $imgId1 = get_field('cont_01_image');
                        echo wp_get_attachment_image( $imgId1, "full" );  ?>
                    </li>

                    <!-- Mobile Only -->
                    <li class="col-12 tile-grid show-on-mobile" data-aos="fade-up">
                        <div class="tile-title">
                            <h3>02.</h3><h2><?=the_field('cont_02_title');?></h2>
                        </div>
                        <div class="cover">
                            <div class="cov-content">
                                <p><?=the_field('cont_02_content');?></p>
                            </div>
                        </div>
                        <?php
                        $imgId2 = get_field('cont_02_image');
                        echo wp_get_attachment_image( $imgId2, "full" );  ?>
                    </li>
                    <!-- End: Mobile Only -->

                    <!-- Desktop Only -->
                    <li class="col-12 tile-grid hide-on-mobile" data-aos="fade-up">
                        <div class="tile-title">
                            <h3>03.</h3><h2><?=the_field('cont_03_title');?></h2>
                        </div>
                        <div class="cover">
                            <div class="cov-content">
                                <p><?=the_field('cont_03_content');?></p>
                            </div>
                        </div>
                        <?php
                        $imgId3 = get_field('cont_03_image');
                        echo wp_get_attachment_image( $imgId3, "full" );  ?>
                    </li>
                    <!-- End: Desktop Only -->
                </ul>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-6">

                <div class="row hide-on-mobile">
                    <div class="col-12 tile-grid">
                        <div class="title-2" data-aos="fade-up">
                            <h2>What Makes Surface <span>Better</span></h2>
                        </div>
                    </div>
                </div>
                <ul class="row grid-row">
                    <!-- Desktop Only -->
                    <li class="col-12 tile-grid hide-on-mobile" data-aos="fade-up">
                        <div class="tile-title">
                            <h3>02.</h3><h2><?=the_field('cont_02_title');?></h2>
                        </div>
                        <div class="cover">
                            <div class="cov-content">
                                <p><?=the_field('cont_02_content');?></p>
                            </div>
                        </div>
                        <?php
                        echo wp_get_attachment_image( $imgId2, "full" );  ?>
                    </li>
                    <!-- End: Desktop Only -->

                    <!-- Mobile Only -->
                    <li class="col-12 tile-grid show-on-mobile" data-aos="fade-up">
                        <div class="tile-title">
                            <h3>03.</h3><h2><?=the_field('cont_03_title');?></h2>
                        </div>
                        <div class="cover">
                            <div class="cov-content">
                                <p><?=the_field('cont_03_content');?></p>
                            </div>
                        </div>
                        <?php
                        //$imgId3 = get_field('cont_03_image');
                        echo wp_get_attachment_image( $imgId3, "full" );  ?>
                    </li>
                    <!-- End: Mobile Only -->


                    <li class="col-12 tile-grid" data-aos="fade-up">
                        <div class="tile-title">
                            <h3>04.</h3><h2><?=the_field('cont_04_title');?></h2>
                        </div>
                        <div class="cover">
                            <div class="cov-content">
                                <p><?=the_field('cont_04_content');?></p>
                            </div>
                        </div>
                        <?php
                        $imgId4 = get_field('cont_04_image');
                        echo wp_get_attachment_image( $imgId4, "full" );  ?>
                    </li>
                </ul>

            </div>
        </div>
        <!--END SECTION-->

        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-10 section-surface-val">
                <div class="row justify-content-center">

                    <div class="col-md-4 col-sm-4">
                        <div class="row justify-content-center">
                            <div class="surface-val" data-aos="fade-up">
                                <h3>SURFACE <span><sub>=</sub> VALUE</span></h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8 col-sm-8" data-aos="fade-left">
                        <div class="row justify-content-center">
                            <div class="col-md-10 section-surface-val-content">
                                <p><?=the_field('surface_value'); ?></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-10 col-sm-10 section-be-inspired">
                <div class="row">
                    <div class="order-2 order-md-1 col-sm-12 col-md-8" data-aos="fade-right">
                        <p><?=the_field('be_inspired_cont') ?></p>
                    </div>
                    <div class="order-1 order-md-2 col-sm-12 col-md-4 be-inspired" data-aos="fade-left">
                        <h2>BE <span>INSIPIRED</span></h2>
                    </div>
                </div>

            </div>

            <div class="col-lg-10 col-md-12 col-sm-12 section-form" data-aos="fade-up">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-sm-12">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="col-12">
                                    <h2>Inspired? </h2>
                                    <h3>We got you covered! Contact us to transform your space</h3>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="col-12">
                                    <?php echo do_shortcode('[contact-form-7 id="80" title="Surface Contact Form"]');?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

<?php get_footer(); ?>