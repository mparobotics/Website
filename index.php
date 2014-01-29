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
    M9::('tagname')
</br>
<h1>FRC 2014</h1>
</br>
<h2>Aerial Assist</h2>
<p>In Aerial Assist, points are scored by getting yoga balls in to either a high goal (10 points) or a low goal (1 point). Bonus points can be earned through either assisting others on your alliance, and performing certain functions in autonomous.<a href="http://team3926.org/Competitions">Click me to watch the video</a></p>
</br>
</div>
</div>

<div class="split">
    <!--<p class="splittext">This is a split</p>-->
</div>

<div class="metronav" style="height: 385px;">

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

	
	<a href="careers.php" class="metroitemlong" style="background-image:url('/images/Metro/careers.svg');">
       <img src="images/MPAror/arrowwhite.svg" width="70%" height="70%" alt="Arrow" class="metroarrowsmall" />
    </a>
    
    <a href="newsletter.php" class="metroitemlong" style="background-image:url('/images/Metro/newsletter.svg');">
        <img src="images/MPAror/arrowwhite.svg" width="70%" height="70%" alt="Arrow" class="metroarrowsmall" />
    </a>
	
</div>

</div>
<?php 
$footerstuff = NULL;
include('footer.php');
?>
