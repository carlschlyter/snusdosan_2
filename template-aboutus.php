<?php
/*
Template name: About Us
*/
?>

<?php get_header();?>

    <div class="container">

        <div class="row no-gutters">

            <div class="col-md-12 empty-space">

            </div>

        </div>
        
        <div class="row">

            <div class="col-md-12">

                <?php get_template_part('includes/section','aboutus_header'); ?>

            </div>

        </div>

        <div class="row">

            <div class="col-md-12">

                <?php get_template_part('includes/section','aboutus_items'); ?>

            </div>

        </div>
        
    </div>

<?php get_footer();?>