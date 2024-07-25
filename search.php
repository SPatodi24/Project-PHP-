<?php
session_start();
$search=$_POST['searchme'];
error_reporting(0);

?>
<html>
<head><title> trial succeeded</title>
<link href="http://vjs.zencdn.net/4.3/video-js.css" rel="stylesheet">
<link href="slider.css" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Tangerin
<script src="http://vjs.zencdn.net/4.3/video.js"></script>
<style type="text/css">
  .vjs-default-skin .vjs-play-progress,
  .vjs-default-skin .vjs-volume-level { background-color: #00ffcc }
  .vjs-default-skin .vjs-control-bar { font-size: 125% }
  
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
						
        	<!--	        <li><a href="regis.html">Register</a></li>
		                <li><a href="login.html">Login</a></li>   
        		        <li><a href="about.html">About Us</a></li> 
                		<li><a href="contactus.html">Contact Us</a></li>                     
                		<li><a href="copy.html">Copyright</a></li>   -->                     
		            </ul> 
                    
				</div>
                
		    </div> <!-- end of menu -->
            
		</div><!-- end of container-->
        
	</div><!-- end of templatemo_background_section_top-->




		<table border="0" width="52%">
<?php
if(isset($search)&& $search!="")
{
include 'config.php';
$sql="select * from videos where keywords like '%$search%'";
$result=mysql_query($sql);
while($rs=mysql_fetch_assoc($result))
{
?>

			<tr>
				<td colspan="3">
				<a href="#" target="name" onclick="window.open('common.php?location=<?php echo $rs['location']; ?>','name','height=1000, width=750,toolbar=no,directories=no,status=no, menubar=no,scrollbars=no,resizable=no'); return false;">
				<!--<a href="common.php?location=<?php //echo $rs['location']; ?>" target="_blank"> -->
				<video id="hello" class="video-js vjs-default-skin" controls preload="auto" width="540" height="164" data-setup="{}">
 				<source src="<?php echo $rs['location']; ?>" type='video/mp4'>
				</video> 
				</a>
				</td>
			</tr>
			<tr>
				<td width="57%"><?php echo $rs['v_name']; ?></td>
				<td width="18%"><?php $type=$rs['type']; if($type==0){echo "UNPAID";}else{echo "PAID";} ?></td>
				<td width="21%">
				<?php
				if($_SESSION['uname']!='')
				{
				
				if($type==0)
				{
				    $vl=$rs['location'];
					//$videoName="'$v'.mp4";
					$value = explode(".",$vl); 
					$year= $value['0'];
					$v=$year.".zip";
					echo "<a href='clips/$v'>Download</a>";

				
				}else
				{
				?>
				<a href="#" target="name" onclick="window.open('payment.php?location=<?php echo $rs['location']; ?>','name','height=500, width=800,toolbar=no,directories=no,status=no, menubar=no,scrollbars=no,resizable=no'); return false;">
				Download</a>
				<?php
				}
				}
				?>
				</td>
			</tr>
		
<?php
}
}
?>
</table>

</body>
</html>

