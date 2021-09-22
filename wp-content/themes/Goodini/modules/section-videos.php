<?php 
// Фон
$stylegroup = get_sub_field('style-group')['style-bg'];
$stylegroup_color = '';
if($stylegroup!='style-bg-none'){
	$stylegroup_color = "bg-color";
} 

// Массив стилей текста
$styletext_arr = get_sub_field('style-group')['style-text'];
foreach ($styletext_arr as $styletext_value) {
	$styletext .= ' '.$styletext_value;
}
?>
	
	
	<section id="<?php echo $building_row; ?>" class="video-section <?php echo $stylegroup_color.' '.$stylegroup.$styletext;?>">
		<div class="container-fluid">
			<div class="header list">
				<?php the_sub_field('header'); ?>
			</div>
			<div class="videos-video">
				<div class="videos-video-slider">
					<?php
					preg_match("~<h2>(.*)</h2>~",get_sub_field('header'),$alt_preg);
					$alt = strip_tags($alt_preg[1]);

					$video_num = 0;
					foreach (get_sub_field('repeater-video') as $video_id) {
						$video_num++;
						$video_desc = get_field('video-desc',$video_id); // Описание в записи с ID $video_id
						$YouTube_link = get_field('video',$video_id)['youtube']; // Ссылка на видео с YouTube в записи с ID $video_id
						$YouTube_ID = YouTubeID($YouTube_link); // ID видео с YouTube
					?>			
					<div class="slide">	
						<div class="video">
							<a class="video__link" href="https://youtu.be/<? echo $YouTube_ID; ?>" id="<? echo $YouTube_ID; ?>">
								<picture>
									<source srcset="https://i.ytimg.com/vi_webp/<? echo $YouTube_ID; ?>/mqdefault.webp" type="image/webp">
									<img class="video__media" src="https://i.ytimg.com/vi/<? echo $YouTube_ID; ?>/mqdefault.jpg" alt="<? echo $video_desc ? $video_desc : $alt.' — '.$video_num.' / '.get_field('company', 'option')['brand'] ; ?>">
								</picture>
							</a>
							<button class="video__button" aria-label="Запустить видео">
								<svg width="68" height="48" viewBox="0 0 68 48"><path class="video__button-shape" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"></path><path class="video__button-icon" d="M 45,24 27,14 27,34"></path></svg>
							</button>
						</div>
						<div class="title">
							<?php echo get_the_title($video_id); ?>
						</div>
					</div>
					<?php } ?>
				</div>
				<div class="videos-video-slider-arrow"></div>
			</div>
		</div>
	</section>