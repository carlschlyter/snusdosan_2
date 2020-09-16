<?php if( have_rows('content') ): ?>

<?php while( have_rows('content') ): the_row(); ?>

    <?php if( get_row_layout() == 'hero_image'): 
    
    $image = get_sub_field('image');
    $picture = $image['sizes']['hero-image-shallow-plus'];

    ?>
        <img src="<?php echo $picture ?>" class="full-screen" alt="">   

    <?php endif; ?>

<?php endwhile;?>    

<?php endif; ?>