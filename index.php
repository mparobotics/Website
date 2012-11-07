<?php 
$headerstuff = '<style type="text/css">a{ color:#09F;}</style>';
$pageTitle = "MPA Robotics - Home";
#$desc = "This is a description";
include('header.php');
flush();
?>

<div id="content" class="navDisabled">

<div class="slidenav">
<div class="slidenavinfo">
<h1>Title</h1>
<h2>Put a Subtitle Here</h2>
<p>Content contentcontent content content content content. contentsjdhfjs ksjdhjfkh ueh fiuhw iueh iuhe . Here is some more content that can be wrapped</p>
<a href="http://google.com">Learn More</a>
</div>
</div>

<div class="split">
<p class="splittext">This is a split</p>
</div>

<div class="metronav" style="height: 325px;">

<div class="metroitem" style="background:orange;">
<img src="images/arrow.svg" alt="Arrow" class="metroarrow" />
<p class="metrodescription">Media</p>
</div>

<div class="metroitem" style="background:red;">
<img src="images/arrow.svg" alt="Arrow" class="metroarrow" />
<p class="metrodescription">Competitions</p>
</div>

<div class="metroitem" style="background:purple;">
<img src="images/arrow.svg" alt="Arrow" class="metroarrow" />
<p class="metrodescription"><i>FIRST</i></p>
</div>

<div class="metroitem" style="background:green;">
<img src="images/arrow.svg" alt="Arrow" class="metroarrow" />
<p class="metrodescription">Partners</p>
</div>

<div class="metroitem" style="background:blue;">
<img src="images/arrow.svg" alt="Arrow" class="metroarrow" />
<p class="metrodescription">MPAror Merchandise</p>
</div>

<div class="metroitem" style="background:pink;">
<img src="images/arrow.svg" alt="Arrow" class="metroarrow" />
<p class="metrodescription">News</p>
</div>

</div>

<!--
<div id="mobilecontent">
<br />
<br />
<?php include('mobilefooter.php'); ?>
</div> -->

</div>
<?php 
$footerstuff = NULL;
include('footer.php');
?>
