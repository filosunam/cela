<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage CELA
 * @since CELA 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<header class="page-header">
				<h1 class="page-title"><?php _e( 'Página no encontrada', 'twentythirteen' ); ?></h1>
			</header>

				<div class="page-content">
					<h2><?php _e( 'Esta página no se encuentra disponible en el servidor', 'twentythirteen' ); ?></h2>
					<p><?php _e( 'Inicia una búsqueda para encontrar resultados similares', 'twentythirteen' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>