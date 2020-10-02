<?php
//styles generated by customizer
function directory_theme_customize_css()
{
	/**
	 * Table of Contents
	 *
	 * 1.0 - General
	 *   1.1 - Site Identity
	 *   	1.1.1 - Blog Name
	 *      1.1.2 - Tagline
	 *      1.1.3 - Colors
	 *   1.2 - Spacing
	 *      1.2.1 - Desktop Container Width
	 *      1.2.2 - Container Padding Right
	 *      1.2.3 - Container Padding Left
	 *      1.2.4 - Container Margin Right
	 *      1.2.5 - Container Margin Left
	 * 	 1.5 - Button Colors
	 *      1.5.1 - Button Text Color
	 *      1.5.2 - Button Background Color
	 *      1.5.3 - Button Hover Background Color
	 *      1.5.4 - Button Border Color
	 * 2.0 - Header
	 *   2.1 - Header Top
	 *      2.1.1 - Enable Header Top Section
	 *      2.1.2 - Header Top Text Color
	 *      2.1.3 - Header Top Link Color
	 *      2.1.4 - Header Top Link Hover Color
	 * 		2.1.5 - Header Top Background Color
	 *   2.2 - Logo
	 * 		2.2.1 - Logo
	 *   2.3 - Header Image
	 * 		2.3.1 - Header Image
	 *   2.4 - Text Colors
	 * 		2.4.1 - Header Text color
	 * 		2.4.2 - Header Link color
	 *      2.4.3 - Header Link Hover Color
	 *   2.5 - Background Colors
	 * 		2.5.1 - Header Background Color
	 * 		2.5.2 - Header Border Color
	 * 		2.5.3 - Header Shadow Color
	 * 		2.5.4 - Primary Menu - Sub menu Background Color
	 *      2.5.5 - Primary Menu - Sub menu Background hover Color
	 *   2.6 - Typography
	 *   2.7 - Spacing
	 * 		2.7.1 - Header Height
	 * 		2.7.2 - Logo Margin Right
	 * 		2.7.3 - Logo Margin Left
	 * 		2.7.4 - Logo Margin Top
	 * 		2.7.5 - Primary Menu Height
	 * 		2.7.6 - Primary Menu Line Height
	 * 		2.7.7 - Primary Menu Padding Left Right
     *      2.7.8 - Header Logo Width
     *      2.7.9 - Header Menu Width
	 * 3.0 - Body
	 *   3.1 - Background Image
	 * 		3.1.1 - Background Image
	 *   3.2 - Text Colors
	 * 		3.2.1 - Body Color
	 * 		3.2.2 - h1 to h6 Color
	 * 		3.2.3 - Link Color
	 * 		3.2.4 - Link Hover Color
	 * 		3.2.5 - Link Visited Color
	 *   3.3 - Background Colors
	 * 		3.3.1 - Body Background Color
	 * 		3.3.2 - Content Box Background Color
	 * 		3.3.3 - Content Box Border Color
	 * 		3.3.4 - Content Box Shadow Color
	 *   3.4 - Typography
	 * 		3.4.1 - Font Family
	 * 		3.4.2 - Font Size
	 * 		3.4.3 - Line Height
	 *   3.5 - Spacing
	 * 4.0 - Footer
	 *   4.1 - Text Colors
	 * 		4.1.1 - Text Color
	 * 		4.1.2 - h1 to h6 Color
	 * 		4.1.3 - Link Color
	 * 		4.1.4 - Link Hover Color
	 * 		4.1.5 - Link Visited Color
	 *   4.2 - Background Colors
	 * 		4.2.1 - Footer Section Background Color
	 * 		4.2.2 - Footer Section Border Top Color
	 * 		4.2.3 - Footer Section Border Bottom Color
	 * 		4.2.4 - Footer Section Box Shadow Color
	 *   4.3 - Typography
	 *   4.4 - Spacing
	 * 5.0 - Copyright
	 * 	5.1 - Text Colors
	 * 		5.1.1 - Text Color
	 * 		5.1.2 - Link Color
	 * 		5.1.3 - Link Hover Color
	 * 		5.1.4 - Link Visited Color
	 *	5.2 - Background Colors
	 * 		5.2.1 - Copyright Section Background Color
	 * 		5.2.2 - Copyright Section Border Color
	 * 	5.3 - Typography
	 * 	5.4 - Spacing
	 * 		5.4.1 - Copyright Padding Top
	 * 		5.4.2 - Copyright Padding Bottom
	 * 	5.5 - Copyright Text
	 * 		5.5.1 - Copyright Text
	 * 		5.5.2 - Credits
	 */


//  =============================
//  1.0 - General
//  =============================
?>
<?php
	//  =============================
	//  1.1 - Site Identity
	//  =============================
	?>
		<?php
		//  =============================
		//  1.1.1 - Blog Name
		//  =============================
		?>
		<?php
		//  =============================
		//  1.1.2 - Tagline
		//  =============================
		?>
		<?php
		//  =============================
		//  1.1.3 - Colors
		//  =============================
		?>
	<?php
	//  =============================
	//  1.2 - Spacing
	//  =============================

	
//  =============================
//  2.0 - Header
//  =============================
	?>
	<?php
	//  =============================
	//  2.1 - Header Top
	//  =============================
	?>
		<?php
		//  =============================
		//  2.1.1 - Enable Header Top Section
		//  =============================
		?>
		<?php
		//  =============================
		//  2.1.2 - Header Top Text Color
		//  =============================
		?>
			.ds-top-header {
				color: <?php echo esc_attr(get_theme_mod('dt_header_top_text_color', DT_HEADER_TOP_TEXT_COLOR)); ?>;
			}
		<?php
		//  =============================
		//  2.1.3 - Header Top Link Color
		//  =============================
		?>
			.ds-top-header a,
			.ds-top-header a:visited {
				color: <?php echo esc_attr(get_theme_mod('dt_header_top_link_color', DT_HEADER_TOP_LINK_COLOR)); ?> !important;
			}
		<?php
		//  =============================
		//  2.1.4 - Header Top Link Hover Color
		//  =============================
		?>
			.ds-top-header a:hover {
				color: <?php echo esc_attr(get_theme_mod('dt_header_top_link_hover', DT_HEADER_TOP_LINK_HOVER)); ?> !important;
			}
		<?php
		//  =============================
		//  2.1.5 - Header Top Background Color
		//  =============================
		?>
			.ds-top-header {
				background-color: <?php echo esc_attr(get_theme_mod('dt_header_top_bg_color', DT_HEADER_TOP_BG_COLOR)); ?>;
			}
	<?php
	//  =============================
	//  2.2 - Logo
	//  =============================
	?>
		<?php
		//  =============================
		//  2.2.1 - Logo
		//  =============================
		?>
	<?php
	//  =============================
	//  2.3 - Header Image
	//  =============================
	?>
		<?php
		//  =============================
		//  2.3.1 - Header Image
		//  =============================
		?>
	<?php
	//  =============================
	//  2.4 - Text Colors
	//  =============================
	?>
		<?php
		//  =============================
		//  2.4.1 - Header Text color
		//  =============================
		?>
			.site-header hgroup a {
				color: <?php echo esc_attr(get_theme_mod('header_textcolor', DT_BODY_COLOR)); ?>  !important;
			}
		<?php
		//  =============================
		//  2.4.2 - Header Link color
		//  =============================
		?>
			.site-header a, .site-header a:visited {
				color: <?php echo esc_attr(get_theme_mod('dt_header_link_color', DT_HEADER_LINK_COLOR)); ?> !important;
			}
		<?php
		//  =============================
		//  2.4.3 - Header Link Hover Color
		//  =============================
		?>
			.site-header a:hover, .site-header a:focus, .site-header a:active, .site-header a:visited:hover, .site-header a:visited:focus, .site-header a:visited:active {
				color: <?php echo esc_attr(get_theme_mod('dt_header_link_hover', DT_HEADER_LINK_HOVER)); ?>  !important;
			}
	<?php
	//  =============================
	//  2.5 - Background Colors
	//  =============================
	?>
		<?php
		//  =============================
		//  2.5.1 - Header Background Color
		//  =============================
		?>
			.site-header {
				background-color: <?php echo esc_attr(get_theme_mod('dt_header_bg_color', DT_HEADER_BG_COLOR)); ?>;
			}
		<?php
		//  =============================
		//  2.5.2 - Header Border Color
		//  =============================
			// @see 2.5.1
		?>
		<?php
		//  =============================
		//  2.5.3 - Header Shadow Color
		//  =============================
			// @see 2.5.1
		?>
		<?php
		//  =============================
		//  2.5.4 - Primary Menu - Sub menu Background Color
		//  =============================
		?>
			#primary-nav ul .sub-menu a,#primary-nav ul .sub-menu, #primary-nav ul.greedy-links {
				background-color: <?php echo esc_attr(get_theme_mod('dt_p_nav_submenu_bg_color', DT_P_NAV_SUBMENU_BG_COLOR)); ?>;
			}
	#primary-nav ul.greedy-links:before{
	display:none;
	}
		<?php
		//  =============================
		//  2.5.5 - Primary Menu - Sub menu Background hover Color
		//  =============================
		?>
			#primary-nav ul .sub-menu a:hover, #primary-nav ul.greedy-links a:hover {
				background-color: <?php echo esc_attr(get_theme_mod('dt_p_nav_submenu_bg_hover', DT_P_NAV_SUBMENU_BG_HOVER)); ?>;
			}
			@media (max-width: 992px) {
				#primary-nav ul li a:hover {
					background: <?php echo esc_attr(get_theme_mod('dt_p_nav_submenu_bg_hover', DT_P_NAV_SUBMENU_BG_HOVER)); ?>;
				}
			}
	<?php
	//  =============================
	//  2.6 - Typography
	//  =============================


//  =============================
//  3.0 - Body
//  =============================
	?>
	<?php
	//  =============================
	//  3.1 - Background Image
	//  =============================
	?>
		<?php
		//  =============================
		//  3.1.1 - Background Image
		//  =============================
		?>
	<?php
	//  =============================
	//  3.2 - Text Colors
	//  =============================
	?>
		<?php
		//  =============================
		//  3.2.1 - Body Color
		//  =============================
			// @see 3.4.1
		?>
		<?php
		//  =============================
		//  3.2.2 - h1 to h6 Color
		//  =============================
		?>
			h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6, #simplemodal-container h3 {
				color: <?php echo get_theme_mod('dt_h1toh6_color', DT_H1TOH6_COLOR) ? esc_attr(get_theme_mod('dt_h1toh6_color', DT_H1TOH6_COLOR)) : AUI()->get_option('color_secondary'); ?>;
			}
			#simplemodal-container h3 {
				font-family: <?php echo sanitize_text_field(get_theme_mod('dt_font_family', DT_FONT_FAMILY)); ?>;
			}

	<?php
	//  =============================
	//  3.2.3 - Link Color
	//  =============================
	?>
	.bsui a {
	color: <?php echo esc_attr(get_theme_mod('dt_link_color', DT_LINK_COLOR)); ?>;
	}
	<?php
	//  =============================
	//  3.2.4 - Link Hover Color
	//  =============================
	?>
	.bsui a:hover,
	.bsui a:visited:hover,
	.bsui a:focus,
	.bsui a:active {
	color: <?php echo esc_attr(get_theme_mod('dt_link_hover', DT_LINK_HOVER)); ?>;
	}
	<?php
	//  =============================
	//  3.2.5 - Link Visited Color
	//  =============================
	?>
	.bsui a:visited {
	color: <?php echo esc_attr(get_theme_mod('dt_link_visited', DT_LINK_VISITED)); ?>;
	}


	<?php
	//  =============================
	//  3.3 - Background Colors
	//  =============================
	?>
		<?php
		//  =============================
		//  3.3.1 - Body Background Color
		//  =============================
		?>
		<?php
		//  =============================
		//  3.3.2 - Content Box Background Color
		//  =============================
		?>
			.bsui .content-box, .bsui .content .entry, .bsui #geodir_content, .bsui .sidebar .widget, .bsui .geodir-content-left .geodir-company_info, .bsui .geodir-content-right .geodir-company_info, .bsui .geodir_full_page .geodir-category-list-in, .bsui .geodir_full_page .geodir-loc-bar {
				background-color: <?php echo esc_attr(get_theme_mod('dt_content_bg', DT_CONTENT_BG)); ?>;
				border-color: <?php echo esc_attr(get_theme_mod('dt_content_border', DT_CONTENT_BORDER)); ?> !important;
			}
		<?php
		//  =============================
		//  3.3.3 - Content Box Border Color
		//  =============================
			// @see 3.3.2
		?>
		<?php
		//  =============================
		//  3.3.4 - Content Box Shadow Color
		//  =============================
			// @see 3.3.2
		?>
	<?php
	//  =============================
	//  3.4 - Typography
	//  =============================
	?>
		<?php
		//  =============================
		//  3.4.1 - Font Family
		//  =============================
		?>
			.bsui body {
				font-family: <?php echo sanitize_text_field(get_theme_mod('dt_font_family', DT_FONT_FAMILY)); // sanitize_text_field used as we need to keep quotes '' ?>;
				font-size: <?php echo esc_attr(get_theme_mod('dt_font_size', DT_FONT_SIZE)); ?>;
				line-height: <?php echo esc_attr(get_theme_mod('dt_line_height', DT_LINE_HEIGHT)); ?>;
				color: <?php echo get_theme_mod('dt_body_color', DT_BODY_COLOR) ? esc_attr(get_theme_mod('dt_body_color', DT_BODY_COLOR)) : AUI()->get_option('color_secondary'); ?>;
	background-color: <?php echo DT_BACKGROUND_COLOR;?>;
			}
		<?php
		//  =============================
		//  3.4.2 - Font Size
		//  =============================
			// @see 3.4.1
		?>
		<?php
		//  =============================
		//  3.4.3 - Line Height
		//  =============================
			// @see 3.4.1
		?>
			bsui p {
				line-height: <?php echo esc_attr(get_theme_mod('dt_line_height', '22px')); ?>;
			}
	<?php
	//  =============================
	//  3.5 - Spacing
	//  =============================
	?>
	<?php
//  =============================
//  4.0 - Footer
//  =============================
	?>
	<?php
	//  =============================
	//  4.1 - Text Colors
	//  =============================
	?>
		<?php
		//  =============================
		//  4.1.1 - Body Color
		//  =============================
		?>
			.footer-widgets {
				color: <?php echo esc_attr(get_theme_mod('dt_fw_text_color', DT_FW_TEXT_COLOR)); ?>;
			}
		<?php
		//  =============================
		//  4.1.2 - h1 to h6 Color
		//  =============================
		?>
			.footer-widgets h1,
			.footer-widgets .h1,
			.footer-widgets h2,
			.footer-widgets .h2,
			.footer-widgets h3,
			.footer-widgets .h3,
			.footer-widgets h4,
			.footer-widgets .h4,
			.footer-widgets h5,
			.footer-widgets .h5,
			.footer-widgets h6,
			.footer-widgets .h6 {
				color: <?php echo esc_attr(get_theme_mod('dt_fw_h1toh6_color', DT_FW_H1TOH6_COLOR)); ?>;
			}
		<?php
		//  =============================
		//  4.1.3 - Link Color
		//  =============================
		?>
			.footer-widgets a {
				color: <?php echo esc_attr(get_theme_mod('dt_fw_link_color', DT_FW_LINK_COLOR)); ?>;
			}
		<?php
		//  =============================
		//  4.1.4 - Link Hover Color
		//  =============================
		?>
			.footer-widgets a:hover,
			.footer-widgets a:visited:hover,
			.footer-widgets a:focus,
			.footer-widgets a:active {
				color: <?php echo esc_attr(get_theme_mod('dt_fw_link_hover', DT_FW_LINK_HOVER)); ?>;
			}
		<?php
		//  =============================
		//  4.1.5 - Link Visited Color
		//  =============================
		?>
			.footer-widgets a:visited {
				color: <?php echo esc_attr(get_theme_mod('dt_fw_link_visited', DT_FW_LINK_VISITED)); ?>;
			}
	<?php
	//  =============================
	//  4.2 - Background Colors
	//  =============================
	?>
		<?php
		//  =============================
		//  4.2.1 - Footer Section Background Color
		//  =============================
		?>
			#footer .footer-widgets {
				background-color: <?php echo esc_attr(get_theme_mod('dt_fw_bg', DT_FW_BG)); ?>;
				border-top-color: <?php echo esc_attr(get_theme_mod('dt_fw_border_top_color', DT_FW_BORDER_TOP_COLOR)); ?> !important;
				border-bottom-color: <?php echo esc_attr(get_theme_mod('dt_fw_border_bottom_color', DT_FW_BORDER_BOTTOM_COLOR)); ?> !important;
			}
		<?php
		//  =============================
		//  4.2.2 - Footer Section Border Top Color
		//  =============================
			// @see 4.2.1
		?>
		<?php
		//  =============================
		//  4.2.3 - Footer Section Border Bottom Color
		//  =============================
			// @see 4.2.1
		?>
		<?php
		//  =============================
		//  4.2.4 - Footer Section Box Shadow Color
		//  =============================
			// @see 4.2.1
		?>
	<?php
	//  =============================
	//  4.3 - Typography
	//  =============================
	?>
	<?php
	//  =============================
	//  4.4 - Spacing
	//  =============================
	?>
	<?php
//  =============================
//  5.0 - Copyright
//  =============================
	?>
	<?php
	//  =============================
	//  5.1 - Text Colors
	//  =============================
	?>
		<?php
		//  =============================
		//  5.1.1 - Body Color
		//  =============================
		?>
	#footer .copyright {
				color: <?php echo esc_attr(get_theme_mod('dt_copyright_text_color', DT_COPYRIGHT_TEXT_COLOR)); ?>;
			}
		<?php
		//  =============================
		//  5.1.2 - Link Color
		//  =============================
		?>
	#footer .copyright a {
				color: <?php echo esc_attr(get_theme_mod('dt_copyright_link_color', DT_COPYRIGHT_LINK_COLOR)); ?>;
			}
		<?php
		//  =============================
		//  5.1.3 - Link Hover Color
		//  =============================
		?>
	#footer .copyright a:hover,
	#footer .copyright a:visited:hover,
	#footer .copyright a:focus,
	#footer .copyright a:active {
				color: <?php echo esc_attr(get_theme_mod('dt_copyright_link_hover', DT_COPYRIGHT_LINK_HOVER)); ?>;
			}
		<?php
		//  =============================
		//  5.1.4 - Link Visited Color
		//  =============================
		?>
	#footer .copyright a:visited {
				color: <?php echo esc_attr(get_theme_mod('dt_copyright_link_visited', DT_COPYRIGHT_LINK_VISITED)); ?>;
			}
	<?php
	//  =============================
	//  5.2 - Background Colors
	//  =============================
	?>
		<?php
		//  =============================
		//  5.2.1 - Copyright Section Background Color
		//  =============================
		?>
	#footer .copyright {
				background-color: <?php echo esc_attr(get_theme_mod('dt_copyright_bg', DT_COPYRIGHT_BG)); ?>;
				border-top: 1px solid #151515;
				border-top-color: <?php echo esc_attr(get_theme_mod('dt_copyright_border_color', DT_COPYRIGHT_BORDER_COLOR)); ?> !important;
			}
		<?php
		//  =============================
		//  5.2.2 - Copyright Section Border Color
		//  =============================
		// @see 5.2.1
		?>
	<?php
	//  =============================
	//  5.3 - Typography
	//  =============================
	?>
	<?php
	//  =============================
	//  5.4 - Spacing
	//  =============================
	?>
		<?php
		//  =============================
		//  5.4.1 - Copyright Padding Top
		//  =============================

		//  =============================
		//  5.4.2 - Copyright Padding Bottom
		//  =============================
		// @see 5.4.1
		?>
	<?php
	//  =============================
	//  5.5 - Copyright Text
	//  =============================
	?>
		<?php
		//  =============================
		//  5.5.1 - Copyright Text
		//  =============================

	//  =============================
	//  GD
	//  =============================
	?>
	.fullwidth-sidebar-container .geodir-wgt-map,
	.fullwidth-sidebar-container .geodir-post-slider{
	padding: 0;
	}
	<?php


	//  =============================
	//  DEFAULTS
	//  =============================
	?>
	ul,li{
		list-style: none;
		padding-left: 0;
	}
<?php

	?>
	/* =WordPress Core
	-------------------------------------------------------------- */
	.alignnone {
	margin: 5px 20px 20px 0;
	}

	.aligncenter,
	div.aligncenter {
	display: block;
	margin: 5px auto 5px auto;
	}

	.alignright {
	float:right;
	margin: 5px 0 20px 20px;
	}

	.alignleft {
	float: left;
	margin: 5px 20px 20px 0;
	}

	a img.alignright {
	float: right;
	margin: 5px 0 20px 20px;
	}

	a img.alignnone {
	margin: 5px 20px 20px 0;
	}

	a img.alignleft {
	float: left;
	margin: 5px 20px 20px 0;
	}

	a img.aligncenter {
	display: block;
	margin-left: auto;
	margin-right: auto;
	}

	.wp-caption {
	background: #fff;
	border: 1px solid #f0f0f0;
	max-width: 96%; /* Image does not overflow the content area */
	padding: 5px 3px 10px;
	text-align: center;
	}

	.wp-caption.alignnone {
	margin: 5px 20px 20px 0;
	}

	.wp-caption.alignleft {
	margin: 5px 20px 20px 0;
	}

	.wp-caption.alignright {
	margin: 5px 0 20px 20px;
	}

	.wp-caption img {
	border: 0 none;
	height: auto;
	margin: 0;
	max-width: 98.5%;
	padding: 0;
	width: auto;
	}

	.wp-caption p.wp-caption-text {
	font-size: 11px;
	line-height: 17px;
	margin: 0;
	padding: 0 4px 5px;
	}

	/* Text meant only for screen readers. */
	.screen-reader-text {
	border: 0;
	clip: rect(1px, 1px, 1px, 1px);
	clip-path: inset(50%);
	height: 1px;
	margin: -1px;
	overflow: hidden;
	padding: 0;
	position: absolute !important;
	width: 1px;
	word-wrap: normal !important; /* Many screen reader and browser combinations announce broken words as they would appear visually. */
	}

	.screen-reader-text:focus {
	background-color: #eee;
	clip: auto !important;
	clip-path: none;
	color: #444;
	display: block;
	font-size: 1em;
	height: auto;
	left: 5px;
	line-height: normal;
	padding: 15px 23px 14px;
	text-decoration: none;
	top: 5px;
	width: auto;
	z-index: 100000;
	/* Above WP toolbar. */
	}
<?php
	
	do_action('dt_css');

}
