<?php
include 'config.php';
session_start();
$location=$_GET['location'];
?>
<html>
<head>
<!--
<link href="http://vjs.zencdn.net/4.3/video-js.css" rel="stylesheet">
<script src="http://vjs.zencdn.net/4.3/video.js"></script>
<style type="text/css">
  .vjs-default-skin .vjs-play-progress,
  .vjs-default-skin .vjs-volume-level { background-color: #00ffcc }
  .vjs-default-skin .vjs-control-bar { font-size: 125% }
</style>    -->
<link href="slider.css" rel="stylesheet" type="text/css" />
</head>
<body background="images/wow.jpg">
<!-- <video id="hello" class="video-js vjs-default-skin" controls preload="auto" width="640" height="284" data-setup="{}"> 
<source src=" // echo $location; " type='video/mp4'>  
 </video> -->
<br><br>
<embed src="<?php echo  "clips/".$location; ?>" type='video/mp4' width="640" height="384" autostart="true">

<?php
//picking up v_id for comment
$vall=mysql_query("select v_id from videos where location='$location'");
while($rs=mysql_fetch_assoc($vall))
{
$vedid=$rs['v_id'];
}

include 'comment.php'
?>
</body>
</html>