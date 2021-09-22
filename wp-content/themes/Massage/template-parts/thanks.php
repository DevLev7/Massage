<?php get_header(); ?>
<?php 
if ( !is_page_template(get_option( 'page_on_front' )) ) {
$hero_bg = get_field('group', get_option( 'page_on_front' ))['hero-bg']['url'];
$hero_bg_micro = get_field('group', get_option( 'page_on_front' ))['hero-bg']['sizes']['micro-item'];
?>
	<section id="hero" 
	class="<?php echo get_field('group', get_option( 'page_on_front' ))['hero-image'] ? "hero-image" : ""; ?>" 
	<?php echo $hero_bg ? 'style="background-image: url('.$hero_bg.'), url('.$hero_bg_micro.')"' : '' ; ?>
	>
<?php }else{ ?>
	<section id="hero" 	class="hero-image">	
<?php } ?>	
		<div class="ell"></div>
		<div class="ell1"></div>
        <picture>
            <source srcset="<?php echo THEME_IMAGES; ?>/hero_image.webp" type="image/webp">
            <img class="hero__image_error" src="<?php echo THEME_IMAGES; ?>/hero_image.png">
        </picture>
   
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="main">
						<div class="wrap">
							<div class="header list">
								<h1 class="h1">Спасибо за заявку! </h1>
							</div>
							<div class="intro list">
							В ближайшее время с вами свяжется наш менеджер и уточнит детали.
							</div>
							<div class="button">
								 <a href="<?php echo home_url().'/';?>" class="btn"><span>Вернуться назад</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>