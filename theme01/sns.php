

    <div class="sns">
    	<ul>
    		<?php
    			$facebook = get_option('facebook_display');
    			if($facebook) {
    				echo'<li><a href="' . get_option('facebook_url') . '" target="_blank"class="sns_btn btn_facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>';
    			}
    			else {
    				echo '';
    			}
    		?>
    		<?php
    			$twitter = get_option('twitter_display');
    			if($twitter) {
    				echo'<li><a href="' . get_option('twitter_url') . '" target="_blank"class="sns_btn btn_twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>';
    			}
    			else {
    				echo '';
    			}
    		?>
    		<?php
    			$instagram = get_option('instagram_display');
    			if($instagram) {
    				echo'<li><a href="' . get_option('instagram_url') . '" target="_blank"class="sns_btn btn_instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>';
    			}
    			else {
    				echo '';
    			}
    		?>
    		<?php
    			$youtube = get_option('youtube_display');
    			if($youtube) {
    				echo'<li><a href="' . get_option('youtube_url') . '" target="_blank"class="sns_btn btn_youtube"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>';
    			}
    			else {
    				echo '';
    			}
    		?>
    	</ul>
    </div>