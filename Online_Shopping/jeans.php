<html>
<head>
<title>Jeans</title>
<link rel="stylesheet" type="text/css" href="item.css" title="default">
</head>
<body>
<div><br/><center><h2><font face="Lucida Handwriting" size="+1" color="#00CCFF">Jeans</font></h2></center></div>
<!-- <?php

include("config.php");

$catg=$_REQUEST['catg'];
$subcatg=$_REQUEST['subcatg'];


   $sel=mysql_query("select * from items where catg='$catg' and subcatg='$subcatg'");
   echo"<form method='post'><table border='0' align='center'><tr>";
   $n=1;
    while($arr=mysql_fetch_array($sel))
   {
   $i=$arr['itemno'];
    if($n%4==0)
	{
	echo "<tr>";
	}
   echo "
   <td height='280' width='240' align='center'><img src='admin/itempics/$i.jpg' height='200' width='200'><br/>
  
 <b>Item No:</b>".$arr['itemno'].
   "<br><b>Price:</b>Rs&nbsp;".$arr['price'].
   "<br><b>Description:</b>".$arr['desc'].
   "<br><br><a href='index.php?con=12 & itemno=$i'><img src='images/MetalPlakDa5new.gif' width='70' height='20'/></a>
      <a href='index.php?con=14 & itemno=$i'><img src='images/view7.jpg' width='70' height='20'/></a>
   </td>";
  $n++;

   }
   	  echo "</tr></table>
       </form>";
	?> -->
  <?php
      include 'config.php';
      $catg=$_REQUEST['catg'];
      $subcatg=$_REQUEST['subcatg'];
      $sel=mysql_query("select * from items where catg='$catg' and subcatg='$subcatg'");
      echo"<form><table border='0' align='center'>";
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
        <a href='index.php?con=12 & itemno=$i' id='buy'> BUY </a>
        <a href='view.php?catg=2 & subcatg=dresses & itemno=$i' id='view'> VIEW  </a>
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
  <div><br>
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
</body>
</html>





