
<?php get_header();?>

    <div class="container">

        <div class="row no-gutters">

            <div class="col-md-12 empty-space">

            </div>

        </div>
        
        <div class="row">

            <div class="col-md-12">

                <h1><?php the_title(); ?></h1>

                <?php get_template_part('includes/section','content'); ?>

            </div>

        </div>
        
    </div>

<?php get_footer();?>

