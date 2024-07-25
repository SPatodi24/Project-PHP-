<?php
error_reporting(0);
include 'config.php';
session_start();
$name=$_GET['name'];   //fetched from download,video name
$vall=mysql_query("select amount from videos where location like '%$location'");
$rs=mysql_fetch_assoc($vall);
$amt=$rs['amount'];
// echo $vall;
?>

<html >
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

<a href="homepg.html"> <img src="logo.jpg" alt="Logo" width="250" height="180" align=left> </a>


	<div id="templatemo_background_section_top">
    
    	<div class="templatemo_container">
		
        	<div id="templatemo_header">
				<div id="templatemo_logo_section">            
		        	<h1>Online Video Downloading</h1>            
				</div>
<div id="footer">
 	<h4>Copyright © 2014 Blingdownloader.com</h4>
</div>
         	</div><!-- end of headder -->
                
    		<div id="templatemo_menu_panel">
                            
		    </div> <!-- end of menu -->
            
		</div><!-- end of container-->
        
	</div><!-- end of templatemo_background_section_top-->

<h1 align=center><u>Payment Receipt</u></h1>
<table border=5 bgcolor=#ff9933 align=center style="width:400px" > 

<tr><th>E-Mail</th><td><?php echo $_SESSION['email']; ?>
<tr><th>Video Name</th><td><?php echo $name; ?>
<tr><th>Amount</th><td><?php echo $amt; ?>


</table>
<br><br><br><br>
<!--  <a href="homepg.html" onclick="window.close()"><font size=4 color="yellow">Return to home page</font></a> -->
</form>







</body>
</html>
