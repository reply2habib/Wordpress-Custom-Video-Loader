add_action('wp_footer', function () { ?>
    <script>
    ( function( $ ) {

        $( document ).on( 'ready', function() {
                
                 videoContainer = document.getElementById('video-container');
                var video = document.getElementById('fullscreen-video');
                
                video.addEventListener('ended', function() {
                    videoContainer.style.display = 'none';
                     jQuery('div#page').css('display', 'block');
                });
                
                window.addEventListener('load', function() {
                    // Hide the video after 15 seconds
                    setTimeout(function() {
                        videoContainer.style.display = 'none';
                         jQuery('div#page').css('display', 'block');
                    }, 4000); // 15000 milliseconds = 15 seconds
                });
        } );

    } ) ( jQuery );
    </script>

<?php });
