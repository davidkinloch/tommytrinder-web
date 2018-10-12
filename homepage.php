<?php include 'header.php'; ?>
      
<div class="section section--video">
       <video poster="assets/build/tt-home-video.jpg" id="bgvid" playsinline autoplay muted loop>
          <!-- 
        - Video needs to be muted, since Chrome 66+ will not autoplay video with sound.
        WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
        <source src="tt-home-video.webm" type="video/webm">
        <source src="tt-home-video.mp4" type="video/mp4">

        </video>
        <div class="section__inner">
        <div class="caption">
            <h1 class="title">Introducing Tommy Trinder</h1>
            <p>With an interface as <strong>simple as sketching</strong> on a pad create curate, photorealistic <strong>renditions of windows and doors</strong>.</p>
            <p><a target="_blank" href="http://player.vimeo.com/video/281562791?autoplay=1" class="button button--primary">Watch the Video</a></p>
        </div>
    </div>
</div>


              

<?php include 'footer-video.php'; ?>

