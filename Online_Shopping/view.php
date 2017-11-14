<html>
<head>
<title>View</title>
<link rel="stylesheet" type="text/css" href="view.css" title="default">
 
<!-- CSS -->        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400|Roboto:300,400,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">


</head>
<body>
<?php include("navbar.html"); ?>
<div>
<?php

include("config.php");

$subcatg=$_REQUEST['subcatg'];
$pId=$_REQUEST['pid'];

   $sel=mysql_query("select * from product where subcatg='$subcatg' and productId='$pId'");
   echo"<form method='post'>";
  $arr=mysql_fetch_array($sel);
  $i=$arr['image'];
  $price=$arr['price'];
  $dis=$arr['discount'];
  $oprice=$price-($dis*$price/100);
  echo " 
  <img src='admin/itempics/$i.jpg' height='640' width='480'>
    <br><br><br><br><h2>".$arr['Brand']."</h2><br>
    <p> Product Details: <br><br>".$arr['description']."</p><br><h2>Price: Rs&nbsp;<strike>".$arr['price']."</strike>  ".$oprice."</h2><br><br>
 <a href='cart.php?action=add & productId=$pId' id='buy'> BUY </a>";

      echo "
       </form>";
  ?>
  </div>
  </body>
  <style type="text/css">
    #buy{
      text-decoration: none;
  color: white;
  border-radius:2px;
  font-family: Arial;
  font-size: inherit;
  font-weight: bold;
  padding: 10px;
  margin-right: 10px;
  padding-right: 200px;
  padding-left: 200px;
  background: #20bd99;
  border: 1px solid #20bd99;
    }
  </style>
</html>
