<div id="education" >
<div class="ell0 " data-bottom-top="transform: translate3d(0px,100%,0px) rotate(0.0001deg)" data-top-bottom="transform: translate3d(0px,-100%,0px) rotate(0.0001deg)"></div>
    <img class="shar_2 lazy" data-src="<?php echo THEME_IMAGES; ?>/shar_2.png" data-bottom-top="transform: translate3d(0px,100%,0px) rotate(0.0001deg)" data-top-bottom="transform: translate3d(0px,-100%,0px) rotate(0.0001deg)">
    <div class="container-fluid">
        <div class="education__block__inner">
            <div class="row">
                <div class="col-12">
                    <div class="education__block skrollable skrollable-between" data-bottom-top="transform: translate3d(0px,110px,0px) rotate(0.0001deg)" data-top-bottom="transform: translate3d(0px,-110px,0px) rotate(0.0001deg)">
                        <div class="education__block__item col-ml-6 col-12">
                            <div class="education__block__title" > <?php echo get_field('bl2_title'); ?></div>
                            <div class="education__block__list">
                                <?php 
                                    while( have_rows('rep1_list') ): the_row(); 
                                        $title = get_sub_field('title');
                                        $icon = get_sub_field('icon');     
                                ?>
                                    <div class="list__item">
                                        <div class="list__item__icon">
                                            <img class="lazy" data-src="<?php echo $icon; ?>" alt=""></div>
                                        <div class="list__item__text"><?php echo $title; ?></div>
                                    </div>
                                <?php 
                                    endwhile;
                                    wp_reset_query();
                                ?>
                            </div>
                            <div class="education__botton">
                                <div class="button">
                                    <div data-src="#popup-order" anim="ripple" data-fancybox class="btn"><span><?php echo get_field('bl2_name_btn'); ?></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="education__block__item education__block__item__left col-ml-6 col-12">
                            <div class="item__author">
                                <div class="item__author__name"><?php echo get_field('bl1_author')['female']; ?></div>
                                <div class="item__author__specialization"><?php echo get_field('bl1_author')['spec']; ?></div>
                            </div>
                            <div class="item__image">
                                <img class="lazy" data-src="<?php echo get_field('bl2_img'); ?>" alt="">
                            </div>
                           
                        </div>
                      
                        <div class="ell3"></div>
                    </div>
                    <div class="item__educat animate__fadeIn wow" data-wow-duration="3s" data-wow-delay="0s" >
                        <svg class="educat_pechat" xmlns="http://www.w3.org/2000/svg" width="58" height="56" viewBox="0 0 58 56">
                            <g id="Сгруппировать_61" data-name="Сгруппировать 61" transform="translate(-1454.963 -1747)">
                                <path id="Многоугольник_9" data-name="Многоугольник 9" d="M32.086,3.672a5.822,5.822,0,0,1,8.481,2.749l.049.121a5.822,5.822,0,0,0,4.943,3.616l.11.009a5.822,5.822,0,0,1,5.212,7.156l-.074.312a5.823,5.823,0,0,0,1.858,5.758l.233.2a5.822,5.822,0,0,1,0,8.813l-.233.2a5.823,5.823,0,0,0-1.858,5.758l.074.312a5.822,5.822,0,0,1-5.212,7.156l-.11.009a5.822,5.822,0,0,0-4.943,3.616l-.049.121a5.822,5.822,0,0,1-8.481,2.749h0a5.822,5.822,0,0,0-6.171,0h0a5.822,5.822,0,0,1-8.481-2.749l-.049-.121a5.822,5.822,0,0,0-4.943-3.616l-.11-.009a5.822,5.822,0,0,1-5.212-7.156l.074-.312a5.823,5.823,0,0,0-1.858-5.758l-.233-.2a5.822,5.822,0,0,1,0-8.813l.233-.2a5.822,5.822,0,0,0,1.858-5.758l-.074-.312a5.822,5.822,0,0,1,5.212-7.156l.11-.009a5.822,5.822,0,0,0,4.943-3.616l.049-.121a5.822,5.822,0,0,1,8.481-2.749h0a5.822,5.822,0,0,0,6.171,0Z" transform="translate(1454.963 1747)" fill="#3fcbeb"/>
                                <g id="Многоугольник_10" data-name="Многоугольник 10" transform="translate(1462.963 1754)" fill="none">
                                <path d="M23.244,2.748a4.13,4.13,0,0,1,6.09,1.961l.116.3a4.13,4.13,0,0,0,3.514,2.61l.26.021a4.13,4.13,0,0,1,3.693,5.044l-.173.749a4.13,4.13,0,0,0,1.271,4.005l.543.486a4.13,4.13,0,0,1,0,6.157l-.543.486a4.13,4.13,0,0,0-1.271,4.005l.173.749a4.13,4.13,0,0,1-3.693,5.044l-.26.021a4.13,4.13,0,0,0-3.514,2.61l-.116.3a4.13,4.13,0,0,1-6.09,1.961h0a4.13,4.13,0,0,0-4.488,0h0a4.13,4.13,0,0,1-6.09-1.961l-.116-.3a4.13,4.13,0,0,0-3.514-2.61l-.26-.021a4.13,4.13,0,0,1-3.693-5.044l.173-.749a4.13,4.13,0,0,0-1.271-4.005l-.543-.486a4.13,4.13,0,0,1,0-6.157l.543-.486A4.13,4.13,0,0,0,5.256,13.43l-.173-.749A4.13,4.13,0,0,1,8.777,7.637l.26-.021a4.13,4.13,0,0,0,3.514-2.61l.116-.3a4.13,4.13,0,0,1,6.09-1.961h0a4.13,4.13,0,0,0,4.488,0Z" stroke="none"/>
                                <path d="M 16.51880073547363 3.083202362060547 C 15.21759033203125 3.083290100097656 14.07084083557129 3.864410400390625 13.59730911254883 5.073211669921875 L 13.48090934753418 5.370361328125 C 12.77066993713379 7.183483123779297 11.05758094787598 8.456192016601563 9.116561889648438 8.612743377685547 L 8.856990814208984 8.633663177490234 C 7.949611663818359 8.706851959228516 7.120769500732422 9.170082092285156 6.583000183105469 9.90460205078125 C 6.045238494873047 10.63911247253418 5.854000091552734 11.56915283203125 6.058330535888672 12.45625114440918 L 6.230949401855469 13.20570182800293 C 6.650650024414063 15.02793121337891 6.045551300048828 16.9343318939209 4.651779174804688 18.18096160888672 L 4.10845947265625 18.66692161560059 C 3.445369720458984 19.26000213623047 3.065071105957031 20.11037254333496 3.065071105957031 20.99999237060547 C 3.065071105957031 21.88962173461914 3.445369720458984 22.73999214172363 4.10845947265625 23.33307266235352 L 4.651779174804688 23.81904220581055 C 6.045551300048828 25.06567192077637 6.650650024414063 26.97208213806152 6.230941772460938 28.79429244995117 L 6.058319091796875 29.54374313354492 C 5.853988647460938 30.43084144592285 6.045230865478516 31.36088180541992 6.582988739013672 32.09539031982422 C 7.120761871337891 32.82991027832031 7.949588775634766 33.29314422607422 8.856948852539063 33.3663215637207 L 9.116580963134766 33.38726043701172 C 11.05755996704102 33.54380035400391 12.77066040039063 34.81651306152344 13.48089981079102 36.62963104248047 L 13.59730911254883 36.92680358886719 C 14.07085990905762 38.13567352294922 15.21758079528809 38.91679382324219 16.51869964599609 38.91679382324219 C 17.11747932434082 38.91679382324219 17.70322036743164 38.7425422668457 18.21256065368652 38.41289138793945 C 19.04476928710938 37.87425994873047 20.0086498260498 37.58956146240234 21 37.58956146240234 C 21.99132919311523 37.58956146240234 22.95520973205566 37.87425994873047 23.78742980957031 38.41289138793945 C 24.29677963256836 38.7425422668457 24.88250923156738 38.91679382324219 25.48129081726074 38.91679382324219 C 26.78242111206055 38.91679382324219 27.92914009094238 38.13567352294922 28.40269088745117 36.92680358886719 L 28.51910018920898 36.62963104248047 C 29.22933959960938 34.81651306152344 30.94244003295898 33.54380035400391 32.88344955444336 33.38725280761719 L 33.14302062988281 33.3663330078125 C 34.05041122436523 33.29314422607422 34.87924194335938 32.82990264892578 35.41701126098633 32.09539031982422 C 35.95476913452148 31.36088180541992 36.14599990844727 30.43084144592285 35.94168090820313 29.54374313354492 L 35.76905059814453 28.79430198669434 C 35.34934997558594 26.97206115722656 35.95444869995117 25.0656623840332 37.34820938110352 23.81904220581055 L 37.89152908325195 23.33308219909668 C 38.55461883544922 22.7400016784668 38.93492126464844 21.88962173461914 38.93492126464844 21.00000190734863 C 38.93492126464844 20.11038208007813 38.55461883544922 19.26001167297363 37.89152908325195 18.66693115234375 L 37.34820938110352 18.18096160888672 C 35.95444869995117 16.93434143066406 35.34934997558594 15.02793121337891 35.76905822753906 13.20569229125977 L 35.94168090820313 12.45627212524414 C 36.14599990844727 11.56917190551758 35.95476913452148 10.63912200927734 35.41701126098633 9.904613494873047 C 34.87924194335938 9.170093536376953 34.05041122436523 8.706863403320313 33.14305114746094 8.633682250976563 L 32.88341903686523 8.612743377685547 C 30.94244956970215 8.456203460693359 29.2293586730957 7.183490753173828 28.51910972595215 5.370380401611328 L 28.40269088745117 5.073211669921875 C 27.92910957336426 3.864280700683594 26.78242111206055 3.083152770996094 25.4813404083252 3.083213806152344 C 24.88249015808105 3.083232879638672 24.29674911499023 3.257480621337891 23.78745079040527 3.587100982666016 C 22.95521926879883 4.125732421875 21.99134063720703 4.410442352294922 21.00000953674316 4.410442352294922 C 20.00868034362793 4.410442352294922 19.0447998046875 4.125732421875 18.21258926391602 3.587100982666016 C 17.70318031311035 3.257411956787109 17.11747932434082 3.083160400390625 16.51880073547363 3.083202362060547 M 16.51872634887695 2.083198547363281 C 17.2816104888916 2.083148956298828 18.05676078796387 2.295082092285156 18.75592994689941 2.747592926025391 L 18.75592041015625 2.747592926025391 C 20.1214599609375 3.631389617919922 21.87857055664063 3.631389617919922 23.24411010742188 2.747592926025391 L 23.24408912658691 2.747611999511719 C 25.43730163574219 1.328121185302734 28.38090896606445 2.275947570800781 29.33380126953125 4.708473205566406 L 29.45021057128906 5.005630493164063 C 30.0261402130127 6.475852966308594 31.38991928100586 7.489040374755859 32.96380996704102 7.615982055664063 L 33.22341156005859 7.636913299560547 C 35.73532104492188 7.839500427246094 37.4818000793457 10.22494125366211 36.91616058349609 12.68072128295898 L 36.74353790283203 13.43015098571777 C 36.4056396484375 14.89723205566406 36.89276123046875 16.43195152282715 38.0148811340332 17.43561172485352 L 38.55820083618164 17.92157173156738 C 40.39382934570313 19.56340217590332 40.39382934570313 22.43660163879395 38.55820083618164 24.07844161987305 L 38.0148811340332 24.56440162658691 C 36.89276123046875 25.56805229187012 36.4056396484375 27.102783203125 36.74353790283203 28.56985092163086 L 36.91616058349609 29.31929206848145 C 37.4818000793457 31.77506256103516 35.73532104492188 34.16050338745117 33.22341156005859 34.36309051513672 L 32.96380996704102 34.3840217590332 C 31.38991928100586 34.51096343994141 30.02613067626953 35.52415084838867 29.45021057128906 36.9943733215332 L 29.33380126953125 37.29154205322266 C 28.38090896606445 39.72405242919922 25.43729972839355 40.67188262939453 23.24408912658691 39.25240325927734 C 21.87854957580566 38.36861038208008 20.12143898010254 38.36861038208008 18.75591087341309 39.25240325927734 C 16.56269264221191 40.67188262939453 13.61909103393555 39.72405242919922 12.66620063781738 37.29154205322266 L 12.54978942871094 36.9943733215332 C 11.97386932373047 35.52415084838867 10.61008071899414 34.51096343994141 9.036190032958984 34.3840217590332 L 8.776588439941406 34.36309051513672 C 6.264671325683594 34.16050338745117 4.518199920654297 31.77506256103516 5.083831787109375 29.31929206848145 L 5.256450653076172 28.56984329223633 C 5.5943603515625 27.1027717590332 5.107231140136719 25.56805229187012 3.985111236572266 24.56439208984375 L 3.441791534423828 24.07843208312988 C 1.606170654296875 22.43660163879395 1.606170654296875 19.56339263916016 3.441791534423828 17.92156219482422 L 3.985118865966797 17.43560218811035 C 5.10723876953125 16.43194198608398 5.5943603515625 14.8972225189209 5.256458282470703 13.43015098571777 L 5.083839416503906 12.68070220947266 C 4.518211364746094 10.22493171691895 6.264690399169922 7.839492797851563 8.776599884033203 7.63690185546875 L 9.036201477050781 7.615970611572266 C 10.6100902557373 7.489032745361328 11.97388076782227 6.475852966308594 12.54980087280273 5.005622863769531 L 12.66621017456055 4.708461761474609 C 13.31533050537109 3.051403045654297 14.88852691650391 2.083309173583984 16.51872634887695 2.083198547363281 Z" stroke="none" fill="#cef9fe"/>
                                </g>
                            </g>
                        </svg>
                        <div class="item__educat__inner">
                                <span>Образование:</span>
                                <div class="item__educat__list">
                                <?php echo get_field('education'); ?>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>