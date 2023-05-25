document.addEventListener("DOMContentLoaded", function(){ window.addEventListener( 'load', function() {
	UAGBCountdown.init( '.uagb-block-e376d085', {"block_id":"e376d085","endDateTime":"2023-05-26T21:57:27.395Z","showDays":true,"showHours":true,"showMinutes":true,"isFrontend":true,"timerEndAction":"zero","redirectURL":""} );
});
var selector = document.querySelectorAll( '.uagb-block-4425820c' );
if ( selector.length > 0 ) {

	var blockquote__tweet = selector[0].getElementsByClassName("uagb-blockquote__tweet-button");

	if ( blockquote__tweet.length > 0 ) {

		blockquote__tweet[0].addEventListener("click",function(){	
			var request_url = "https://twitter.com/share?url="+ encodeURIComponent("http://localhost/announcement")+"&text="+("Click here to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.")+"&via="+("");
			window.open( request_url );
		});
	}
}
 });