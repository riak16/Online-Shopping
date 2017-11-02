<html>
<head>
<title>Casual Shirts</title>
<link rel="stylesheet" type="text/css" href="item.css" title="default">
</head>
<body>

<div><br/><center><h2><font face="Lucida Handwriting" size="+1" color="#00CCFF">Casual Shirts</font></h2></center></div>
<div style="width:100%;float:left" >
<?php

include("config.php");

$catg=$_REQUEST['catg'];
$subcatg=$_REQUEST['subcatg'];


   $sel=mysql_query("select * from items where catg='$catg' and subcatg='$subcatg'");
   echo"<form><table border='0' align='center'><tr>";
   $n=0;
    while($arr=mysql_fetch_array($sel))
   {
   $i=$arr['itemno'];
    if($n%3==0)
  {
  echo "<tr>";
  }
   echo "
   <td height='500' width='300' align='center'><img src='admin/itempics/$i.jpg' height='400' width='270'>
  <h3>Price: Rs&nbsp;".$arr['price'].
   "</h3>
   <a href='index.php?con=12 & itemno=$i' id ='buy'> BUY </a>
   <a href='view.php?catg=1 & subcatg=Casual Shirts & itemno=$i' id ='view'> VIEW </a>
   </td>";
  $n++;

   }
      echo "</tr></table>
       </form>";
  ?>
  </div>
<div><br>
<marquee behavior="scroll"  dir="ltr" align="absbottom">
<img src="usepics/logo_zara.jpg" width="100" height="70"/>

<img src="usepics/logo_ucb.jpg" width="100" height="70"/>
<img src="usepics/logo_f21.png" width="100" height="70"/>
<img src="usepics/logo_levis.jpg" width="100" height="70"/> 
<img src="usepics/logo_mango.jpg" width="100" height="70"/>
<img src="usepics/logo_th.jpg" width="100" height="70"/>
<img src="usepics/logo_aero.png" width="100" height="70"/>
<img src="usepics/logo_hm.png" width="100" height="70"/>
</marquee>
</div>
	</div>
</body>
</html>




