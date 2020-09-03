<?php if( have_rows('content') ): ?>

<?php while( have_rows('content') ): the_row(); ?>


    <?php if( get_row_layout() == 'logo'): 
    
    $image = get_sub_field('logo');
    $picture = $image['sizes']['small'];

    ?>

    logga
        <!-- <img src="<?php echo $picture ?>"  alt="">    -->

    <?php endif; ?>

<?php endwhile;?>    

<?php endif; ?>