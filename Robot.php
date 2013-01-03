<?php 
$headerstuff = NULL;
$pageTitle = "MPA Robotics - The Robot";
include('header.php');
?>

<div id="content" style="height: 600px; padding: 0px;">

    <div class="selectbar">
        <p>Select a year:</p>
        <p><a href="#" onClick="document.getElementById('2013').style.display = 'none'; document.getElementById('2012').style.display = 'block';">2012</a>|<a href="#" onClick="document.getElementById('2012').style.display = 'none'; document.getElementById('2013').style.display = 'block';">2013</a></p>
    </div>
    
    <div id="2012">
        <div id="robotImage" style="background: url();">
            <div class="node" onclick="document.getElementById('2012content').innerHTML = 'Slide 1';"></div>
            <div class="node" onclick="document.getElementById('2012content').innerHTML = 'Slide 2';"></div>
        </div>
        
        <div id="robotContent">
            <div class="contentStatic">
                <h1>Rebound Rumble</h1>
                <h2>2012 Robot Name Here</h2>
                <p id="2012content">Content</p>
            </div>
            
            <div class="contentStub">
            </div>
        </div>
    </div>
    
    <div id="2013" style="display: none;">
        <div id="robotImage" style="background: url();">
            <!--<div class="node"></div>-->
        </div>
        
        <div id="robotContent">
            <div class="contentStatic">
                <h1>Classified</h1>
                <h2>Classified</h2>
                <p id="2013content">Classified</p>
            </div>
            
            <div class="contentStub">
            </div>
        </div>
    </div>
    
</div>
<?php 
$footerstuff = NULL;
include('footer.php');
?>