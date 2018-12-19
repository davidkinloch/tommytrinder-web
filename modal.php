<?php
 
// grab recaptcha library
require_once "recaptchalib.php";
 
?>
<div class="modal">
  <div class="modal__bg">
    <div class="modal__box">
      <form action="" method="post">
        <h1>Material Design Contact Form with Validation</h1>
        <label for="name">Name:</label>
        <input name="name" required><br />
   
        <label for="email">Email:</label>
        <input name="email" type="email" required><br />
        
        <div class="g-recaptcha" data-sitekey="6LdEWYMUAAAAAJx8N9OqkPFOnK5dllqZi4w_AWAy"></div>
        <input type="submit" value="Submit" />
      </form>
    </div>
  </div>
</div>
<?php 
  foreach ($_POST as $key => $value) {
    echo '<p><strong>' . $key.':</strong> '.$value.'</p>';
  }
?>
<script src='https://www.google.com/recaptcha/api.js'></script>