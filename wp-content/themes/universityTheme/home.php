<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?>

<main class="page__index">
	<section class="preview">
		<h1 class="preview__title">
			<?php the_field('preview_title') ?>
		</h1>
		<div class="preview__img">
			<picture>
				<source srcset="<?php bloginfo("template_url");?>/assets/img/previewbg.webp" type="image/webp"><img
					src="<?php bloginfo("template_url");?>/assets/img/previewbg.jpg" alt="">
			</picture>
		</div>
	</section>
	<section class="cards">

		<div class="cards__container">
			<?php
							global $post;

							$myposts = get_posts([ 
								'numberposts' => -1,
								'category_name' => 'Посилання (Карточки)'
							]);

							if( $myposts ){
								foreach( $myposts as $post ){
									setup_postdata( $post );
			?>
			<div class="card">
				<a href="##" class="card__content">
					<div class="card__img">
						<?php the_post_thumbnail();?>
					</div>
					<h3 class="card__title"><?php the_content();?></h3>
				</a>
			</div>
			<?php 
								}
							}
							wp_reset_postdata();
			?>
			<!-- <div class="card card__course">
				<a href="##" class="card__content">
					<div class="card__img">
						<img src="<?php bloginfo("template_url");?>/assets/img/icons/icons.svg#course" class="svg-course-dims"
							alt="desktop">
					</div>
					<h3 class="card__title">Підготовчі <span class="br"><br></span> <span>курси</span></h3>
				</a>
			</div>
			<div class="card card__entrant">
				<a href="##" class="card__content">
					<div class="card__img">
						<img src="<?php bloginfo("template_url");?>/assets/img/icons/icons.svg#entrant"
							class="svg-entrant-dims" alt="desktop">
					</div>
					<h3 class="card__title"><span>Абітурієнту</span></h3>
				</a>
			</div>
			<div class="card card__student">
				<a href="##" class="card__content">
					<div class="card__img">
						<img src="<?php bloginfo("template_url");?>/assets/img/icons/icons.svg#student"
							class="svg-student-dims" alt="desktop">
					</div>
					<h3 class="card__title"><span>Студенту</span></h3>
				</a>
			</div> -->
		</div>
	</section>
	<section class="news">
		<div class="news__container">
			<h2 class="news__title">
				<?php the_field('news_title_basic') ?> <span><?php the_field('news_title_small') ?></span>
			</h2>
			<div class="news__body body-news">
				<div class="body-news__items">
					<?php
							global $post;

							$myposts = get_posts([ 
								'numberposts' => -1,
								'category_name' => 'Новини'
							]);

							if( $myposts ){
								foreach( $myposts as $post ){
									setup_postdata( $post );
					?>
					<div class="body-news__item item">
						<div class="item__img">
							<?php the_post_thumbnail() ?>
						</div>
						<div class="item__body">
							<div class="item__content">
								<h4 class="item__title">
									<?php the_title();?>
								</h4>
								<?php the_content();?>
							</div>
							<div class="item__more">
								<a href="<?php the_field('news_item_button_more_link') ?>" class="item__show-more">
									<h3>Детальніше</h3>
								</a>
							</div>
						</div>
					</div>
					<?php 
								}
							}

							wp_reset_postdata();
					?>


					<?php
						global $post;

						$myposts = get_posts([ 
							'numberposts' => -1,
							'category_name' => 'Приховані новини'
						]);

						if( $myposts ){
							foreach( $myposts as $post ){
								setup_postdata( $post );
						?>
					<div id="item__hidden" class="body-news__item item _hidden">
						<div class="item__img">
							<?php the_post_thumbnail() ?>
						</div>
						<div class="item__body">
							<div class="item__content">
								<h4 class="item__title">
									<?php the_title();?>
								</h4>
								<p class="item__text">
									<?php the_content();?>
								</p>
							</div>
							<div class="item__more">
								<a href="<?php the_field('news_item_button_more_link') ?>" class="item__show-more">
									<h3>Детальніше</h3>
								</a>
							</div>
						</div>
					</div>
					<?php 
								}
							}

							wp_reset_postdata();
					?>
				</div>
				<div class="body-news__more">
					<a href="##" class="body-news__show-more">
						<h3>Показати ще</h3>
					</a>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>