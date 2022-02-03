<?php 

/*
 * Template Name: About Page
*/

get_header();?>

    <main>

        <!-- slider Area Start-->
        <?php get_template_part('template-parts/partials/content', 'breadcumb');?>
        <!-- slider Area End-->

        <!-- We Trusted Start-->
        <?php get_template_part('template-parts/partials/content', 'about');?> 
        <!-- We Trusted End-->
      
        <!-- Testimonial Start -->
        <?php get_template_part('template-parts/partials/content', 'testimonials')?>
        <!-- Testimonial End -->

        <!-- Recent Area Start -->
        <?php get_template_part('template-parts/partials/content', 'blog')?>
        <!-- Recent Area End-->

    </main>
<?php get_footer(); ?>