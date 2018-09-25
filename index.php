<!DOCTYPE html>
<html lang="en">
<?php include '/var/www/html/virtuosic/inc/head.inc'; ?>
  
<body data-scroll-index="0">
  
  <?php include_once("inc/googleanalytics.inc"); ?>
  
  <div id="background-fix"></div>
    
  <?php include '/var/www/html/virtuosic/inc/header.inc'; ?>
    
  <div id="page-wrapper">
  
    <section class="section-1 display" data-scroll-index="1">
      <div class="img-inner"></div>
      <div class="wrapper">
        <article>
          <?php include '/var/www/html/virtuosic/inc/section-web.inc'; ?>
        </article>
      </div>     
    </section>
    
    <section class="section-2 info" data-scroll-index="2">
      <div class="img-inner"></div>
      <div class="wrapper">
        <article>
          <?php include '/var/www/html/virtuosic/inc/article-web.inc'; ?>
        </article>
      </div>
    </section>
    
    <section class="section-3 display" data-scroll-index="3">
      <div class="img-inner"></div>
      <div class="wrapper">
        <article>
          <?php include '/var/www/html/virtuosic/inc/section-print.inc'; ?>
        </article>
      </div>
    </section>
    
    <section class="section-4 info" data-scroll-index="4">
      <div class="img-inner"></div>
      <div class="wrapper">
        <article>
          <?php include '/var/www/html/virtuosic/inc/article-print.inc'; ?>
        </article>
      </div>
    </section>
    
    <section class="section-5 display" data-scroll-index="5">
      <div class="img-inner"></div>
      <div class="wrapper">
        <article>
          <?php include '/var/www/html/virtuosic/inc/section-creative.inc'; ?>
        </article>
      </div>
    </section>
    
    <section class="section-6 info" data-scroll-index="6">
      <div class="img-inner"></div>
      <div class="wrapper">
        <article>
          <?php include '/var/www/html/virtuosic/inc/article-creative.inc'; ?>
        </article>
      </div>
    </section>
  
  </div>
  
  <footer data-scroll-index="7">
    <a name="request-form"></a>
    <div class="img-inner"></div>
    <div class="wrapper">
      <article>
        <?php include '/var/www/html/virtuosic/inc/footer.inc'; ?>
      </article>
    </div>
  </footer>
  
  <script>
    jQuery('a.iframe').colorbox({iframe:true, height:"80%", width:"80%", fixed:true});
    jQuery('a.modal').colorbox({iframe:false, maxHeight:"98%", maxWidth:"98%", fixed:true});
    if (window.matchMedia) {
    // Establishing media check
    width1000Check = window.matchMedia("(max-width: 1000px)");
      if (width1000Check.matches){
        $.colorbox.remove();
      }
    }
  </script>
</body>
</html>