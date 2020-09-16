<?php if( have_rows('content') ): ?>

<?php while( have_rows('content')): the_row(); ?>
    
    <?php if( get_row_layout() == 'header_section' ): 
        
    $header = get_sub_field('header');
    $intro = get_sub_field('intro_text');

    ?>

        <div class="about-txt">
            <h1><?php echo $header; ?> </h1>
            <h3><?php echo $intro; ?></h3>     
        </div>

    <?php endif; ?>

<?php endwhile; ?>

<?php endif; ?>