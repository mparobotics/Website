<?php 
$headerstuff = '<style type="text/css">a{ color:#09F;}</style>';
$pageTitle = "MPA Robotics - Home";
#$desc = "This is a description";
include('header.php');
flush();
?>

<div id="content" class="navDisabled">
<div class="contentblock" id="newsFeed" style="background:url(/images/Regional.png); text-align: right;">

<div id="articleSelector">
<!--<p class="articleItem" id="article1" style="border-top-left-radius: 5px;" onclick="articleSelect('Learn why <i>FIRST</i> Team 3926 is different from the rest.','/images/Articles/MPArors.png','/Team','article1');">The Team</p>-->

<p class="articleItem" id="article1" onclick="articleSelect('Join the MPArors at our <i>FIRST</i> competition','/images/Regional.png','/Competition','article1');">North Star</p>

<p class="articleItem" id="article2" onclick="articleSelect('What is <i>FIRST</i> Robotics? Find out here!','/images/Articles/FIRSTWebsite.svg','/FIRST','article2');"><i>FIRST</i> Robotics</p>

<p class="articleItem" id="article3" onclick="articleSelect('Learn about the 2012 <i>FIRST</i> Robotics game Rebound Rumble','/images/Articles/TheGame.png','/Game','article3');"><!-- I lost -->The Game</p>

<p class="articleItem" id="article4" onclick="articleSelect('Learn about the wonderful organizations who help fund our team.','/images/Articles/Sponsors.png','/Sponsors','article4');">Sponsors</p>

<p class="articleItem" id="article5" onclick="articleSelect('Morgan Freeman explains <i>FIRST</i>, The Superbowl of Smarts.','/images/Articles/Videos.png','/Videos','article5');">Videos</p>

<p class="articleItem" id="article6" onclick="articleSelect('Want to stay up to date the the MPArors? Check out our blog.','/images/Articles/Blog.png','/wordpress/','article6');">Blog</p>

<p class="articleItem" id="article7" onclick="articleSelect('Visit the official website for the <i>FIRST</i> Robotics Competition.','/images/Articles/FIRSTWebsite.svg','http://usfirst.org','article7');"><i>FIRST</i> Website</p>

<p class="articleItem" id="article8" onclick="articleSelect('If you are looking for a great way to help the MPArors, why not donate?','/images/Articles/WishList.png','/WishList','article8');">Wish List</p>
</div>

<p id="articleText">
Join the MPArors at our <i>FIRST</i> competition
</p>
<a id="articleLink" href="http://team3926.org/Competition"><img src="/images/ReadMore.svg" alt="Read More" style="width: 125px; margin-top: 300px;" /></a>
</div>

<!-- Begin Content Exp -->
<div id="sponsors">
<h1>MPA Robotics is Powered by:</h1>
<div id="sponsorswoosh" class="swoosh">
<a href="http://www.nasa.gov/"><img src="/images/Sponsors/nasa.png" class="sponsors" id="nasa" alt="Nasa" /></a>
<a href="http://jcpenney.com"><img src="/images/Sponsors/jcpenny.svg" class="sponsors" id="jcpenny" alt="jcpenny" /></a>
<a href="http://moundsparkacademy.org/currentfamilies/parentsassociation/"><img src="/images/Sponsors/mpapa.png" class="sponsors" id="mpapa" alt="MPA Parents Association" /></a>
<a href="/Sponsors" id="moresponsors">More Sponsors -></a>
</div>
</div>

<div id="abouttheteam">
<div id="teaminfo">
<h1>Upcoming Events</h1>
<p style="line-height:1.5;">Fans of robotics should also be getting ready for the 2013 season.  Kickoff will be January 7th, and we will be competing at Mariucci Arena in March.
<br />
<br />
Photos from Woodbury Days are located in the <a href="http://team3926.org/Media">Media</a> tab of the website.
</p>
</div>
<div id="firsttw">
<script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'search',
  search: 'FIRST Robotics',
  interval: 30000,
  title: 'What does the world say about',
  subject: 'FIRST Robotics',
  width: 'auto',
  height: 300,
  theme: {
    shell: {
      background: '#353e61',
      color: '#ffffff'
    },
    tweets: {
      background: '#ffffff',
      color: '#444444',
      links: '#1985b5'
    }
  },
  features: {
    scrollbar: true,
    loop: true,
    live: true,
    behavior: 'default'
  }
}).render().start();
</script>
</div>
</div>

<!--
<div id="mobilecontent">
<br />
<br />
<?php include('mobilefooter.php'); ?>
</div> -->

<!-- End Content Exp -->

</div>
<?php 
$footerstuff = NULL;
include('footer.php');
?>
