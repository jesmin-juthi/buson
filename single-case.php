<?php get_header();?>
    <main>

        <!-- slider Area Start-->
        <?php get_template_part('template-parts/partials/content', 'breadcumb');?>
        <!-- slider Area End-->

        <!-- Services Details Start -->
        <div class="services-details section-padding2">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-12">
                        <div class="s-detailsImg">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                        </div>
                    </div>
                    <div class="offset-xl-12">
                        <div class="s-details-caption">
                            <h2><?php the_title();?></h2>
                            <?php the_content();?>

                            <!-- btn -->
                            <a href="#" class="btn red-btn">Contact now <i class="ti-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Details End -->
    </main>
<?php get_footer();?>