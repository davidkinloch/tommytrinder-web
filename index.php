<?php include 'header.php'; ?>
      
<div class="section section--video">
       <video poster="assets/build/Sequence01c.jpg" id="bgvid" playsinline autoplay muted loop>
          <!-- 
        - Video needs to be muted, since Chrome 66+ will not autoplay video with sound.
        WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
        <source src="Sequence01c.webm" type="video/webm">
        <source src="Sequence01c.mp4" type="video/mp4">

        </video>
        <div class="section__inner">
        <div class="caption">
            <h1 class="title">Introducing Tommy Trinder</h1>
            <p>With an interface as <strong>simple as sketching</strong> on a pad create curate, photorealistic <strong>renditions of windows and doors</strong>.</p>
            <p><a href="landing-page.php" class="button button--primary">Watch Full Video</a></p> 
            <p><a href="#" id="mute-video" class="button button--secondary">Audio On</a></p>
        </div>
    </div>
</div>


              

<?php include 'footer-video.php'; ?>

