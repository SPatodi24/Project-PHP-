<?php
include 'd.html';
session_start();
$name=$_SESSION['uname'];
if(isset($name) && $name!="")
    {
?>
<html >
<head>
<title>Online Video Downloading</title>
<link href="http://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet" type="text/css" />
<style>
h1 {
font-family: 'Tangerine', serif;
font-size: 48px;
}
</style>

<!--
<link href="http://vjs.zencdn.net/4.3/video-js.css" rel="stylesheet">
<script src="http://vjs.zencdn.net/4.3/video.js"></script>
<style type="text/css">
  .vjs-default-skin .vjs-play-progress,
  .vjs-default-skin .vjs-volume-level { background-color: #00ffcc }
  .vjs-default-skin .vjs-control-bar { font-size: 125% }
</style>    -->
<link href="slider.css" rel="stylesheet" type="text/css" />
</head>


<body background="images/wow.jpg" >

<a href="homepg.html"> <img src="logo.jpg" alt="Logo" width="250" height="180" align=left> </a>	<div id="templatemo_background_section_top">
    	<div id="logo pic">
    	<div class="templatemo_container">
		
        	<div id="templatemo_header">
				<div id="templatemo_logo_section">          
					<h1>Online video downloading</h1>            
				</div>

                <div id="templatemo_search_box">
	                
                </div>
         	</div><!-- end of headder -->
                
    		<div id="templatemo_menu_panel">
            
    			<div id="templatemo_menu_section">
                
            		<ul>
		                <li><a href="lhomepg.php"  class="current">Home</a></li>
 		                <li><a href="logout.php">Log Out</a></li>
						<li><a href="movi.php">Movies</a></li>
						<li><a href="funny.php">Funny</a></li>
						<li><a href="tv.php">Tv Show</a></li>
						<li><a href="s.php">Songs</a></li>
						<li><a href="edu.php">Educational</a></li>             
		            </ul> 
				</div>
                
		    </div> <!-- end of menu -->
            
		</div><!-- end of container-->
        
	
  <br><br><br> <br><br><br>  <br><br><br> <br><br><br> 
<!--
  <video id="hello" class="video-js vjs-default-skin" controls preload="auto" width="640" height="364" data-setup="{}">
<source src="tv.mp4" type='video/mp4'>
</video>   -->
<embed src="clips/tv.mp4" type='video/mp4' width="640" height="364" autostart="false">
<h2>Satyamev jayate</h2> 
 <br><br><br>  

<!-- <video id="hello" class="video-js vjs-default-skin" controls preload="auto" width="640" height="364" data-setup="{}">
<source src="dance2.mp4" type='video/mp4'>
</video>  -->
<embed src="clips/dance2.mp4" type='video/mp4' width="640" height="364" autostart="false">
<h2>Nach Baliye Dance Competition</h2> 
 <br><br><br>  

 </body>
</html>
 <?php
    }
?>