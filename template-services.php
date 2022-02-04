<?php 

/*
 * Template Name: Services Page
*/

get_header();?>
    <main>

        <!-- slider Area Start-->
        <?php get_template_part('template-parts/partials/content', 'breadcumb');?>
        <!-- slider Area End-->

        <!-- services Area Start-->
        <?php get_template_part('template-parts/partials/content', 'services');?> 
        <!-- services Area End-->
        

        <!-- Recent Area Start -->
        <?php get_template_part('template-parts/partials/content', 'blog')?>
        <!-- Recent Area End-->

    </main>
<?php get_footer();?>