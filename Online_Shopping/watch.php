<html>
<head>
<title>Watch</title>
<link rel="stylesheet" type="text/css" href="item.css" title="default">

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
  <div><br/><center><h2><font face="Lucida Handwriting" color="#00CCFF">Watch</font></h2></center></div>

    <?php
      include 'config.php';
      $subcatg=$_REQUEST['subcatg'];
      $sel=mysql_query("select * from product where subcatg='$subcatg'");
      echo"<form><table border='0' align='center' border-spacing=10px;>";
      $n=0;
      while($arr=mysql_fetch_array($sel))
      {
        $i=$arr['image'];
        $pId=$arr['productId'];
        $price=$arr['price'];
        $dis=$arr['discount'];
        $oprice=$price-($dis*$price/100);
        if($n%3==0)
        {
          echo "<tr>";
        }
        echo "
        <td height='500' width='300' align='center'><img src='admin/itempics/$i.jpg' height='400' width='270'>
        <h3>Price: Rs&nbsp;<strike>".$arr['price']."</strike>  ".$oprice.
        "</h3>
        <a href='cart.php?action=add & productId=$pId' id='buy'> BUY </a>
        <a href='view.php?subcatg=dresses & pid=$pId' id='view'> VIEW  </a>
        </td>";
        if($n%3==2)
        {
          echo "</tr>";
        }
        $n++;


      }
        echo "</tr></table>
         </form>";
      ?>
<div>
  <marquee behavior="scroll"  dir="ltr" align="absbottom">
    <img src="usepics/logo_zara.jpg" width="100" height="70"/>
    <img src="usepics/logo_veromoda.png" width="100" height="70"/>
    <img src="usepics/logo_w.jpg" width="100" height="70"/>
    <img src="usepics/logo_aby.png" width="100" height="70"/>
    <img src="usepics/logo_madame.jpg" width="100" height="70"/>
    <img src="usepics/logo_ucb.jpg" width="100" height="70"/>
    <img src="usepics/logo_f21.png" width="100" height="70"/>
    <img src="usepics/logo_levis.jpg" width="100" height="70"/> 
    <img src="usepics/logo_mango.jpg" width="100" height="70"/>
    <img src="usepics/logo_th.jpg" width="100" height="70"/>
    <img src="usepics/logo_biba.png" width="100" height="70"/>
    <img src="usepics/logo_aero.png" width="100" height="70"/>
    <img src="usepics/logo_hm.png" width="100" height="70"/>
  </marquee>
</div>
<style type="text/css">
  a{
  text-decoration: none;
  color: white;
  border-radius:2px;
  font-family: Arial;
  font-size: inherit;
  font-weight: bold;
  padding: 10px;
  margin-right: 10px;
  padding-right: 40px;
  padding-left: 40px;
  /*margin-right:10px;
  padding:10px 10px 10px 10px;*/

}
</style>
</body>
</html>




