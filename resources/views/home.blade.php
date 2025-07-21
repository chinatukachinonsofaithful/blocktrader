<!doctype html>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Login' }} -  {{ get_settings('website_name')}}</title>
	<meta name='robots' content='max-image-preview:large' />
	
    <link rel="apple-touch-icon" sizes="180x180" href="{{ assetFromPublic('favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ assetFromPublic('favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ assetFromPublic('favicons/favicon-16x16.png') }}">
	
	<style id='wp-emoji-styles-inline-css'>
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 0.07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<style id='classic-theme-styles-inline-css'>
		/*! This file is auto-generated */
		.wp-block-button__link {
			color: #fff;
			background-color: #32373c;
			border-radius: 9999px;
			box-shadow: none;
			text-decoration: none;
			padding: calc(.667em + 2px) calc(1.333em + 2px);
			font-size: 1.125em
		}

		.wp-block-file__button {
			background: #32373c;
			color: #fff;
			text-decoration: none
		}
	</style>
	<style id='global-styles-inline-css'>
		body {
			--wp--preset--color--black: #000000;
			--wp--preset--color--cyan-bluish-gray: #abb8c3;
			--wp--preset--color--white: #ffffff;
			--wp--preset--color--pale-pink: #f78da7;
			--wp--preset--color--vivid-red: #cf2e2e;
			--wp--preset--color--luminous-vivid-orange: #ff6900;
			--wp--preset--color--luminous-vivid-amber: #fcb900;
			--wp--preset--color--light-green-cyan: #7bdcb5;
			--wp--preset--color--vivid-green-cyan: #00d084;
			--wp--preset--color--pale-cyan-blue: #8ed1fc;
			--wp--preset--color--vivid-cyan-blue: #0693e3;
			--wp--preset--color--vivid-purple: #9b51e0;
			--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
			--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
			--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
			--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
			--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
			--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
			--wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
			--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
			--wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
			--wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
			--wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
			--wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
			--wp--preset--font-size--small: 13px;
			--wp--preset--font-size--medium: 20px;
			--wp--preset--font-size--large: 36px;
			--wp--preset--font-size--x-large: 42px;
			--wp--preset--spacing--20: 0.44rem;
			--wp--preset--spacing--30: 0.67rem;
			--wp--preset--spacing--40: 1rem;
			--wp--preset--spacing--50: 1.5rem;
			--wp--preset--spacing--60: 2.25rem;
			--wp--preset--spacing--70: 3.38rem;
			--wp--preset--spacing--80: 5.06rem;
			--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
			--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
			--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
			--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
			--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
		}

		:where(.is-layout-flex) {
			gap: 0.5em;
		}

		:where(.is-layout-grid) {
			gap: 0.5em;
		}

		body .is-layout-flex {
			display: flex;
		}

		body .is-layout-flex {
			flex-wrap: wrap;
			align-items: center;
		}

		body .is-layout-flex>* {
			margin: 0;
		}

		body .is-layout-grid {
			display: grid;
		}

		body .is-layout-grid>* {
			margin: 0;
		}

		:where(.wp-block-columns.is-layout-flex) {
			gap: 2em;
		}

		:where(.wp-block-columns.is-layout-grid) {
			gap: 2em;
		}

		:where(.wp-block-post-template.is-layout-flex) {
			gap: 1.25em;
		}

		:where(.wp-block-post-template.is-layout-grid) {
			gap: 1.25em;
		}

		.has-black-color {
			color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-color {
			color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-color {
			color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-color {
			color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-color {
			color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-color {
			color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-color {
			color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-color {
			color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-color {
			color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-color {
			color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-color {
			color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-color {
			color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-background-color {
			background-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-background-color {
			background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-background-color {
			background-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-background-color {
			background-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-background-color {
			background-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-background-color {
			background-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-background-color {
			background-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-background-color {
			background-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-background-color {
			background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-background-color {
			background-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-border-color {
			border-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-border-color {
			border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-border-color {
			border-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-border-color {
			border-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-border-color {
			border-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-border-color {
			border-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-border-color {
			border-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-border-color {
			border-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-border-color {
			border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-border-color {
			border-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-vivid-cyan-blue-to-vivid-purple-gradient-background {
			background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
		}

		.has-light-green-cyan-to-vivid-green-cyan-gradient-background {
			background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
		}

		.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-orange-to-vivid-red-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
		}

		.has-very-light-gray-to-cyan-bluish-gray-gradient-background {
			background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
		}

		.has-cool-to-warm-spectrum-gradient-background {
			background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
		}

		.has-blush-light-purple-gradient-background {
			background: var(--wp--preset--gradient--blush-light-purple) !important;
		}

		.has-blush-bordeaux-gradient-background {
			background: var(--wp--preset--gradient--blush-bordeaux) !important;
		}

		.has-luminous-dusk-gradient-background {
			background: var(--wp--preset--gradient--luminous-dusk) !important;
		}

		.has-pale-ocean-gradient-background {
			background: var(--wp--preset--gradient--pale-ocean) !important;
		}

		.has-electric-grass-gradient-background {
			background: var(--wp--preset--gradient--electric-grass) !important;
		}

		.has-midnight-gradient-background {
			background: var(--wp--preset--gradient--midnight) !important;
		}

		.has-small-font-size {
			font-size: var(--wp--preset--font-size--small) !important;
		}

		.has-medium-font-size {
			font-size: var(--wp--preset--font-size--medium) !important;
		}

		.has-large-font-size {
			font-size: var(--wp--preset--font-size--large) !important;
		}

		.has-x-large-font-size {
			font-size: var(--wp--preset--font-size--x-large) !important;
		}

		.wp-block-navigation a:where(:not(.wp-element-button)) {
			color: inherit;
		}

		:where(.wp-block-post-template.is-layout-flex) {
			gap: 1.25em;
		}

		:where(.wp-block-post-template.is-layout-grid) {
			gap: 1.25em;
		}

		:where(.wp-block-columns.is-layout-flex) {
			gap: 2em;
		}

		:where(.wp-block-columns.is-layout-grid) {
			gap: 2em;
		}

		.wp-block-pullquote {
			font-size: 1.5em;
			line-height: 1.6;
		}
	</style>
	<link rel='stylesheet' id='hello-elementor-css' href='wp-content/themes/hello-elementor/style.min.css@ver=3.0.1.css'
		media='all' />
	<link rel='stylesheet' id='hello-elementor-theme-style-css'
		href='wp-content/themes/hello-elementor/theme.min.css@ver=3.0.1.css' media='all' />
	<link rel='stylesheet' id='hello-elementor-header-footer-css'
		href='wp-content/themes/hello-elementor/header-footer.min.css@ver=3.0.1.css' media='all' />
	<link rel='stylesheet' id='elementor-frontend-css'
		href='wp-content/plugins/elementor/assets/css/frontend-lite.min.css@ver=3.19.4.css' media='all' />
	<link rel='stylesheet' id='elementor-post-6-css'
		href='wp-content/uploads/elementor/css/post-6.css@ver=1715734119.css' media='all' />
	<link rel='stylesheet' id='swiper-css'
		href='wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css@ver=8.4.5.css' media='all' />
	<link rel='stylesheet' id='elementor-pro-css'
		href='wp-content/plugins/elementor-pro/assets/css/frontend-lite.min.css@ver=3.19.0.css' media='all' />
	<link rel='stylesheet' id='elementor-global-css'
		href='wp-content/uploads/elementor/css/global.css@ver=1715734119.css' media='all' />
	<link rel='stylesheet' id='elementor-post-10-css'
		href='wp-content/uploads/elementor/css/post-10.css@ver=1715773849.css' media='all' />
	<link rel='stylesheet' id='elementor-post-117-css'
		href='wp-content/uploads/elementor/css/post-117.css@ver=1715734119.css' media='all' />
	<link rel='stylesheet' id='elementor-post-119-css'
		href='wp-content/uploads/elementor/css/post-119.css@ver=1715774151.css' media='all' />
	<link rel='stylesheet' id='elementor-post-187-css'
		href='wp-content/uploads/elementor/css/post-187.css@ver=1715734119.css' media='all' />
	<link rel='stylesheet' id='loftloader-lite-animation-css'
		href='wp-content/plugins/loftloader/assets/css/loftloader.min.css@ver=2022112601.css' media='all' />
	<link rel='stylesheet' id='skb-cife-elusive_icon-css'
		href='wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/elusive-icons.min.css@ver=1.0.7.css'
		media='all' />
	<link rel='stylesheet' id='skb-cife-icofont_icon-css'
		href='wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/icofont.min.css@ver=1.0.7.css'
		media='all' />
	<link rel='stylesheet' id='skb-cife-ion_icon-css'
		href='wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/ionicons.min.css@ver=1.0.7.css'
		media='all' />
	<link rel='stylesheet' id='skb-cife-materialdesign_icon-css'
		href='wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/materialdesignicons.min.css@ver=1.0.7.css'
		media='all' />
	<link rel='stylesheet' id='skb-cife-open_iconic-css'
		href='wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/open-iconic.css@ver=1.0.7.css'
		media='all' />
	<link rel='stylesheet' id='google-fonts-1-css'
		href='https://fonts.googleapis.com/css?family=Montserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.5.3'
		media='all' />
	<link rel='stylesheet' id='elementor-icons-skb_cife-icofont-icon-css'
		href='wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/icofont.min.css@ver=1.0.7.css'
		media='all' />
	<link rel='stylesheet' id='elementor-icons-skb_cife-materialdesign-icon-css'
		href='wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/materialdesignicons.min.css@ver=1.0.7.css'
		media='all' />
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link rel="https://api.w.org/" href="wp-json/index.html" />
	<link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/10" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc.php@rsd" />
	<meta name="generator" content="WordPress 6.5.3" />
	<link rel="canonical" href="index.html" />
	<link rel='shortlink' href='index.html' />
	<link rel="alternate" type="application/json+oembed"
		href="wp-json/oembed/1.0/embed@url=https%253A%252F%252Fcapitaleasyfinance.com%252F" />
	<link rel="alternate" type="text/xml+oembed"
		href="wp-json/oembed/1.0/embed@url=https%253A%252F%252Fcapitaleasyfinance.com%252F&amp;format=xml" />
	<meta name="generator"
		content="Elementor 3.19.4; features: e_optimized_assets_loading, e_optimized_css_loading, e_font_icon_svg, additional_custom_breakpoints, block_editor_assets_optimize, e_image_loading_optimization; settings: css_print_method-external, google_font-enabled, font_display-swap">

	<style id="loftloader-lite-custom-bg-color">
		#loftloader-wrapper .loader-section {
			background: #000000;
		}
	</style>
	<style id="loftloader-lite-custom-bg-opacity">
		#loftloader-wrapper .loader-section {
			opacity: 1;
		}
	</style>
	<style id="loftloader-lite-custom-loader">
		#loftloader-wrapper.pl-wave #loader {
			color: #bd0000;
		}
	</style>
</head>

<body
	class="home page-template page-template-elementor_header_footer page page-id-10 loftloader-lite-enabled elementor-default elementor-template-full-width elementor-kit-6 elementor-page elementor-page-10">
	<div id="loftloader-wrapper" class="pl-wave" data-show-close-time="15000" data-max-load-time="3000">
		<div class="loader-section section-fade"></div>
		<div class="loader-inner">
			<div id="loader"><span></span></div>
		</div>
		<div class="loader-close-button" style="display: none;"><span class="screen-reader-text">Close</span></div>
	</div>


	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

	<div data-elementor-type="header" data-elementor-id="117" class="elementor elementor-117 elementor-location-header"
		data-elementor-post-type="elementor_library">
		<div class="elementor-element elementor-element-616b57f e-con-full e-flex e-con e-parent" data-id="616b57f"
			data-element_type="container"
			data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;background_background&quot;:&quot;classic&quot;}"
			data-core-v316-plus="true">
			<div class="elementor-element elementor-element-21802f1 elementor-widget elementor-widget-html"
				data-id="21802f1" data-element_type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
					<!-- TradingView Widget BEGIN -->
					<div class="tradingview-widget-container">
						<div class="tradingview-widget-container__widget"></div>
						<script type="text/javascript"
							src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
								{
									"symbols": [
										{
											"proName": "FOREXCOM:SPXUSD",
											"title": "S&P 500 Index"
										},
										{
											"proName": "FOREXCOM:NSXUSD",
											"title": "US 100 Cash CFD"
										},
										{
											"proName": "FX_IDC:EURUSD",
											"title": "EUR to USD"
										},
										{
											"description": "GBPUSD",
											"proName": "OANDA:GBPUSD"
										},
										{
											"description": "AUDUSD",
											"proName": "OANDA:AUDUSD"
										},
										{
											"description": "USDCAD",
											"proName": "OANDA:USDCAD"
										},
										{
											"description": "NZDUSD",
											"proName": "OANDA:NZDUSD"
										},
										{
											"description": "EURJPY",
											"proName": "OANDA:EURJPY"
										},
										{
											"description": "CADJPY",
											"proName": "OANDA:CADJPY"
										}
									],
										"showSymbolLogo": true,
											"isTransparent": true,
												"displayMode": "regular",
													"colorTheme": "dark",
														"locale": "en"
								}
							</script>
					</div>
					<!-- TradingView Widget END -->
				</div>
			</div>
		</div>
		<div class="elementor-element elementor-element-28b4cef e-flex e-con-boxed e-con e-parent" data-id="28b4cef"
			data-element_type="container"
			data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}"
			data-core-v316-plus="true">
			<div class="e-con-inner">
				<div class="elementor-element elementor-element-aa548fe e-con-full e-flex e-con e-child"
					data-id="aa548fe" data-element_type="container"
					data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
					<div class="elementor-element elementor-element-c45a268 elementor-widget elementor-widget-image"
						data-id="c45a268" data-element_type="widget" data-widget_type="image.default">
						<div class="elementor-widget-container">
							<style>
								/*! elementor - v3.19.0 - 28-02-2024 */
								.elementor-widget-image {
									text-align: center
								}

								.elementor-widget-image a {
									display: inline-block
								}

								.elementor-widget-image a img[src$=".svg"] {
									width: 48px
								}

								.elementor-widget-image img {
									vertical-align: middle;
									display: inline-block
								}
							</style> <img fetchpriority="high" width="466" height="117"
								src="{{ image_url(get_settings('site_logo')) }}"
								class="attachment-large size-large wp-image-200" alt=""
								sizes="(max-width: 466px) 100vw, 466px" />
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-073ce2d e-con-full e-flex e-con e-child"
					data-id="073ce2d" data-element_type="container"
					data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
					<div class="elementor-element elementor-element-8cc4989 elementor-align-right elementor-widget elementor-widget-button"
						data-id="8cc4989" data-element_type="widget" data-widget_type="button.default">
						<div class="elementor-widget-container">
							<div class="elementor-button-wrapper">
								@if (Auth::user())
								<a class="elementor-button elementor-button-link elementor-size-xs"
									href="{{ url('user/dashboard')}}">
									<span class="elementor-button-content-wrapper">
										<span class="elementor-button-text">Dashboard</span>
									</span>
								</a>
								@else
								<a class="elementor-button elementor-button-link elementor-size-xs"
								href="{{ url('login')}}">
								<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Login</span>
								</span>
							</a>
								@endif


								
								
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-766bc9f elementor-nav-menu--stretch elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu"
						data-id="766bc9f" data-element_type="widget"
						data-settings="{&quot;full_width&quot;:&quot;stretch&quot;,&quot;layout&quot;:&quot;horizontal&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;svg class=\&quot;e-font-icon-svg e-fas-caret-down\&quot; viewBox=\&quot;0 0 320 512\&quot; xmlns=\&quot;http:\/\/www.w3.org\/2000\/svg\&quot;&gt;&lt;path d=\&quot;M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z\&quot;&gt;&lt;\/path&gt;&lt;\/svg&gt;&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;toggle&quot;:&quot;burger&quot;}"
						data-widget_type="nav-menu.default">
						<div class="elementor-widget-container">
							<link rel="stylesheet"
								href="wp-content/plugins/elementor-pro/assets/css/widget-nav-menu.min.css">
							<nav
								class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-none">
								<ul id="menu-1-766bc9f" class="elementor-nav-menu">
									<li
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-10 current_page_item menu-item-101">
										<a href="index.html" aria-current="page"
											class="elementor-item elementor-item-active">Home</a></li>
									<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-102"><a
											href="/about-us" class="elementor-item elementor-item-anchor">About</a></li>
									<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-103"><a
											href="/contact-us" class="elementor-item elementor-item-anchor">Contact</a>
									</li>
									<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-104"><a
											href="/faq" class="elementor-item elementor-item-anchor">FAQ</a></li>
								</ul>
							</nav>
							<div class="elementor-menu-toggle" role="button" tabindex="0" aria-label="Menu Toggle"
								aria-expanded="false">
								<svg aria-hidden="true" role="presentation"
									class="elementor-menu-toggle__icon--open e-font-icon-svg e-eicon-menu-bar"
									viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M104 333H896C929 333 958 304 958 271S929 208 896 208H104C71 208 42 237 42 271S71 333 104 333ZM104 583H896C929 583 958 554 958 521S929 458 896 458H104C71 458 42 487 42 521S71 583 104 583ZM104 833H896C929 833 958 804 958 771S929 708 896 708H104C71 708 42 737 42 771S71 833 104 833Z">
									</path>
								</svg><svg aria-hidden="true" role="presentation"
									class="elementor-menu-toggle__icon--close e-font-icon-svg e-eicon-close"
									viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M742 167L500 408 258 167C246 154 233 150 217 150 196 150 179 158 167 167 154 179 150 196 150 212 150 229 154 242 171 254L408 500 167 742C138 771 138 800 167 829 196 858 225 858 254 829L496 587 738 829C750 842 767 846 783 846 800 846 817 842 829 829 842 817 846 804 846 783 846 767 842 750 829 737L588 500 833 258C863 229 863 200 833 171 804 137 775 137 742 167Z">
									</path>
								</svg> <span class="elementor-screen-only">Menu</span>
							</div>
							<nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" aria-hidden="true">
								<ul id="menu-2-766bc9f" class="elementor-nav-menu">
									<li
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-10 current_page_item menu-item-101">
										<a href="index.html" aria-current="page"
											class="elementor-item elementor-item-active" tabindex="-1">Home</a></li>
									<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-102"><a
											href="/about-us" class="elementor-item elementor-item-anchor"
											tabindex="-1">About</a></li>
									<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-103"><a
											href="/contact-us" class="elementor-item elementor-item-anchor"
											tabindex="-1">Contact</a></li>
									<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-104"><a
											href="/faq" class="elementor-item elementor-item-anchor"
											tabindex="-1">FAQ</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div data-elementor-type="wp-page" data-elementor-id="10" class="elementor elementor-10"
		data-elementor-post-type="page">
		<div class="elementor-element elementor-element-88c4a81 e-flex e-con-boxed e-con e-parent" data-id="88c4a81"
			data-element_type="container"
			data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}"
			data-core-v316-plus="true">
			<div class="e-con-inner">
				<div class="elementor-element elementor-element-6dc9081 e-con-full e-flex e-con e-child"
					data-id="6dc9081" data-element_type="container"
					data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
					<div class="elementor-element elementor-element-3e0405c elementor-widget elementor-widget-heading"
						data-id="3e0405c" data-element_type="widget" data-widget_type="heading.default">
						<div class="elementor-widget-container">
							<style>
								/*! elementor - v3.19.0 - 28-02-2024 */
								.elementor-heading-title {
									padding: 0;
									margin: 0;
									line-height: 1
								}

								.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
									color: inherit;
									font-size: inherit;
									line-height: inherit
								}

								.elementor-widget-heading .elementor-heading-title.elementor-size-small {
									font-size: 15px
								}

								.elementor-widget-heading .elementor-heading-title.elementor-size-medium {
									font-size: 19px
								}

								.elementor-widget-heading .elementor-heading-title.elementor-size-large {
									font-size: 29px
								}

								.elementor-widget-heading .elementor-heading-title.elementor-size-xl {
									font-size: 39px
								}

								.elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
									font-size: 59px
								}
							</style>
							<h2 class="elementor-heading-title elementor-size-default">Get more <span>freedom</span> in
								the financial market.</h2>
						</div>
					</div>
					<div class="elementor-element elementor-element-a7414a5 elementor-widget elementor-widget-text-editor"
						data-id="a7414a5" data-element_type="widget" data-widget_type="text-editor.default">
						<div class="elementor-widget-container">
							<style>
								/*! elementor - v3.19.0 - 28-02-2024 */
								.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
									background-color: #69727d;
									color: #fff
								}

								.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
									color: #69727d;
									border: 3px solid;
									background-color: transparent
								}

								.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
									margin-top: 8px
								}

								.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
									width: 1em;
									height: 1em
								}

								.elementor-widget-text-editor .elementor-drop-cap {
									float: left;
									text-align: center;
									line-height: 1;
									font-size: 50px
								}

								.elementor-widget-text-editor .elementor-drop-cap-letter {
									display: inline-block
								}
							</style>
							<p>Trade Cryptocurrencies, Stock, Indices, Commodities and Forex from a single account.</p>
						</div>
					</div>
					<div class="elementor-element elementor-element-2ffd336 e-flex e-con-boxed e-con e-child"
						data-id="2ffd336" data-element_type="container"
						data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
						<div class="e-con-inner">
							<div class="elementor-element elementor-element-34bee3f elementor-widget elementor-widget-button"
								data-id="34bee3f" data-element_type="widget" data-widget_type="button.default">
								<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
										<a class="elementor-button elementor-button-link elementor-size-sm"
											href="{{ url('login')}}">
											<span class="elementor-button-content-wrapper">
												<span class="elementor-button-text">Login</span>
											</span>
										</a>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-148f373 elementor-widget elementor-widget-button"
								data-id="148f373" data-element_type="widget" data-widget_type="button.default">
								<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
										<a class="elementor-button elementor-button-link elementor-size-sm"
											href="{{ url('register')}}">
											<span class="elementor-button-content-wrapper">
												<span class="elementor-button-text">Create Account</span>
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-741ed7a elementor-widget elementor-widget-text-editor"
						data-id="741ed7a" data-element_type="widget" data-widget_type="text-editor.default">
						<div class="elementor-widget-container">
							<p>Trading in Forex/ CFDs is highly speculative and carries a high level of risk.</p>
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-2ce0139 e-con-full e-flex e-con e-child"
					data-id="2ce0139" data-element_type="container"
					data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
					<div class="elementor-element elementor-element-0797c3c elementor-widget elementor-widget-image"
						data-id="0797c3c" data-element_type="widget" data-widget_type="image.default">
						<div class="elementor-widget-container">
							<img decoding="async" width="800" height="501"
								src="wp-content/uploads/2024/03/in-slideshow-image-4.png"
								class="attachment-large size-large wp-image-18" alt=""
								srcset="wp-content/uploads/2024/03/in-slideshow-image-4.png 862w, wp-content/uploads/2024/03/in-slideshow-image-4-300x188.png 300w, wp-content/uploads/2024/03/in-slideshow-image-4-768x481.png 768w"
								sizes="(max-width: 800px) 100vw, 800px" />
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="elementor-element elementor-element-c8769c2 e-flex e-con-boxed e-con e-parent" data-id="c8769c2"
			data-element_type="container"
			data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;content_width&quot;:&quot;boxed&quot;}"
			data-core-v316-plus="true">
			<div class="e-con-inner">
				<div class="elementor-element elementor-element-ed09a42 e-con-full e-flex e-con e-child"
					data-id="ed09a42" data-element_type="container"
					data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
					<div class="elementor-element elementor-element-0392f0f elementor-widget elementor-widget-heading"
						data-id="0392f0f" data-element_type="widget" data-widget_type="heading.default">
						<div class="elementor-widget-container">
							<h2 class="elementor-heading-title elementor-size-default">Less <br>
								Commission</h2>
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-2773460 e-con-full e-flex e-con e-child"
					data-id="2773460" data-element_type="container"
					data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
					<div class="elementor-element elementor-element-6248378 elementor-view-stacked elementor-shape-circle elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
						data-id="6248378" data-element_type="widget" data-widget_type="icon-box.default">
						<div class="elementor-widget-container">
							<link rel="stylesheet"
								href="wp-content/plugins/elementor/assets/css/widget-icon-box.min.css">
							<div class="elementor-icon-box-wrapper">
								<div class="elementor-icon-box-icon">
									<span class="elementor-icon elementor-animation-">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-euro-sign"
											viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M310.706 413.765c-1.314-6.63-7.835-10.872-14.424-9.369-10.692 2.439-27.422 5.413-45.426 5.413-56.763 0-101.929-34.79-121.461-85.449h113.689a12 12 0 0 0 11.708-9.369l6.373-28.36c1.686-7.502-4.019-14.631-11.708-14.631H115.22c-1.21-14.328-1.414-28.287.137-42.245H261.95a12 12 0 0 0 11.723-9.434l6.512-29.755c1.638-7.484-4.061-14.566-11.723-14.566H130.184c20.633-44.991 62.69-75.03 117.619-75.03 14.486 0 28.564 2.25 37.851 4.145 6.216 1.268 12.347-2.498 14.002-8.623l11.991-44.368c1.822-6.741-2.465-13.616-9.326-14.917C290.217 34.912 270.71 32 249.635 32 152.451 32 74.03 92.252 45.075 176H12c-6.627 0-12 5.373-12 12v29.755c0 6.627 5.373 12 12 12h21.569c-1.009 13.607-1.181 29.287-.181 42.245H12c-6.627 0-12 5.373-12 12v28.36c0 6.627 5.373 12 12 12h30.114C67.139 414.692 145.264 480 249.635 480c26.301 0 48.562-4.544 61.101-7.788 6.167-1.595 10.027-7.708 8.788-13.957l-8.818-44.49z">
											</path>
										</svg> </span>
								</div>
								<div class="elementor-icon-box-content">
									<h3 class="elementor-icon-box-title">
										<span>
											Forex </span>
									</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-74ee679 elementor-view-stacked elementor-shape-circle elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
						data-id="74ee679" data-element_type="widget" data-widget_type="icon-box.default">
						<div class="elementor-widget-container">
							<div class="elementor-icon-box-wrapper">
								<div class="elementor-icon-box-icon">
									<span class="elementor-icon elementor-animation-">
										<i aria-hidden="true" class="icofont icofont-bitcoin"></i> </span>
								</div>
								<div class="elementor-icon-box-content">
									<h3 class="elementor-icon-box-title">
										<span>
											Crypto </span>
									</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-edb87c5 elementor-view-stacked elementor-shape-circle elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
						data-id="edb87c5" data-element_type="widget" data-widget_type="icon-box.default">
						<div class="elementor-widget-container">
							<div class="elementor-icon-box-wrapper">
								<div class="elementor-icon-box-icon">
									<span class="elementor-icon elementor-animation-">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-chart-area"
											viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M500 384c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H12c-6.6 0-12-5.4-12-12V76c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v308h436zM372.7 159.5L288 216l-85.3-113.7c-5.1-6.8-15.5-6.3-19.9 1L96 248v104h384l-89.9-187.8c-3.2-6.5-11.4-8.7-17.4-4.7z">
											</path>
										</svg> </span>
								</div>
								<div class="elementor-icon-box-content">
									<h3 class="elementor-icon-box-title">
										<span>
											Indexes </span>
									</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-5d0b8fa elementor-view-stacked elementor-shape-circle elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
						data-id="5d0b8fa" data-element_type="widget" data-widget_type="icon-box.default">
						<div class="elementor-widget-container">
							<div class="elementor-icon-box-wrapper">
								<div class="elementor-icon-box-icon">
									<span class="elementor-icon elementor-animation-">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-file-contract"
											viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zM64 72c0-4.42 3.58-8 8-8h80c4.42 0 8 3.58 8 8v16c0 4.42-3.58 8-8 8H72c-4.42 0-8-3.58-8-8V72zm0 64c0-4.42 3.58-8 8-8h80c4.42 0 8 3.58 8 8v16c0 4.42-3.58 8-8 8H72c-4.42 0-8-3.58-8-8v-16zm192.81 248H304c8.84 0 16 7.16 16 16s-7.16 16-16 16h-47.19c-16.45 0-31.27-9.14-38.64-23.86-2.95-5.92-8.09-6.52-10.17-6.52s-7.22.59-10.02 6.19l-7.67 15.34a15.986 15.986 0 0 1-14.31 8.84c-.38 0-.75-.02-1.14-.05-6.45-.45-12-4.75-14.03-10.89L144 354.59l-10.61 31.88c-5.89 17.66-22.38 29.53-41 29.53H80c-8.84 0-16-7.16-16-16s7.16-16 16-16h12.39c4.83 0 9.11-3.08 10.64-7.66l18.19-54.64c3.3-9.81 12.44-16.41 22.78-16.41s19.48 6.59 22.77 16.41l13.88 41.64c19.77-16.19 54.05-9.7 66 14.16 2.02 4.06 5.96 6.5 10.16 6.5zM377 105L279.1 7c-4.5-4.5-10.6-7-17-7H256v128h128v-6.1c0-6.3-2.5-12.4-7-16.9z">
											</path>
										</svg> </span>
								</div>
								<div class="elementor-icon-box-content">
									<h3 class="elementor-icon-box-title">
										<span>
											Stocks </span>
									</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-06cb7e1 elementor-view-stacked elementor-shape-circle elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
						data-id="06cb7e1" data-element_type="widget" data-widget_type="icon-box.default">
						<div class="elementor-widget-container">
							<div class="elementor-icon-box-wrapper">
								<div class="elementor-icon-box-icon">
									<span class="elementor-icon elementor-animation-">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-tint" viewBox="0 0 352 512"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M205.22 22.09c-7.94-28.78-49.44-30.12-58.44 0C100.01 179.85 0 222.72 0 333.91 0 432.35 78.72 512 176 512s176-79.65 176-178.09c0-111.75-99.79-153.34-146.78-311.82zM176 448c-61.75 0-112-50.25-112-112 0-8.84 7.16-16 16-16s16 7.16 16 16c0 44.11 35.89 80 80 80 8.84 0 16 7.16 16 16s-7.16 16-16 16z">
											</path>
										</svg> </span>
								</div>
								<div class="elementor-icon-box-content">
									<h3 class="elementor-icon-box-title">
										<span>
											Energy </span>
									</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="elementor-element elementor-element-4665088 e-flex e-con-boxed e-con e-parent" data-id="4665088"
			data-element_type="container"
			data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}"
			data-core-v316-plus="true">
			<div class="e-con-inner">
				<div class="elementor-element elementor-element-3a91557 e-con-full e-flex e-con e-child"
					data-id="3a91557" data-element_type="container"
					data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
					<div class="elementor-element elementor-element-0e4c4de elementor-widget elementor-widget-image"
						data-id="0e4c4de" data-element_type="widget" data-widget_type="image.default">
						<div class="elementor-widget-container">
							<img decoding="async" width="1" height="1"
								src="wp-content/uploads/2024/03/in-wave-icon-5.svg"
								class="attachment-large size-large wp-image-32" alt="" />
						</div>
					</div>
					<div class="elementor-element elementor-element-267a988 elementor-widget elementor-widget-heading"
						data-id="267a988" data-element_type="widget" data-widget_type="heading.default">
						<div class="elementor-widget-container">
							<h2 class="elementor-heading-title elementor-size-default">Market analysis and
								trade inspiration</h2>
						</div>
					</div>
					<div class="elementor-element elementor-element-6946938 elementor-widget elementor-widget-text-editor"
						data-id="6946938" data-element_type="widget" data-widget_type="text-editor.default">
						<div class="elementor-widget-container">
							<div class="uk-width-1-2@m uk-first-column">
								<p>With a thriving network of experts, being a client of {{ get_settings('website_name')}} opens doors
									to many opportunities. Powerful market insight and the top trade setups in the
									industry. You will have extensive connections to professional traders.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-eb9c652 e-con-full e-flex e-con e-child"
					data-id="eb9c652" data-element_type="container"
					data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
					<div class="elementor-element elementor-element-1ad5e66 elementor-widget elementor-widget-video"
						data-id="1ad5e66" data-element_type="widget"
						data-settings="{&quot;youtube_url&quot;:&quot;https:\/\/youtu.be\/z7538iNe2Pw&quot;,&quot;video_type&quot;:&quot;youtube&quot;,&quot;controls&quot;:&quot;yes&quot;}"
						data-widget_type="video.default">
						<div class="elementor-widget-container">
							<style>
								/*! elementor - v3.19.0 - 28-02-2024 */
								.elementor-widget-video .elementor-widget-container {
									overflow: hidden;
									transform: translateZ(0)
								}

								.elementor-widget-video .elementor-wrapper {
									aspect-ratio: var(--video-aspect-ratio)
								}

								.elementor-widget-video .elementor-wrapper iframe,
								.elementor-widget-video .elementor-wrapper video {
									height: 100%;
									width: 100%;
									display: flex;
									border: none;
									background-color: #000
								}

								@supports not (aspect-ratio:1/1) {
									.elementor-widget-video .elementor-wrapper {
										position: relative;
										overflow: hidden;
										height: 0;
										padding-bottom: calc(100% / var(--video-aspect-ratio))
									}

									.elementor-widget-video .elementor-wrapper iframe,
									.elementor-widget-video .elementor-wrapper video {
										position: absolute;
										top: 0;
										right: 0;
										bottom: 0;
										left: 0
									}
								}

								.elementor-widget-video .elementor-open-inline .elementor-custom-embed-image-overlay {
									position: absolute;
									top: 0;
									right: 0;
									bottom: 0;
									left: 0;
									background-size: cover;
									background-position: 50%
								}

								.elementor-widget-video .elementor-custom-embed-image-overlay {
									cursor: pointer;
									text-align: center
								}

								.elementor-widget-video .elementor-custom-embed-image-overlay:hover .elementor-custom-embed-play i {
									opacity: 1
								}

								.elementor-widget-video .elementor-custom-embed-image-overlay img {
									display: block;
									width: 100%;
									aspect-ratio: var(--video-aspect-ratio);
									-o-object-fit: cover;
									object-fit: cover;
									-o-object-position: center center;
									object-position: center center
								}

								@supports not (aspect-ratio:1/1) {
									.elementor-widget-video .elementor-custom-embed-image-overlay {
										position: relative;
										overflow: hidden;
										height: 0;
										padding-bottom: calc(100% / var(--video-aspect-ratio))
									}

									.elementor-widget-video .elementor-custom-embed-image-overlay img {
										position: absolute;
										top: 0;
										right: 0;
										bottom: 0;
										left: 0
									}
								}

								.elementor-widget-video .e-hosted-video .elementor-video {
									-o-object-fit: cover;
									object-fit: cover
								}

								.e-con-inner>.elementor-widget-video,
								.e-con>.elementor-widget-video {
									width: var(--container-widget-width);
									--flex-grow: var(--container-widget-flex-grow)
								}
							</style>
							<div class="elementor-wrapper elementor-open-inline">
								<div class="elementor-video"></div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-f9bc9d0 elementor-widget elementor-widget-text-editor"
						data-id="f9bc9d0" data-element_type="widget" data-widget_type="text-editor.default">
						<div class="elementor-widget-container">
							<p>Explore the markets at your own pace with short online courses.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="elementor-element elementor-element-7336cf5 e-flex e-con-boxed e-con e-parent" data-id="7336cf5"
			data-element_type="container"
			data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}"
			data-core-v316-plus="true">
			<div class="e-con-inner">
				<div class="elementor-element elementor-element-a376fbf e-con-full e-flex e-con e-child"
					data-id="a376fbf" data-element_type="container"
					data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
					<div class="elementor-element elementor-element-9617dcb elementor-widget-mobile__width-initial elementor-position-top elementor-widget elementor-widget-image-box"
						data-id="9617dcb" data-element_type="widget" data-widget_type="image-box.default">
						<div class="elementor-widget-container">
							<style>
								/*! elementor - v3.19.0 - 28-02-2024 */
								.elementor-widget-image-box .elementor-image-box-content {
									width: 100%
								}

								@media (min-width:768px) {

									.elementor-widget-image-box.elementor-position-left .elementor-image-box-wrapper,
									.elementor-widget-image-box.elementor-position-right .elementor-image-box-wrapper {
										display: flex
									}

									.elementor-widget-image-box.elementor-position-right .elementor-image-box-wrapper {
										text-align: right;
										flex-direction: row-reverse
									}

									.elementor-widget-image-box.elementor-position-left .elementor-image-box-wrapper {
										text-align: left;
										flex-direction: row
									}

									.elementor-widget-image-box.elementor-position-top .elementor-image-box-img {
										margin: auto
									}

									.elementor-widget-image-box.elementor-vertical-align-top .elementor-image-box-wrapper {
										align-items: flex-start
									}

									.elementor-widget-image-box.elementor-vertical-align-middle .elementor-image-box-wrapper {
										align-items: center
									}

									.elementor-widget-image-box.elementor-vertical-align-bottom .elementor-image-box-wrapper {
										align-items: flex-end
									}
								}

								@media (max-width:767px) {
									.elementor-widget-image-box .elementor-image-box-img {
										margin-left: auto !important;
										margin-right: auto !important;
										margin-bottom: 15px
									}
								}

								.elementor-widget-image-box .elementor-image-box-img {
									display: inline-block
								}

								.elementor-widget-image-box .elementor-image-box-title a {
									color: inherit
								}

								.elementor-widget-image-box .elementor-image-box-wrapper {
									text-align: center
								}

								.elementor-widget-image-box .elementor-image-box-description {
									margin: 0
								}
							</style>
							<div class="elementor-image-box-wrapper">
								<figure class="elementor-image-box-img"><img decoding="async"
										src="wp-content/uploads/2024/03/in-profit-icon-1.svg"
										class="attachment-full size-full wp-image-33" alt="" /></figure>
								<div class="elementor-image-box-content">
									<h3 class="elementor-image-box-title">Wide Range of Trading Instruments</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-ff80a2e elementor-widget-mobile__width-initial elementor-position-top elementor-widget elementor-widget-image-box"
						data-id="ff80a2e" data-element_type="widget" data-widget_type="image-box.default">
						<div class="elementor-widget-container">
							<div class="elementor-image-box-wrapper">
								<figure class="elementor-image-box-img"><img decoding="async"
										src="wp-content/uploads/2024/03/in-profit-icon-2.svg"
										class="attachment-full size-full wp-image-34" alt="" /></figure>
								<div class="elementor-image-box-content">
									<h3 class="elementor-image-box-title">Unparalleled Trading Conditions</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-c3c10ca elementor-widget-mobile__width-initial elementor-position-top elementor-widget elementor-widget-image-box"
						data-id="c3c10ca" data-element_type="widget" data-widget_type="image-box.default">
						<div class="elementor-widget-container">
							<div class="elementor-image-box-wrapper">
								<figure class="elementor-image-box-img"><img decoding="async"
										src="wp-content/uploads/2024/03/in-profit-icon-3.svg"
										class="attachment-full size-full wp-image-35" alt="" /></figure>
								<div class="elementor-image-box-content">
									<h3 class="elementor-image-box-title">Globally Licensed & Regulated</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-f0ea1cf elementor-widget-mobile__width-initial elementor-position-top elementor-widget elementor-widget-image-box"
						data-id="f0ea1cf" data-element_type="widget" data-widget_type="image-box.default">
						<div class="elementor-widget-container">
							<div class="elementor-image-box-wrapper">
								<figure class="elementor-image-box-img"><img decoding="async"
										src="wp-content/uploads/2024/03/in-profit-icon-4.svg"
										class="attachment-full size-full wp-image-36" alt="" /></figure>
								<div class="elementor-image-box-content">
									<h3 class="elementor-image-box-title">Committed to Forex Education</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-09ee54e elementor-widget-mobile__width-initial elementor-position-top elementor-widget elementor-widget-image-box"
						data-id="09ee54e" data-element_type="widget" data-widget_type="image-box.default">
						<div class="elementor-widget-container">
							<div class="elementor-image-box-wrapper">
								<figure class="elementor-image-box-img"><img decoding="async"
										src="wp-content/uploads/2024/03/in-profit-icon-5.svg"
										class="attachment-full size-full wp-image-37" alt="" /></figure>
								<div class="elementor-image-box-content">
									<h3 class="elementor-image-box-title">Regular Contests & Promotions</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="elementor-element elementor-element-c31c83d e-flex e-con-boxed e-con e-parent" data-id="c31c83d"
			data-element_type="container"
			data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}"
			data-core-v316-plus="true">
			<div class="e-con-inner">
				<div class="elementor-element elementor-element-342e3e1 e-con-full e-flex e-con e-child"
					data-id="342e3e1" data-element_type="container"
					data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
					<div class="elementor-element elementor-element-439ffe1 elementor-widget elementor-widget-image-box"
						data-id="439ffe1" data-element_type="widget" data-widget_type="image-box.default">
						<div class="elementor-widget-container">
							<div class="elementor-image-box-wrapper">
								<div class="elementor-image-box-content">
									<h3 class="elementor-image-box-title">Learn</h3>
									<p class="elementor-image-box-description">KNOWLEDGE TO GET STARTED</p>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-87f5fdb elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
						data-id="87f5fdb" data-element_type="widget" data-widget_type="icon-list.default">
						<div class="elementor-widget-container">
							<link rel="stylesheet"
								href="wp-content/plugins/elementor/assets/css/widget-icon-list.min.css">
							<ul class="elementor-icon-list-items">
								<li class="elementor-icon-list-item">
									<span class="elementor-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check"
											viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
											</path>
										</svg> </span>
									<span class="elementor-icon-list-text">FREE Demo Account</span>
								</li>
								<li class="elementor-icon-list-item">
									<span class="elementor-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check"
											viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
											</path>
										</svg> </span>
									<span class="elementor-icon-list-text">Step-by step tutorials & articles</span>
								</li>
								<li class="elementor-icon-list-item">
									<span class="elementor-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check"
											viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
											</path>
										</svg> </span>
									<span class="elementor-icon-list-text">Online webinars & local seminars</span>
								</li>
								<li class="elementor-icon-list-item">
									<span class="elementor-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check"
											viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
											</path>
										</svg> </span>
									<span class="elementor-icon-list-text">Your own Account Manager</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="elementor-element elementor-element-3035e6c elementor-widget elementor-widget-button"
						data-id="3035e6c" data-element_type="widget" data-widget_type="button.default">
						<div class="elementor-widget-container">
							<div class="elementor-button-wrapper">
								<a class="elementor-button elementor-button-link elementor-size-sm"
									href="{{ url('register')}}">
									<span class="elementor-button-content-wrapper">
										<span class="elementor-button-text">Open Account</span>
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-6a9f23c e-con-full e-flex e-con e-child"
					data-id="6a9f23c" data-element_type="container"
					data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
					<div class="elementor-element elementor-element-95acc33 elementor-widget elementor-widget-image-box"
						data-id="95acc33" data-element_type="widget" data-widget_type="image-box.default">
						<div class="elementor-widget-container">
							<div class="elementor-image-box-wrapper">
								<div class="elementor-image-box-content">
									<h3 class="elementor-image-box-title">Trade</h3>
									<p class="elementor-image-box-description">TAKE YOUR FIRST PROFIT

									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-0335abf elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
						data-id="0335abf" data-element_type="widget" data-widget_type="icon-list.default">
						<div class="elementor-widget-container">
							<ul class="elementor-icon-list-items">
								<li class="elementor-icon-list-item">
									<span class="elementor-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check"
											viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
											</path>
										</svg> </span>
									<span class="elementor-icon-list-text">Tight spreads</span>
								</li>
								<li class="elementor-icon-list-item">
									<span class="elementor-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check"
											viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
											</path>
										</svg> </span>
									<span class="elementor-icon-list-text">Superfast trade execution</span>
								</li>
								<li class="elementor-icon-list-item">
									<span class="elementor-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check"
											viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
											</path>
										</svg> </span>
									<span class="elementor-icon-list-text">Hi-tech forex trading tools</span>
								</li>
								<li class="elementor-icon-list-item">
									<span class="elementor-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check"
											viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
											</path>
										</svg> </span>
									<span class="elementor-icon-list-text">Ultimate risk protection & security</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="elementor-element elementor-element-757dcfc elementor-widget elementor-widget-button"
						data-id="757dcfc" data-element_type="widget" data-widget_type="button.default">
						<div class="elementor-widget-container">
							<div class="elementor-button-wrapper">
								<a class="elementor-button elementor-button-link elementor-size-sm"
									href="{{ url('register')}}">
									<span class="elementor-button-content-wrapper">
										<span class="elementor-button-text">Open Account</span>
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-d067791 e-con-full e-flex e-con e-child"
					data-id="d067791" data-element_type="container"
					data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
					<div class="elementor-element elementor-element-bc2a1ba elementor-widget elementor-widget-image-box"
						data-id="bc2a1ba" data-element_type="widget" data-widget_type="image-box.default">
						<div class="elementor-widget-container">
							<div class="elementor-image-box-wrapper">
								<div class="elementor-image-box-content">
									<h3 class="elementor-image-box-title">Invest</h3>
									<p class="elementor-image-box-description">CHOOSE THE BEST PORTFOLIO

									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-fc4c0f2 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
						data-id="fc4c0f2" data-element_type="widget" data-widget_type="icon-list.default">
						<div class="elementor-widget-container">
							<ul class="elementor-icon-list-items">
								<li class="elementor-icon-list-item">
									<span class="elementor-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check"
											viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
											</path>
										</svg> </span>
									<span class="elementor-icon-list-text">No need to be experienced</span>
								</li>
								<li class="elementor-icon-list-item">
									<span class="elementor-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check"
											viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
											</path>
										</svg> </span>
									<span class="elementor-icon-list-text">Large number of strategies</span>
								</li>
								<li class="elementor-icon-list-item">
									<span class="elementor-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check"
											viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
											</path>
										</svg> </span>
									<span class="elementor-icon-list-text">Profit whenever Managers earn</span>
								</li>
								<li class="elementor-icon-list-item">
									<span class="elementor-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check"
											viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
											</path>
										</svg> </span>
									<span class="elementor-icon-list-text">Full control of your Investment</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="elementor-element elementor-element-fdfc477 elementor-widget elementor-widget-button"
						data-id="fdfc477" data-element_type="widget" data-widget_type="button.default">
						<div class="elementor-widget-container">
							<div class="elementor-button-wrapper">
								<a class="elementor-button elementor-button-link elementor-size-sm"
									href="{{ url('register')}}">
									<span class="elementor-button-content-wrapper">
										<span class="elementor-button-text">Open Account</span>
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="elementor-element elementor-element-1d96be0 e-flex e-con-boxed e-con e-parent" data-id="1d96be0"
			data-element_type="container"
			data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}"
			data-core-v316-plus="true">
			<div class="e-con-inner">
				<div class="elementor-element elementor-element-f6bad5d e-con-full e-flex e-con e-child"
					data-id="f6bad5d" data-element_type="container"
					data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
					<div class="elementor-element elementor-element-4921d3e elementor-widget elementor-widget-heading"
						data-id="4921d3e" data-element_type="widget" data-widget_type="heading.default">
						<div class="elementor-widget-container">
							<h2 class="elementor-heading-title elementor-size-default">Experience more than Trading.
							</h2>
						</div>
					</div>
					<div class="elementor-element elementor-element-2dbf621 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-text-editor"
						data-id="2dbf621" data-element_type="widget" data-widget_type="text-editor.default">
						<div class="elementor-widget-container">
							<div class="uk-width-1-2@m uk-first-column">
								<div class="uk-width-1-2@m uk-text-center">
									<p class="uk-text-lead">The {{ get_settings('website_name')}} firm was founded on the basis of
										helping Forex traders get the best possible results.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-b6953e4 elementor-view-default elementor-widget elementor-widget-icon"
						data-id="b6953e4" data-element_type="widget" data-widget_type="icon.default">
						<div class="elementor-widget-container">
							<div class="elementor-icon-wrapper">
								<div class="elementor-icon">
									<i aria-hidden="true" class="mdi mdi-chevron-down"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-40beb1b e-flex e-con-boxed e-con e-child"
						data-id="40beb1b" data-element_type="container"
						data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
						<div class="e-con-inner">
							<div class="elementor-element elementor-element-92adbf2 e-flex e-con-boxed e-con e-child"
								data-id="92adbf2" data-element_type="container"
								data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}">
								<div class="e-con-inner">
									<div class="elementor-element elementor-element-246a482 elementor-widget elementor-widget-spacer"
										data-id="246a482" data-element_type="widget" data-widget_type="spacer.default">
										<div class="elementor-widget-container">
											<style>
												/*! elementor - v3.19.0 - 28-02-2024 */
												.elementor-column .elementor-spacer-inner {
													height: var(--spacer-size)
												}

												.e-con {
													--container-widget-width: 100%
												}

												.e-con-inner>.elementor-widget-spacer,
												.e-con>.elementor-widget-spacer {
													width: var(--container-widget-width, var(--spacer-size));
													--align-self: var(--container-widget-align-self, initial);
													--flex-shrink: 0
												}

												.e-con-inner>.elementor-widget-spacer>.elementor-widget-container,
												.e-con>.elementor-widget-spacer>.elementor-widget-container {
													height: 100%;
													width: 100%
												}

												.e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer,
												.e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer {
													height: 100%
												}

												.e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner,
												.e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner {
													height: var(--container-widget-height, var(--spacer-size))
												}

												.e-con-inner>.elementor-widget-spacer.elementor-widget-empty,
												.e-con>.elementor-widget-spacer.elementor-widget-empty {
													position: relative;
													min-height: 22px;
													min-width: 22px
												}

												.e-con-inner>.elementor-widget-spacer.elementor-widget-empty .elementor-widget-empty-icon,
												.e-con>.elementor-widget-spacer.elementor-widget-empty .elementor-widget-empty-icon {
													position: absolute;
													top: 0;
													bottom: 0;
													left: 0;
													right: 0;
													margin: auto;
													padding: 0;
													width: 22px;
													height: 22px
												}
											</style>
											<div class="elementor-spacer">
												<div class="elementor-spacer-inner"></div>
											</div>
										</div>
									</div>
									<div class="elementor-element elementor-element-0faabf9 elementor-widget elementor-widget-image-box"
										data-id="0faabf9" data-element_type="widget"
										data-widget_type="image-box.default">
										<div class="elementor-widget-container">
											<div class="elementor-image-box-wrapper">
												<div class="elementor-image-box-content">
													<h3 class="elementor-image-box-title">Economic</h3>
													<p class="elementor-image-box-description">Analysis</p>
												</div>
											</div>
										</div>
									</div>
									<div class="elementor-element elementor-element-22d7685 elementor-widget elementor-widget-text-editor"
										data-id="22d7685" data-element_type="widget"
										data-widget_type="text-editor.default">
										<div class="elementor-widget-container">
											<div class="uk-width-1-2@m uk-first-column">
												<p>Stay ahead of the markets with world-leading market analysis through
													daily webinars by industry experts.</p>
											</div>
										</div>
									</div>
									<div class="elementor-element elementor-element-49c937c elementor-widget elementor-widget-heading"
										data-id="49c937c" data-element_type="widget" data-widget_type="heading.default">
										<div class="elementor-widget-container">
											<h2 class="elementor-heading-title elementor-size-default">Weekly Update
											</h2>
										</div>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-efc7d57 e-flex e-con-boxed e-con e-child"
								data-id="efc7d57" data-element_type="container"
								data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}">
								<div class="e-con-inner">
									<div class="elementor-element elementor-element-90e4cf8 elementor-widget elementor-widget-spacer"
										data-id="90e4cf8" data-element_type="widget" data-widget_type="spacer.default">
										<div class="elementor-widget-container">
											<div class="elementor-spacer">
												<div class="elementor-spacer-inner"></div>
											</div>
										</div>
									</div>
									<div class="elementor-element elementor-element-96069fd elementor-widget elementor-widget-image-box"
										data-id="96069fd" data-element_type="widget"
										data-widget_type="image-box.default">
										<div class="elementor-widget-container">
											<div class="elementor-image-box-wrapper">
												<div class="elementor-image-box-content">
													<h3 class="elementor-image-box-title">Technical</h3>
													<p class="elementor-image-box-description">Analysis</p>
												</div>
											</div>
										</div>
									</div>
									<div class="elementor-element elementor-element-52f67aa elementor-widget elementor-widget-text-editor"
										data-id="52f67aa" data-element_type="widget"
										data-widget_type="text-editor.default">
										<div class="elementor-widget-container">
											<div class="uk-width-1-2@m uk-first-column">
												<p>Access the financial markets with an account catered to your needs
													and benefit from good conditions.</p>
											</div>
										</div>
									</div>
									<div class="elementor-element elementor-element-ad911ed elementor-widget elementor-widget-heading"
										data-id="ad911ed" data-element_type="widget" data-widget_type="heading.default">
										<div class="elementor-widget-container">
											<h2 class="elementor-heading-title elementor-size-default">Weekly Update
											</h2>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-0e346da e-flex e-con-boxed e-con e-child"
						data-id="0e346da" data-element_type="container"
						data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
						<div class="e-con-inner">
							<div class="elementor-element elementor-element-a9b990a e-flex e-con-boxed e-con e-child"
								data-id="a9b990a" data-element_type="container"
								data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}">
								<div class="e-con-inner">
									<div class="elementor-element elementor-element-ea6b17a elementor-widget elementor-widget-image"
										data-id="ea6b17a" data-element_type="widget" data-widget_type="image.default">
										<div class="elementor-widget-container">
											<img loading="lazy" decoding="async" width="418" height="73"
												src="wp-content/uploads/2024/03/Screenshot-2024-03-01-021044.png"
												class="attachment-large size-large wp-image-45" alt=""
												srcset="wp-content/uploads/2024/03/Screenshot-2024-03-01-021044.png 418w, wp-content/uploads/2024/03/Screenshot-2024-03-01-021044-300x52.png 300w"
												sizes="(max-width: 418px) 100vw, 418px" />
										</div>
									</div>
									<div class="elementor-element elementor-element-f17e895 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
										data-id="f17e895" data-element_type="widget" data-widget_type="divider.default">
										<div class="elementor-widget-container">
											<style>
												/*! elementor - v3.19.0 - 28-02-2024 */
												.elementor-widget-divider {
													--divider-border-style: none;
													--divider-border-width: 1px;
													--divider-color: #0c0d0e;
													--divider-icon-size: 20px;
													--divider-element-spacing: 10px;
													--divider-pattern-height: 24px;
													--divider-pattern-size: 20px;
													--divider-pattern-url: none;
													--divider-pattern-repeat: repeat-x
												}

												.elementor-widget-divider .elementor-divider {
													display: flex
												}

												.elementor-widget-divider .elementor-divider__text {
													font-size: 15px;
													line-height: 1;
													max-width: 95%
												}

												.elementor-widget-divider .elementor-divider__element {
													margin: 0 var(--divider-element-spacing);
													flex-shrink: 0
												}

												.elementor-widget-divider .elementor-icon {
													font-size: var(--divider-icon-size)
												}

												.elementor-widget-divider .elementor-divider-separator {
													display: flex;
													margin: 0;
													direction: ltr
												}

												.elementor-widget-divider--view-line_icon .elementor-divider-separator,
												.elementor-widget-divider--view-line_text .elementor-divider-separator {
													align-items: center
												}

												.elementor-widget-divider--view-line_icon .elementor-divider-separator:after,
												.elementor-widget-divider--view-line_icon .elementor-divider-separator:before,
												.elementor-widget-divider--view-line_text .elementor-divider-separator:after,
												.elementor-widget-divider--view-line_text .elementor-divider-separator:before {
													display: block;
													content: "";
													border-block-end: 0;
													flex-grow: 1;
													border-block-start: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
												}

												.elementor-widget-divider--element-align-left .elementor-divider .elementor-divider-separator>.elementor-divider__svg:first-of-type {
													flex-grow: 0;
													flex-shrink: 100
												}

												.elementor-widget-divider--element-align-left .elementor-divider-separator:before {
													content: none
												}

												.elementor-widget-divider--element-align-left .elementor-divider__element {
													margin-left: 0
												}

												.elementor-widget-divider--element-align-right .elementor-divider .elementor-divider-separator>.elementor-divider__svg:last-of-type {
													flex-grow: 0;
													flex-shrink: 100
												}

												.elementor-widget-divider--element-align-right .elementor-divider-separator:after {
													content: none
												}

												.elementor-widget-divider--element-align-right .elementor-divider__element {
													margin-right: 0
												}

												.elementor-widget-divider--element-align-start .elementor-divider .elementor-divider-separator>.elementor-divider__svg:first-of-type {
													flex-grow: 0;
													flex-shrink: 100
												}

												.elementor-widget-divider--element-align-start .elementor-divider-separator:before {
													content: none
												}

												.elementor-widget-divider--element-align-start .elementor-divider__element {
													margin-inline-start: 0
												}

												.elementor-widget-divider--element-align-end .elementor-divider .elementor-divider-separator>.elementor-divider__svg:last-of-type {
													flex-grow: 0;
													flex-shrink: 100
												}

												.elementor-widget-divider--element-align-end .elementor-divider-separator:after {
													content: none
												}

												.elementor-widget-divider--element-align-end .elementor-divider__element {
													margin-inline-end: 0
												}

												.elementor-widget-divider:not(.elementor-widget-divider--view-line_text):not(.elementor-widget-divider--view-line_icon) .elementor-divider-separator {
													border-block-start: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
												}

												.elementor-widget-divider--separator-type-pattern {
													--divider-border-style: none
												}

												.elementor-widget-divider--separator-type-pattern.elementor-widget-divider--view-line .elementor-divider-separator,
												.elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:after,
												.elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:before,
												.elementor-widget-divider--separator-type-pattern:not([class*=elementor-widget-divider--view]) .elementor-divider-separator {
													width: 100%;
													min-height: var(--divider-pattern-height);
													-webkit-mask-size: var(--divider-pattern-size) 100%;
													mask-size: var(--divider-pattern-size) 100%;
													-webkit-mask-repeat: var(--divider-pattern-repeat);
													mask-repeat: var(--divider-pattern-repeat);
													background-color: var(--divider-color);
													-webkit-mask-image: var(--divider-pattern-url);
													mask-image: var(--divider-pattern-url)
												}

												.elementor-widget-divider--no-spacing {
													--divider-pattern-size: auto
												}

												.elementor-widget-divider--bg-round {
													--divider-pattern-repeat: round
												}

												.rtl .elementor-widget-divider .elementor-divider__text {
													direction: rtl
												}

												.e-con-inner>.elementor-widget-divider,
												.e-con>.elementor-widget-divider {
													width: var(--container-widget-width, 100%);
													--flex-grow: var(--container-widget-flex-grow)
												}
											</style>
											<div class="elementor-divider">
												<span class="elementor-divider-separator">
												</span>
											</div>
										</div>
									</div>
									<div class="elementor-element elementor-element-59647f6 elementor-widget elementor-widget-text-editor"
										data-id="59647f6" data-element_type="widget"
										data-widget_type="text-editor.default">
										<div class="elementor-widget-container">
											<div class="uk-width-1-2@m uk-first-column">
												<p>Trade on a <span class="uk-text-bold uk-text-primary"
														style="color: #c40000;">world class platform</span> without a
													doubt.<br /><span class="uk-text-bold uk-text-primary"
														style="color: #c40000;">Mobile App Coming Soon For all
														Platform.</span></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-747e9b3 e-flex e-con-boxed e-con e-child"
						data-id="747e9b3" data-element_type="container"
						data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
						<div class="e-con-inner">
							<div class="elementor-element elementor-element-6325133 e-con-full e-flex e-con e-child"
								data-id="6325133" data-element_type="container"
								data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
								<div class="elementor-element elementor-element-31adb9f elementor-view-stacked elementor-position-left elementor-mobile-position-left elementor-vertical-align-middle elementor-shape-circle elementor-widget elementor-widget-icon-box"
									data-id="31adb9f" data-element_type="widget" data-widget_type="icon-box.default">
									<div class="elementor-widget-container">
										<div class="elementor-icon-box-wrapper">
											<div class="elementor-icon-box-icon">
												<span class="elementor-icon elementor-animation-">
													<i aria-hidden="true" class="mdi mdi-chart-line"></i> </span>
											</div>
											<div class="elementor-icon-box-content">
												<h3 class="elementor-icon-box-title">
													<span>
														324,978,126 </span>
												</h3>
												<p class="elementor-icon-box-description">
													TRADES OPENED AT PROFIT

												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-40a2fff e-con-full e-flex e-con e-child"
								data-id="40a2fff" data-element_type="container"
								data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
								<div class="elementor-element elementor-element-b174b58 elementor-widget elementor-widget-heading"
									data-id="b174b58" data-element_type="widget" data-widget_type="heading.default">
									<div class="elementor-widget-container">
										<h2 class="elementor-heading-title elementor-size-default">Trade & Invest in
											Stocks, Currencies, Indices, and Commodities (CFDs).

										</h2>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="elementor-element elementor-element-c6d4a04 e-flex e-con-boxed e-con e-parent" data-id="c6d4a04"
			data-element_type="container"
			data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}"
			data-core-v316-plus="true">
			<div class="e-con-inner">
				<div class="elementor-element elementor-element-0ca15b8 e-con-full e-flex e-con e-child"
					data-id="0ca15b8" data-element_type="container"
					data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
					<div class="elementor-element elementor-element-7f3ccdd elementor-widget elementor-widget-heading"
						data-id="7f3ccdd" data-element_type="widget" data-widget_type="heading.default">
						<div class="elementor-widget-container">
							<h2 class="elementor-heading-title elementor-size-default">We are committed to meeting your
								CFD and FX trading needs
							</h2>
						</div>
					</div>
					<div class="elementor-element elementor-element-115155e elementor-widget elementor-widget-text-editor"
						data-id="115155e" data-element_type="widget" data-widget_type="text-editor.default">
						<div class="elementor-widget-container">
							<div class="uk-width-1-2@m uk-first-column">
								<div class="uk-width-1-2@m uk-first-column">
									<p class="uk-text-lead">We help your money grow by putting it to work. Not Just by
										Words. Our experts ensure not only that your funds are at work, but are putting
										carefully planned and strategically diversified trading and investment portfolio
										for risk management. We ensure transparent returns, with favourable management
										fee.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-ae88408 e-con-full e-flex e-con e-child"
					data-id="ae88408" data-element_type="container"
					data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
					<div class="elementor-element elementor-element-b452c98 e-flex e-con-boxed e-con e-child"
						data-id="b452c98" data-element_type="container"
						data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
						<div class="e-con-inner">
							<div class="elementor-element elementor-element-30f64b3 elementor-widget elementor-widget-heading"
								data-id="30f64b3" data-element_type="widget" data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h2 class="elementor-heading-title elementor-size-default">89+</h2>
								</div>
							</div>
							<div class="elementor-element elementor-element-6814059 elementor-widget elementor-widget-text-editor"
								data-id="6814059" data-element_type="widget" data-widget_type="text-editor.default">
								<div class="elementor-widget-container">
									<div class="uk-width-1-2@m uk-first-column">
										<div class="uk-width-1-2@m uk-first-column">
											<p class="uk-text-lead">Countries our Clients currently come from and
												counting.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-56d2bff e-flex e-con-boxed e-con e-child"
						data-id="56d2bff" data-element_type="container"
						data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
						<div class="e-con-inner">
							<div class="elementor-element elementor-element-7801f7a elementor-widget elementor-widget-heading"
								data-id="7801f7a" data-element_type="widget" data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h2 class="elementor-heading-title elementor-size-default">90%
									</h2>
								</div>
							</div>
							<div class="elementor-element elementor-element-8dd3e94 elementor-widget elementor-widget-text-editor"
								data-id="8dd3e94" data-element_type="widget" data-widget_type="text-editor.default">
								<div class="elementor-widget-container">
									<div class="uk-width-1-2@m uk-first-column">
										<div class="uk-width-1-2@m uk-first-column">
											<p class="uk-text-lead">We provide 80-90% high probability forex trades but
												we also provide Gold, Crypto, Index, Stock Signals.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-7fc1fa9 e-flex e-con-boxed e-con e-child"
						data-id="7fc1fa9" data-element_type="container"
						data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
						<div class="e-con-inner">
							<div class="elementor-element elementor-element-7600796 elementor-widget elementor-widget-heading"
								data-id="7600796" data-element_type="widget" data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h2 class="elementor-heading-title elementor-size-default">13K+</h2>
								</div>
							</div>
							<div class="elementor-element elementor-element-cc87a38 elementor-widget elementor-widget-text-editor"
								data-id="cc87a38" data-element_type="widget" data-widget_type="text-editor.default">
								<div class="elementor-widget-container">
									<div class="uk-width-1-2@m uk-first-column">
										<div class="uk-width-1-2@m uk-first-column">
											<p class="uk-text-lead">Active Followers and Counting.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-412d3de e-flex e-con-boxed e-con e-child"
						data-id="412d3de" data-element_type="container"
						data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
						<div class="e-con-inner">
							<div class="elementor-element elementor-element-209bbc3 elementor-widget elementor-widget-heading"
								data-id="209bbc3" data-element_type="widget" data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h2 class="elementor-heading-title elementor-size-default">10K+</h2>
								</div>
							</div>
							<div class="elementor-element elementor-element-fc5c5d3 elementor-widget elementor-widget-text-editor"
								data-id="fc5c5d3" data-element_type="widget" data-widget_type="text-editor.default">
								<div class="elementor-widget-container">
									<div class="uk-width-1-2@m uk-first-column">
										<div class="uk-width-1-2@m uk-first-column">
											<p class="uk-text-lead">Years of Experience in the Industry.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="elementor-element elementor-element-77e0381 e-flex e-con-boxed e-con e-parent" data-id="77e0381"
			data-element_type="container"
			data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}"
			data-core-v316-plus="true">
			<div class="e-con-inner">
				<div class="elementor-element elementor-element-9167093 e-con-full e-flex e-con e-child"
					data-id="9167093" data-element_type="container"
					data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
					<div class="elementor-element elementor-element-c3fd4d7 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-text-editor"
						data-id="c3fd4d7" data-element_type="widget" data-widget_type="text-editor.default">
						<div class="elementor-widget-container">
							<div class="uk-width-1-2@m uk-first-column">
								<div class="uk-width-1-2@m uk-text-center">
									<p class="uk-text-lead">Trade with confidence</p>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-e922961 elementor-widget elementor-widget-heading"
						data-id="e922961" data-element_type="widget" data-widget_type="heading.default">
						<div class="elementor-widget-container">
							<h2 class="elementor-heading-title elementor-size-default">Complete packages for every
								trader
							</h2>
						</div>
					</div>
					<div class="elementor-element elementor-element-09c1d04 elementor-view-default elementor-widget elementor-widget-icon"
						data-id="09c1d04" data-element_type="widget" data-widget_type="icon.default">
						<div class="elementor-widget-container">
							<div class="elementor-icon-wrapper">
								<div class="elementor-icon">
									<i aria-hidden="true" class="mdi mdi-chevron-down"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="elementor-element elementor-element-35c7b78 e-flex e-con-boxed e-con e-parent" data-id="35c7b78"
			data-element_type="container"
			data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}"
			data-core-v316-plus="true">
			<div class="e-con-inner">
				<div class="elementor-element elementor-element-371c73b e-con-full e-flex e-con e-child"
					data-id="371c73b" data-element_type="container"
					data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
					<div class="elementor-element elementor-element-b9342b7 elementor-widget elementor-widget-image-box"
						data-id="b9342b7" data-element_type="widget" data-widget_type="image-box.default">
						<div class="elementor-widget-container">
							<div class="elementor-image-box-wrapper">
								<div class="elementor-image-box-content">
									<h3 class="elementor-image-box-title">BASIC PLAN</h3>
									<p class="elementor-image-box-description">Benefit from industry-leading entry
										prices

									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-b43d287 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
						data-id="b43d287" data-element_type="widget" data-widget_type="icon-list.default">
						<div class="elementor-widget-container">
							<ul class="elementor-icon-list-items">
								<li class="elementor-icon-list-item">
									<span class="elementor-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check"
											viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
											</path>
										</svg> </span>
									<span class="elementor-icon-list-text">Minimum Investment: $200</span>
								</li>
								<li class="elementor-icon-list-item">
									<span class="elementor-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check"
											viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
											</path>
										</svg> </span>
									<span class="elementor-icon-list-text">Maximum Investment: $999</span>
								</li>
								<li class="elementor-icon-list-item">
									<span class="elementor-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check"
											viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
											</path>
										</svg> </span>
									<span class="elementor-icon-list-text">Duration: 72 Hours</span>
								</li>
								<li class="elementor-icon-list-item">
									<span class="elementor-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check"
											viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
											</path>
										</svg> </span>
									<span class="elementor-icon-list-text">Personal Account Manager</span>
								</li>
								<li class="elementor-icon-list-item">
									<span class="elementor-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check"
											viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
											</path>
										</svg> </span>
									<span class="elementor-icon-list-text">Financial Plan</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="elementor-element elementor-element-c1ac139 elementor-widget elementor-widget-button"
						data-id="c1ac139" data-element_type="widget" data-widget_type="button.default">
						<div class="elementor-widget-container">
							<div class="elementor-button-wrapper">
								<a class="elementor-button elementor-button-link elementor-size-sm"
									href="{{ url('register')}}">
									<span class="elementor-button-content-wrapper">
										<span class="elementor-button-text">Get Started</span>
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-acf327b e-con-full e-flex e-con e-child"
					data-id="acf327b" data-element_type="container"
					data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
					<div class="elementor-element elementor-element-edabbd0 elementor-widget elementor-widget-image-box"
						data-id="edabbd0" data-element_type="widget" data-widget_type="image-box.default">
						<div class="elementor-widget-container">
							<div class="elementor-image-box-wrapper">
								<div class="elementor-image-box-content">
									<h3 class="elementor-image-box-title">PROFESSIONAL PLAN</h3>
									<p class="elementor-image-box-description">Receive even tighter spreads and
										commissions

									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-9a98a40 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
						data-id="9a98a40" data-element_type="widget" data-widget_type="icon-list.default">
						<div class="elementor-widget-container">
							<ul class="elementor-icon-list-items">
								<li class="elementor-icon-list-item">
									<span class="elementor-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check"
											viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
											</path>
										</svg> </span>
									<span class="elementor-icon-list-text">Minimum Investment: $999</span>
								</li>
								<li class="elementor-icon-list-item">
									<span class="elementor-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check"
											viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
											</path>
										</svg> </span>
									<span class="elementor-icon-list-text">Maximum Investment: $10,000</span>
								</li>
								<li class="elementor-icon-list-item">
									<span class="elementor-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check"
											viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
											</path>
										</svg> </span>
									<span class="elementor-icon-list-text">Duration: 72 Hours</span>
								</li>
								<li class="elementor-icon-list-item">
									<span class="elementor-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check"
											viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
											</path>
										</svg> </span>
									<span class="elementor-icon-list-text">Personal Account Manager</span>
								</li>
								<li class="elementor-icon-list-item">
									<span class="elementor-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check"
											viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
											</path>
										</svg> </span>
									<span class="elementor-icon-list-text">Financial Plan</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="elementor-element elementor-element-faaecb2 elementor-widget elementor-widget-button"
						data-id="faaecb2" data-element_type="widget" data-widget_type="button.default">
						<div class="elementor-widget-container">
							<div class="elementor-button-wrapper">
								<a class="elementor-button elementor-button-link elementor-size-sm"
									href="{{ url('register')}}">
									<span class="elementor-button-content-wrapper">
										<span class="elementor-button-text">Open Account</span>
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="elementor-element elementor-element-4095515 e-flex e-con-boxed e-con e-parent" data-id="4095515"
			data-element_type="container"
			data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}"
			data-core-v316-plus="true">
			<div class="e-con-inner">
				<div class="elementor-element elementor-element-26270ed e-con-full e-flex e-con e-child"
					data-id="26270ed" data-element_type="container"
					data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
					<div class="elementor-element elementor-element-dfb9497 elementor-widget elementor-widget-image-box"
						data-id="dfb9497" data-element_type="widget" data-widget_type="image-box.default">
						<div class="elementor-widget-container">
							<div class="elementor-image-box-wrapper">
								<div class="elementor-image-box-content">
									<h3 class="elementor-image-box-title">ULTIMATE PLAN</h3>
									<p class="elementor-image-box-description">Benefit from industry-leading entry
										prices

									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-d01a725 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
						data-id="d01a725" data-element_type="widget" data-widget_type="icon-list.default">
						<div class="elementor-widget-container">
							<ul class="elementor-icon-list-items">
								<li class="elementor-icon-list-item">
									<span class="elementor-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check"
											viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
											</path>
										</svg> </span>
									<span class="elementor-icon-list-text">Minimum Investment: $500</span>
								</li>
								<li class="elementor-icon-list-item">
									<span class="elementor-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check"
											viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
											</path>
										</svg> </span>
									<span class="elementor-icon-list-text">Maximum Investment: $10,000</span>
								</li>
								<li class="elementor-icon-list-item">
									<span class="elementor-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check"
											viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
											</path>
										</svg> </span>
									<span class="elementor-icon-list-text">Duration: 7 Days</span>
								</li>
								<li class="elementor-icon-list-item">
									<span class="elementor-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check"
											viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
											</path>
										</svg> </span>
									<span class="elementor-icon-list-text">Personal Account Manager</span>
								</li>
								<li class="elementor-icon-list-item">
									<span class="elementor-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check"
											viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
											</path>
										</svg> </span>
									<span class="elementor-icon-list-text">Financial Plan</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="elementor-element elementor-element-8f0a6f0 elementor-widget elementor-widget-button"
						data-id="8f0a6f0" data-element_type="widget" data-widget_type="button.default">
						<div class="elementor-widget-container">
							<div class="elementor-button-wrapper">
								<a class="elementor-button elementor-button-link elementor-size-sm"
									href="{{ url('register')}}">
									<span class="elementor-button-content-wrapper">
										<span class="elementor-button-text">Get Started</span>
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-80601bb e-con-full e-flex e-con e-child"
					data-id="80601bb" data-element_type="container"
					data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
					<div class="elementor-element elementor-element-58433a6 elementor-widget elementor-widget-image-box"
						data-id="58433a6" data-element_type="widget" data-widget_type="image-box.default">
						<div class="elementor-widget-container">
							<div class="elementor-image-box-wrapper">
								<div class="elementor-image-box-content">
									<h3 class="elementor-image-box-title">PLATINUM ACCOUNT</h3>
									<p class="elementor-image-box-description">Receive even tighter spreads and
										commissions

									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-db7fdd5 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
						data-id="db7fdd5" data-element_type="widget" data-widget_type="icon-list.default">
						<div class="elementor-widget-container">
							<ul class="elementor-icon-list-items">
								<li class="elementor-icon-list-item">
									<span class="elementor-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check"
											viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
											</path>
										</svg> </span>
									<span class="elementor-icon-list-text">Minimum Investment: $10,000</span>
								</li>
								<li class="elementor-icon-list-item">
									<span class="elementor-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check"
											viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
											</path>
										</svg> </span>
									<span class="elementor-icon-list-text">Maximum Investment: $50,000</span>
								</li>
								<li class="elementor-icon-list-item">
									<span class="elementor-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check"
											viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
											</path>
										</svg> </span>
									<span class="elementor-icon-list-text">Duration: 2 Weeks</span>
								</li>
								<li class="elementor-icon-list-item">
									<span class="elementor-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check"
											viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
											</path>
										</svg> </span>
									<span class="elementor-icon-list-text">Personal Account Manager</span>
								</li>
								<li class="elementor-icon-list-item">
									<span class="elementor-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check"
											viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
											</path>
										</svg> </span>
									<span class="elementor-icon-list-text">Financial Plan</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="elementor-element elementor-element-7e51e5f elementor-widget elementor-widget-button"
						data-id="7e51e5f" data-element_type="widget" data-widget_type="button.default">
						<div class="elementor-widget-container">
							<div class="elementor-button-wrapper">
								<a class="elementor-button elementor-button-link elementor-size-sm"
									href="{{ url('register')}}">
									<span class="elementor-button-content-wrapper">
										<span class="elementor-button-text">Open Account</span>
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="elementor-element elementor-element-03277f5 e-flex e-con-boxed e-con e-parent" data-id="03277f5"
			data-element_type="container"
			data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}"
			data-core-v316-plus="true">
			<div class="e-con-inner">
				<div class="elementor-element elementor-element-b5b7d08 e-con-full e-flex e-con e-child"
					data-id="b5b7d08" data-element_type="container"
					data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
					<div class="elementor-element elementor-element-d28fa08 elementor-view-stacked elementor-position-left elementor-vertical-align-middle elementor-shape-circle elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
						data-id="d28fa08" data-element_type="widget" data-widget_type="icon-box.default">
						<div class="elementor-widget-container">
							<div class="elementor-icon-box-wrapper">
								<div class="elementor-icon-box-icon">
									<span class="elementor-icon elementor-animation-">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-drafting-compass"
											viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M457.01 344.42c-25.05 20.33-52.63 37.18-82.54 49.05l54.38 94.19 53.95 23.04c9.81 4.19 20.89-2.21 22.17-12.8l7.02-58.25-54.98-95.23zm42.49-94.56c4.86-7.67 1.89-17.99-6.05-22.39l-28.07-15.57c-7.48-4.15-16.61-1.46-21.26 5.72C403.01 281.15 332.25 320 256 320c-23.93 0-47.23-4.25-69.41-11.53l67.36-116.68c.7.02 1.34.21 2.04.21s1.35-.19 2.04-.21l51.09 88.5c31.23-8.96 59.56-25.75 82.61-48.92l-51.79-89.71C347.39 128.03 352 112.63 352 96c0-53.02-42.98-96-96-96s-96 42.98-96 96c0 16.63 4.61 32.03 12.05 45.66l-68.3 118.31c-12.55-11.61-23.96-24.59-33.68-39-4.79-7.1-13.97-9.62-21.38-5.33l-27.75 16.07c-7.85 4.54-10.63 14.9-5.64 22.47 15.57 23.64 34.69 44.21 55.98 62.02L0 439.66l7.02 58.25c1.28 10.59 12.36 16.99 22.17 12.8l53.95-23.04 70.8-122.63C186.13 377.28 220.62 384 256 384c99.05 0 190.88-51.01 243.5-134.14zM256 64c17.67 0 32 14.33 32 32s-14.33 32-32 32-32-14.33-32-32 14.33-32 32-32z">
											</path>
										</svg> </span>
								</div>
								<div class="elementor-icon-box-content">
									<h3 class="elementor-icon-box-title">
										<span>
											Enhanced Tools </span>
									</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-f7c78ba elementor-view-stacked elementor-position-left elementor-vertical-align-middle elementor-shape-circle elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
						data-id="f7c78ba" data-element_type="widget" data-widget_type="icon-box.default">
						<div class="elementor-widget-container">
							<div class="elementor-icon-box-wrapper">
								<div class="elementor-icon-box-icon">
									<span class="elementor-icon elementor-animation-">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-book" viewBox="0 0 448 512"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M448 360V24c0-13.3-10.7-24-24-24H96C43 0 0 43 0 96v320c0 53 43 96 96 96h328c13.3 0 24-10.7 24-24v-16c0-7.5-3.5-14.3-8.9-18.7-4.2-15.4-4.2-59.3 0-74.7 5.4-4.3 8.9-11.1 8.9-18.6zM128 134c0-3.3 2.7-6 6-6h212c3.3 0 6 2.7 6 6v20c0 3.3-2.7 6-6 6H134c-3.3 0-6-2.7-6-6v-20zm0 64c0-3.3 2.7-6 6-6h212c3.3 0 6 2.7 6 6v20c0 3.3-2.7 6-6 6H134c-3.3 0-6-2.7-6-6v-20zm253.4 250H96c-17.7 0-32-14.3-32-32 0-17.6 14.4-32 32-32h285.4c-1.9 17.1-1.9 46.9 0 64z">
											</path>
										</svg> </span>
								</div>
								<div class="elementor-icon-box-content">
									<h3 class="elementor-icon-box-title">
										<span>
											Trading Guides </span>
									</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-ff240ce elementor-view-stacked elementor-position-left elementor-vertical-align-middle elementor-shape-circle elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
						data-id="ff240ce" data-element_type="widget" data-widget_type="icon-box.default">
						<div class="elementor-widget-container">
							<div class="elementor-icon-box-wrapper">
								<div class="elementor-icon-box-icon">
									<span class="elementor-icon elementor-animation-">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-bolt" viewBox="0 0 320 512"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M296 160H180.6l42.6-129.8C227.2 15 215.7 0 200 0H56C44 0 33.8 8.9 32.2 20.8l-32 240C-1.7 275.2 9.5 288 24 288h118.7L96.6 482.5c-3.6 15.2 8 29.5 23.3 29.5 8.4 0 16.4-4.4 20.8-12l176-304c9.3-15.9-2.2-36-20.7-36z">
											</path>
										</svg> </span>
								</div>
								<div class="elementor-icon-box-content">
									<h3 class="elementor-icon-box-title">
										<span>
											Fast execution </span>
									</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-7b8fbbe e-con-full e-flex e-con e-child"
					data-id="7b8fbbe" data-element_type="container"
					data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
					<div class="elementor-element elementor-element-e74e185 elementor-view-stacked elementor-position-left elementor-vertical-align-middle elementor-shape-circle elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
						data-id="e74e185" data-element_type="widget" data-widget_type="icon-box.default">
						<div class="elementor-widget-container">
							<div class="elementor-icon-box-wrapper">
								<div class="elementor-icon-box-icon">
									<span class="elementor-icon elementor-animation-">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-percentage"
											viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M109.25 173.25c24.99-24.99 24.99-65.52 0-90.51-24.99-24.99-65.52-24.99-90.51 0-24.99 24.99-24.99 65.52 0 90.51 25 25 65.52 25 90.51 0zm256 165.49c-24.99-24.99-65.52-24.99-90.51 0-24.99 24.99-24.99 65.52 0 90.51 24.99 24.99 65.52 24.99 90.51 0 25-24.99 25-65.51 0-90.51zm-1.94-231.43l-22.62-22.62c-12.5-12.5-32.76-12.5-45.25 0L20.69 359.44c-12.5 12.5-12.5 32.76 0 45.25l22.62 22.62c12.5 12.5 32.76 12.5 45.25 0l274.75-274.75c12.5-12.49 12.5-32.75 0-45.25z">
											</path>
										</svg> </span>
								</div>
								<div class="elementor-icon-box-content">
									<h3 class="elementor-icon-box-title">
										<span>
											Less Commission </span>
									</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-39eea94 elementor-view-stacked elementor-position-left elementor-vertical-align-middle elementor-shape-circle elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
						data-id="39eea94" data-element_type="widget" data-widget_type="icon-box.default">
						<div class="elementor-widget-container">
							<div class="elementor-icon-box-wrapper">
								<div class="elementor-icon-box-icon">
									<span class="elementor-icon elementor-animation-">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-university"
											viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M496 128v16a8 8 0 0 1-8 8h-24v12c0 6.627-5.373 12-12 12H60c-6.627 0-12-5.373-12-12v-12H24a8 8 0 0 1-8-8v-16a8 8 0 0 1 4.941-7.392l232-88a7.996 7.996 0 0 1 6.118 0l232 88A8 8 0 0 1 496 128zm-24 304H40c-13.255 0-24 10.745-24 24v16a8 8 0 0 0 8 8h464a8 8 0 0 0 8-8v-16c0-13.255-10.745-24-24-24zM96 192v192H60c-6.627 0-12 5.373-12 12v20h416v-20c0-6.627-5.373-12-12-12h-36V192h-64v192h-64V192h-64v192h-64V192H96z">
											</path>
										</svg> </span>
								</div>
								<div class="elementor-icon-box-content">
									<h3 class="elementor-icon-box-title">
										<span>
											Globally licensed </span>
									</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-d4cffe1 elementor-view-stacked elementor-position-left elementor-vertical-align-middle elementor-shape-circle elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
						data-id="d4cffe1" data-element_type="widget" data-widget_type="icon-box.default">
						<div class="elementor-widget-container">
							<div class="elementor-icon-box-wrapper">
								<div class="elementor-icon-box-icon">
									<span class="elementor-icon elementor-animation-">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-shield-alt"
											viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M466.5 83.7l-192-80a48.15 48.15 0 0 0-36.9 0l-192 80C27.7 91.1 16 108.6 16 128c0 198.5 114.5 335.7 221.5 380.3 11.8 4.9 25.1 4.9 36.9 0C360.1 472.6 496 349.3 496 128c0-19.4-11.7-36.9-29.5-44.3zM256.1 446.3l-.1-381 175.9 73.3c-3.3 151.4-82.1 261.1-175.8 307.7z">
											</path>
										</svg> </span>
								</div>
								<div class="elementor-icon-box-content">
									<h3 class="elementor-icon-box-title">
										<span>
											Fund security‏ </span>
									</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="elementor-element elementor-element-e1afec4 e-flex e-con-boxed e-con e-parent" data-id="e1afec4"
			data-element_type="container"
			data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;content_width&quot;:&quot;boxed&quot;}"
			data-core-v316-plus="true">
			<div class="e-con-inner">
				<div class="elementor-element elementor-element-dbaeb76 e-con-full e-flex e-con e-child"
					data-id="dbaeb76" data-element_type="container"
					data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
					<div class="elementor-element elementor-element-3cdd6ce elementor-widget__width-inherit elementor-widget-mobile__width-inherit elementor-widget elementor-widget-text-editor"
						data-id="3cdd6ce" data-element_type="widget" data-widget_type="text-editor.default">
						<div class="elementor-widget-container">
							<div class="uk-width-1-2@m uk-first-column">
								<div class="uk-width-1-2@m uk-text-center">
									<p class="uk-text-lead uk-margin-remove-bottom uk-text-center in-offset-top-10">
										Start trading with {{ get_settings('website_name')}}.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-b8759af elementor-widget elementor-widget-heading"
						data-id="b8759af" data-element_type="widget" data-widget_type="heading.default">
						<div class="elementor-widget-container">
							<h2 class="elementor-heading-title elementor-size-default">Fast account opening in 3 simple
								steps
							</h2>
						</div>
					</div>
					<div class="elementor-element elementor-element-c42bb70 e-flex e-con-boxed e-con e-child"
						data-id="c42bb70" data-element_type="container"
						data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
						<div class="e-con-inner">
							<div class="elementor-element elementor-element-5402339 elementor-view-stacked elementor-shape-circle elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
								data-id="5402339" data-element_type="widget" data-widget_type="icon-box.default">
								<div class="elementor-widget-container">
									<div class="elementor-icon-box-wrapper">
										<div class="elementor-icon-box-icon">
											<span class="elementor-icon elementor-animation-">
												<i aria-hidden="true" class="icofont icofont-ui-user"></i> </span>
										</div>
										<div class="elementor-icon-box-content">
											<h3 class="elementor-icon-box-title">
												<span>
													Register </span>
											</h3>
											<p class="elementor-icon-box-description">
												Choose an account type and submit your application </p>
										</div>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-7902a3c elementor-view-stacked elementor-shape-circle elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
								data-id="7902a3c" data-element_type="widget" data-widget_type="icon-box.default">
								<div class="elementor-widget-container">
									<div class="elementor-icon-box-wrapper">
										<div class="elementor-icon-box-icon">
											<span class="elementor-icon elementor-animation-">
												<i aria-hidden="true" class="icofont icofont-wallet"></i> </span>
										</div>
										<div class="elementor-icon-box-content">
											<h3 class="elementor-icon-box-title">
												<span>
													Fund </span>
											</h3>
											<p class="elementor-icon-box-description">
												Fund your account using a wide range of funding methods.

											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-8fed98e elementor-view-stacked elementor-shape-circle elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
								data-id="8fed98e" data-element_type="widget" data-widget_type="icon-box.default">
								<div class="elementor-widget-container">
									<div class="elementor-icon-box-wrapper">
										<div class="elementor-icon-box-icon">
											<span class="elementor-icon elementor-animation-">
												<i aria-hidden="true" class="icofont icofont-chart-arrows-axis"></i>
											</span>
										</div>
										<div class="elementor-icon-box-content">
											<h3 class="elementor-icon-box-title">
												<span>
													Trade </span>
											</h3>
											<p class="elementor-icon-box-description">
												Access 180+ instruments across all asset classes on App

											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="elementor-element elementor-element-0f72839 e-flex e-con-boxed e-con e-parent" data-id="0f72839"
			data-element_type="container"
			data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}"
			data-core-v316-plus="true">
			<div class="e-con-inner">
				<div class="elementor-element elementor-element-3e26db5 e-con-full e-flex e-con e-child"
					data-id="3e26db5" data-element_type="container"
					data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
					<div class="elementor-element elementor-element-11905cf elementor-widget elementor-widget-image"
						data-id="11905cf" data-element_type="widget" data-widget_type="image.default">
						<div class="elementor-widget-container">
							<img loading="lazy" decoding="async" width="498" height="314"
								src="wp-content/uploads/2024/03/in-profit-mockup-2.png"
								class="attachment-large size-large wp-image-72" alt=""
								srcset="wp-content/uploads/2024/03/in-profit-mockup-2.png 498w, wp-content/uploads/2024/03/in-profit-mockup-2-300x189.png 300w"
								sizes="(max-width: 498px) 100vw, 498px" />
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-14529b2 e-con-full e-flex e-con e-child"
					data-id="14529b2" data-element_type="container"
					data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
					<div class="elementor-element elementor-element-85fe5ed elementor-widget elementor-widget-heading"
						data-id="85fe5ed" data-element_type="widget" data-widget_type="heading.default">
						<div class="elementor-widget-container">
							<h2 class="elementor-heading-title elementor-size-default">Platform by traders,
								for traders</h2>
						</div>
					</div>
					<div class="elementor-element elementor-element-17a8a8d elementor-widget elementor-widget-text-editor"
						data-id="17a8a8d" data-element_type="widget" data-widget_type="text-editor.default">
						<div class="elementor-widget-container">
							<div class="uk-width-1-2@m uk-first-column">
								<p class="uk-text-lead">Seize your opportunity, with technology built designed to ensure
									that your deal goes through.</p>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-ea1f223 elementor-widget elementor-widget-image"
						data-id="ea1f223" data-element_type="widget" data-widget_type="image.default">
						<div class="elementor-widget-container">
							<img loading="lazy" decoding="async" width="417" height="80"
								src="wp-content/uploads/2024/03/Screenshot-2024-03-01-025239.png"
								class="attachment-large size-large wp-image-69" alt=""
								srcset="wp-content/uploads/2024/03/Screenshot-2024-03-01-025239.png 417w, wp-content/uploads/2024/03/Screenshot-2024-03-01-025239-300x58.png 300w"
								sizes="(max-width: 417px) 100vw, 417px" />
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="elementor-element elementor-element-e00a5ee e-flex e-con-boxed e-con e-parent" data-id="e00a5ee"
			data-element_type="container"
			data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}"
			data-core-v316-plus="true">
			<div class="e-con-inner">
				<div class="elementor-element elementor-element-89359a6 e-con-full e-flex e-con e-child"
					data-id="89359a6" data-element_type="container"
					data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
					<div class="elementor-element elementor-element-d285037 elementor-widget elementor-widget-heading"
						data-id="d285037" data-element_type="widget" data-widget_type="heading.default">
						<div class="elementor-widget-container">
							<h2 class="elementor-heading-title elementor-size-default">Why choose {{ get_settings('website_name')}}
							</h2>
						</div>
					</div>
					<div class="elementor-element elementor-element-d7a94d1 elementor-widget elementor-widget-text-editor"
						data-id="d7a94d1" data-element_type="widget" data-widget_type="text-editor.default">
						<div class="elementor-widget-container">
							<div class="uk-width-1-2@m uk-first-column">
								<div class="uk-width-1-2@m uk-first-column">
									<p class="uk-text-lead">We offer one-click trading experience with 3,000+
										world-renowned markets.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-76325ce e-con-full e-flex e-con e-child"
					data-id="76325ce" data-element_type="container"
					data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
					<div class="elementor-element elementor-element-de4168f e-flex e-con-boxed e-con e-child"
						data-id="de4168f" data-element_type="container"
						data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
						<div class="e-con-inner">
							<div class="elementor-element elementor-element-bd0641a elementor-widget elementor-widget-image"
								data-id="bd0641a" data-element_type="widget" data-widget_type="image.default">
								<div class="elementor-widget-container">
									<img loading="lazy" decoding="async" width="1" height="1"
										src="wp-content/uploads/2024/03/in-profit-icon-1.svg"
										class="attachment-large size-large wp-image-33" alt="" />
								</div>
							</div>
							<div class="elementor-element elementor-element-24c8b11 elementor-widget elementor-widget-heading"
								data-id="24c8b11" data-element_type="widget" data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h2 class="elementor-heading-title elementor-size-default">Wide range of instruments
									</h2>
								</div>
							</div>
							<div class="elementor-element elementor-element-b55a209 elementor-widget elementor-widget-text-editor"
								data-id="b55a209" data-element_type="widget" data-widget_type="text-editor.default">
								<div class="elementor-widget-container">
									<div class="uk-width-1-2@m uk-first-column">
										<div class="uk-width-1-2@m uk-first-column">
											<p class="uk-text-lead">A partner invested in your success. Trade with
												confidence and benefit from the reliability of a trusted broker with a
												proven record of stability, security and strength.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-9f2799d e-flex e-con-boxed e-con e-child"
						data-id="9f2799d" data-element_type="container"
						data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
						<div class="e-con-inner">
							<div class="elementor-element elementor-element-d0a154c elementor-widget elementor-widget-image"
								data-id="d0a154c" data-element_type="widget" data-widget_type="image.default">
								<div class="elementor-widget-container">
									<img loading="lazy" decoding="async" width="1" height="1"
										src="wp-content/uploads/2024/03/in-profit-icon-2.svg"
										class="attachment-large size-large wp-image-34" alt="" />
								</div>
							</div>
							<div class="elementor-element elementor-element-c35f411 elementor-widget elementor-widget-heading"
								data-id="c35f411" data-element_type="widget" data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h2 class="elementor-heading-title elementor-size-default">Unparalleled market
										conditions</h2>
								</div>
							</div>
							<div class="elementor-element elementor-element-eaa0d9f elementor-widget elementor-widget-text-editor"
								data-id="eaa0d9f" data-element_type="widget" data-widget_type="text-editor.default">
								<div class="elementor-widget-container">
									<div class="uk-width-1-2@m uk-first-column">
										<div class="uk-width-1-2@m uk-first-column">
											<div class="uk-width-1-2@s uk-width-1-3@m">
												<p>Trade and invest confidently in top performing Cryptocurrencies with
													our timely Trading signals that ensure your profitability from day
													one.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-822f6a1 e-flex e-con-boxed e-con e-child"
						data-id="822f6a1" data-element_type="container"
						data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
						<div class="e-con-inner">
							<div class="elementor-element elementor-element-fcd5103 elementor-widget elementor-widget-image"
								data-id="fcd5103" data-element_type="widget" data-widget_type="image.default">
								<div class="elementor-widget-container">
									<img loading="lazy" decoding="async" width="1" height="1"
										src="wp-content/uploads/2024/03/in-profit-icon-3.svg"
										class="attachment-large size-large wp-image-35" alt="" />
								</div>
							</div>
							<div class="elementor-element elementor-element-c9c3416 elementor-widget elementor-widget-heading"
								data-id="c9c3416" data-element_type="widget" data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h2 class="elementor-heading-title elementor-size-default">Globally licensed &
										regulated</h2>
								</div>
							</div>
							<div class="elementor-element elementor-element-48b164f elementor-widget elementor-widget-text-editor"
								data-id="48b164f" data-element_type="widget" data-widget_type="text-editor.default">
								<div class="elementor-widget-container">
									<div class="uk-width-1-2@m uk-first-column">
										<div class="uk-width-1-2@m uk-first-column">
											<div class="uk-width-1-2@s uk-width-1-3@m">
												<p>Goverments issue regulations related to environmental practices,
													employee practices, advertising practices, and much more.
													Furthermore, goverment regulations affect how companies structure
													their businesses, where companies decide to locate, how they
													classify their employees, and thousand of other things.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-14b45cf e-con-full e-flex e-con e-child"
					data-id="14b45cf" data-element_type="container"
					data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
					<div class="elementor-element elementor-element-02c2822 e-flex e-con-boxed e-con e-child"
						data-id="02c2822" data-element_type="container"
						data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
						<div class="e-con-inner">
							<div class="elementor-element elementor-element-589d989 elementor-widget elementor-widget-image"
								data-id="589d989" data-element_type="widget" data-widget_type="image.default">
								<div class="elementor-widget-container">
									<img loading="lazy" decoding="async" width="1" height="1"
										src="wp-content/uploads/2024/03/in-profit-icon-4.svg"
										class="attachment-large size-large wp-image-36" alt="" />
								</div>
							</div>
							<div class="elementor-element elementor-element-ddd9030 elementor-widget elementor-widget-heading"
								data-id="ddd9030" data-element_type="widget" data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h2 class="elementor-heading-title elementor-size-default">Committed to forex
										education</h2>
								</div>
							</div>
							<div class="elementor-element elementor-element-353c816 elementor-widget elementor-widget-text-editor"
								data-id="353c816" data-element_type="widget" data-widget_type="text-editor.default">
								<div class="elementor-widget-container">
									<div class="uk-width-1-2@m uk-first-column">
										<div class="uk-width-1-2@m uk-first-column">
											<div class="uk-width-1-2@s uk-width-1-3@m uk-grid-margin uk-first-column">
												<p>Our Signals are sent via Telegram which is a Free App to download and
													takes 30 seconds to setup! once you select your signals package you
													will get an instant welcome message via Whatsapp with the link to
													join the group.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-8c5a8ec e-flex e-con-boxed e-con e-child"
						data-id="8c5a8ec" data-element_type="container"
						data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
						<div class="e-con-inner">
							<div class="elementor-element elementor-element-a005ac3 elementor-widget elementor-widget-image"
								data-id="a005ac3" data-element_type="widget" data-widget_type="image.default">
								<div class="elementor-widget-container">
									<img loading="lazy" decoding="async" width="1" height="1"
										src="wp-content/uploads/2024/03/in-profit-icon-5.svg"
										class="attachment-large size-large wp-image-37" alt="" />
								</div>
							</div>
							<div class="elementor-element elementor-element-fc0179a elementor-widget elementor-widget-heading"
								data-id="fc0179a" data-element_type="widget" data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h2 class="elementor-heading-title elementor-size-default">Regular contests &
										promotions</h2>
								</div>
							</div>
							<div class="elementor-element elementor-element-daa5cd0 elementor-widget elementor-widget-text-editor"
								data-id="daa5cd0" data-element_type="widget" data-widget_type="text-editor.default">
								<div class="elementor-widget-container">
									<div class="uk-width-1-2@m uk-first-column">
										<div class="uk-width-1-2@m uk-first-column">
											<div class="uk-width-1-2@s uk-width-1-3@m">
												<div class="uk-section uk-padding-large in-padding-large-vertical@s in-profit-10 aos-init aos-animate"
													data-aos="zoom-in" data-aos-duration="1500">
													<div class="uk-container uk-background-contain uk-background-bottom-right"
														data-src="img/in-profit-mockup-2.png" data-uk-img="">
														<div class="uk-grid-large uk-grid" data-uk-grid="">
															<div class="uk-width-1-2@s uk-width-1-3@m uk-grid-margin">
																<p>We pride ourselves on giving the very best signals
																	each and everyday. We not only provide high
																	probability forex trades but we also provide Gold,
																	Crypto, Index, Stock Signals.</p>
															</div>
														</div>
													</div>
												</div>
												<div class="uk-section uk-section-secondary uk-padding-large in-padding-large-vertical@s uk-background-contain uk-background-bottom-center in-profit-11 aos-init"
													data-src="img/in-section-profit-11.png" data-aos="zoom-in"
													data-aos-duration="1500" data-uk-img="">
													<div class="uk-container">
														<div class="uk-grid uk-flex uk-flex-center">
															<div class="uk-width-5-6@m">
																<div class="uk-grid" data-uk-grid=""> </div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-cd1397d e-flex e-con-boxed e-con e-child"
						data-id="cd1397d" data-element_type="container"
						data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
						<div class="e-con-inner">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="elementor-element elementor-element-07f93b8 e-flex e-con-boxed e-con e-parent" data-id="07f93b8"
			data-element_type="container"
			data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}"
			data-core-v316-plus="true">
			<div class="e-con-inner">
				<div class="elementor-element elementor-element-588bda1 e-con-full e-flex e-con e-child"
					data-id="588bda1" data-element_type="container"
					data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
					<div class="elementor-element elementor-element-9b2f82d elementor-widget elementor-widget-heading"
						data-id="9b2f82d" data-element_type="widget" data-widget_type="heading.default">
						<div class="elementor-widget-container">
							<h2 class="elementor-heading-title elementor-size-default">Announcing</h2>
						</div>
					</div>
					<div class="elementor-element elementor-element-b2d543d elementor-widget elementor-widget-heading"
						data-id="b2d543d" data-element_type="widget" data-widget_type="heading.default">
						<div class="elementor-widget-container">
							<h2 class="elementor-heading-title elementor-size-default"><span
									style="font-size:3rem">$4.95</span> online stocks, currencies & commodities trades
							</h2>
						</div>
					</div>
					<div class="elementor-element elementor-element-42ff9f5 elementor-widget elementor-widget-text-editor"
						data-id="42ff9f5" data-element_type="widget" data-widget_type="text-editor.default">
						<div class="elementor-widget-container">
							<div class="uk-width-1-2@m uk-first-column">
								<div class="uk-width-1-2@m uk-first-column">
									<p class="uk-text-lead">Stock Comissions from €3 on US stocks Access 19,000+ stocks
										across core and emerging markets on 36 exchanges worldwide.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-d29078d elementor-widget elementor-widget-button"
						data-id="d29078d" data-element_type="widget" data-widget_type="button.default">
						<div class="elementor-widget-container">
							<div class="elementor-button-wrapper">
								<a class="elementor-button elementor-button-link elementor-size-sm"
									href="{{ url('register')}}">
									<span class="elementor-button-content-wrapper">
										<span class="elementor-button-text">Get Started</span>
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-0d98f76 e-con-full e-flex e-con e-child"
					data-id="0d98f76" data-element_type="container"
					data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="elementor-element elementor-element-1cc29e9 elementor-widget elementor-widget-heading"
						data-id="1cc29e9" data-element_type="widget" data-widget_type="heading.default">
						<div class="elementor-widget-container">
							<h2 class="elementor-heading-title elementor-size-default">New to investing? Start here.
							</h2>
						</div>
					</div>
					<div class="elementor-element elementor-element-dcf87da elementor-align-center elementor-widget elementor-widget-button"
						data-id="dcf87da" data-element_type="widget" data-widget_type="button.default">
						<div class="elementor-widget-container">
							<div class="elementor-button-wrapper">
								<a class="elementor-button elementor-button-link elementor-size-sm"
									href="{{ url('register')}}">
									<span class="elementor-button-content-wrapper">
										<span class="elementor-button-text">Create an Account</span>
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="elementor-element elementor-element-efa36d4 e-flex e-con-boxed e-con e-parent" data-id="efa36d4"
			data-element_type="container"
			data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}"
			data-core-v316-plus="true">
			<div class="e-con-inner">
				<div class="elementor-element elementor-element-f290c74 e-con-full e-flex e-con e-child"
					data-id="f290c74" data-element_type="container"
					data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
					<div class="elementor-element elementor-element-d3dcfc7 elementor-widget elementor-widget-html"
						data-id="d3dcfc7" data-element_type="widget" data-widget_type="html.default">
						<div class="elementor-widget-container">
							<!-- TradingView Widget BEGIN -->
							<div class="tradingview-widget-container">
								<div class="tradingview-widget-container__widget"></div>
								<script type="text/javascript"
									src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js"
									async>
										{
											"width": "100%",
												"height": 450,
													"symbolsGroups": [
														{
															"name": "Indices",
															"originalName": "Indices",
															"symbols": [
																{
																	"name": "FOREXCOM:SPXUSD",
																	"displayName": "S&P 500 Index"
																},
																{
																	"name": "FOREXCOM:NSXUSD",
																	"displayName": "US 100 Cash CFD"
																},
																{
																	"name": "FOREXCOM:DJI",
																	"displayName": "Dow Jones Industrial Average Index"
																},
																{
																	"name": "INDEX:NKY",
																	"displayName": "Nikkei 225"
																},
																{
																	"name": "INDEX:DEU40",
																	"displayName": "DAX Index"
																},
																{
																	"name": "FOREXCOM:UKXGBP",
																	"displayName": "FTSE 100 Index"
																}
															]
														},
														{
															"name": "Futures",
															"originalName": "Futures",
															"symbols": [
																{
																	"name": "CME_MINI:ES1!",
																	"displayName": "S&P 500"
																},
																{
																	"name": "CME:6E1!",
																	"displayName": "Euro"
																},
																{
																	"name": "COMEX:GC1!",
																	"displayName": "Gold"
																},
																{
																	"name": "NYMEX:CL1!",
																	"displayName": "WTI Crude Oil"
																},
																{
																	"name": "NYMEX:NG1!",
																	"displayName": "Gas"
																},
																{
																	"name": "CBOT:ZC1!",
																	"displayName": "Corn"
																}
															]
														},
														{
															"name": "Bonds",
															"originalName": "Bonds",
															"symbols": [
																{
																	"name": "CBOT:ZB1!",
																	"displayName": "T-Bond"
																},
																{
																	"name": "CBOT:UB1!",
																	"displayName": "Ultra T-Bond"
																},
																{
																	"name": "EUREX:FGBL1!",
																	"displayName": "Euro Bund"
																},
																{
																	"name": "EUREX:FBTP1!",
																	"displayName": "Euro BTP"
																},
																{
																	"name": "EUREX:FGBM1!",
																	"displayName": "Euro BOBL"
																}
															]
														},
														{
															"name": "Forex",
															"originalName": "Forex",
															"symbols": [
																{
																	"name": "FX:EURUSD",
																	"displayName": "EUR to USD"
																},
																{
																	"name": "FX:GBPUSD",
																	"displayName": "GBP to USD"
																},
																{
																	"name": "FX:USDJPY",
																	"displayName": "USD to JPY"
																},
																{
																	"name": "FX:USDCHF",
																	"displayName": "USD to CHF"
																},
																{
																	"name": "FX:AUDUSD",
																	"displayName": "AUD to USD"
																},
																{
																	"name": "FX:USDCAD",
																	"displayName": "USD to CAD"
																}
															]
														}
													],
														"showSymbolLogo": true,
															"isTransparent": false,
																"colorTheme": "dark",
																	"locale": "en",
																		"backgroundColor": "#131722"
										}
									</script>
							</div>
							<!-- TradingView Widget END -->
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-a0559e1 e-con-full e-flex e-con e-child"
					data-id="a0559e1" data-element_type="container"
					data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
					<div class="elementor-element elementor-element-d3a3365 elementor-widget elementor-widget-heading"
						data-id="d3a3365" data-element_type="widget" data-widget_type="heading.default">
						<div class="elementor-widget-container">
							<h2 class="elementor-heading-title elementor-size-default">Live Fx & Spot Metal Quotes</h2>
						</div>
					</div>
					<div class="elementor-element elementor-element-48670c7 elementor-widget elementor-widget-text-editor"
						data-id="48670c7" data-element_type="widget" data-widget_type="text-editor.default">
						<div class="elementor-widget-container">
							<div class="uk-width-1-2@m uk-first-column">
								<p class="uk-text-lead">Trade 180 FX spot pairs and 140 forwards across majors, minors,
									exotics and metals.</p>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-0ca5033 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
						data-id="0ca5033" data-element_type="widget" data-widget_type="icon-list.default">
						<div class="elementor-widget-container">
							<ul class="elementor-icon-list-items">
								<li class="elementor-icon-list-item">
									<span class="elementor-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check"
											viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
											</path>
										</svg> </span>
									<span class="elementor-icon-list-text">Ultra-competitive pricing</span>
								</li>
								<li class="elementor-icon-list-item">
									<span class="elementor-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check"
											viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
											</path>
										</svg> </span>
									<span class="elementor-icon-list-text">Trading flexibility</span>
								</li>
								<li class="elementor-icon-list-item">
									<span class="elementor-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check"
											viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
											</path>
										</svg> </span>
									<span class="elementor-icon-list-text">Award-winning platform</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="elementor-element elementor-element-b0a83b6 elementor-widget elementor-widget-heading"
						data-id="b0a83b6" data-element_type="widget" data-widget_type="heading.default">
						<div class="elementor-widget-container">
							<h2 class="elementor-heading-title elementor-size-default">Trade wherever you are, whenever
								you want.
							</h2>
						</div>
					</div>
					<div class="elementor-element elementor-element-3157775 elementor-widget elementor-widget-image"
						data-id="3157775" data-element_type="widget" data-widget_type="image.default">
						<div class="elementor-widget-container">
							<img loading="lazy" decoding="async" width="417" height="80"
								src="wp-content/uploads/2024/03/Screenshot-2024-03-01-025239.png"
								class="attachment-large size-large wp-image-69" alt=""
								srcset="wp-content/uploads/2024/03/Screenshot-2024-03-01-025239.png 417w, wp-content/uploads/2024/03/Screenshot-2024-03-01-025239-300x58.png 300w"
								sizes="(max-width: 417px) 100vw, 417px" />
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="elementor-element elementor-element-dd4e659 e-flex e-con-boxed e-con e-parent" data-id="dd4e659"
			data-element_type="container"
			data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}"
			data-core-v316-plus="true">
			<div class="e-con-inner">
				<div class="elementor-element elementor-element-0455abc e-con-full e-flex e-con e-child"
					data-id="0455abc" data-element_type="container"
					data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
					<div class="elementor-element elementor-element-77d6395 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-text-editor"
						data-id="77d6395" data-element_type="widget" data-widget_type="text-editor.default">
						<div class="elementor-widget-container">
							<div class="uk-width-1-2@m uk-first-column">
								<div class="uk-width-1-2@m uk-text-center">
									<p class="uk-text-lead">Customer Testimonials</p>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-ba1e7f9 elementor-widget elementor-widget-heading"
						data-id="ba1e7f9" data-element_type="widget" data-widget_type="heading.default">
						<div class="elementor-widget-container">
							<h2 class="elementor-heading-title elementor-size-default">Reviews from some of our
								investors</h2>
						</div>
					</div>
					<div class="elementor-element elementor-element-1b1de1a elementor-view-default elementor-widget elementor-widget-icon"
						data-id="1b1de1a" data-element_type="widget" data-widget_type="icon.default">
						<div class="elementor-widget-container">
							<div class="elementor-icon-wrapper">
								<div class="elementor-icon">
									<i aria-hidden="true" class="mdi mdi-chevron-down"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="elementor-element elementor-element-3a6492d e-flex e-con-boxed e-con e-parent" data-id="3a6492d"
			data-element_type="container"
			data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}"
			data-core-v316-plus="true">
			<div class="e-con-inner">
				<div class="elementor-element elementor-element-3593e04 e-con-full e-flex e-con e-child"
					data-id="3593e04" data-element_type="container"
					data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
					<div class="elementor-element elementor-element-af72386 elementor-widget elementor-widget-testimonial"
						data-id="af72386" data-element_type="widget" data-widget_type="testimonial.default">
						<div class="elementor-widget-container">
							<style>
								/*! elementor - v3.19.0 - 28-02-2024 */
								.elementor-testimonial-wrapper {
									overflow: hidden;
									text-align: center
								}

								.elementor-testimonial-wrapper .elementor-testimonial-content {
									font-size: 1.3em;
									margin-bottom: 20px
								}

								.elementor-testimonial-wrapper .elementor-testimonial-name {
									line-height: 1.5;
									display: block
								}

								.elementor-testimonial-wrapper .elementor-testimonial-job {
									font-size: .85em;
									display: block
								}

								.elementor-testimonial-wrapper .elementor-testimonial-meta {
									width: 100%;
									line-height: 1
								}

								.elementor-testimonial-wrapper .elementor-testimonial-meta-inner {
									display: inline-block
								}

								.elementor-testimonial-wrapper .elementor-testimonial-meta .elementor-testimonial-details,
								.elementor-testimonial-wrapper .elementor-testimonial-meta .elementor-testimonial-image {
									display: table-cell;
									vertical-align: middle
								}

								.elementor-testimonial-wrapper .elementor-testimonial-meta .elementor-testimonial-image img {
									width: 60px;
									height: 60px;
									border-radius: 50%;
									-o-object-fit: cover;
									object-fit: cover;
									max-width: none
								}

								.elementor-testimonial-wrapper .elementor-testimonial-meta.elementor-testimonial-image-position-aside .elementor-testimonial-image {
									padding-right: 15px
								}

								.elementor-testimonial-wrapper .elementor-testimonial-meta.elementor-testimonial-image-position-aside .elementor-testimonial-details {
									text-align: left
								}

								.elementor-testimonial-wrapper .elementor-testimonial-meta.elementor-testimonial-image-position-top .elementor-testimonial-details,
								.elementor-testimonial-wrapper .elementor-testimonial-meta.elementor-testimonial-image-position-top .elementor-testimonial-image {
									display: block
								}

								.elementor-testimonial-wrapper .elementor-testimonial-meta.elementor-testimonial-image-position-top .elementor-testimonial-image {
									margin-bottom: 20px
								}
							</style>
							<div class="elementor-testimonial-wrapper">
								<div class="elementor-testimonial-content">I'm Hunter Hamilton from North Carolina,
									Currently living in Arizona with my Family, i came across {{ get_settings('website_name')}}, while
									browsing through facebook, I accessed the site and contact them via whatsapp and i
									started investing with $5000 and am making $51,560.00 Weekly.💵💵</div>

								<div
									class="elementor-testimonial-meta elementor-has-image elementor-testimonial-image-position-aside">
									<div class="elementor-testimonial-meta-inner">
										<div class="elementor-testimonial-image">
											<img loading="lazy" decoding="async" width="750" height="762"
												src="wp-content/uploads/2024/03/testimony_4888a96e03bd608a5c860d2add5c8d9e.jpg"
												class="attachment-full size-full wp-image-84" alt=""
												srcset="wp-content/uploads/2024/03/testimony_4888a96e03bd608a5c860d2add5c8d9e.jpg 750w, wp-content/uploads/2024/03/testimony_4888a96e03bd608a5c860d2add5c8d9e-295x300.jpg 295w"
												sizes="(max-width: 750px) 100vw, 750px" />
										</div>

										<div class="elementor-testimonial-details">
											<div class="elementor-testimonial-name">Hunter Hamilton</div>
											<div class="elementor-testimonial-job">UNITED STATES</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-e58fa98 elementor-widget elementor-widget-testimonial"
						data-id="e58fa98" data-element_type="widget" data-widget_type="testimonial.default">
						<div class="elementor-widget-container">
							<div class="elementor-testimonial-wrapper">
								<div class="elementor-testimonial-content">Hello everyone I'm Charlotte from South
									Africa 🇿🇦 It is very easy to make investments on this platform. They have
									different payment methods that are secured and easy to use. I have also earned more
									from my account upgrade with amazing new features added to it thank you all so much
									❤️.</div>

								<div
									class="elementor-testimonial-meta elementor-has-image elementor-testimonial-image-position-aside">
									<div class="elementor-testimonial-meta-inner">
										<div class="elementor-testimonial-image">
											<img loading="lazy" decoding="async" width="720" height="720"
												src="wp-content/uploads/2024/03/testimony_29be3e8e619aa7989c3f78415b4b215f.jpg"
												class="attachment-full size-full wp-image-85" alt=""
												srcset="wp-content/uploads/2024/03/testimony_29be3e8e619aa7989c3f78415b4b215f.jpg 720w, wp-content/uploads/2024/03/testimony_29be3e8e619aa7989c3f78415b4b215f-300x300.jpg 300w, wp-content/uploads/2024/03/testimony_29be3e8e619aa7989c3f78415b4b215f-150x150.jpg 150w"
												sizes="(max-width: 720px) 100vw, 720px" />
										</div>

										<div class="elementor-testimonial-details">
											<div class="elementor-testimonial-name">Charlotte</div>
											<div class="elementor-testimonial-job">SOUTH AFRICA</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-160f655 e-con-full e-flex e-con e-child"
					data-id="160f655" data-element_type="container"
					data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
					<div class="elementor-element elementor-element-ec7f0d4 elementor-widget elementor-widget-testimonial"
						data-id="ec7f0d4" data-element_type="widget" data-widget_type="testimonial.default">
						<div class="elementor-widget-container">
							<div class="elementor-testimonial-wrapper">
								<div class="elementor-testimonial-content">Blessings be unto you and your company
									{{ get_settings('website_name')}}, you're such a big comfort and a big help to me regarding
									bitcoin investment , God bless you for using your skills of trading to bless us the
									Philippines🇵🇭 because we normally have a low economy 💖 thanks once again and i
									will do tell my friends to join the winning team.</div>

								<div
									class="elementor-testimonial-meta elementor-has-image elementor-testimonial-image-position-aside">
									<div class="elementor-testimonial-meta-inner">
										<div class="elementor-testimonial-image">
											<img loading="lazy" decoding="async" width="554" height="554"
												src="wp-content/uploads/2024/03/testimony_a7829d2fd6fae692623e74d538369a69.jpg"
												class="attachment-full size-full wp-image-86" alt=""
												srcset="wp-content/uploads/2024/03/testimony_a7829d2fd6fae692623e74d538369a69.jpg 554w, wp-content/uploads/2024/03/testimony_a7829d2fd6fae692623e74d538369a69-300x300.jpg 300w, wp-content/uploads/2024/03/testimony_a7829d2fd6fae692623e74d538369a69-150x150.jpg 150w"
												sizes="(max-width: 554px) 100vw, 554px" />
										</div>

										<div class="elementor-testimonial-details">
											<div class="elementor-testimonial-name">Lauren Nicholson</div>
											<div class="elementor-testimonial-job">PHILIPPINES</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-347e6d9 elementor-widget elementor-widget-testimonial"
						data-id="347e6d9" data-element_type="widget" data-widget_type="testimonial.default">
						<div class="elementor-widget-container">
							<div class="elementor-testimonial-wrapper">
								<div class="elementor-testimonial-content">Hi {{ get_settings('website_name')}} . I'm just writing to
									say thank you!! {{ get_settings('website_name')}} is in my blood now. I finally found my life! I
									want to say a big thank you to {{ get_settings('website_name')}} , Just got my profit of $7500 in
									my Bank account. This is indeed a trust worthy platform to invest.</div>

								<div
									class="elementor-testimonial-meta elementor-has-image elementor-testimonial-image-position-aside">
									<div class="elementor-testimonial-meta-inner">
										<div class="elementor-testimonial-image">
											<img loading="lazy" decoding="async" width="720" height="724"
												src="wp-content/uploads/2024/03/testimony_9381b5c720fe40fba64075dc5510f734.jpg"
												class="attachment-full size-full wp-image-87" alt=""
												srcset="wp-content/uploads/2024/03/testimony_9381b5c720fe40fba64075dc5510f734.jpg 720w, wp-content/uploads/2024/03/testimony_9381b5c720fe40fba64075dc5510f734-298x300.jpg 298w, wp-content/uploads/2024/03/testimony_9381b5c720fe40fba64075dc5510f734-150x150.jpg 150w"
												sizes="(max-width: 720px) 100vw, 720px" />
										</div>

										<div class="elementor-testimonial-details">
											<div class="elementor-testimonial-name">Christopher Pagao</div>
											<div class="elementor-testimonial-job">UNITED STATES</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div data-elementor-type="footer" data-elementor-id="119" class="elementor elementor-119 elementor-location-footer"
		data-elementor-post-type="elementor_library">
		<div class="elementor-element elementor-element-0e71202 e-flex e-con-boxed e-con e-parent" data-id="0e71202"
			data-element_type="container"
			data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}"
			data-core-v316-plus="true">
			<div class="e-con-inner">
				<div class="elementor-element elementor-element-27da268 e-con-full e-flex e-con e-child"
					data-id="27da268" data-element_type="container"
					data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
					<div class="elementor-element elementor-element-345284d elementor-widget elementor-widget-image"
						data-id="345284d" data-element_type="widget" data-widget_type="image.default">
						<div class="elementor-widget-container">
							<img fetchpriority="high" width="466" height="117"
								src="{{ image_url(get_settings('site_logo')) }}"
								class="attachment-large size-large wp-image-200" alt=""
								srcset="{{ image_url(get_settings('site_logo')) }} 466w, wp-content/uploads/2024/03/Asset-2925capitaleasyfinance-300x75.png 300w"
								sizes="(max-width: 466px) 100vw, 466px" />


						</div>
					</div>
				</div>

				<div class="elementor-element elementor-element-e0fafb9 e-con-full e-flex e-con e-child"
					data-id="e0fafb9" data-element_type="container"
					data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
					<div class="elementor-element elementor-element-2e4af1d elementor-widget elementor-widget-heading"
						data-id="2e4af1d" data-element_type="widget" data-widget_type="heading.default">
						<div class="elementor-widget-container">
							<h2 class="elementor-heading-title elementor-size-default">Company</h2>
						</div>
					</div>
					<div class="elementor-element elementor-element-6132915 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
						data-id="6132915" data-element_type="widget" data-widget_type="icon-list.default">
						<div class="elementor-widget-container">
							<ul class="elementor-icon-list-items">
								<li class="elementor-icon-list-item">
									<a href="index.html">

										<span class="elementor-icon-list-text">Home</span>
									</a>
								</li>
								<li class="elementor-icon-list-item">
									<a href="/about-us">

										<span class="elementor-icon-list-text">About Us</span>
									</a>
								</li>
								<li class="elementor-icon-list-item">
									<a href="/contact-us">

										<span class="elementor-icon-list-text">Contact</span>
									</a>
								</li>
								<li class="elementor-icon-list-item">
									<a href="/faq">

										<span class="elementor-icon-list-text">FAQ</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="elementor-element elementor-element-6c22ec4 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
						data-id="6c22ec4" data-element_type="widget" data-widget_type="icon-list.default">
						<div class="elementor-widget-container">
							<ul class="elementor-icon-list-items">
								<li class="elementor-icon-list-item">
									<a href="mailto:{{ get_settings('official_email')}}">

										<span class="elementor-icon-list-icon">
											<svg aria-hidden="true" class="e-font-icon-svg e-fas-envelope"
												viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
												<path
													d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
												</path>
											</svg> </span>
										<span class="elementor-icon-list-text">{{ get_settings('official_email')}}</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-cd6d138 e-con-full e-flex e-con e-child"
					data-id="cd6d138" data-element_type="container"
					data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
					<div class="elementor-element elementor-element-daf6daf elementor-widget elementor-widget-heading"
						data-id="daf6daf" data-element_type="widget" data-widget_type="heading.default">
						<div class="elementor-widget-container">
							<h2 class="elementor-heading-title elementor-size-default">Legal</h2>
						</div>
					</div>
					<div class="elementor-element elementor-element-b3f8a74 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
						data-id="b3f8a74" data-element_type="widget" data-widget_type="icon-list.default">
						<div class="elementor-widget-container">
							<ul class="elementor-icon-list-items">
								<li class="elementor-icon-list-item">
									<a href="/terms-and-conditions">

										<span class="elementor-icon-list-text">Terms & Conditions</span>
									</a>
								</li>
								<li class="elementor-icon-list-item">
									<a href="/privacy-policy">

										<span class="elementor-icon-list-text">Privacy Policy</span>
									</a>
								</li>
								<li class="elementor-icon-list-item">
									<a
										href="#elementor-action%3Aaction%3Dpopup%3Aopen%26settings%3DeyJpZCI6IjIwOSIsInRvZ2dsZSI6ZmFsc2V9">

										<span class="elementor-icon-list-text">Company Certificate</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="elementor-element elementor-element-9012b8a e-flex e-con-boxed e-con e-parent" data-id="9012b8a"
			data-element_type="container"
			data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}"
			data-core-v316-plus="true">
			<div class="e-con-inner">
				<div class="elementor-element elementor-element-919767d e-con-full e-flex e-con e-child"
					data-id="919767d" data-element_type="container"
					data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
					<div class="elementor-element elementor-element-a30a254 elementor-widget elementor-widget-text-editor"
						data-id="a30a254" data-element_type="widget" data-widget_type="text-editor.default">
						<div class="elementor-widget-container">
							<div class="uk-width-1-2@m uk-first-column">
								<div class="uk-width-1-2@m uk-first-column">
									<div class="uk-width-1-2@s uk-width-1-3@m uk-grid-margin uk-first-column">
										<div class="uk-width-5-6@m uk-margin-bottom uk-first-column">
											<div class="in-footer-warning in-margin-top-20@s">
												<p class="uk-text-small">Trading derivatives and leveraged products
													carries a high level of risk, including the risk of losing
													substantially more than your initial investment. It is not suitable
													for everyone. Before you make any decision in relation to a
													financial product you should obtain and consider our Product
													Disclosure Statement (PDS) and Financial Services Guide (FSG)
													available on our website and seek independent advice if necessary.
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="elementor-element elementor-element-e608dec e-flex e-con-boxed e-con e-parent" data-id="e608dec"
			data-element_type="container"
			data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}"
			data-core-v316-plus="true">
			<div class="e-con-inner">
				<div class="elementor-element elementor-element-afbf78d e-con-full e-flex e-con e-child"
					data-id="afbf78d" data-element_type="container"
					data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
					<div class="elementor-element elementor-element-0c5a288 elementor-widget elementor-widget-text-editor"
						data-id="0c5a288" data-element_type="widget" data-widget_type="text-editor.default">
						<div class="elementor-widget-container">
							<div class="uk-width-1-2@m uk-first-column">
								<div class="uk-width-1-2@m uk-first-column">
									<p class="uk-text-lead">© <span style="font-weight: 400;">{{ get_settings('website_name')}}</span>. All rights reserved.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="gtranslate_wrapper" id="gt-wrapper-30536672"></div>

	<div data-elementor-type="popup" data-elementor-id="209" class="elementor elementor-209 elementor-location-popup"
		data-elementor-settings="{&quot;entrance_animation&quot;:&quot;zoomIn&quot;,&quot;exit_animation&quot;:&quot;zoomIn&quot;,&quot;entrance_animation_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.5,&quot;sizes&quot;:[]},&quot;a11y_navigation&quot;:&quot;yes&quot;,&quot;timing&quot;:[]}"
		data-elementor-post-type="elementor_library">
		<div class="elementor-element elementor-element-4e6ee09 e-flex e-con-boxed e-con e-parent" data-id="4e6ee09"
			data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
			data-core-v316-plus="true">
			<div class="e-con-inner">
				<div class="elementor-element elementor-element-32fa226 elementor-widget elementor-widget-image"
					data-id="32fa226" data-element_type="widget" data-widget_type="image.default">
					<div class="elementor-widget-container">
						<img loading="lazy" width="800" height="618"
							src="wp-content/uploads/2024/05/Asset-474capitaleasyfinance-1024x791.png"
							class="attachment-large size-large wp-image-210" alt=""
							srcset="wp-content/uploads/2024/05/Asset-474capitaleasyfinance-1024x791.png 1024w, wp-content/uploads/2024/05/Asset-474capitaleasyfinance-300x232.png 300w, wp-content/uploads/2024/05/Asset-474capitaleasyfinance-768x594.png 768w, wp-content/uploads/2024/05/Asset-474capitaleasyfinance.png 1268w"
							sizes="(max-width: 800px) 100vw, 800px" />
					</div>
				</div>
			</div>
		</div>
	</div>
	<div data-elementor-type="popup" data-elementor-id="187" class="elementor elementor-187 elementor-location-popup"
		data-elementor-settings="{&quot;entrance_animation&quot;:&quot;zoomIn&quot;,&quot;exit_animation&quot;:&quot;zoomIn&quot;,&quot;entrance_animation_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.5,&quot;sizes&quot;:[]},&quot;a11y_navigation&quot;:&quot;yes&quot;,&quot;triggers&quot;:{&quot;page_load_delay&quot;:3,&quot;page_load&quot;:&quot;yes&quot;},&quot;timing&quot;:[]}"
		data-elementor-post-type="elementor_library">
		<div class="elementor-element elementor-element-f1edc0a e-flex e-con-boxed e-con e-parent" data-id="f1edc0a"
			data-element_type="container"
			data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}"
			data-core-v316-plus="true">
			<div class="e-con-inner">
				<div class="elementor-element elementor-element-3c21d74 elementor-widget elementor-widget-text-editor"
					data-id="3c21d74" data-element_type="widget" data-widget_type="text-editor.default">
					<div class="elementor-widget-container">
						<p>Notice: All trades placed and investments are 100% secured so traders should be 100%
							confident as there will be always success in trade.</p>
					</div>
				</div>
				<div class="elementor-element elementor-element-28cbbe2 elementor-widget elementor-widget-button"
					data-id="28cbbe2" data-element_type="widget" data-widget_type="button.default">
					<div class="elementor-widget-container">
						<div class="elementor-button-wrapper">
							<a class="elementor-button elementor-button-link elementor-size-xs"
								href="#elementor-action%3Aaction%3Dpopup%3Aclose%26settings%3DeyJkb19ub3Rfc2hvd19hZ2FpbiI6IiJ9">
								<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Close</span>
								</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<link rel='stylesheet' id='elementor-post-209-css'
		href='wp-content/uploads/elementor/css/post-209.css@ver=1715774152.css' media='all' />
	<link rel='stylesheet' id='e-animations-css'
		href='wp-content/plugins/elementor/assets/lib/animations/animations.min.css@ver=3.19.4.css' media='all' />
	<script src="wp-content/themes/hello-elementor/assets/js/hello-frontend.min.js@ver=3.0.1"
		id="hello-theme-frontend-js"></script>
	<script src="wp-content/plugins/loftloader/assets/js/loftloader.min.js@ver=2022112601"
		id="loftloader-lite-front-main-js"></script>
	<script src="wp-includes/js/jquery/jquery.min.js@ver=3.7.1" id="jquery-core-js"></script>
	<script src="wp-includes/js/jquery/jquery-migrate.min.js@ver=3.4.1" id="jquery-migrate-js"></script>
	<script src="wp-content/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.min.js@ver=1.2.1"
		id="smartmenus-js"></script>
	<script id="gt_widget_script_30536672-js-before">
		window.gtranslateSettings = /* document.write */ window.gtranslateSettings || {}; window.gtranslateSettings['30536672'] = { "default_language": "en", "languages": ["af", "sq", "am", "ar", "hy", "az", "eu", "be", "bn", "bs", "bg", "ca", "ceb", "ny", "zh-CN", "zh-TW", "co", "hr", "cs", "da", "nl", "en", "eo", "et", "tl", "fi", "fr", "fy", "gl", "ka", "de", "el", "gu", "ht", "ha", "haw", "iw", "hi", "hmn", "hu", "is", "ig", "id", "ga", "it", "ja", "jw", "kn", "kk", "km", "ko", "ku", "ky", "lo", "la", "lv", "lt", "lb", "mk", "mg", "ms", "ml", "mt", "mi", "mr", "mn", "my", "ne", "no", "ps", "fa", "pl", "pt", "pa", "ro", "ru", "sm", "gd", "sr", "st", "sn", "sd", "si", "sk", "sl", "so", "es", "su", "sw", "sv", "tg", "ta", "te", "th", "tr", "uk", "ur", "uz", "vi", "cy", "xh", "yi", "yo", "zu"], "url_structure": "none", "flag_style": "2d", "wrapper_selector": "#gt-wrapper-30536672", "alt_flags": { "en": "usa" }, "float_switcher_open_direction": "top", "switcher_horizontal_position": "left", "switcher_vertical_position": "bottom", "custom_css": "#gt_float_wrapper{\r\nbottom:5px !important;\r\nz-index:999999999 !important\r\n}\r\n.gt_float_switcher{\r\nfont-size: 14px !important\r\n}\r\n.gt_float_switcher img{\r\nwidth: 20px !important\r\n}\r\n.gt_float_switcher .gt-selected .gt-current-lang{\r\npadding: 5px 10px !important\r\n}\r\n", "flags_location": "\/wp-content\/plugins\/gtranslate\/flags\/" };
	</script>
	<script src="wp-content/plugins/gtranslate/js/float.js@ver=6.5.3" data-no-optimize="1" data-no-minify="1"
		data-gt-orig-url="/" data-gt-orig-domain="capitaleasyfinance.com" data-gt-widget-id="30536672" defer></script>
	<script src="wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js@ver=3.19.0"
		id="elementor-pro-webpack-runtime-js"></script>
	<script src="wp-content/plugins/elementor/assets/js/webpack.runtime.min.js@ver=3.19.4"
		id="elementor-webpack-runtime-js"></script>
	<script src="wp-content/plugins/elementor/assets/js/frontend-modules.min.js@ver=3.19.4"
		id="elementor-frontend-modules-js"></script>
	<script src="wp-includes/js/dist/vendor/wp-polyfill-inert.min.js@ver=3.1.2" id="wp-polyfill-inert-js"></script>
	<script src="wp-includes/js/dist/vendor/regenerator-runtime.min.js@ver=0.14.0" id="regenerator-runtime-js"></script>
	<script src="wp-includes/js/dist/vendor/wp-polyfill.min.js@ver=3.15.0" id="wp-polyfill-js"></script>
	<script src="wp-includes/js/dist/hooks.min.js@ver=2810c76e705dd1a53b18" id="wp-hooks-js"></script>
	<script src="wp-includes/js/dist/i18n.min.js@ver=5e580eb46a90c2b997e6" id="wp-i18n-js"></script>
	<script id="wp-i18n-js-after">
		wp.i18n.setLocaleData({ 'text direction\u0004ltr': ['ltr'] });
	</script>
	<script id="elementor-pro-frontend-js-before">
		var ElementorProFrontendConfig = { "ajaxurl": "https:\/\/capitaleasyfinance.com\/wp-admin\/admin-ajax.php", "nonce": "0997e513a4", "urls": { "assets": "https:\/\/capitaleasyfinance.com\/wp-content\/plugins\/elementor-pro\/assets\/", "rest": "https:\/\/capitaleasyfinance.com\/wp-json\/" }, "shareButtonsNetworks": { "facebook": { "title": "Facebook", "has_counter": true }, "twitter": { "title": "Twitter" }, "linkedin": { "title": "LinkedIn", "has_counter": true }, "pinterest": { "title": "Pinterest", "has_counter": true }, "reddit": { "title": "Reddit", "has_counter": true }, "vk": { "title": "VK", "has_counter": true }, "odnoklassniki": { "title": "OK", "has_counter": true }, "tumblr": { "title": "Tumblr" }, "digg": { "title": "Digg" }, "skype": { "title": "Skype" }, "stumbleupon": { "title": "StumbleUpon", "has_counter": true }, "mix": { "title": "Mix" }, "telegram": { "title": "Telegram" }, "pocket": { "title": "Pocket", "has_counter": true }, "xing": { "title": "XING", "has_counter": true }, "whatsapp": { "title": "WhatsApp" }, "email": { "title": "Email" }, "print": { "title": "Print" } }, "facebook_sdk": { "lang": "en_US", "app_id": "" }, "lottie": { "defaultAnimationUrl": "https:\/\/capitaleasyfinance.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json" } };
	</script>
	<script src="wp-content/plugins/elementor-pro/assets/js/frontend.min.js@ver=3.19.0"
		id="elementor-pro-frontend-js"></script>
	<script src="wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js@ver=4.0.2"
		id="elementor-waypoints-js"></script>
	<script src="wp-includes/js/jquery/ui/core.min.js@ver=1.13.2" id="jquery-ui-core-js"></script>
	<script id="elementor-frontend-js-before">
		var elementorFrontendConfig = { "environmentMode": { "edit": false, "wpPreview": false, "isScriptDebug": false }, "i18n": { "shareOnFacebook": "Share on Facebook", "shareOnTwitter": "Share on Twitter", "pinIt": "Pin it", "download": "Download", "downloadImage": "Download image", "fullscreen": "Fullscreen", "zoom": "Zoom", "share": "Share", "playVideo": "Play Video", "previous": "Previous", "next": "Next", "close": "Close", "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right", "a11yCarouselPrevSlideMessage": "Previous slide", "a11yCarouselNextSlideMessage": "Next slide", "a11yCarouselFirstSlideMessage": "This is the first slide", "a11yCarouselLastSlideMessage": "This is the last slide", "a11yCarouselPaginationBulletMessage": "Go to slide" }, "is_rtl": false, "breakpoints": { "xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600 }, "responsive": { "breakpoints": { "mobile": { "label": "Mobile Portrait", "value": 767, "default_value": 767, "direction": "max", "is_enabled": true }, "mobile_extra": { "label": "Mobile Landscape", "value": 880, "default_value": 880, "direction": "max", "is_enabled": false }, "tablet": { "label": "Tablet Portrait", "value": 1024, "default_value": 1024, "direction": "max", "is_enabled": true }, "tablet_extra": { "label": "Tablet Landscape", "value": 1200, "default_value": 1200, "direction": "max", "is_enabled": false }, "laptop": { "label": "Laptop", "value": 1366, "default_value": 1366, "direction": "max", "is_enabled": false }, "widescreen": { "label": "Widescreen", "value": 2400, "default_value": 2400, "direction": "min", "is_enabled": false } } }, "version": "3.19.4", "is_static": false, "experimentalFeatures": { "e_optimized_assets_loading": true, "e_optimized_css_loading": true, "e_font_icon_svg": true, "additional_custom_breakpoints": true, "container": true, "e_swiper_latest": true, "theme_builder_v2": true, "hello-theme-header-footer": true, "block_editor_assets_optimize": true, "ai-layout": true, "landing-pages": true, "e_image_loading_optimization": true, "e_global_styleguide": true, "page-transitions": true, "notes": true, "form-submissions": true, "e_scroll_snap": true }, "urls": { "assets": "https:\/\/capitaleasyfinance.com\/wp-content\/plugins\/elementor\/assets\/" }, "swiperClass": "swiper", "settings": { "page": [], "editorPreferences": [] }, "kit": { "active_breakpoints": ["viewport_mobile", "viewport_tablet"], "global_image_lightbox": "yes", "lightbox_enable_counter": "yes", "lightbox_enable_fullscreen": "yes", "lightbox_enable_zoom": "yes", "lightbox_enable_share": "yes", "lightbox_title_src": "title", "lightbox_description_src": "description", "hello_header_logo_type": "title", "hello_header_menu_layout": "horizontal", "hello_footer_logo_type": "logo" }, "post": { "id": 10, "title": "Capital%20Easy%20Finance%20%E2%80%93%20Financial%20Market%20Experts", "excerpt": "", "featuredImage": false } };
	</script>
	<script src="wp-content/plugins/elementor/assets/js/frontend.min.js@ver=3.19.4" id="elementor-frontend-js"></script>
	<script src="wp-content/plugins/elementor-pro/assets/js/elements-handlers.min.js@ver=3.19.0"
		id="pro-elements-handlers-js"></script>


</body>

</html>