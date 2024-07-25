
<?php
 //print_r($_POST);
  $submit=$_POST['submit'];
 if(isset($submit)&& $submit!="")
{ 
include 'config.php';


$v_name=$_POST['name'];
$keywords=$_POST['key'];
$category=$_POST['cat'];
$desc=$_POST['desc'];
$type=$_POST['type'];
$amount=$_POST['amount'];
$location=$_POST['uploaded'];
if($type=="unpaid")
{
	$type=0;
}
else
{	
	$type=1;
}
if($keywords!='')
//if(isset($v_name) && $v_name!="" && isset($keywords) && $keywords!="" && isset($category) && $category!="" && isset($desc) && $desc!="" && isset($type) && $type!="" && isset($amount) && $amount!="" && isset($location) && $location!="")
    {
    $query="insert into videos values ('','$v_name','$keywords','$category','$type','$location','$amount','$desc')";
    mysql_query($query);
    echo "<script>alert('video Added!!');window.location='adhomepg.html';</script>";

}
else
    {
    echo "<script>alert('Please fill all fields!!')</script>";
    }
}
  ?>

