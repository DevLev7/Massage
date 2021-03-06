<?php
$reviews       = $args['reviews'];
$count_reviews = str_pad( count( $reviews ), 2, '0', STR_PAD_LEFT );
?>
            <div class="slider">
                <div class="row">
                    <div class="col-ml-4">
                        <div class="leftbar">
                            <div class="slides">
                                <?php foreach ($reviews as $review) :?>
                                    <div class="item">
                                        <div class="blockquote">
                                            <?php echo $review['blockquote']; ?>
                                        </div>
                                        <div class="blockquote-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39 32">
                                                <path id="_"
                                                      d="M35.48 0C30.65 4.7 22 13.23 22 22.6c0 6.84 4.25 9.4 8.5 9.4 5 0 8.5-3.4 8.5-8 0-4.84-3.66-8.1-8.35-8.1a1.7 1.7 0 0 1-.44-1.3c0-2.83 3.38-8.8 7.34-12.5zM13.34 0C8.5 4.7 0 13.23 0 22.6 0 29.45 4.25 32 8.5 32c4.84 0 8.5-3.4 8.5-8 0-4.84-3.66-8.1-8.35-8.1a1.7 1.7 0 0 1-.44-1.3c0-2.83 3.38-8.8 7.34-12.5z"/>
                                            </svg>
                                        </div>
                                        <div class="name-block">
                                            <? if ( $review['avatar'] ) { ?>
                                                <div class="avatar image_circle">
                                                    <img src="<?php echo $review['avatar']; ?>" alt="<?php echo $review['name']; ?>">
                                                </div>
                                            <? } ?>
                                            <div class="name-detail">
                                                <div class="name">
                                                    <?php echo $review['name']; ?>
                                                </div>
                                                <div class="detail">
                                                    <? if ( $review['position'] ) { ?>
                                                        <span><?php echo $review['position']; ?></span>
                                                    <? } ?>
                                                    <? if ( $review['city'] ) { ?>
                                                        <span><?php echo $review['city']; ?></span>
                                                    <? } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                            <div class="button">
                                <span data-src="#popup-review" data-fancybox  anim="ripple" class="btn">
                                    <span>???????????????? ???????? ??????????</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-ml-8">
                        <div class="slides rightbar">
                            <?php foreach ($reviews as $review) :?>
                                <div class="review">
                                    <div class="review-text">
                                        <?php echo $review['review']; ?>
                                    </div>
                                    <?php if($review['image']){ ?>
                                        <div class="review-image">
                                            <a href="<?php echo $review['image']['url']; ?>" data-fancybox='review'>???????????????? ????????????
                                            </a>
                                        </div>
                                    <?php } ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>