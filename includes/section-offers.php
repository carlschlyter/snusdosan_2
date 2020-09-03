<?php if( have_rows('content') ): ?>

<?php while( have_rows('content') ): the_row(); ?>

    <?php if( get_row_layout() == 'offer_section'): 
        
        $offers = get_sub_field('offer_plates');
        $header = get_sub_field('header');

    ?>
        <div class="col-md-12" id="offer-header">
            <h3><?php echo $header; ?></h3>
        </div>
        <?php foreach( $offers as $offer ) : ?>
        <div class="col-md-12">
            plats för bild
        </div>
        <?php endforeach; ?>

    <?php endif; ?>

<?php endwhile;?>    

<?php endif; ?>