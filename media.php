<?php
/*
Template Name: Media
*/
?>
<?php get_header(); ?>

<div class="fl-centered fl-site-wrapper fl-col-mixed idi-institution">
	<aside class="fl-col-fixed fl-force-left idi-people-nav">
			<?php get_sidebar($post->post_name); ?>
	</aside>


	<div id="content" class="fl-col-flex idi-one-column">
		<?php
			$page_data = get_page(get_the_ID());
			echo '<h1>'. $page_data->post_title .'</h1>';
		?>

		<div class="idi-inst-content">
		
			<h2>Reorganise Future (enhanced with UIO)</h2>
			<div class="video1 fl-videoPlayer">
        	</div>

			<h2>Reorganise Future</h2>        	
			<div class="video2 fl-videoPlayer">
        	</div>        	
		
			<?php
				echo apply_filters('the_content', $page_data->post_content);
			?>
		</div>
	</div>

</div>

<?php 
// Remove the id="content" attribute that is inherited from the parent theme "wordpress-fss-theme".
// This attribute/value pair is re-defined in this page.
remove_parent_contentID();

get_footer(); 
?>
<script>
        
	var video1Options = { container: ".video1", options: {
		videoTitle: "OCAD 3D Printer, The Future of Accessibility | OCAD imprimante 3D, L'avenir de l'accessibilité",	
		video: {
			sources: [
				{
					src: "wp-content/themes/idi-theme/videos/ReorganizeFuture/ReorganizeFuture.mp4",
					type: "video/mp4"
				},
				{
					src: "wp-content/themes/idi-theme/videos/ReorganizeFuture/ReorganizeFuture.webm",
					type: "video/webm"
				},
				{
					src: "http://www.youtube.com/v/_VxQEPw1x9E&hl=en&fs=1",
					type: "youtube"
				}
			],
			captions: [
				{
					src: "http://www.youtube.com/watch?v=_VxQEPw1x9E&language=en",
					type: "text/amarajson",
					srclang: "en",
					label: "English"
				},
				{
					src: "wp-content/themes/idi-theme/videos/ReorganizeFuture/ReorganizeFuture.fr.vtt",
					type: "text/vtt",
					srclang: "fr",
					label: "French"
				}
			],
			transcripts: [
				{
					// TO TEST the transcript processing of Universal Subtitles files for transcripts,
					// substititute the following two lines
					src: "http://www.youtube.com/watch?v=_VxQEPw1x9E&language=en",
					type: "text/amarajson",
	
					//src: "videos/ReorganizeFuture/ReorganizeFuture.transcripts.en.json",
					//type: "JSONcc",
					srclang: "en",
					label: "English"
				},
				{
					src: "wp-content/themes/idi-theme/videos/ReorganizeFuture/ReorganizeFuture.transcripts.fr.json",
					type: "JSONcc",
					srclang: "fr",
					label: "French"
				}
			]
		},
		templates: {
			videoPlayer: {
				href: "wp-content/themes/idi-theme/lib/videoPlayer/html/videoPlayer_template.html"
			}
		}}			
	};
	//fluid.videoPlayer(".video1", video1Options);	
	fluid.videoPlayer.makeEnhancedInstances(video1Options, uiOptions.relay);
	
	var video2Options = {
		videoTitle: "OCAD 3D Printer, The Future of Accessibility | OCAD imprimante 3D, L'avenir de l'accessibilité",	
		video: {
			sources: [
				{
					src: "wp-content/themes/idi-theme/videos/ReorganizeFuture/ReorganizeFuture.mp4",
					type: "video/mp4"
				},
				{
					src: "wp-content/themes/idi-theme/videos/ReorganizeFuture/ReorganizeFuture.webm",
					type: "video/webm"
				},
				{
					src: "http://www.youtube.com/v/_VxQEPw1x9E&hl=en&fs=1",
					type: "youtube"
				}
			],
			captions: [
				{
					src: "http://www.youtube.com/watch?v=_VxQEPw1x9E&language=en",
					type: "text/amarajson",
					srclang: "en",
					label: "English"
				},
				{
					src: "wp-content/themes/idi-theme/videos/ReorganizeFuture/ReorganizeFuture.fr.vtt",
					type: "text/vtt",
					srclang: "fr",
					label: "French"
				}
			],
			transcripts: [
				{
					// TO TEST the transcript processing of Universal Subtitles files for transcripts,
					// substititute the following two lines
					src: "http://www.youtube.com/watch?v=_VxQEPw1x9E&language=en",
					type: "text/amarajson",
	
					//src: "videos/ReorganizeFuture/ReorganizeFuture.transcripts.en.json",
					//type: "JSONcc",
					srclang: "en",
					label: "English"
				},
				{
					src: "wp-content/themes/idi-theme/videos/ReorganizeFuture/ReorganizeFuture.transcripts.fr.json",
					type: "JSONcc",
					srclang: "fr",
					label: "French"
				}
			]
		},
		templates: {
			videoPlayer: {
				href: "wp-content/themes/idi-theme/lib/videoPlayer/html/videoPlayer_template.html"
			}
		}		
	};
	fluid.videoPlayer(".video2", video2Options);	
</script>	