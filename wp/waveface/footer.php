  </div>

  <footer id="footer">
    <div id="footer-inner">

     <div class="terms">

    <?php if (get_bloginfo('language') == 'zh-TW'): ?>
          <a href="https://waveface.com/tw/terms.html">使用者條款</a> | 
          <a href="https://waveface.com/tw/privacy.html">隱私權政策</a> |  
          <a href="https://waveface.com/tw/about/index.html">關於我們</a> 

    <?php else: ?>
          <a href="https://waveface.com/en/terms.html">Terms of Service</a> | 
          <a href="https://waveface.com/en/privacy.html">Privacy Policy</a> |  
          <a href="https://waveface.com/en/about/index.html">About Us</a> 

        
    <?php endif ?>
          <p class="copyright">Copyright © 2012 Waveface Inc. All Rights Reserved</p>

        </div>
      <div class="socials">
        <a href="https://www.facebook.com/waveface"><img src="<?php bloginfo('template_directory'); ?>/images/site/icon.fb.png" alt="facebook"></a>
        <a href="https://www.twitter.com/waveface"><img src="<?php bloginfo('template_directory'); ?>/images/site/icon.twitter.png" alt="twitter"></a>
        <a href="mailto:contact@waveface.com"><img src="<?php bloginfo('template_directory'); ?>/images/site/icon.email.png" alt="email"></a>
      </div>

    </div>
  </footer>

</div>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-27817516-1']);
  _gaq.push(['_setDomainName', 'waveface.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
