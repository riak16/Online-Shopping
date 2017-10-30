<html>
<head>
<title>View</title>
<link rel="stylesheet" type="text/css" href="view.css" title="default">
</head>
<body>
<div style="width:100%;float:left" >
<?php

include("config.php");

$catg=$_REQUEST['catg'];
$subcatg=$_REQUEST['subcatg'];
$itemno=$_REQUEST['itemno'];

   $sel=mysql_query("select * from items where catg='$catg' and subcatg='$subcatg' and itemno='$itemno'");
   echo"<form method='post'>";
   $n=1;
   $i=$itemno;
  $arr=mysql_fetch_array($sel);
  echo " 
  <img src='admin/itempics/$i.jpg' height='640' width='480'>
    <br><br><br><br><h2>".$arr['Brand']."</h2><br>
    <p> Product Details: <br><br>".$arr['desc']."</p> <br><p> Material and Size:<br> <br>".$arr['info']."</p><br><h2>Price: Rs&nbsp;".$arr['price']."</h2><br><br>
 <a href='index.php?con=12 & itemno=$i'> <button class ='ctrl-standard typ-subhed fx-sliderIn'> BUY </buttom> </a>";
$n++;

      echo "
       </form>";
  ?>
  </div>
  </body>
</html>
