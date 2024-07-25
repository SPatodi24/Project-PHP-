
<html >
<head>
<title> Online Video Downloading</title></head>
<body background="wow.jpg">
<form method="POST" action="">
<h4>Comment:</h4> &nbsp;&nbsp;&nbsp; <textarea name="add" cols=50 rows=5 wrap="hard" required ></textarea>

<input type="submit" value="Comment"/>
</form>


<?php
error_reporting(0);
//comment.php included in this 
$ses=$_SESSION['email'];

//print_r($_POST);
$cnt=0;
$val=mysql_query("select * from comments where v_id=$vedid");
while($r=mysql_fetch_assoc($val))
{
$cnt++;
echo $cnt.".  ".$r['email'] ."  ::  ".$r['content']."          (".$r['date_time'].")"."<br>";
}

$content=$_POST['add'];
session_start();
if($_SESSION['uname']!='')
{
			
if(isset($content) && $content!="")
    {
     $query="insert into comments values ('','$vedid','$ses','$content',now())";
    mysql_query($query);
    //echo "<script>window.history(-1)</script>";

}}
  ?>

</body>
</html>