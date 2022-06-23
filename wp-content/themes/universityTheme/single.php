<?php get_header('custom'); ?>
<?php the_post(); ?>

<main class="page__notation">
	<section class="notation">
		<div class="notation__container">
			<h2 class="item__title"><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</div>
	</section>
</main>

<?php get_footer('custom'); ?>