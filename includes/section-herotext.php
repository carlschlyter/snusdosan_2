<?php if( have_rows('content') ): ?>

<?php while( have_rows('content') ): the_row(); ?>

    <?php if( get_row_layout() == 'hero_text'): 
        
        $header = get_sub_field('header');
        $sub_header = get_sub_field('sub_header');    
        $button = get_sub_field('button');
        $link = get_sub_field('link');

    ?>
        
        <h1><?php echo $header; ?></h1>
        <h3><?php echo $sub_header; ?></h3>
        <a id="hero-text-button" href="<?php echo $link; ?>"><?php echo $button; ?></a>
        

    <?php endif; ?>

<?php endwhile;?>    

<?php endif; ?>