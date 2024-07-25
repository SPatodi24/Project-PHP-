<?php
session_start();
$name=$_SESSION['uname'];
if(isset($name) && $name!="")
    {
?>
﻿<html >
<head>
<title>Online Video Downloading</title>

<link href="slider.css" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet" type="text/css" />
<style>
h1 {
font-family: 'Tangerine', serif;
font-size: 48px;
}
</style>

</head>

<body background="images/wow.jpg" >
<a href="homepg.html"> <img src="logo.jpg" alt="Logo" width="250" height="180" align=left> </a>	<div id="templatemo_background_section_top">
<a href="https://www.facebook.com/bling24x7"><img src="facebook.png" align=right height=35 width=35></a>    
<a href="https://twitter.com/"><img src="twitter.ico" align=right height=35 width=35></a>
<a href="https://plus.google.com/up/follow"><img src="gplus.png" align=right height=39 width=39></a>

	<div id="logo pic">
    	<div class="templatemo_container">
		
        	<div id="templatemo_header">
				<div id="templatemo_logo_section">          

					<h1>Online Video Downloading</h1>            
				</div>
                <div id="templatemo_search_box">
	                <form action="search.php" method="post">
    	            	<input name="searchme" type="text" id="textfield" value="" required/>
        	            <input type="submit" name="Search" value="" alt="Search" id="button" title="Search" />
					</form>
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
                    <br> <br><br><br> <br>

<a href="vamp.html"><img src="vamp.jpg" alt="The Vampire Diaries" width=1000 height=500 align=center ></a>
 <br><br><br> 
<a href="drag.html"><img src="d.jpg" alt="dragons" width=1000 height=250 align=center ></a>
 <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br>
 <br><br><br>		
		</div>
                
		    </div> <!-- end of menu -->
            
		</div><!-- end of container-->
        
	</div><!-- end of templatemo_background_section_top-->

<!--footer -->



</body>
</html>
<?php
    }else
        {
?>
<script>
 window.location="login.html";
</script>
        <?php
    }
?>