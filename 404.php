<?php get_header(); ?>

<div class="container">
	<div class="content-box content-404">
		<header class="page-header">
			<h1 class="page-title"><?php _e( 'Not Found', DIRECTORY_THEME ); ?></h1>
		</header>

		<div class="page-wrapper">
			<div class="page-content">
				<h2><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', DIRECTORY_THEME ); ?></h2>
				<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', DIRECTORY_THEME ); ?></p>

				<?php get_search_form(); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>