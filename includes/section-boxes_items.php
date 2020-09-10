<?php if( have_rows('content') ): ?>

    <?php while( have_rows('content')): the_row(); ?>
        
        <?php if( get_row_layout() == 'items_section' ): 
        
        $items = get_sub_field('items');
        // $image = $items[2]['image'];
        
        ?>

        <!-- <pre><?php echo print_r($image);?></pre> -->

        <?php foreach ( $items as $item ): 
            
            $image = $item['image']['sizes']['medium'];
            $side = $item['side'];
            $button = $item['button'];
            $link = $item['link'];

        ?>    

            <?php if ($side == 'left') : ?>
            
                <div class="row boxes-cont">
                
                    <div class="col-lg-6 boxes-img">
                        <img src="<?php echo $image; ?>" alt="">
                    </div>

                    <div class="col-lg-6 boxes-txt">
                        <h2><?php echo $item['title']; ?> </h2>
                        <p><?php echo $item['description'] ?></p>
                        <div>
                        <a class="boxes-txt-btn" href="<?php echo $link; ?>"><?php echo $button; ?></a>
                        </div>
                    </div>

                </div>

            <?php else: ?>

                <div class="row boxes-cont">

                    <div class="col-lg-6 boxes-txt">
                        <h2><?php echo $item['title']; ?> </h2>
                        <p><?php echo $item['description'] ?></p>
                        <div>
                            <a class="boxes-txt-btn" href="<?php echo $link; ?>"><?php echo $button; ?></a>
                        </div>
                    </div>
            
                    <div class="col-lg-6 boxes-img">
                        <img src="<?php echo $image; ?>" alt="">
                    </div>

                </div>

            <?php endif; ?>

        <?php endforeach; ?>

        <?php endif; ?>

    <?php endwhile; ?>

<?php endif; ?>