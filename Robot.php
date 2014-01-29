<?php 
$headerstuff = NULL;
$pageTitle = "MPA Robotics - The Robot";
include('header.php');
?>

<div id="content" style="height: 600px; padding: 0px;">

    <div class="selectbar">
        <p>Select a year:</p>
        <p><a href="#" onClick="document.getElementById('2013').style.display = 'none'; document.getElementById('2012').style.display = 'block';">2012</a> | <a href="#" onClick="document.getElementById('2012').style.display = 'none'; document.getElementById('2013').style.display = 'block';">2013</a> | <a href="#" onClick="document.getElementById('2014').style.display = 'none'; document.getElementById('2014').style.display = 'block';">2014</a></p>
    </div>
    
    <div id="2012">
        <div class="robotImage" style="background: url(images/Robot/2012.jpg);">
            <!--
            <div class="node" onclick="document.getElementById('2012content').innerHTML = 'Slide 1';"></div>
            <div class="node" onclick="document.getElementById('2012content').innerHTML = 'Slide 2';"></div>
            -->
        </div>
        
        <div class="robotContent">
            <div class="contentStatic">
                <h1>Rebound Rumble</h1>
                <h5><a href="https://www.youtube.com/watch?v=nOXsdhZZSdM"> Here is a link to the game animation</a></h5>
                <p id="2012content">The 2012 FRC game was Rebound Rumble. In this game, robots can either balance on a ramp or shoot basketballs into hoops by detecting reflective tape around the edges of each goal. Our robot was intended to solely shoot. It would do so by driving over a ball, compressing it, sucking it up a conveyer belt, and ejecting the ball when it reaches the wheels on our shooter which move in opposite directions. We did not have a mechanism to push the ramp down, and the bump was too high to roll over, which limited our mobility significantly. However, we learned the importance of having an alliance when other members of our alliance helped us get over the ramp. Through this process we learned a lot about the importance of team work, time management and many other things as it was our rookie year. </p>
            </div>
            
            <div class="contentStub">
            </div>
        </div>
    </div>
    
    <div id="2013" style="display: none;">
        <div class="robotImage" style= width="50px" height="50px" alt="2013 robot">
            <!--<div class="node"></div>-->
        </div>
        
        <div class="robotContent">
            <div class="contentStatic">
                <h1>Ultimate Ascent</h1>
                <h5> <a href="http://www.youtube.com/watch?v=itHNW2OFr4Y"> Here is a link to the game animation</a> </h5> 
                <p id="2013content">The 2013 FRC game was Ultimate Ascent. In this game, robots can either climb a pyramid or shoot frisbees into goals by detecting reflective tape around the edges of each goal. Our robot was intended to solely climb. It would do so by starting inside the pyramid and releasing the weight out in front of the bumpers after the match started, as all parts of the robot must fit inside the frame perimeter at the beginning of the match. Once the weight was deployed, two motors would lift the arm up, and the hook would spring out and grab onto the bar. Then, the motors would go the other direction, thus raising the robot. The weight kept the robot at the proper angle so after the stationary hooks balanced the robot on the bar below, this would repeat three times until the robot would be at the top of the pyramid. 
One thing that is unique about this robot is that there is no drive train, meaning there are no wheels for the robot to move horizontally. This is possible because one requirement of the game is for all the robots to start the match touching the pyramid, so we had to start where we wanted to be horizontally. Through this process, we have learned a lot about the importance of prototyping, and making solely what needed to be made. We started out with a drive train, but we took it out when it presented a problem with weight distribution in getting the robot at the proper angle to reach to the second and third bars of the pyramid. 
</p>
            </div>
            
            <div class="contentStub">
            </div>
        </div>
    </div>
    
    
    
    
    
    
     <div id="2014" style="display: none;">
        <div class="robotImage" style= width="50px" height="50px" alt="2013 robot">
            <!--<div class="node"></div>-->
        </div>
        
        <div class="robotContent">
            <div class="contentStatic">
                <h1>Aerial Assist</h1>
                <h5> <a href="#"> Here is a link to the game animation</a> </h5> 
                <p id="2014content"><b>Coming soon!</b></p>
            </div>
            
            <div class="contentStub">
            </div>
        </div>
    </div>
    <!-- -->
    
    
    
    
    
    <div id="2014" style="display: none;">
        <div class="robotImage" style="background: url(images/Robot/ComingSoon.svg);">
            <!--<div class="node"></div>-->
        </div>
        
        <div class="robotContent">
            <div class="contentStatic">
                <h1>Unknown</h1>
                <h2>Classified</h2>
                <p id="2014content">Classified</p>
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