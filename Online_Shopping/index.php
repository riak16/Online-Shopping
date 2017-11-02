<!DOCTYPE html>
<html>
<head>
	<title>Company name - title</title>
	<link rel="stylesheet" type="text/css" href="default.css" title="default">
	<script>
		function abc()
		{
			var arr=new Array(
				"https://www.thelocal.dk/userdata/images/article/b4cb2f8e03da8c0b383c63b3e24675ad1cda2afe9284f7891dd0f7ff53fd1947.jpg",
				"https://assets.tatacliq.com/medias/sys_master/images/11308428263454.jpg",
				"https://assets.tatacliq.com/medias/sys_master/images/11308434587678.jpg",
				"https://i.pinimg.com/originals/09/1b/7b/091b7b810d71b6abbbf00623a3143389.jpg",
				"https://images-eu.ssl-images-amazon.com/images/G/02/AMAZON-FASHION/BRANDS/HACKETT/AW17/BRANDSHOP-HACKETT_BOYS_UK",
				"http://www.jsjewelrystudio.com/public/V2.0/brands/skeleton/images/3000466_0.jpg",
				"https://i.pinimg.com/originals/df/b0/5a/dfb05a452dbf73426dceb9e1678ea4f7.jpg",
				"https://images-eu.ssl-images-amazon.com/images/G/02/AMAZON-FASHION/2016/WATCHES/TRADEMARKETING/BRANDSTORES/FOSSIL/EMPORIOARMANIUK/ea_sp17_d_sis_b_amazon_main_banner_1500x500px_en._V533409481_.jpg",
				"https://cdn.shopify.com/s/files/1/0342/7009/files/easter-baby-desktop_2048x.jpg?v=1490024537",
				"https://images-eu.ssl-images-amazon.com/images/G/02/AMAZON-FASHION/2017/BRANDS/VANS/Vans_SP17_Amazon_brand_1500x500.jpg",
				"https://assets.tatacliq.com/medias/sys_master/images/11168200163358.jpg",
				"http://www.fashiontrendsetter.com/v2/wp-content/uploads/2016/09/TOMMYGIGI.jpg"
				);
			var ind=eval(document.f1.index.value);
			var slide=document.getElementById("slide");
			slide.src=arr[ind];
			document.f1.index.value=ind+1;
			if(document.f1.index.value==arr.length)
			{
				document.f1.index.value=0;
			}
		}
		setInterval("abc()",2000);
	</script>
</head>


<body>
<!--div id="Menu_content"> <<a class="menu_item" href="?page=home"><span>>< Start of Page Search >

		
		    <h5>&nbsp;</h5>
			<form method="post">
		    <input type="text" name="t1" value="search" onfocus="if(this.value=='search'){this.value='';}"onBlur="if(this.value==''){this.value='search';}"/>
            <input name="sear" type="submit" class="button" id="sub" value="Go" />
</form-->
<!--?php
	if($_REQUEST['sear'])
	  {
	   $se=$_REQUEST['t1'];
	   if($se!=NULL)
	   {
	   echo "<script>location.href='index.php?se=$se'</script>";
	   }
        }
?>
		

		  <h5>&nbsp;</h5>
		  <!--</form>>
		

		< End of Page Search ></span></a><br>
</div-->
<div id="WholePage">
<div id="Inner">
<div id="Container">
	<div id="Head">
		<div id="Head_left">
			<div id="Logo"> 
				<a class="registration" href="register.html">REGISTRATION</a> 
				<a class="log-in" href="login.html">LOG IN</a>
			</div>
		</div>
		<div id="Head_right">
			<div id="Top_menu"> 
				<div id="search">
					<input type="text" name="t1" value="Search" onclick="this.value=''" onBlur="if(this.value==''){this.value='search';}"/>
					<button type="submit">Go!</button>
				</div>
				<a class="top_menu_item" href="">HOME</a>
				<a class="top_menu_item" href="cart.php?action=view">CART</a> 
				<a class="top_menu_item" href="">ORDERS</a>
				<a class="top_menu_item" href="#">CONTACT</a>
				<a class="top_menu_item" href="#">HELP</a>
				
			</div>
		</div>
	</div>
	<div id="Page"><img id="slide" src="http://www.fashiontrendsetter.com/v2/wp-content/uploads/2016/09/TOMMYGIGI.jpg" alt="Ads" width="1280px" height="500px" name="img"/>
		<form name="f1">
			<input type="hidden" name="index" value="0" />
		</form>
	</div>
	<div id="categories">
		<div id="LeftPart">
			<div class="menu_header">
				<span class="menu_text">MEN</span>
			</div>
			<div id="menu_header_left_img"> 
				<a href ="" ><img src="https://i.pinimg.com/736x/56/90/6b/56906bf1d22f9300c853546a08870a22--blue-blazer-outfit-blazer-outfits-men.jpg" alt="Men categories" width="400px" height="500px" name="img"/></a>
			</div>
			<div id="Menu_content"> 
				<a class="menu_item" href="casual.php?catg=1 & subcatg=Casual Shirts"><span>Casual Shirts</span></a><br>
				<a class="menu_item" href="jeans.php?catg=1 & subcatg=Jeans"><span>Jeans</span></a><br>
				<a class="menu_item" href="tshirt.php?catg=1 & subcatg=T-Shirts"><span>T-shirts</span></a><br>
				<a class="menu_item" href="shoe.php?catg=1 & subcatg=Footwear"><span>Footwear</span></a><br>
				<a class="menu_item" href="shorts.php?catg=1 & subcatg=Shorts"><span>Shorts</span></a><br>
				<a class="menu_item" href="watch.php?catg=1 & subcatg=watches"><span>Watches
				</span></a><br>

			</div>
		</div>
		<div id="CentralPart">
			<div class="menu_header">
				<span class="menu_text">WOMEN</span>
			</div>
			<div id="" ="menu_header_central_img">
				<a href ="" ><img src="https://assets.myntassets.com/h_1440,q_100,w_1080/v1/assets/images/1873038/2017/4/27/11493284973088-next-Women-Jumpsuit-3761493284973075-1.jpg" alt="Ads" width="400px" height="500px" name="img"/></a>
			</div>
			<div id="Menu_content"> 
				<a class="menu_item" href="dress.php?subcatg=dresses"><span>Dresses</span></a><br>
				<a class="menu_item" href="suits.php?catg=2 & subcatg=Churidar Suits"><span>Churidar Suits</span></a><br>
				<a class="menu_item" href="kurtas.php?catg=2 & subcatg=Kurtas"><span>Kurtas</span></a><br>
				<a class="menu_item" href="sandals.php?catg=2 & subcatg=Sandals"><span>Sandals</span></a><br>
				<a class="menu_item" href="office.php?catg=2 & subcatg=Office Wear"><span>Office Wear</span></a><br>
				<a class="menu_item" href="jewel.php?catg=2 & subcatg=Artificial Jewellery"><span>Artificial Jewellery</span></a><br>
			</div>
		</div>
		<div id = "RightPart">
			<div class="menu_header"> <span class="menu_text">KIDS</span>
			</div>
			<div id="menu_header_right_img">
				<a href ="" ><img src="https://i.pinimg.com/736x/c1/ed/ae/c1edae728451f5c0fe3b741737b08104--pyjamas-online-kids-pajamas.jpg" alt="Ads" width="400px" height="500px" name="img"/></a>
			</div>
			<div id="Menu_content">
				<a class="menu_item" href="baby.php?catg=3 & subcatg=Baby Apparel"><span>Baby Apparel</span></a><br>
				<a class="menu_item" href="girls.php?catg=3 & subcatg=Girls Apparel"><span>Girls Apparel</span></a><br>
				<a class="menu_item" href="boy.php?catg=3 & subcatg=Boys Apparel"><span>Boys Apparel</span></a><br>
				<a class="menu_item" href="toy.php?catg=3 & subcatg=Kids Toys"><span>Kids Toys</span></a><br>
			</div>
		</div>
	</div>

<div class="cleaner"></div>
<div id="Bottom">
<p class="down"><b>Bottom</b></p>

</div>

</div>
</div>

</body></html>