<div class="form-wrapper">
  <h2>Contact us today and find out how we can help you.</h2>
  <!-- includes form processor -->
  <?php include('/var/www/html/virtuosic/inc/form-processing.php'); ?>
  
  <!-- Displays any system messages and validation errors after form is submitted -->
  <?php if ($messages): ?><div class="messages"><div class="messages-inside <?php if ($errorClass) { print $errorClass; } ?>"><?php print $messages; ?></div></div><?php endif; ?>
  
  <!-- HTML Contact form -->
  <form id="contact-form" action="https://formspree.io/anthonygpero@gmail.com" method="POST">
    
    <!-- SPAMBOT Check -->
    <div class="hidden">
      <label>If you are human, fill this out:</label><input type="text" name="humancheck">
    </div>
    
    <div class="contact-info clearfix clear-both">
      <div class="form-item contact-name">
        <div class="form-padding"><label class="required">Name:</label><input type="text" name="name" value="<?php if ($nameValue); print $nameValue; ?>" <?php if ($nameErr): ?>class="error"<?php endif; ?>></div>
      </div>
      <div class="form-item contact-phone">
        <div class="form-padding"><label>Phone:</label><input type="text" name="phone" value="<?php if ($phoneValue); print $phoneValue; ?>"></div>
      </div>
      <div class="form-item contact-email">
        <div class="form-padding"><label class="required">Email:</label><input type="text" name="email" value="<?php if ($emailValue); echo $emailValue; ?>" <?php if ($emailErr): ?>class="error"<?php endif; ?>></div>
      </div>
      <div class="clear-both"></div>
    </div>
    
    <hr class="clearfix clear-both">
      
    <div class="form-item contact-services clearfix clear-both"><strong>Which services are you interested in?</strong><br>
      <hr class="clear-both">
      <div class="checkbox-wrapper clearfix">
        <div class="checkbox web"><input type="checkbox" name="service[]" value="web" <?php if (in_array("web", $_POST["service"])) { print "checked"; } ?>> Web Development</div>
        <div class="checkbox print"><input type="checkbox" name="service[]" value="print" <?php if (in_array("print", $_POST["service"])) { print "checked"; } ?>> Print Design</div>
        <div class="checkbox creative"><input type="checkbox" name="service[]" value="creative" <?php if (in_array("creative", $_POST["service"])) { print "checked"; } ?>> Creative Services</div>
        <div class="clear-both"></div>
      </div>
    </div>
    
    <hr class="clearfix clear-both">
      
    <div class="form-item contact-comments clear-both">
      <strong class="required">Tell us more about your needs</strong><br>
      <textarea name="comment" <?php if ($commentErr): ?>class="error"<?php endif; ?>><?php if ($commentValue); print $commentValue; ?></textarea>
    </div>
    <div class="disclaimer">* denotes required field</div>
    <div class="contact-submit">
      <input type="submit" value="Send Email">
    </div>
  </form>
  
</div>

