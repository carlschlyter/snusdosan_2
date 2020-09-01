<?php get_header();?>

<section class="page-wrap">

    <div class="container">
        
    <?php if( have_rows('content') ): ?>

        <?php while( have_rows('content') ): the_row(); ?>



        <?php endwhile; ?>    

    <?php endif; ?>    

    </div>

</section>

<?php get_footer();?>