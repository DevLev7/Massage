<?php 
$header = get_field('reviews-setting', 'option')['header']; 
?>

	<section class="reviews video-section" >
    <img class="shar_4 lazy" data-src="<?php echo THEME_IMAGES; ?>/shar_4.png"data-bottom-top="transform: translate3d(0px,80px,0px) rotate(0.0001deg)" data-top-bottom="transform: translate3d(0px,-80px,0px) rotate(0.0001deg)">
    <div class="ell20"></div>
        <div class="line2"></div>
        <div class="ell17"></div>
        <div class="ell18"></div>
        <div class="ell19"></div>
		<div class="container-fluid">
			<div class="header list">
				<h2>Родители каждый день хвалятся <span class="text_color"> успехами деток после упражнений </span></h2>
                <span class="subtitle">Видеоотзывы</span>
			</div>

            <?php
            $reviews = [];
            // Уникальные отзывы
            if ( get_sub_field( 'reviews' ) ) {

                while (have_rows( 'repeater' )): the_row();
                    $reviews[] = [
                        'name'       => get_sub_field( 'name' ),
                        'review'     => get_sub_field( 'review' ),
                        'city'       => get_sub_field( 'city' ),
                        'position'   => get_sub_field( 'position' ),
                        'blockquote' => get_sub_field( 'blockquote' ),
                    ];
                endwhile;
                //wp_reset_query();

            }

            // отзывы из секции
            if ( get_sub_field( 'reviews-section' ) ) {
                $args = array(
                    'post_type' => array('reviews'),
                    'showposts' => -1,
                    'post__in'  => get_sub_field( 'reviews-section' ),
                    'orderby'   => 'post__in',
                );
            } else {
                $args = array(
                    'post_type'  => array('reviews'),
                    'showposts'  => -1,
                    'meta_query' => [
                        [ // Проверяет существование поля у записи
                            'key'     => 'review',
                            'compare' => 'EXISTS'
                        ],
                        [ // Проверяет заполненность поля
                            'key'     => 'review',
                            'compare' => '!=',
                            'value'   => ''
                        ]
                    ]
                );
            }
            $the_query = new WP_Query( $args );
            while ($the_query->have_posts()) : $the_query->the_post();
                $reviews[] = [
                    'name'       => get_the_title(),
                    'review'     => get_field( 'review' ),
                    'avatar'     => get_field( 'avatar' ),
                    'image'      => get_field( 'image' ),
                    'city'       => get_field( 'city' ),
                    'position'   => get_field( 'position' ),
                    'blockquote' => get_field( 'blockquote' ),
                ];

            endwhile;
            wp_reset_query();

            //get_template_part( 'template-parts/review-slider', null, ['reviews' => $reviews] );
            ?>

			<div class="swiper-container">
				<div class="swiper-wrapper">
					<?php
					$alt = get_the_title();
					
					$args = array(
						'post_type' => array('reviews'),
						'showposts' => -1,
						'meta_query'     => [
							[ // Проверяет существование поля у записи
								'key' => 'video-id',
								'compare' => 'EXISTS'
							],
							[ // Проверяет заполненность поля
								'key' => 'video-id',
								'compare' => '!=',
								'value' => ''
							]
						]
					);
					
					$the_query = new WP_Query( $args );
					$count_reviews = str_pad( $the_query->found_posts, 2, '0', STR_PAD_LEFT);
					while ( $the_query->have_posts() ) : $the_query->the_post();
						$video = get_field('video-id');
						$YouTube_ID = YouTubeID($video); // ID видео с YouTube
					?>			
					<div class="swiper-slide">
                        <div class="slide-wrap">	
						<div class="video">
							<a class="video__link" href="https://youtu.be/<? echo $YouTube_ID; ?>" id="<? echo $YouTube_ID; ?>">
								<!-- <picture>
									<source srcset="https://i.ytimg.com/vi_webp/<? echo $YouTube_ID; ?>/mqdefault.webp" type="image/webp">
									<img class="video__media lazy" data-src="https://i.ytimg.com/vi/<? echo $YouTube_ID; ?>/mqdefault.jpg" alt="<? echo $video_desc ? $video_desc : $alt.' — '.$video_num.' / '.get_field('company', 'option')['brand'] ; ?>">
								</picture> -->
                                <img class="video__media lazy" data-src="https://i.ytimg.com/vi/<? echo $YouTube_ID; ?>/mqdefault.jpg" alt="<? echo $video_desc ? $video_desc : $alt.' — '.$video_num.' / '.get_field('company', 'option')['brand'] ; ?>">
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
                    
					<?php 
					endwhile;
					wp_reset_query();
					?>
				</div>			
				
               
			</div>
            <div class="review-video-slider-arrow">
                    <div class="swiper-button-next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="29.292" height="19.032" viewBox="0 0 29.292 19.032">
                            <g id="Сгруппировать_64" data-name="Сгруппировать 64" transform="translate(-5)">
                                <path id="Контур_107" data-name="Контур 107" d="M38.842,140.43h0l-8.02-7.981a1.535,1.535,0,0,0-2.166,2.176l5.385,5.358h-22.5a1.535,1.535,0,0,0,0,3.07h22.5l-5.384,5.358a1.535,1.535,0,0,0,2.166,2.176l8.02-7.981h0A1.536,1.536,0,0,0,38.842,140.43Z" transform="translate(-5 -132)" fill="#fff"/>
                            </g>
                        </svg>
                    </div>
                    <div class="swiper-button-prev">
                        <svg id="Сгруппировать_645" data-name="Сгруппировать 645" xmlns="http://www.w3.org/2000/svg" width="29.292" height="19.032" viewBox="0 0 29.292 19.032">
                            <path id="Контур_107" data-name="Контур 107" d="M10.45,140.43h0l8.02-7.981a1.535,1.535,0,0,1,2.166,2.176l-5.385,5.358h22.5a1.535,1.535,0,1,1,0,3.07h-22.5l5.384,5.358a1.535,1.535,0,0,1-2.166,2.176l-8.02-7.981h0A1.536,1.536,0,0,1,10.45,140.43Z" transform="translate(-10 -132)" fill="#fff"/>
                        </svg>
                    </div>
                </div>
            <div class="button">
                <span data-src="#popup-review" data-fancybox  anim="ripple" class="btn">
                    <span>Оставить свой отзыв</span>
                </span>
        </div>
		</div>
	</section>