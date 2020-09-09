<?php get_header();?>

<div class="container-fluid px-0">

    <div class="row no-gutters">

        <div class="col-md-12"">

            <?php get_template_part('includes/section','hero'); ?>

        </div>

    </div>

    <div class="row no-gutters">

        <div class="col-md-12" id="logo">

            <?php get_template_part('includes/section','logo'); ?>
        
        </div>

    </div>

    <div class="row no-gutters">

        <div class="col-md-12" id="hero-text">

            <?php get_template_part('includes/section','herotext'); ?>

        </div>

    </div>

    <div class="row no-gutters">

        <div class="col-md-12" id="icons">

            <?php get_template_part('includes/section','icons'); ?>

        </div>

    </div>

    <div class="row no-gutters">

        <div class="col-md-12" id="offers">

            <?php get_template_part('includes/section','offers'); ?>

        </div>

    </div>

    <div class="row no-gutters">

        <div class="col-md-12" id="empty-space">

        </div>

    </div>

</div>

<?php get_footer();?>