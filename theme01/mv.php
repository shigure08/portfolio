<!--mv-->
<script>
    var tag = document.createElement('script');
    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    function onYouTubeIframeAPIReady() {
    	ytPlayer = new YT.Player(
    		'youtube_movie',
    		{
    			width: 1280,
    			height: 600,
    			videoId: '<?php echo get_option('youtube_id'); ?>',
    			playerVars: {
    				autoplay: <?php echo get_option('youtube_autoplay'); ?>,
    				rel: <?php echo get_option('youtube_rel'); ?>,
    				wmode: 'transparent',
    				showinfo: 0,
    				vq: 'hd720'
    			},
    			events: {
    				'onReady': onPlayerReady
    			}
    		}
    	);
    }
    function onPlayerReady(event) {
    	event.target.setVolume(<?php echo get_option('youtube_volume'); ?>);
    }
    </script>

    <div id="main_vidual" class="mv">
        <div class="mv__img"><img src="<?php echo get_the_min_img_url(); ?>" alt="" /></div>
    	<div id="youtube_movie" class="mv__youtube"></div>	
    </div>
    <!--mv-->