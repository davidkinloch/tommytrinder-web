
<div class="modal">
  <div class="modal__bg">
    <div class="modal__box">
        <div class="container">
          <div class="row">
                  
                  <form id="contact-form" method="post" action="contact.php" role="form">  
                  <div class="messages"></div>
                  <div class="row form-kill">
                    <div class="col-lg-6"> 
                      <h3 class="modal__title">Contact Us</h3>
                      
                   
                      <div class="controls">
                          <div class="row">
                              <div class="col-lg-6">
                                  <div class="form-group">
                                      <label for="form_name">Firstname *</label>
                                      <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required"
                                          data-error="Firstname is required.">
                                      <div class="help-block with-errors"></div>
                                  </div>
                              </div>
                              <div class="col-lg-6">
                                  <div class="form-group">
                                      <label for="form_lastname">Lastname *</label>
                                      <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required"
                                          data-error="Lastname is required.">
                                      <div class="help-block with-errors"></div>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-lg-6">
                                  <div class="form-group">
                                      <label for="form_email">Email *</label>
                                      <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required"
                                          data-error="Valid email is required.">
                                      <div class="help-block with-errors"></div>
                                  </div>
                              </div>
                              <div class="col-lg-6">
                                  <div class="form-group">
                                      <label for="form_phone">Phone</label>
                                      <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                                      <div class="help-block with-errors"></div>
                                  </div>
                              </div>
                          </div>
                           <div class="row">
                              <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="form_message">Message *</label>
                                    <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required"
                                        data-error="Please, leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>


                                <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="6LdEWYMUAAAAAJx8N9OqkPFOnK5dllqZi4w_AWAy" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                                    <input class="form-control d-none hidden" data-recaptcha="true" required data-error="Please complete the Captcha">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <input type="submit" class="btn btn-success btn-send button button--primary" value="Send message">
                                <p class="text-muted">
                                    <strong>*</strong> These fields are required.
                                </p>
                              </div>
                            </div>
                        </div>
                  </div>
      
                  </form>
              </div>
              <!-- /.8 -->
              
          </div>
        </div>
    </div>
  </div>
</div>