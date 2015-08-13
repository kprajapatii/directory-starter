<?php
//styles generated by customizer
function directory_theme_customize_css()
{
	?>
	<style type="text/css">
		.container, .geodir-common, .geodir-breadcrumb, .geodir_full_page .widget {
			width:<?php echo get_theme_mod('dt_container_width', DT_CONTAINER_WIDTH); ?>px;
			padding-right:<?php echo get_theme_mod('dt_container_padding_right', DT_CONTAINER_PADDING_RIGHT); ?>px;
			padding-left:<?php echo get_theme_mod('dt_container_padding_left', DT_CONTAINER_PADDING_LEFT); ?>px;
			margin-right:<?php echo get_theme_mod('dt_container_margin_right', DT_CONTAINER_MARGIN_RIGHT); ?>;
			margin-left:<?php echo get_theme_mod('dt_container_margin_left', DT_CONTAINER_MARGIN_LEFT); ?>;
		}
		.site-logo-wrap .site-logo {
			margin-right:<?php echo get_theme_mod('dt_logo_margin_right', DT_LOGO_MARGIN_RIGHT); ?>px;
			margin-left:<?php echo get_theme_mod('dt_logo_margin_left', DT_LOGO_MARGIN_LEFT); ?>px;
			margin-top:<?php echo get_theme_mod('dt_logo_margin_top', DT_LOGO_MARGIN_TOP); ?>px;
			margin-bottom:<?php echo get_theme_mod('dt_logo_margin_bottom', DT_LOGO_MARGIN_BOTTOM); ?>px;
		}
		body {
			/*font-family: font-family;*/
			font-size:<?php echo get_theme_mod('dt_font_size', DT_FONT_SIZE); ?>px;
			line-height:<?php echo get_theme_mod('dt_line_height', DT_LINE_HEIGHT); ?>px;
			background-color:<?php echo get_theme_mod('dt_background_color', DT_BACKGROUND_COLOR); ?>;
			color:<?php echo get_theme_mod('dt_body_color', DT_BODY_COLOR); ?>;
		}
		.content-box, .content .entry, #geodir_content, .sidebar .widget, .geodir-content-right .geodir-company_info, .geodir_full_page .geodir-category-list-in, .geodir_full_page .geodir-loc-bar {
			background-color: <?php echo get_theme_mod('dt_content_bg', DT_CONTENT_BG); ?>;
			border: 1px solid <?php echo get_theme_mod('dt_content_border', DT_CONTENT_BORDER); ?>;
			box-shadow: 0 1px 1px <?php echo get_theme_mod('dt_content_shadow', DT_CONTENT_SHADOW); ?>;
		}
		.alert-help {
			background-color:<?php echo get_theme_mod('dt_alert_yellow', DT_ALERT_YELLOW); ?>;
		}
		.alert-info {
			background-color:<?php echo get_theme_mod('dt_alert_blue', DT_ALERT_BLUE); ?>;
		}
		.alert-error{
			background-color:<?php echo get_theme_mod('dt_alert_red', DT_ALERT_RED); ?>;
		}
		.alert-success {
			background-color:<?php echo get_theme_mod('dt_alert_green', DT_ALERT_GREEN); ?>;
		}
		h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5 {
			color: <?php echo get_theme_mod('dt_h1toh6_color', DT_H1TOH6_COLOR); ?>;
		}
		a, a:visited {
			color: <?php echo get_theme_mod('dt_link_color', DT_LINK_COLOR); ?>;
		}
		a:hover,
		a:focus,
		a:active {
			color: <?php echo darken_color(get_theme_mod('dt_link_color', DT_LINK_COLOR), 9); ?>;
		}
		#primary-nav ul li {
			padding-right: <?php echo get_theme_mod('dt_p_nav_padding_right', DT_P_NAV_PADDING_RIGHT); ?>px;
		}
		#primary-nav ul li a {
			height: <?php echo get_theme_mod('dt_p_nav_height', DT_P_NAV_HEIGHT); ?>px;
			line-height: <?php echo get_theme_mod('dt_p_nav_line_height', DT_P_NAV_LINE_HEIGHT); ?>px;
		}
		button, input[type=button], input[type=reset], input[type=submit] {
			color:<?php echo get_theme_mod('dt_btn_text_color', DT_BTN_TEXT_COLOR); ?>;
			background-color:<?php echo get_theme_mod('dt_btn_bg_color', DT_BTN_BG_COLOR); ?>;
			border: 1px solid <?php echo get_theme_mod('dt_btn_border_color', DT_BTN_BORDER_COLOR); ?>;
		}
		button:hover, input[type=button]:hover, input[type=reset]:hover, input[type=submit]:hover {
			background-color:<?php echo darken_color(get_theme_mod('dt_btn_bg_color', DT_BTN_BG_COLOR), 9); ?>;
		}
		.footer-widgets {
			background-color: <?php echo get_theme_mod('dt_footer_widget_bg', DT_FW_BG); ?>;
		}
		.copyright {
			background-color: <?php echo get_theme_mod('dt_copyright_bg', DT_COPYRIGHT_BG); ?>;
		}
		.copyright .container {
			padding-top: <?php echo get_theme_mod('dt_copyright_padding_top', DT_COPYRIGHT_PADDING_TOP); ?>px;
			padding-bottom: <?php echo get_theme_mod('dt_copyright_padding_bottom', DT_COPYRIGHT_PADDING_BOTTOM); ?>px;
		}
		.site-header {
			height: <?php echo get_theme_mod('dt_header_height', DT_HEADER_HEIGHT); ?>;px;
			background-color: <?php echo get_theme_mod('dt_header_bg_color', DT_HEADER_BG_COLOR); ?>;
		}
	</style>
	<?php
}
add_action( 'wp_head', 'directory_theme_customize_css');