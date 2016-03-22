<?php get_header(); ?>
		<!-- section -->
		<section>

                <?php get_template_part('partials/headline');?>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>


				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

                        <?php else: ?>

                            <article>
                                <?php get_template_part('partials/article', '404'); ?>
                            </article>

                        <?php endif; ?>

		</section>

<?php #get_sidebar(); ?>

<?php get_footer(); ?>
