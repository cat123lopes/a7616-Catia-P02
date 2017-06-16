<?php
/**
* The template for displaying all single posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
*
* @package wp_theme
*/

get_header(); ?>

<div id="project">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div id="img_post">

				<?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail();
				}

				?>
			</div>



		</div>


		<?php
		while ( have_posts() ) : the_post(); ?>






		<div class="container" id="section-a">
			<div class="row">
				<div class="col-xs-8 col-sm-8 col-md-8">

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<div class="entry-header">
							<?php
							if ( is_single() ) :
								the_title( '<h1 class="entry-title">', '</h1>' );
								else :
									the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
								endif;

								if ( 'post' === get_post_type() ) : ?>
								<div class="entry-meta">
									<?php wp_theme_posted_on(); ?>
								</div><!-- .entry-meta -->
								<?php
							endif; ?>
						</div><!-- .entry-header -->


						<!-- conteudo editavel no wp -->

						<div class="entry-content">
							<?php the_content(); ?>
						</div><!-- .entry-content -->



					</article><!-- #post-## -->

					<?php the_post_navigation();

				endwhile; // End of the loop.
				?>



			</div>

		</div>
	</div>
	<!-- posts futuros -->

	<div class="section" id="section-b">
		<div class="section-a-bckg hidden-xs"></div>
		<div class="container">
			<div class="row">
				<div class="col-xs-8 col-md-offset-3 col-md-5 no-padding-xs">
					<div class="section-a-content">

						<div id="fadeslider">
							<div class="slide-fadeslider active" data-index="1"> <img src="<?php bloginfo('stylesheet_directory'); ?>/img/img-4.jpg" alt="" class="img-responsive michal">
								<div class="section-desc">
									<h1>Burano<br>paradise</h1>
									<h2>posted on 14 may, 2017<span class="visible-xs"><br></span> </h2> <a href="bangkok.html" class="btn">READ MORE</a> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>




</main><!-- #main -->
</div><!-- #primary -->


<?php
get_footer();
