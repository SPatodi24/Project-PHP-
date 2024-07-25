<?php
error_reporting(0);
//print_r($_POST);
include 'config.php';
session_start();

$hid=$_POST['hid'];
$bank=$_POST['bank'];
$cvv=$_POST['cvv']; 
$date=$_POST['date'];
$email=$_SESSION['email'];
$cname=$_POST['cname'];
$card=$_POST['card'];
$query="insert into payment values ('','$email','$cname','$card','$bank','$cvv','$date',now())";
$get=mysql_query($query);
if($get == '1')
{
echo "<font size=5>Payment Successful!!! You can now download the video!!!!</font>";
}
?>
<html>
<head>

<meta http-equiv="Content-Language" content="en-us"> <!-- used to -->

</head>
<body background="images/wow.jpg">

<table border="0" cellpadding=0 cellspacing=0 width="100%" height="100%">
	<tr>
		<td align="center">
		
				<table border="0" cellpadding=0 cellspacing=1 width="66%">
			<tr>
				<td bgcolor="#C0C0C0"><b>
				<font color="#5E5EFF" size="6">&nbsp;Download Wizard</font></b></td>
			</tr>
			<tr>
				<td bgcolor="#C0C0C0" width="99%" align="center"><b>
				<font size="4"><font color="#008000">Name of video:  <?php echo $_POST['hid']; ?></font>&nbsp;
				</font></b></td>
			</tr>
	<!--		<tr>
				<td bgcolor="#C0C0C0" width="99%">
				<p align="center"><a href="<?php //echo $_POST['hid'];?>?action=receipt&name=<?php// echo $_POST['hid'];?>"><img src="images/download.png" border=0></a></td>
			</tr>  -->
		</table>
			
	<!--	</td>
	</tr>
	<tr>
	<td>  -->
	
<?php
$ve=$_POST['hid'];
$videoName="$ve.mp4";
$value = explode(".",$videoName); 
$year= $value['0'];
$v=$year.".zip";
echo "<a href='clips/$v'><font size=7>Download</font></a>";
 echo "<br><br><br><br><br><br><br><br><br>";
 echo "<a href='bill.php?location=$hid&name=$ve'>see receipt</a>";


//	if($_GET['action'] =='receipt')
	//{	
	//header('location: bill.php?location=$hid');
	//}
	
	?>
	
	
	</td>
	</tr>
</table>
</body></html>