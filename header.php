<!-- This file will eventually be moved to the fss theme, replacing the existing header.php, once the video player is ready to be shared. 
When that happens the videoplayer URLS will need to be changed to reference the parent (template_url) vs child theme (stylesheet_directory). -->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title ( '|', true,'right' ); ?><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></title>
	
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/infusion/framework/fss/css/fss-reset-global.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/infusion/framework/fss/css/fss-base-global.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/infusion/framework/fss/css/fss-layout.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/infusion/framework/fss/css/fss-text.css" />
	 
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion/components/uiOptions/css/FatPanelUIOptions.css" />        
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion/components/uiOptions/css/fss/fss-theme-bw-uio.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion/components/uiOptions/css/fss/fss-theme-wb-uio.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion/components/uiOptions/css/fss/fss-theme-by-uio.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion/components/uiOptions/css/fss/fss-theme-yb-uio.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion/components/uiOptions/css/fss/fss-text-uio.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion/lib/jquery/ui/css/fl-theme-bw/bw.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion/lib/jquery/ui/css/fl-theme-wb/wb.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion/lib/jquery/ui/css/fl-theme-by/by.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion/lib/jquery/ui/css/fl-theme-yb/yb.css" />	

	<link type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/lib/videoPlayer/lib/jquery-ui/css/ui-lightness/jquery-ui-1.8.14.custom.css" rel="stylesheet" />
	<link type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/lib/videoPlayer/css/VideoPlayer.css" rel="stylesheet" />
	<link type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/lib/videoPlayer/lib/captionator/css/captions.css" rel="stylesheet" />	

	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/style-ltie9.css" />
	<![endif]-->
	<!--[if lt IE 8]>
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/style-ltie8.css" />
	<![endif]-->
	<!--[if lt IE 7]>
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/style-ltie7.css" />
	<![endif]-->

	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/infusion/MyInfusion.js"></script>
	
	<!-- Utils -->
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/lib/videoPlayer/lib/jquery-ui/js/jquery.ui.button.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/lib/videoPlayer/lib/captionator/js/captionator.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/lib/videoPlayer/lib/mediaelement/js/mediaelement.js"></script>
	<!--[if lt IE 9]>
		<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/lib/videoPlayer/lib/html5shiv/js/html5shiv.js"></script>
	<![endif]-->
	<!-- VideoPlayer dependencies -->
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/lib/videoPlayer/js/VideoPlayer_framework.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/lib/videoPlayer/js/VideoPlayer.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/lib/videoPlayer/js/VideoPlayer_html5Captionator.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/lib/videoPlayer/js/VideoPlayer_controllers.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/lib/videoPlayer/js/ToggleButton.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/lib/videoPlayer/js/MenuButton.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/lib/videoPlayer/js/VideoPlayer_media.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/lib/videoPlayer/js/VideoPlayer_transcript.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/lib/videoPlayer/js/VideoPlayer_intervalEventsConductor.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/lib/videoPlayer/js/VideoPlayer_uiOptions.js"></script>	

	<!--[if lte IE 8]>	
		<script type="text/javascript">document.createElement("header")</script>	
		<script type="text/javascript">document.createElement("nav")</script>		
		<script type="text/javascript">document.createElement("footer")</script>
		<script type="text/javascript">document.createElement("section")</script>
		<script type="text/javascript">document.createElement("aside")</script>
	<![endif]-->	
	
<?php
	wp_head();
?>

</head>

<body> 

	<?php get_template_part('uio-markup') ?>

	<script type="text/javascript">
		fluid.pageEnhancer({
			tocTemplate: "<?php bloginfo('template_url'); ?>/infusion/components/tableOfContents/html/TableOfContents.html"
		});
	
		var uiOptions = fluid.uiOptions.fatPanel.withMediaPanel(".flc-uiOptions-fatPanel", {
			prefix: "<?php bloginfo('template_url'); ?>/infusion/components/uiOptions/html/",	
			components: {
				relay: {
					type: "fluid.videoPlayer.relay"
				}
			},	
			templateLoader: {
				options: {
					templates: {
						mediaControls: "<?php bloginfo('stylesheet_directory'); ?>/lib/videoPlayer/html/UIOptionsTemplate-media.html"
					}
				}
			},						
	
		  // Provide custom strings for slidingPanel button
			slidingPanel: {
				options: {
					strings: {
						//showText: "Display Settings <img src='<?php bloginfo('template_url'); ?>/images/triangle_down_white.png' alt='down arrow' />",
						<?php global $uio_strings, $uio_strings_custom;
							// To override the default strings, define $uio_strings_custom
							//in the child theme's functions.php file
							if ($uio_strings_custom) {
								echo $uio_strings_custom;
							} else {
								echo $uio_strings; 
							}?>
					}
				}
			}
		});          
	</script>

	<div class="fl-site-skipto fl-hidden-accessible">
		<a href="#content" title="<?php esc_attr_e( 'Skip to content', 'content' ); ?>"><?php _e( 'Skip to content', 'content' ); ?></a>
	</div>

	<!-- The main container of all content -->
	<div class="fl-container fl-centered">

		<header class="fl-site-header">
			<!-- Loads the file "banner.php". Feel free to override with your own banner, or with an empty file -->
			<?php get_template_part('banner') ?>

			<!-- Loads the file "topnav.php". Feel free to override with your own top navigation, or with an empty file -->
			<?php get_template_part('topnav') ?>
	    </header>  
		
	    <section id="content" class="fl-site-main-body">
			<!-- Container for Table of Contents inserted at request of UI Options -->
			<div class="flc-toc-tocContainer toc"> </div>

