<html>
<head>
<title>View</title>
<link rel="stylesheet" type="text/css" href="view.css" title="default">
</head>
<body>
<div style="width:100%;float:left" >
<?php

include("config.php");

$subcatg=$_REQUEST['subcatg'];
$pId=$_REQUEST['pid'];

   $sel=mysql_query("select * from product where subcatg='$subcatg' and productId='$pId'");
   echo"<form method='post'>";
  $arr=mysql_fetch_array($sel);
  $i=$arr['image'];
  echo " 
  <img src='admin/itempics/$i.jpg' height='640' width='480'>
    <br><br><br><br><h2>".$arr['Brand']."</h2><br>
    <p> Product Details: <br><br>".$arr['description']."</p><br><h2>Price: Rs&nbsp;".$arr['price']."</h2><br><br>
 <a href='cart.php?action=add & productId=$pId'> BUY </a>";

      echo "
       </form>";
  ?>
  </div>
  </body>
</html>
