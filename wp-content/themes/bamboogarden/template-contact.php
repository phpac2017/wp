<?php
/*Template Name: About Us
 *
 * This is the template 
 * @package WordPress
 */
?>

<?php get_header();?>


<section class="page-wrap">
    <div class="container">
        <h1><?php //the_title();?></h1>

        <div class="row">
        <?php get_template_part('includes/section', 'content');?> 
            <!-- <div class="col-lg-6">            
                Contact Form
            </div>

            <div class="col-lg-6">            
                               
            </div>         -->
        
        </div>

    </div>
</section>

<?php get_footer();?>