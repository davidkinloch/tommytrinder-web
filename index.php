<?php include 'header.php'; ?>
      
<div class="section section--video">
       <video poster="assets/build/Sequence01b.jpg" id="bgvid" playsinline autoplay muted loop>
          <!-- 
        - Video needs to be muted, since Chrome 66+ will not autoplay video with sound.
        WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
        <source src="Sequence01b.webm" type="video/webm">
        <source src="Sequence01b.mp4" type="video/mp4">

        </video>
        <div class="section__inner">
        <div class="caption">
            <h1 class="title">As simple as sketching on a pad...</h1>
            <p><a href="landing-page.php" class="button button--primary">Watch Full Video</a></p>
        </div>
    </div>
</div>


              

<?php include 'footer-video.php'; ?>

