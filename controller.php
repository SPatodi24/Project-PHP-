<?php
/*include 'config.php';
session_start();
//print_r($_POST);
$email=$_POST['email'];
$password=$_POST['password'];
$submit=$_POST['submit'];
if(isset($submit) && $submit!="")
    {
     $sql="select * from users where email='$email' AND password='$password'";
     $result=mysql_query($sql);
     $rs=mysql_fetch_assoc($result);
     $name=$rs["name"];
     //echo "welcome user".$name;
     //$_SESSION['uname']=$name;
     header("location: lhomepg.php");
     }
 * */
 
?>
<?php
include 'config.php';
session_start();
//print_r($_POST);
$email=$_POST['email'];
$password=$_POST['password'];
$submit=$_POST['submit'];
if(isset($submit) && $submit!="")
    {
     $sql="select * from users where email='$email' AND password='$password'";
     $result=mysql_query($sql);
     $rs=mysql_fetch_assoc($result);
     $name=$rs["name"];
     $_SESSION['uname']=$name;
	 $_SESSION['email']=$email;
     if($name=="admin")
         {
         header("location: adhomepg.html");
     }else{
         header("location: lhomepg.php");
         //echo "test";
     }
     }
?>

