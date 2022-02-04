<div class="testimonial-area">
            <div class="container">
               <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-9 col-md-9">
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->

                            <?php 
                            
                                $args = array(

                                    'post_type' => 'testimonial',
                                    'posts_per_page' => 2,
                                );

                                $testimonial = new WP_Query($args);

                                while ($testimonial->have_posts()) : $testimonial->the_post();

                                $designation = get_field('designation');
                                $ratings = get_field('ratings');
                            
                            ?>

                            <div class="single-testimonial pt-65">
                                <!-- Testimonial tittle -->
                                <div class="testimonial-icon mb-45">
                                    <img src="<?php the_post_thumbnail_url();?>" alt="">
                                </div>
                                 <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <?php the_content();?>
                                    <!-- Rattion -->
                                    <div class="testimonial-ratting">
                                    <?php 
                                        for ($i = 0; $i < $ratings; $i++) {
                                            echo '<i class="fas fa-star"></i>';
                                        }
                                    ?>
                                    </div>
                                    <div class="rattiong-caption">
                                        <span><?php the_title();?><span> - <?php echo $designation;?></span> </span>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; wp_reset_postdata();?>
                        </div>
                    </div>
               </div>
            </div>
        </div>