<?php 
/*
	Первый экран
	====================
*/

// Заголовок и описание
$hero_header = get_field($field_preffix_hero.'hero-header',$field_postfix);
$hero_span = get_field($field_preffix_hero.'hero-beforeheader',$field_postfix);


// Кнопка
$hero_btn = $hero_group['hero-btn'];
$hero_btn_desc = $hero_group['hero-btn-desc'];
?>

<div id="hero" >
    <div class="hero_mobile">
        <img  class="lazy" src="<?php echo THEME_IMAGES; ?>/hero_mobile.png" alt="">
        <div class="ell"></div>
        <div class="ell1"></div>
    </div>
    <div class="elem__item">
        <div class="line__gorizontal"></div>
         <div class="line__vertical"></div>
        <div class="center"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21"><path id="Многоугольник_8" data-name="Многоугольник 8" d="M9.086,3.5a1.525,1.525,0,0,1,2.828,0l.007.017a1.525,1.525,0,0,0,2.131.775l.011-.006a1.525,1.525,0,0,1,2.172,1.8l-.031.1A1.525,1.525,0,0,0,17.33,8.134l.091.02a1.525,1.525,0,0,1,.494,2.772l-.105.068a1.525,1.525,0,0,0-.39,2.207l.078.1a1.525,1.525,0,0,1-1.421,2.434l-.049-.007A1.525,1.525,0,0,0,14.3,17.182l0,.059a1.525,1.525,0,0,1-2.66.957h0a1.525,1.525,0,0,0-2.271,0h0a1.525,1.525,0,0,1-2.66-.957l0-.059a1.525,1.525,0,0,0-1.731-1.451l-.049.007A1.525,1.525,0,0,1,3.5,13.3l.078-.1a1.525,1.525,0,0,0-.39-2.207l-.105-.068a1.525,1.525,0,0,1,.494-2.772l.091-.02A1.525,1.525,0,0,0,4.8,6.188l-.031-.1a1.525,1.525,0,0,1,2.172-1.8l.011.006a1.525,1.525,0,0,0,2.131-.775Z" fill="#cac6dc"/></svg>
        </div>
    </div>
    <div class="hero__image">
        <picture>
            <source srcset="<?php echo THEME_IMAGES; ?>/hero_image.webp" type="image/webp">
            <img class="hero__image" src="<?php echo THEME_IMAGES; ?>/hero_image.png">
        </picture>
    </div>
    <div class="container-fluid">
        <div class="row">
                <div class="col-lg-6 col-ml-7 col-md-9 col-sm-10 col-12">
                    <div class="hero">
                        <div class="row">
                            <div class="col-12">
                                <div class="hero__title" >
                                <span class="subtitle"><?php echo $hero_span; ?></span>
                                    <div class="hidden"> <?php echo $hero_header; ?></div>
                                    <h1 class="h1 ml11" ><span class="line_ line0"></span><span class="letters">От первых прикосновений к результату,</span></h1>
                                    <span class="small_text"> более чем у 5 000 родителей уже получилось</span>
                                    
                                   
                                </div>
                                <div class="hero__button">
                                    <div class="button">
                                        <div data-src="#popup-order" anim="ripple" data-fancybox class="btn"><span>Актуален ли для вас курс?</span></div>
                                    </div>
                                </div>
                                <div class="video">
							        <a class="video__link" href="https://youtu.be/<?php echo get_field('hero_video'); ?>" id="<?php echo get_field('hero_video'); ?>">
                                    <picture>
                                        <source srcset="https://i.ytimg.com/vi_webp/<?php echo get_field('hero_video'); ?>/mqdefault.webp" type="image/webp">
                                        <img class="video__media" src="https://i.ytimg.com/vi/<?php echo get_field('hero_video'); ?>/mqdefault.jpg" >
                                    </picture>
							        </a>
                                    <button class="video__button" aria-label="Запустить видео">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="116" height="116" viewBox="0 0 116 116">
                                    <g id="Сгруппировать_646" data-name="Сгруппировать 646" transform="translate(-434.645 -8651)">
                                        <g id="Эллипс_50" data-name="Эллипс 50" transform="translate(434.645 8651)" fill="none" stroke="#fff" stroke-width="2">
                                        <circle cx="58" cy="58" r="58" stroke="none"/>
                                        <circle cx="58" cy="58" r="57" fill="none"/>
                                        </g>
                                        <g id="play-button-arrowhead" transform="translate(461.537 8684)">
                                        <path id="Контур_108" data-name="Контур 108" d="M16.41,1.121c-4.585-2.63-8.3-.476-8.3,4.809v39c0,5.29,3.718,7.442,8.3,4.814L50.5,30.193c4.587-2.631,4.587-6.894,0-9.525Z" transform="translate(0 0)" fill="#fff"/>
                                        </g>
                                    </g>
                                    </svg>
                                    </button>
						        </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-ml-5 col-md-3 col-sm-2 col-12">
                    <div class="hero__block">
                    <div class="hero__block__elem__item">
                        <div class="hero__block__line__gorizontal"></div>
                        <div class="hero__block__line__vertical"></div>
                        <div class="hero__block__center"> <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21">
                        <path id="Многоугольник_7" data-name="Многоугольник 7" d="M9.086,3.5a1.525,1.525,0,0,1,2.828,0l.007.017a1.525,1.525,0,0,0,2.131.775l.011-.006a1.525,1.525,0,0,1,2.172,1.8l-.031.1A1.525,1.525,0,0,0,17.33,8.134l.091.02a1.525,1.525,0,0,1,.494,2.772l-.105.068a1.525,1.525,0,0,0-.39,2.207l.078.1a1.525,1.525,0,0,1-1.421,2.434l-.049-.007A1.525,1.525,0,0,0,14.3,17.182l0,.059a1.525,1.525,0,0,1-2.66.957h0a1.525,1.525,0,0,0-2.271,0h0a1.525,1.525,0,0,1-2.66-.957l0-.059a1.525,1.525,0,0,0-1.731-1.451l-.049.007A1.525,1.525,0,0,1,3.5,13.3l.078-.1a1.525,1.525,0,0,0-.39-2.207l-.105-.068a1.525,1.525,0,0,1,.494-2.772l.091-.02A1.525,1.525,0,0,0,4.8,6.188l-.031-.1a1.525,1.525,0,0,1,2.172-1.8l.011.006a1.525,1.525,0,0,0,2.131-.775Z" fill="#3fcbeb"/>
                        </svg>
                        </div>
                    </div>
                        <div class="hero__block__image">
                            <img src="<?php echo THEME_IMAGES; ?>/hero_ivan.png" alt="">
                        </div>
                        <div class="hero__block__item">
                            <div class="hero__block__title">Автор курсов</div>
                            <div class="hero__block__aurhor"><?php echo get_field('bl1_author')['female']; ?></div>
                            <div class="hero__block__specialization"><?php echo get_field('bl1_author')['spec']; ?></div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
</div>