<!DOCTYPE html>
<html>
<head>
	<title>Shop</title>
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
	<!-- CSS -->        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400|Roboto:300,400,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <!-- <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png"> -->
</head>


<body>
<?php include("navbar.html"); ?>
<div id="WholePage">
<div id="Inner">
<div id="Container">
	<div id="Page"><img id="slide" src="http://www.fashiontrendsetter.com/v2/wp-content/uploads/2016/09/TOMMYGIGI.jpg" alt="Ads" width="1300px" height="600px" name="img"/>
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
				<a class="menu_item" href="casual.php?subcatg=Casual Shirts"><span>Casual Shirts</span></a><br>
				<a class="menu_item" href="jeans.php?subcatg=Jeans"><span>Jeans</span></a><br>
				<a class="menu_item" href="tshirt.php?subcatg=ts"><span>T-shirts</span></a><br>
				<a class="menu_item" href="shoe.php?subcatg=Footwear"><span>Footwear</span></a><br>
				<a class="menu_item" href="shorts.php?subcatg=Shorts"><span>Shorts</span></a><br>
				<a class="menu_item" href="watch.php?subcatg=watches"><span>Watches
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
				<a class="menu_item" href="kurtas.php?subcatg=kurti"><span>Churidar Suits</span></a><br>
				<!-- <a class="menu_item" href="kurtas.php?subcatg=Kurtas"><span>Kurtas</span></a><br> -->
				<a class="menu_item" href="sandals.php?subcatg=gfootwear"><span>Footwear</span></a><br>
				<a class="menu_item" href="office.php?subcatg=Office Wear"><span>Office Wear</span></a><br>
				<a class="menu_item" href="jewel.php?subcatg=Artificial Jewellery"><span>Artificial Jewellery</span></a><br>
			</div>
		</div>
		<div id = "RightPart">
			<div class="menu_header"> <span class="menu_text">KIDS</span>
			</div>
			<div id="menu_header_right_img">
				<a href ="" ><img src="https://i.pinimg.com/736x/c1/ed/ae/c1edae728451f5c0fe3b741737b08104--pyjamas-online-kids-pajamas.jpg" alt="Ads" width="400px" height="500px" name="img"/></a>
			</div>
			<div id="Menu_content">
				<a class="menu_item" href="baby.php?subcatg=kids"><span>Dress</span></a><br>
				<a class="menu_item" href="girls.php?subcatg=Girls Apparel"><span>Girls Apparel</span></a><br>
				<a class="menu_item" href="boy.php?subcatg=Boys Apparel"><span>Boys Apparel</span></a><br>
				<a class="menu_item" href="toy.phpsubcatg=Kids Toys"><span>Kids Toys</span></a><br>
			</div>
		</div>
	</div>


</div>
</div>
</div>

</body></html>