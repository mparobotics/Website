// JavaScript Document

var TimeToFade = 500.0;
var slideshowTimeout = 4000;
var tempsizeX;
var tempsizeY;
var xop;
var yop;
var restartTimeout;
var timein;
var timeout;
var ticker = 0;
var slideshowPics = new Array("/images/Slideshow/slideshow1.png","/images/Slideshow/slideshow2.png","/images/Slideshow/slideshow3.png","/images/Slideshow/slideshow4.png","/images/Slideshow/slideshow5.png");
var arraySize = 5;
var counter = -1;
var command = "";
var time = 0;
arraySize = arraySize-1;


function load() {
	if (true) {
		slideshow();
	}
	articleSelect('Join the MPArors at our <i>FIRST</i> competition','/images/Regional.png','/Competition','article1');
}

function redirect(input) {
	window.location = input;
}

////////////////
//Big Box Code//
////////////////

function enlarge(inputWidth, inputHeight) {
/*
if (box.style.width != "666px") {
	box.style.display = "block";
	xop = 1000/inputWidth;
	yop = 1000/inputHeight;
	videoframe.style.display = "none";
	for(i=0; i<1000; i++) {
		tempsizeY = i/yop;
		tempsizeX = i/xop;
		delay('box.style.width = "'+tempsizeX+'px"', i);
		delay('box.style.height = "'+tempsizeY+'px"', i);
	}
	delay('videoframe.style.display = "block";',1000);
	video.src = "";
	video.src = "http://www.youtube.com/embed/i1QyM9WTF18";
}
*/
document.getElementById("box").style.display = "block";
document.getElementById("box").style.width = "670px";
document.getElementById("box").style.height = "425px";
document.getElementById("videoframe").style.display = "block";
//document.getElementById("morganpromo").play();
}

//Timer Code
function Timer (interval, command) {
    this.interval = interval;
    
    this.fire = function() {
        //Function to call
        setTimeout(command,this.interval);
    };
    this.rearm = function() {
        //Function to call
        this.fire();
    };
}

////////////////////
///Slideshow Code///
////////////////////

function slideshow() {
	TimeToFade = 500.0;
	slideshowTimeout = 4000;
	counter = arraySize;
	while (counter > -1) {
		time = counter*slideshowTimeout;
		timeout = time-TimeToFade;
		timein = time; 
		command = "document.getElementById('headerimg1').style.background = 'url("+slideshowPics[counter]+")'";
		//alert(command);
		delay("fade('headerimg1')",timeout);
		delay(command,time);
		delay("fade('headerimg1')",timein);
		counter = counter-1;
		delay("slideshowLoop()",time);
	}
}
function slideshowLoop() {
	ticker = ticker+1;
	//alert("YES");
	if (ticker == arraySize+1) {
		delay("fade('headerimg1')",slideshowTimeout-TimeToFade);
		delay('slideshow()', slideshowTimeout);
		delay("fade('headerimg1')",slideshowTimeout);
		ticker = 0;
	}
}

/////////////////
//Content Slide//
/////////////////

function nextSlide() {
	TimeToFade = 500;
	fade('slide1');
	fade('slide2');
	fade('leftArrow');
	fade('rightArrow');
	delay('document.getElementById("slide1").style.display = "none"', TimeToFade);
	delay('document.getElementById("slide2").style.display = "block"', TimeToFade);
	delay('document.getElementById("leftArrow").style.display = "block"', TimeToFade);
	delay('document.getElementById("rightArrow").style.display = "none"', TimeToFade);
	delay('fade("slide2")', TimeToFade+300);
	delay('fade("slide1")', TimeToFade+300);
	delay('fade("rightArrow")', TimeToFade+300);
	delay('fade("leftArrow")', TimeToFade+300);
}

function previousSlide() {
	TimeToFade = 500;
	fade('slide1');
	fade('slide2');
	fade('leftArrow');
	fade('rightArrow');
	delay('document.getElementById("slide1").style.display = "block"', TimeToFade);
	delay('document.getElementById("slide2").style.display = "none"', TimeToFade);
	delay('document.getElementById("leftArrow").style.display = "none"', TimeToFade);
	delay('document.getElementById("rightArrow").style.display = "block"', TimeToFade);
	delay('fade("slide2")', TimeToFade+300);
	delay('fade("slide1")', TimeToFade+300);
	delay('fade("rightArrow")', TimeToFade+300);
	delay('fade("leftArrow")', TimeToFade+300);
}

////////////////////
//System Functions//
////////////////////

function delay(command, time) {
	setTimeout(command, time);
}


function fade(eid) {
  var element = document.getElementById(eid);
  if(element == null)
    return;
   
  if(element.FadeState == null) {
    if(element.style.opacity == null 
        || element.style.opacity == '' 
        || element.style.opacity == '1') {
      element.FadeState = 2;
    }
    else {
      element.FadeState = -2;
    }
  }
    
  if(element.FadeState == 1 || element.FadeState == -1) {
    element.FadeState = element.FadeState == 1 ? -1 : 1;
    element.FadeTimeLeft = TimeToFade - element.FadeTimeLeft;
  }
  else {
    element.FadeState = element.FadeState == 2 ? -1 : 1;
    element.FadeTimeLeft = TimeToFade;
    setTimeout("animateFade(" + new Date().getTime() + ",'" + eid + "')", 33);
  }  
}

function animateFade(lastTick, eid) {  
  var curTick = new Date().getTime();
  var elapsedTicks = curTick - lastTick;
  
  var element = document.getElementById(eid);
 
  if(element.FadeTimeLeft <= elapsedTicks) {
    element.style.opacity = element.FadeState == 1 ? '1' : '0';
    element.style.filter = 'alpha(opacity = ' 
        + (element.FadeState == 1 ? '100' : '0') + ')';
    element.FadeState = element.FadeState == 1 ? 2 : -2;
    return;
  }
 
  element.FadeTimeLeft -= elapsedTicks;
  var newOpVal = element.FadeTimeLeft/TimeToFade;
  if(element.FadeState == 1)
    newOpVal = 1 - newOpVal;

  element.style.opacity = newOpVal;
  element.style.filter = 'alpha(opacity = ' + (newOpVal*100) + ')';
  
  setTimeout("animateFade(" + curTick + ",'" + eid + "')", 33);
}

function switchvideo(video) {
	if (video == 1) {
		document.getElementById('video2').style.display = 'none';
		//document.getElementById('video2').src = 'http://www.youtube.com/embed/vYuOKb3gO7E';
		document.getElementById('video1').style.display = "block";
		video2.videoembed2.pause();
	}
	if (video == 2) {
		document.getElementById('video1').style.display = 'none';
		document.getElementById('video2').style.display = "block";
		//document.getElementById('video1').src = 'http://www.youtube.com/embed/i1QyM9WTF18';
		video1.videoembed1.pause();
	}
}

function boxClose() {
	document.getElementById('box').style.display = 'none';
	document.getElementById('box').style.width = 0;
	document.getElementById('box').style.height = 0;	
	//document.getElementById('video1').src = 'http://www.youtube.com/embed/i1QyM9WTF18';
	//document.getElementById('video2').src = 'http://www.youtube.com/embed/vYuOKb3gO7E';
	video1.videoembed1.pause();
	video2.videoembed2.pause();
}

function articleSelect(articleText, articleImage, articleLink, articleId) {
	document.getElementById('article1').style.background = "";
	document.getElementById('article2').style.background = "";
	document.getElementById('article3').style.background = "";
	document.getElementById('article4').style.background = "";
	document.getElementById('article5').style.background = "";
	document.getElementById('article6').style.background = "";
	document.getElementById('article7').style.background = "";
	document.getElementById('article8').style.background = "";
	document.getElementById('articleText').innerHTML = articleText;
	document.getElementById('newsFeed').style.background = 'url("'+articleImage+'")';
	document.getElementById('articleLink').href = articleLink;
	document.getElementById(articleId).style.background = '#78A600';
}