<div class="desktop-view">
    <?php
        $ourServices = get_field('our_services');
        if( !empty( $ourServices ) ):
        ?>
        <div class="whatwedo-wrapper">
            <?php
                $counter = 0; $boxcls='';
                foreach ( $ourServices as $key => $service ) {
                    $counter++;
                    $serIcon  = $service['icon'];
                    $serTitle = $service['title'];
                    $serLink = $service['link'];
                    $serDesc  = $service['description'];
                    $serListContent  = $service['list_content'];
                    if( $counter % 2 == 0 ){
                        $boxcls = 'whatwedo-item-24';
                    }else{
                        $boxcls = 'whatwedo-item-13';
                    }
                ?>
                <div class="whatwedo-item whatwedo-item-<?php echo $counter?> <?php echo $boxcls?>">
                    <div class="whatwedo-item-inner">
                        <div class="whatwedo-left flexcenter">
                            <div class="left_side_card">
                                <div class="innner_content">
                                    <img loading="lazy" src="<?php echo $serIcon; ?>" width="50px" height="60px" alt="Design Thinking Services" srcset="<?php echo $serIcon; ?>">
                                    <h2><a href="<?php echo $serLink?>"><?php echo $serTitle?></a></h2>
                                </div>
                            </div>
                        </div>
                        <div class="whatwedo-right flexcenter">
                            <div class="right_side_card">
                                <div class="inner_content">
                                    <?php echo $serDesc?>
                                    <?php echo $serListContent?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <?php 
        endif;
    ?>
</div>

<div class="mobile-view-accordion">
    <?php
        $ourServices = get_field('our_services');
        if( !empty( $ourServices ) ):
        ?>        
        <div class="accordion whatwedo-accordion" id="accordionExample">
            <?php
                $counter = 0; $boxcls='';
                foreach ( $ourServices as $key => $service ) {
                    $counter++;
                    $serIcon  = $service['icon'];
                    $serTitle = $service['title'];
                    $serLink = $service['link'];
                    $serDesc  = $service['description'];
                    $serListContent  = $service['list_content'];
                    if( $counter % 2 == 0 ){
                        $boxcls = '';
                        $color = 'black-color';
                    }else{
                        $boxcls = 'dark-accordion';
                        $color = 'white-color';
                    }
                ?>

            <div class="card <?php echo $counter?> <?php echo $boxcls?>">
                    <div class="card-header" id="headingOne">
                        <h3 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse<?php echo $counter?>" aria-expanded="true" aria-controls="collapseOne">
                                <img loading="lazy" src="<?php echo $serIcon; ?>" width="50px" height="60px" alt="Design Thinking Services" srcset="<?php echo $serIcon; ?>">
                                <h2><a href="<?php echo $serLink?>" class="<?php echo  $color?>"><?php echo $serTitle?></a></h2>
                            </button>
                        </h3>
                    </div>
                    <div id="collapse<?php echo $counter?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <?php echo $serDesc?>
                            <?php echo $serListContent?>
                        </div>
                    </div>
            </div>
            <?php } ?>
        </div>
        <?php 
        endif;
    ?>
</div>