<?php

/* 
 * Template Name: Home Page
*/

get_header();?>

    <main>

        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active">
                
                <?php 
                
                    $args = array(
                        'post_type' => 'Slider',
                        'posts_per_page' => 3,
                    );

                    $slider = new WP_Query($args);

                    while($slider->have_posts()): $slider->the_post();


                    $slider_subtitle = get_field('slider_subtitle');
                    $slider_btn_txt = get_field('slider_button_text');
                    $slider_btn_url = get_field('slider_button_url');
                
                
                ?>
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center" style="background-image:url('<?php the_post_thumbnail_url(); ?>')">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-10 mx-auto">
                                <div class="hero__caption">
                                    <?php 
                                        if($slider_subtitle){ ?>
                                            <p><?php echo $slider_subtitle;?></p>
                                        <?php }
                                    ?>
                                    <h1><?php the_title();?></h1>
                                    <!-- Hero-btn -->
                                    <?php 
                                    
                                        if($slider_btn_txt){ ?>
                                            <div class="hero__btn">
                                                <a href="<?php echo $slider_btn_url;?>" class="btn hero-btn"><?php echo $slider_btn_txt;?></a>
                                            </div>                       
                                        <?php }
                                    
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <?php endwhile; wp_reset_postdata();?>

            </div>
        </div>
        <!-- slider Area End-->

        <!-- We Trusted Start-->
        <?php get_template_part('template-parts/partials/content', 'about');?>                                   
        <!-- We Trusted End-->

        <!-- services Area Start-->
        <?php get_template_part('template-parts/partials/content', 'services');?> 
        <!-- services Area End-->

        <!-- Request Back Start -->
    
        <?php 
        
            $bg_color = get_field('bg_color', 'option');
            $cta_title = get_field('cta_title', 'option');
            $cta_desc = get_field('cta_desc', 'option');
            $btn_text = get_field('btn_text', 'option');
            $btn_url = get_field('btn_url', 'option');
        
        ?>

        <div class="request-back-area section-padding30" style="background:<?php echo $bg_color; ?>">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-8 mx-auto text-center">
                        <div class="request-content">
                            <h3><?php echo $cta_title;?></h3>
                            <p><?php echo $cta_desc;?></p>
                            <a href="<?php echo $btn_url;?>" class="btn trusted-btn"><?php echo $btn_text;?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Request Back End -->
        
        <!-- Completed Cases Start -->
        <div class="completed-cases section-padding3">
            <div class="container">
                <div class="row">
                    <!-- slider Heading -->
                    <div class="col-xl-4 col-lg-4 col-md-8">
                        <div class="single-cases-info mb-30">
                        
                            <?php 
                            
                                $case_title = get_field('case_title', 'option');
                                $case_desc = get_field('case_desc', 'option');
                                $case_btn = get_field('case_btn', 'option');
                                $case_btn_link = get_field('case_btn_link', 'option');
                            
                            ?>

                            <h3><?php echo $case_title; ?></h3>
                            <p><?php echo $case_desc; ?></p>
                            <a href="<?php echo $case_btn_link;?>" class="border-btn border-btn2"><?php echo $case_btn;?></a>
                        </div>
                    </div>
                    <!-- OwL -->
                    <div class="col-xl-8 col-lg-8 col-md-col-md-7">
                        <div class=" completed-active owl-carousel"> 

                            <?php 
                            
                                $args = array(
                                    'post_type' => 'case',
                                    'posts_per_page' => 3,
                                );
                                $cases = new WP_Query($args);

                                while($cases->have_posts()): $cases->the_post();
                            
                            ?>

                            <div class="single-cases-img">
                                <img src="<?php the_post_thumbnail_url();?>" alt="">
                                <!-- img hover caption -->
                               <div class="single-cases-cap">
                                    <h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
                                    <?php the_excerpt();?>
                                    <span>Advisory</span>
                               </div>
                            </div>

                            <?php endwhile; wp_reset_postdata();?>

                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- Completed Cases end -->

        <!-- Team-profile Start -->
        <div class="team-profile team-padding">
            <div class="container">
                <!-- section tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h2>Teams</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <?php
                    
                        $args = array(
                        'post_type' => 'teams',
                        'posts_per_page' => 4,
                    );

                        $teams = new WP_Query($args);

                        while($teams->have_posts()): $teams->the_post();

                        $team_designation = get_field('team_designation')
                    
                    
                    ?>

                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <div class="single-profile mb-30">
                            <!-- Front -->
                            <div class="single-profile-front">
                                <div class="profile-img">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                </div>
                                <div class="profile-caption">
                                    <h4><?php the_title();?> <span><?php echo $team_designation;?></span></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php endwhile; wp_reset_postdata();?>

                </div>
            </div>
        </div>
        <!-- Team-profile End-->

        <!-- Testimonial Start -->
        <?php get_template_part('template-parts/partials/content', 'testimonials')?>
        <!-- Testimonial End -->

        <!-- Recent Area Start -->
        <?php get_template_part('template-parts/partials/content', 'blog')?>
        <!-- Recent Area End-->

        

    </main>

    <?php get_footer();?>