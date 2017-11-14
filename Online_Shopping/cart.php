<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
	switch($_GET["action"]) {
	case  "add":
	case "add ":
		// if(!empty($_POST["quantity"])) {
			$productByproductId = $db_handle->runQuery("SELECT * FROM product WHERE productId='".$_GET["productId"]."'");
			$itemArray = array($productByproductId[0]["productId"]=>array('name'=>$productByproductId[0]["subcatg"], 'productId'=>$productByproductId[0]["productId"], 'quantity'=>1, 'price'=>$productByproductId[0]["price"],'image'=>$productByproductId[0]["image"],'dis'=>$productByproductId[0]["discount"]));
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByproductId[0]["productId"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
						if($productByproductId[0]["productId"] == $k) {
							if($_SESSION["cart_item"][$k]["productId"]==$v["productId"]){
								$_SESSION["cart_item"][$k]["quantity"] += 1;
							}
							else if(empty($_SESSION["cart_item"][$k]["quantity"])) {
								$_SESSION["cart_item"][$k]["quantity"] = 0;
							}
							$_SESSION["cart_item"][$k]["quantity"] += 0;
						}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		// }
	break;
	case "remove ":
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					// echo $k." k value    ".$v['productId']."v value    ";
					if($_GET["productId"] == $v['productId']){
						// echo "In remove".$_GET['productId'],$k;
						unset($_SESSION["cart_item"][$k]);			
					}
					if(empty($_SESSION["cart_item"])){
						// echo "In remove 2".$_GET['productId'];
						unset($_SESSION["cart_item"]);
					}
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;
	case "view":
	break;
	default: echo "default";
	}
}
?>
<HTML>
<HEAD>
<TITLE>Cart</TITLE>
<link href="style.css" type="text/css" rel="stylesheet" />
 <link rel="icon" href="https://www.graphicsprings.com/filestorage/stencils/93a70629ef97ba9ed0241a23d2db3193.svg" />
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</HEAD>
<BODY>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Back To Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Logout</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          More Options</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="cart.php?action=empty">Empty Cart</a>
          <a class="dropdown-item" href="cart.php?action=view">View Mode</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Share Cart</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<?php
	if(isset($_SESSION["cart_item"])){
    $item_total = 0;
?>
  <section id="bs-pricing-five" class="bs-pricing-five p-top-100 bg-white">
    <div class="container">
        <div class="row">
            <div class="bs-five-area bs-radius">
            	<div class="col-md-3 no-padding">
<?php	
	$n=0;	
    foreach ($_SESSION["cart_item"] as $item){
    	$i=$item['image'];
    	$n++;
		$dis=$item['dis'];
		?>
			<div class="bs-five">
            <h6 class="text-uppercase"></h6>
            <h1 class="bs-caption"></h1>
            <ul>
            <li ><?php echo "<img src='admin/itempics/$i.jpg' height='300px' width='230px'>"; ?></li>
            <li >Product Id: <?php echo $item["productId"]; ?></li>
            <li>Price: Rs <?php echo ($item["price"]-$dis*$item["price"]/100); ?></li>
            </ul>
            <a href="cart.php?action=remove&productId=<?php echo $item["productId"]; ?>" class="btn btn-success btn-round m-top-40"> Remove Item</a> 
            </div>
                    <?php
        $item_total += ($item['price']-$item["price"]*$dis/100);
		}
		?>
  <?php
}
?>					<br><br>
		            <h3 class ="bs-caption"> Total : <?php if(isset($_SESSION["cart_item"])){echo $item_total;} ?> </h3> <br>
				</div>
            </div>
        </div>
    </div>
</section> 
<center><a href ="confirm.php" class ="btn btn-outline-success" id="buy" > Buy Now </a></center> <br><br>


</BODY>
</HTML>