<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ecommerce_store_elementor
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'ecommerce-store-elementor' ); ?></h1>
				</header>
				<div class="page-content">
		          <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'ecommerce-store-elementor' ); ?></p>
					<?php get_search_form(); ?>
				</div>
			</section>
		</main>
	</div>

<?php get_footer(); ?>
