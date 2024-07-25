<?php
error_reporting(0);
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

<body background="images/ad.jpg" >
<a href="homepg.html"> <img src="logo.jpg" alt="Logo" width="250" height="180" align=left> </a>	<div id="templatemo_background_section_top">

	<div id="logo pic">
    	<div class="templatemo_container">
		
        	<div id="templatemo_header">
				<div id="templatemo_logo_section">          

					<h1><b>Online video downloading</b></h1>
				</div>
                <div id="templatemo_search_box">
	               <!-- <form method="post">
    	            	<input name="searchme" type="text" id="textfield" value="" required/>
        	            <input type="submit" name="Search" value="" alt="Search" id="button" title="Search" />
					</form> -->
                </div>
         	</div><!-- end of headder -->
                
    		<div id="templatemo_menu_panel">
            
    			<div id="templatemo_menu_section">
                
            		<ul>
		                <li><a href="adhomepg.html"  class="current">Home</a></li>
        		        <li><a href="add.html">Add Video</a></li>
		                <li><a href="delete.php">Delete Video</a></li> 
						<li><a href="adlogout.php">Logout</a></li>                        
		            </ul> 
                    <br> <br><br><br> <br><br><br> 

				</div>
                
		    </div> <!-- end of menu -->
            
		</div><!-- end of container-->
        
	</div><!-- end of templatemo_background_section_top-->

<br><br><br><br><br><br><br><br><br>
<br><br>
<h1 align=center><u>Delete Video</u></h1>
<form method="POST">
<font size=5>Category:
<select name="cat">
  <option value="movie">Movie</option>
  <option value="tv">Tv Show</option>
  <option value="funny">Funny</option>
  <option value="song">Songs</option>
  <option value="education">Education</option>
</select>
   <input type="submit" name="show" value="Show Video">
  <br><br>
<font size=5>Enter the Video ID:</font><input type="text" name="id" required >
   <input type="submit" value="Delete Video"> <!-- onsubmit="return confirm('Are you sure you want to submit this data?')" -->
   <br><br><br>
   <font color="blue" >* unpaid video:0  paid video:1 </font>
 
   <br><br>   <br>
</form>

</body>
</html>

<?php
//print_r($_POST);
error_reporting(0);
include 'config.php';
$category=$_POST['cat'];
$v_id=$_POST['id'];

?>
<table border=2 align=center style="width:1200px"> 
<tr><th>Video ID</th><th>Name</th><th>Type</th><th>Description</th>

<?php
if($category!='')
//if(isset($category) && $category!="" && isset($v_id) && $v_id!="")
    {
    $query="select * from videos where category like '%$category%'";
    $result=mysql_query($query);
while($rs=mysql_fetch_array($result))
{
?>
 
 <tr><td><?php echo $rs['v_id']; ?><td><?php echo $rs['v_name']; ?><td><?php echo $rs['type']; ?><td><?php echo $rs['desc']; ?></tr>
<?php
}
?>
</table>
<?php
$q="delete from videos where v_id=".$v_id;

$mess=mysql_query($q);
if($mess==1)
{

	echo "<script>alert('Video Deleted!');</script>";
}
else
{
echo "<script>alert('Error!! Video not deleted!!');</script>";
}
}

?>

