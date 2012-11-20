<?php 
$headerstuff = '<style type="text/css">a{ color:#09F;}</style>';
$pageTitle = "MPA Robotics - Sponsors";
include('header.php');
flush();
?>

<div id="content">
    <div class="metronav" style="height: 325px; margin-top: 60px;">

        <a href="/Media" class="metroitem" style="background: url('images/Sponsors/Metro/jcpenny.svg');">
            <p class="metrodescription">JCPenny</p>
        </a>
        
        <a href="/Competitions" class="metroitem" style="background: url('images/Sponsors/Metro/nasa.svg');">
            <p class="metrodescription">NASA</p>
        </a>
        
        <a href="/FIRST" class="metroitem" style="background: url('images/Sponsors/Metro/reell.svg');">
            <p class="metrodescription">Reell</p>
        </a>
        
        <a href="Sponsors" class="metroitem" style="background:green;">
            <p class="metrodescription">Atreium</p>
            <img src="images/MPAror/arrow.svg" alt="Arrow" class="metroarrow" />
        </a>
        
        <a href="store" class="metroitem" style="background:blue;">
            <p class="metrodescription">SMC</p>
            <img src="images/MPAror/arrow.svg" alt="Arrow" class="metroarrow" />
        </a>
        
        <a href="/News" class="metroitem" style="background:pink;">
            <p class="metrodescription">Underground Printing</p>
            <img src="images/MPAror/arrow.svg" alt="Arrow" class="metroarrow" />
        </a>
    
    </div>
</div>

<?php 
$footerstuff = NULL;
include('footer.php');
?>


