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
<h1>Kickoff!</h1>
<h2>Introducing: Rebound Rumble</h2>
<p>Rebound rumble is played on a feild that contains 4 baskets on each side in which robots can score basketballs. Teams must also ballance on bridges in the middle of the feild to score points</p>
<a href="http://google.com">Learn More (Link to blog)</a>
</div>
</div>

<div class="split">
    <!--<p class="splittext">This is a split</p>-->
</div>

<div class="metronav" style="height: 325px;">

    <a href="/Media" class="metroitem" style="background:orange;">
        <p class="metrodescription">Media</p>
        <img src="images/MPAror/arrow.svg" alt="Arrow" class="metroarrow" />
    </a>
    
    <a href="/Competitions" class="metroitem" style="background:red;">
        <p class="metrodescription">Competitions</p>
        <img src="images/MPAror/arrow.svg" alt="Arrow" class="metroarrow" />
    </a>
    
    <a href="/FIRST" class="metroitem" style="background-image:url('/images/Metro/FIRST.svg');">
        <p class="metrodescription"><i>FIRST</i></p>
        <img src="images/MPAror/arrow.svg" alt="Arrow" class="metroarrow" />
    </a>
    
    <a href="Sponsors" class="metroitem" style="background:green;">
        <p class="metrodescription">Partners</p>
        <img src="images/MPAror/arrow.svg" alt="Arrow" class="metroarrow" />
    </a>
    
    <a href="store" class="metroitem" style="background:blue;">
        <p class="metrodescription">MPAror Merchandise</p>
        <img src="images/MPAror/arrow.svg" alt="Arrow" class="metroarrow" />
    </a>
    
    <a href="/News" class="metroitem" style="background:pink;">
        <p class="metrodescription">News</p>
        <img src="images/MPAror/arrow.svg" alt="Arrow" class="metroarrow" />
    </a>

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
