<div id="online">
<div class="figure1"></div>
        <div class="online__block__inner">
            <div class="row">
                <div class="col-12">
                       <div class="online__block">
                           <div class="online__block__item col-ml-6 col-12">
                                <div class="online__block__title"> <?php echo get_field('bl5_title'); ?></div>
                               <div class="online__block__tabs tabheader">
                                    <?php 
                                        while( have_rows('group_program') ): the_row(); 
                                        $name = get_sub_field('name');  
                                    ?>
                                    <div class="online__block__tab tabheader_item"><?php echo $name; ?></div>
                                    <?php 
                                        endwhile;
                                        wp_reset_query();
                                    ?> 
                               </div>
                               <?php 
                                    while( have_rows('group_program') ): the_row(); 
                                    $years = get_sub_field('years');  
                                    $list = get_sub_field('list'); 
                                ?>
                                    
                               <div class="online__block__content tabcontent_item">
                                   <span class="online__block__content__title">Занятия для детей </span>
                                   <div class="online__block__years"><?php echo $years; ?></div>
                                   <span class="online__block__content__subtitle">Во время курса вы узнаете:</span>
                                   <div class="online__block__list"><?php echo $list; ?></div>
                               </div>
                               <?php 
                                        endwhile;
                                        wp_reset_query();
                                ?> 
                           </div>
                           <div class="online__block__item col-ml-6 col-12">
                           <?php 
                                while( have_rows('group_program')): the_row(); 
                                $img = get_sub_field('img');  
                            ?>
                            <div class="online__block__image tabcontent_image">
                                
                                <img class="lazy" data-src="<?php echo $img; ?>" alt="">
                            </div>
                            <?php 
                                endwhile;
                                wp_reset_query();
                                ?> 
                           </div>
                       </div>
                            
                        </div>
                    </div>
                </div>
            </div>

