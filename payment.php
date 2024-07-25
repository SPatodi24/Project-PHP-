<?php
session_start();
//print_r($_POST);
?>
<html>
<head>
<meta http-equiv="Content-Language" content="en-us">
</head>
<body topmargin=0 leftmargin=0 rightmargin=0 bottommargin=0 background="images/wow.jpg">
<form action="download.php" method=post>
<input type=hidden name=hid value="<?php echo $_GET['location']; ?>">  <!-- needed to download video ,provide path -->
<table border="0" width="100%" height="100%">
	<tr>
		<td align="center" bgcolor="#C0C0C0" valign=middle>
<table border="0" width="60%" cellpadding=5 cellspacing=1>
	<tr>
		<td colspan="2" bgcolor="#FFFFFF"><b><font color="#003399" size="6"><u>
		Welcome to Payment Wizard</u></font></b></td>
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
		<td width="63%" bgcolor="#FFFFFF"><input type="text" name=cname size="32" required></td>
	</tr>
	<tr>
		<td width="37%" bgcolor="#FFFFFF" align="right"><font color="#003399">
		<b>&nbsp; Card Number&nbsp;&nbsp; </b></font></td>
		<td width="63%" bgcolor="#FFFFFF"><input type="text" name=card size="32" maxlength="16"  required></td>
	</tr>
	<tr>
		<td width="37%" bgcolor="#FFFFFF" align="right"><font color="#003399">
		<b>&nbsp; Bank Name&nbsp;&nbsp; </b></font></td>
		<td width="63%" bgcolor="#FFFFFF"><input type="text" name=bank size="32" required></td>
	</tr>
	<tr>
		<td width="37%" bgcolor="#FFFFFF" align="right"><font color="#003399">
		<b>&nbsp; CVV&nbsp;&nbsp; </b></font></td>
		<td width="63%" bgcolor="#FFFFFF">
		<input type=password name=cvv size="32" maxlength="3" required></td>
	</tr>
	<tr>
		<td width="37%" bgcolor="#FFFFFF" align="right"><font color="#003399">
		<b>&nbsp; Expiry Date&nbsp;&nbsp; </b></font></td>
		<td width="63%" bgcolor="#FFFFFF"><input type=date name=date size="32" required></td>
	</tr>
	<tr>
		<td width="37%" bgcolor="#FFFFFF">&nbsp;</td>
		<td width="63%" bgcolor="#FFFFFF"><input type=submit name=Proceed value="Proceed"></td>
	</tr>
</table>
</td>
	</tr>
</table>
</form>
</body>
</html>