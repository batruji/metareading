/*!
 * Built on top of the jQuery library
 *   http://jquery.com
 *
 * YouTubeCarousel - YouTube Carousel and Player
 *   http://www.michaelsouellette.com/youtubecarousel/
 *
 * Copyright (c) 2011 Michael S. Ouellette (http://www.michaelsouellette.com)
 * Dual licensed under the MIT (http://www.opensource.org/licenses/mit-license.php)
 * and GPL (http://www.opensource.org/licenses/gpl-license.php) licenses.
 *
 *----------------------------------------------------------------------------
 *
 * jCarousel - Riding carousels with jQuery
 *   http://sorgalla.com/jcarousel/
 *
 */

/*YouTube Carousel Code*/

/*List of YouTube videos - you need just the video ID for this (ex:)*/
var yt_videos = ['4r7wHMg5Yjg','txqiwrbYGrs','dMH0bHeiRNg','Z3ZAGBL6UBA','60og9gwKh1o','2K-TICdG1R8','CdD8s0jFJYo','Q5im0Ssyyus','4pXfHLUlZf4'];

/*Video height and width*/
var yt_height = 419;
var yt_width = 766;

/*-----DO NOT EDIT BELOW THIS-----*/


function change_embeded(video_id){
	jQuery('#yt_embededvideo').html('<object width="'+ yt_width +'" height="'+ yt_height +'"><param name="movie" value="http://www.youtube.com/v/'+ video_id +'?version=3&amp;hl=en_US"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/'+ video_id +'?version=3&amp;hl=en_US" type="application/x-shockwave-flash" width="'+ yt_width +'" height="'+ yt_height +'" allowscriptaccess="always" allowfullscreen="true" wmode="transparent"></embed></object>');
}

