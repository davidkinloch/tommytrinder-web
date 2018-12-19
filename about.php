<?php

// grab recaptcha library
require_once "recaptchalib.php";

// your secret key
$secret = "6LdEWYMUAAAAAJx8N9OqkPFOnK5dllqZi4w_AWAy";

// empty response
$response = null;

// check our secret key
$reCaptcha = new ReCaptcha($secret);

// if submitted check response
if ($_POST["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}

?>

<!DOCTYPE html>
    <html> 
    <head>
        <meta charset="utf-8">
        <title>About | Tommy Trinder Ltd</title>
        <meta name="description" content="Learn more about double glazing application."/>
        <?php include 'header.php'; ?>
      
<div class="section section--vimeo" style="max-width: 1680px;">
    <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/281562791?autoplay=1&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
</div>

<div class="section section--text">
    <div class="section__inner">
        <div class="caption">
            <h1 class="title">As Simple as Sketching on a Pad</h1>
            <p>With an interface as simple as sketching on a pad, Tommy Trinder (cockney rhyming slang for ‘window’) uses unique Framepoint® web technology to convert touch-screen input into accurate, photorealistic renditions of windows and doors. Once drawn, overlay your designs onto your client’s home using our ground breaking Makeover tool. All the while products are priced in real time and orders may be placed with multiple suppliers with one click.</p>
        </div>
    </div>
</div>

<div class="section section--split">
    <div class="section__inner">
        <img src="assets/build/virtual-showroom.jpg" alt="Tommy Trinder - Virtual Showroom" /> 
    </div>
    <div class="section__inner">
        <div class="caption">
            <div class="caption__inner">
                <h3 class="title">Your Virtual Showroom</h3>
                <p>Engage clients in a collaborative design process as you sketch out ideas together. Point, draw, and touch to adjust sizes, profiles, colours, glass, glazing features, handles &amp; hardware. See your designs come to life in full photographic quality.</p>
            </div>
        </div>
    </div>
</div>

<div class="section section--split section--inverse">
    <div class="section__inner">
        <img src="assets/build/many-suppliers.jpg" alt="Tommy Tinder - Many Suppliers" /> 
    </div>
    <div class="section__inner">
        <div class="caption">
            <div class="caption__inner">
                <h3 class="title">Many Suppliers, One Quote.</h3>
                <p>PVCu Sash Windows, a timber front door, an aluminium bi-fold and PVCu casements? No problem. Combine products from multiple suppliers in one quote, safe in the knowledge that the dataset is current and accurate. And when you are ready, place orders on multiple fabricators with one click.</p>
            </div>
        </div>
    </div>
    
</div>

<div class="section section--split">
    <div class="section__inner">
        <img src="assets/build/combi-960.png" alt="Tommy Trinder - Price in Materials" /> 
    </div>
    <div class="section__inner">
        <div class="caption">
            <div class="caption__inner">
                <h3 class="title">Price in PVCu, Aluminium, Timber? </h3>
                <p>Clone your quote from one material to another with one click to provide optional costings to your client in a variety of materials. Hours of work, reduced to seconds.</p>
            </div>
        </div>
    </div>
</div>

<div class="section section--split section--inverse">
    <div class="section__inner">
        <img src="assets/build/overlay-v2.png" alt="The Visualisator" /> 
    </div>
    <div class="section__inner">
        <div class="caption">
            <div class="caption__inner">
                <h3 class="title">Overlay your designs onto your client’s home</h3>
                <p>Take a photo on your iPAD and overlay your designs onto your clients home – quick, effortless intuitive. Drag and skew images to create life-like Makeovers. Change the quote and instantly see the effect in situ.</p>
            </div>
        </div>
    </div>
</div>

<div class="section section--split">
    <div class="section__inner">
        <img src="assets/build/coupled-960.png" alt="dummy image" /> 
    </div>
    <div class="section__inner">
        <div class="caption">
            <div class="caption__inner">
                <h3 class="title">Take the order, transact the deposit.</h3>
                <p>Close the order by generating a contract, collecting your clients signature and  transacting deposit payments live via a secure payment portal. </p>
            </div>
        </div>
    </div>
</div>

<div class="section section--split section--inverse">
    <div class="section__inner">
        <img src="assets/build/docs.png" alt="dummy image" /> 
    </div>
    <div class="section__inner">
        <div class="caption">
            <div class="caption__inner">
                <h3 class="title">First Class Documentation for Clients &amp; Suppliers</h3>
                <p>Impress and minimise error with a quotation showing inside and outside, photorealistic renditions in full colour. Customise with your brand, your payment terms, your lead times, your salesman’s name. Deliver clean orders to suppliers, specifically tailored to the needs of their order processing teams.</p><br>
            </div>
        </div>
    </div>
</div>

<div class="section section--text" style="background: #FFF; border-top: 46px solid #333;">
    <div class="section__inner" style="background: #FFF;">
        <div class="caption">
          <h3 class="title">NOW LAUNCHING WITH THE INDUSTRY’S FINEST BRANDS</h3><br>
          <p><img src="assets/build/company-logos.jpg"></p><br>
            <p>Want to know more?<br>We’d love to hear from manufacturers and installers interested in our platform..</p><br>
            <p><a href="mailto:info@tommytrinder.com" class="button button--primary">Contact Us</a></p>
        </div>
    </div>
</div>

<?php
 
// grab recaptcha library
require_once "recaptchalib.php";
 
?>
<?php 
  foreach ($_POST as $key => $value) {
    echo '<p><strong>' . $key.':</strong> '.$value.'</p>';
  }
?>
<div class="modal">
  <div class="modal__bg">
    <div class="modal__box">
      <?php
  if ($response != null && $response->success) {
    echo "Hi " . $_POST["name"] . " (" . $_POST["email"] . "), thanks for submitting the form!";
  } else {
?>
      <form action="" method="post">
        <h1>Material Design Contact Form with Validation</h1>
        <label for="name">Name:</label>
        <input name="name" required><br />
   
        <label for="email">Email:</label>
        <input name="email" type="email" required><br />
        
        <div class="g-recaptcha" data-sitekey="6LdEWYMUAAAAAJx8N9OqkPFOnK5dllqZi4w_AWAy"></div>
        <input type="submit" value="Submit" />
      </form>
<?php } ?>
    </div>
  </div>
</div>

<script src='https://www.google.com/recaptcha/api.js'></script>    

<?php include 'footer.php'; ?>

