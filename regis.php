<html >
<head>
<title>Online Video Downloading</title></head>
<body background="wow.jpg">

<?php
//print_r($_POST);
include 'config.php';
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];


if(isset($name) && $name!="" && isset($email) && $email!="" && isset($password) && $password!="")
    {
    echo $query="insert into users values ('$name','$email','$password')";
    mysql_query($query);
    echo "<script>alert('you are registered now!!');window.location='login.html';</script>";

}
else
    {
    echo "<script>alert('Please check all your fields!!')</script>";
    }

  ?>

</body>
</html>