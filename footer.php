
<div id="footer">
<table id="footerTable">
<tr>
<td style="width:28%">
<div style="overflow: hidden; height: 65px;">
<!-- Place this tag where you want the +1 button to render -->
<div class="g-plusone" data-size="tall"></div>
<div class="fb-like" data-href="https://www.facebook.com/team3926" data-send="false" data-layout="box_count" data-width="50" data-show-faces="true" data-font="trebuchet ms" style="position: relative; top: -4px; left: 3px;"></div>
<a href="https://twitter.com/share" class="twitter-share-button" data-text="Check out MPA Robotics! The official Robotics Team of Mounds Park Academy. #FRC #OMGrobots" data-count="vertical" data-via="MPARobotics">Tweet</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>

<!-- Place this render call where appropriate -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
</div>
<br />
<a href="http://www.w3.org/html/logo/">
<img src="http://www.w3.org/html/logo/badge/html5-badge-h-css3-graphics-multimedia-semantics.png" alt="HTML5 Powered with CSS3 / Styling, Graphics, 3D &amp; Effects, Multimedia, and Semantics" title="HTML5 Powered with CSS3 / Styling, Graphics, 3D &amp; Effects, Multimedia, and Semantics" style="width:88%; height:64px; margin-left: 25px;">
</a>
<!--
<div id="google_translate_element" style="margin-top: 6px;"></div><script>
function googleTranslateElementInit() {
  new google.translate.TranslateElement({
    pageLanguage: 'en',
    layout: google.translate.TranslateElement.InlineLayout.SIMPLE
  }, 'google_translate_element');
}
</script><script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
-->
<!--
<a href="/wordpress" style="color: orange;"><h2 class="quicklinks" style="border-top-left-radius: 5px; border-top-right-radius: 5px; margin-top: -5px;">Blog</h2></a>
<a href="https://facebook.com/team3926" style="color: orange;"><h2 class="quicklinks">Facebook</h2></a>
<a href="https://my.usfirst.org/stims/site.lasso" style="color: orange;"><h2 class="quicklinks" style="border-bottom-left-radius: 5px; border-bottom-right-radius: 5px;">Registration</h2></a>
-->
</td>

<td style="width: 43%">
<script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 4,
  interval: 30000,
  width: 'auto',
  height: 100,
  theme: {
    shell: {
      background: '#333333',
      color: '#ffffff'
    },
    tweets: {
      background: '#000000',
      color: '#ffffff',
      links: '#0b7fb5'
    }
  },
  features: {
    scrollbar: true,
    loop: false,
    live: true,
    hashtags: true,
    timestamp: true,
    avatars: true,
    behavior: 'all'
  }
}).render().setUser('MPARobotics').start();
</script>
</td>

<td style="width:30%">
<h4 style="margin: 8px;">Thanks to our <a href="/Sponsors">Sponsors</a>!</h4>
<a href="http://jcpenney.com"><img src="/images/Sponsors/jcpenny.svg" alt="jcpenney" class="sponsor" id="jcpennyfooter" /></a>
<a href="http://www.nasa.gov"><img src="/images/Sponsors/NasaFooter.png" alt="Nasa" class="sponsor" id="nasafooter" /></a>
</td>
</tr>
</table>
</div>

</div>

<div id="mobilecontent">
<?php include('mobilefooter.php'); ?>
</div>

<?php echo $footerstuff; 
include('analytics.php'); ?>
</body>
</html>