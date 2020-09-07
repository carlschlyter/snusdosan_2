<?php if( have_rows('content') ): ?>

<?php while( have_rows('content') ): the_row(); ?>

    <?php if( get_row_layout() == 'offer_section'): 
        
        $offers = get_sub_field('offer_plates');
        $header = get_sub_field('header');
        $image = ($offers[2]['image']);
        $picture = $image['sizes']['offer-plates'];

    ?>

        <div id="offer-header">
            <h3><?php echo $header; ?></h3>
        </div>

        <div id="offer-plate-box">

            <?php foreach( $offers as $offer ) : 
                
                $picture = $offer['image']['sizes']['offer-plates'];
                $info = $offer['info'];
                $link = $offer['link'];

            ?>

                <div>
                  <img src="<?php echo $picture; ?>" alt="">
                  <p><?php echo $info; ?></p>  
                  <a href="<?php $link; ?>">Köp</a>
                </div>  


            <?php endforeach; ?>

        </div>

    <?php endif; ?>

<?php endwhile;?>    

<?php endif; ?>