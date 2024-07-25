<?php
session_start();
//print_r($_POST);
?>
<html>
<head>
<meta http-equiv="Content-Language" content="en-us">
</head>
<body topmargin=0 leftmargin=0 rightmargin=0 bottommargin=0 background="images/wow.jpg">
<script>
function myFunction()
{
var x;
var r=confirm("Ok Make a decision from your mind!!");
if (r==true)
  {x="You pressed OK!";
  <?php
  $query="insert into payment values ('','$email','$cname','$card','$bank','$cvv','$date',now())";
$get=mysql_query($query); 
echo "<font size=5>Payment Successful!!! You can now download the video!!!!</font>";
?>
  
  }
else
  {
  x="You pressed Cancel!";
  }
document.getElementById("demo").innerHTML=x;
}
</script>




<form action="download.php" method=post>
<input type=hidden name=hid value="<?php echo $_GET['location']; ?>">
<table border="0" width="100%" height="100%">
	<tr>
		<td align="center" bgcolor="#C0C0C0" valign=middle>
<table border="0" width="60%" cellpadding=5 cellspacing=1>
	<tr>
		<td colspan="2" bgcolor="#FFFFFF"><b><font color="#003399" size="6">
		Welcome to Payment Wizard</font></b></td>
	</tr>
	<tr>
		<td width="37%" bgcolor="#FFFFFF">&nbsp;</td>
		<td width="63%" bgcolor="#FFFFFF">&nbsp;</td>
	</tr>
	<tr>
		<td width="37%" bgcolor="#FFFFFF" align="right"><font color="#003399">
		<b>&nbsp; Name&nbsp;&nbsp; </b></font></td>
		<td width="63%" bgcolor="#FFFFFF"><?php echo $_SESSION['uname'];?></td>
	</tr>
	<tr>
		<td width="37%" bgcolor="#FFFFFF" align="right"><font color="#003399">
		<b>&nbsp; Email&nbsp;&nbsp; </b></font></td>
		<td width="63%" bgcolor="#FFFFFF"><?php echo $_SESSION['email']; ?></td>
	</tr>
	<tr>
		<td width="37%" bgcolor="#FFFFFF" align="right"><font color="#003399">
		<b>&nbsp; Card Holder Name&nbsp;&nbsp; </b></font></td>
		<td width="63%" bgcolor="#FFFFFF"><input type=bank name=cname size="32" required></td>
	</tr>
	<tr>
		<td width="37%" bgcolor="#FFFFFF" align="right"><font color="#003399">
		<b>&nbsp; Card Number&nbsp;&nbsp; </b></font></td>
		<td width="63%" bgcolor="#FFFFFF"><input type=bank name=card size="32"  required></td>
	</tr>
	<tr>
		<td width="37%" bgcolor="#FFFFFF" align="right"><font color="#003399">
		<b>&nbsp; Bank Name&nbsp;&nbsp; </b></font></td>
		<td width="63%" bgcolor="#FFFFFF"><input type=bank name=bank size="32" required></td>
	</tr>
	<tr>
		<td width="37%" bgcolor="#FFFFFF" align="right"><font color="#003399">
		<b>&nbsp; CVV&nbsp;&nbsp; </b></font></td>
		<td width="63%" bgcolor="#FFFFFF">
		<input type=password name=cvv size="32" required></td>
	</tr>
	<tr>
		<td width="37%" bgcolor="#FFFFFF" align="right"><font color="#003399">
		<b>&nbsp; Expiry Date&nbsp;&nbsp; </b></font></td>
		<td width="63%" bgcolor="#FFFFFF"><input type=date name=date size="32" required></td>
	</tr>
	<tr>
		<td width="37%" bgcolor="#FFFFFF">&nbsp;</td>
		<td width="63%" bgcolor="#FFFFFF"><button onclick="myFunction()">Proceed</button>
			<p id="demo"></p>
		<!--<input type=submit name=Proceed value="proceed">--></td>
	</tr>
</table>
</td>
	</tr>
</table>
</form>
</body>
</html>



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
//$query="insert into payment values ('','$email','$cname','$card','$bank','$cvv','$date',now())";
//$get=mysql_query($query);
//if($get == '1')
{
//echo "<font size=5>Payment Successful!!! You can now download the video!!!!</font>";
}
?>
