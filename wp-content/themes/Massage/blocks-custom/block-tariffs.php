<div id="tariffs">
    <div class="ell10" data-bottom-top="transform: translate3d(0px,50px,0px) rotate(0.0001deg)" data-top-bottom="transform: translate3d(0px,-50px,0px) rotate(0.0001deg)"></div>
    <div class="ell11" data-bottom-top="transform: translate3d(0px,50px,0px) rotate(0.0001deg)" data-top-bottom="transform: translate3d(0px,-50px,0px) rotate(0.0001deg)"></div>
    <div class="ell12" data-bottom-top="transform: translate3d(0px,50px,0px) rotate(0.0001deg)" data-top-bottom="transform: translate3d(0px,-50px,0px) rotate(0.0001deg)"></div>
    <div class="ell13" data-bottom-top="transform: translate3d(0px,50px,0px) rotate(0.0001deg)" data-top-bottom="transform: translate3d(0px,-50px,0px) rotate(0.0001deg)"></div>
    <div class="ell14" data-bottom-top="transform: translate3d(0px,50px,0px) rotate(0.0001deg)" data-top-bottom="transform: translate3d(0px,-50px,0px) rotate(0.0001deg)"></div>
    <div class="container-fluid">
        <div class="tariffs__block__inner">
            <div class="row">
                <div class="col-12">
                    <div class="tariffs__block__title" data-bottom-top="transform: translate3d(0px,10%,0px) rotate(0.0001deg)" data-top-bottom="transform: translate3d(0px,-10%,0px) rotate(0.0001deg)"> <?php echo get_field('bl6_title'); ?></div>
                       <div class="tariffs__block__items">
                       <?php 
                            while( have_rows('rep_tariffs') ): the_row(); 
                            $icon = get_sub_field('icon');  
                            $name = get_sub_field('name');  
                            $rep_traf_list = get_sub_field('rep_traf_list');  
                            $cost = get_sub_field('cost');  
                        ?>
                            <div data-src="#popup-order" data-fancybox class="tariffs__block__item" data-bottom-top="transform: translate3d(0px,10%,0px) rotate(0.0001deg)" data-top-bottom="transform: translate3d(0px,-10%,0px) rotate(0.0001deg)">
                            <div class="block__item__icon">
                                <img class="tarif_icon lazy" data-src="<?php echo $icon; ?>" alt="">
                            </div>
                            <div class="block__item__name"><?php echo $name; ?></div>
                            <div class="block__item__list"><?php echo $rep_traf_list; ?></div>
                            <div class="block__item__cost"><?php echo $cost; ?></div>
                            <div class="block__item__bottom">
                                <div class="button">
                                    <div data-src="#popup-order" anim="ripple" data-fancybox class="btn"><span>Выбрать курс</span></div>
                                </div>
                            </div>
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