<?php get_header(); ?>

	<section id="hero" >
		<div class="ell"></div>
		<div class="ell1"></div>
        <picture>
            <source srcset="<?php echo THEME_IMAGES; ?>/hero_image_error.webp" type="image/webp">
            <img class="hero__image_error" src="<?php echo THEME_IMAGES; ?>/hero_image_error.png">
        </picture>
   
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="main">
						<div class="wrap">
							<div class="header list">
								<h1 class="h1"><span class="text_color">404</span><br>Ой, страница не найдена </h1>
							</div>
							<div class="intro list">
							Мы не можем найти страницу, которую вы ищете. 
							</div>
							<div class="button">
								 <a href="<?php echo home_url().'/';?>" class="btn"><span>Перейти на главную</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>