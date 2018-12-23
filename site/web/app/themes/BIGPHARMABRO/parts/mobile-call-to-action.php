<div style="clear:both;">&nbsp;</div>
        <div class="message">
          <hr class="mobile-call-to-action">
          <h2 style="text-align:center; margin-bottom:.5em; font-size:2.5em;" class="mobile-call-to-action">
            It's Time To Change The Conversation Around Big Pharma:
          </h2>
          <?php $previous_text = previous_page_not_post('Previous Text'); ?>
          <?php $next_text = next_page_not_post('See Another Text'); ?>
          <?php if($next_text) { ?>
            <h1 class="next_text_button" style="text-align:center; margin-bottom:0em!imortant;"><?php echo $next_text; ?></h1>
          <?php } ?>
          <h1 style="text-align:center;"><a class="button expanded" style="margin-bottom:0em;font-size:.8em; background-color: #3b5998;" href="https://www.facebook.com/share.php?u=<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>">Share on Facebook</a></h1>
          <h1 style="text-align:center;"><a class="button expanded alert" style="margin-bottom:0em;font-size:.8em;" href="http://bigpharmabro.com/sign-on/">Take Action</a></h1>
<h1 style="text-align:center;"><a class="button expanded" data-open="learnmoremodal" style="margin-bottom:0em;font-size:.8em;">Learn More</a></h1>
          <hr style="margin-bottom:2em; margin-top:3em; display:block;">
          <p style="text-align:center; display: block; margin-top: 1em;"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/BPB-orgs.png" /></p>
          <br><br>
        </div>
