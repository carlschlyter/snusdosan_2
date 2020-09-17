<?php if( have_rows('content') ): ?>

<?php while( have_rows('content')): the_row(); ?>
    
    <?php if( get_row_layout() == 'text_with_image_section' ): 
    
    $items = get_sub_field('text_with_image');
    $image = $items[1]['image'];
    
    ?>

    <!-- <pre><?php echo print_r($image);?></pre> -->

    <?php foreach ( $items as $item ): 
        
        $image = $item['image']['sizes']['medium_large'];
        $side = $item['side'];

    ?>    

        <?php if ($side == 'left') : ?>
        
            <div class="row about-cont">
            
                <div class="col-lg-6 about-img">
                    <img src="<?php echo $image; ?>" alt="" class="img-fluid">
                </div>

                <div class="col-lg-6 about-txt">
                    <h2><?php echo $item['title']; ?> </h2>
                    <p><?php echo $item['text'] ?></p>
                </div>

            </div>

        <?php else: ?>

            <div class="row about-cont">

                <div class="col-lg-6 about-txt">
                    <h2><?php echo $item['title']; ?> </h2>
                    <p><?php echo $item['text'] ?></p>
                </div>
        
                <div class="col-lg-6 about-img">
                    <img src="<?php echo $image; ?>" alt="" class="img-fluid">
                </div>

            </div>

        <?php endif; ?>

    <?php endforeach; ?>

    <?php endif; ?>

<?php endwhile; ?>

<?php endif; ?>