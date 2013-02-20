<?php 
$headerstuff = '<style type="text/css">a{ color:#09F;}</style>';
$pageTitle = "MPA Robotics - Home";
#$desc = "This is a description";
include('header.php');
flush();
?>

<div id="content" class="navDisabled">

<div class="slidenav" style="background: url(images/SlideNav/UltimateAscent.svg)"> 
<div class="slidenavinfo">
</br>
<h1>North Star Regional</h1>
</br>
<h2>This Years Game: Ultimate Ascent</h2>
</br>
<p>Regional competition is coming up soon! Come support Team 3926 at the North Star Regional, March 28-30th at Mariucci Arena.</p>
</br>
<a href="/Competitions">More information about Competition</a>
</div>
</div>

<div class="split">
    <!--<p class="splittext">This is a split</p>-->
</div>

<div class="metronav" style="height: 325px;">

    <a href="Media" class="metroitem" style="background-image:url('/images/Metro/Media.png');">
        <p class="metrodescription">Media</p>
        <img src="images/MPAror/arrowwhite.svg" alt="Arrow" class="metroarrow" />
    </a>
    
    <a href="Competitions" class="metroitem" style="background-image:url('/images/Metro/Competitions.svg');">
        <p class="metrodescription">Competitions</p>
        <img src="images/MPAror/arrow.svg" alt="Arrow" class="metroarrow" />
    </a>
    
    <a href="FIRST" class="metroitem" style="background-image:url('/images/Metro/FIRST.svg');">
        <p class="metrodescription"><i>FIRST</i></p>
        <img src="images/MPAror/arrow.svg" alt="Arrow" class="metroarrow" />
    </a>
    
    <a href="Sponsors" class="metroitem" style="background-image:url('/images/Sponsors/Metro/you.svg');">
        <p class="metrodescription">Partners</p>
        <img src="images/MPAror/arrowwhite.svg" alt="Arrow" class="metroarrow" />
    </a>
    
    <a href="Team" class="metroitem" style="background-image:url('/images/Metro/MPAror.svg');">
        <p class="metrodescription">About The MPArors</p>
        <img src="images/MPAror/arrowwhite.svg" alt="Arrow" class="metroarrow" />
    </a>
    
    <a href="News" class="metroitem" style="background-image:url('/images/Metro/News.svg');">
        <p class="metrodescription">News</p>
        <img src="images/MPAror/arrow.svg" alt="Arrow" class="metroarrow" />
    </a>

</div>

</div>
<?php 
$footerstuff = NULL;
include('footer.php');
?>
